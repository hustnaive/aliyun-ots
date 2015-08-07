<?php
namespace ots;

require_once dirname(__FILE__)."/OtsProtocolBuffer.php";

/**
 * 
 * @author fangl
 *
 */
class Ots {

    const API_VERSION      = '2014-08-08'; 
    const REQUEST_METHOD   = "POST"; //当前OTS是在用POST方法

    const OK  = 0;
    const ERR_CURL = 1;
    const ERR_HTTP = 2;

    private $access_key       = '';
    private $access_secret    = '';
    private $instance    = '';
    private $otsurl          = '';

    function __construct($key,$secret,$instance,$otsurl="cn-hangzhou.ots.aliyuncs.com"){
        $this->access_key    = $key;
        $this->access_secret = $secret;
        $this->instance = $instance;
        $this->otsurl       = $otsurl;
    }

    protected function getGMTDate(){
        date_default_timezone_set("UTC");
        return date('D, d M Y H:i:s', time()) . ' GMT';
    }

    protected function getSignature( $canonical_headers = array(), $canonical_uri = "/"){
        $order_keys = array_keys( $canonical_headers );
        sort( $order_keys );
        $x_headers_string = "";
        foreach( $order_keys as $k ){
            $x_headers_string .= join( ":", array( strtolower($k), $canonical_headers[ $k ] . "\n" ) );
        }
        $str2sign = $canonical_uri . "\n" . self::REQUEST_METHOD . "\n\n" . $x_headers_string;

        $sig = base64_encode(hash_hmac('sha1',$str2sign,$this->access_secret,true));
        return $sig;
    }

    protected function makeHeader($canonical_uri,$request_body) {
        $header = array(
            "x-ots-date" => $this->getGMTDate(),
            "x-ots-apiversion" => self::API_VERSION,
            "x-ots-accesskeyid" => $this->access_key,
            "x-ots-contentmd5" => base64_encode(md5($request_body,true)),
            "x-ots-instancename" => $this->instance,
        );
        $header['x-ots-signature'] = $this->getSignature($header,"/".$canonical_uri);
        return $header;
    }
    
    /**
     * @param $cnonical_uri see http://help.aliyun.com/knowledge_detail.htm?spm=5176.788315009.3.1.Xjsl2l&knowledgeId=5974546&categoryId=8315009
     * @param $request_body protocol buffer encoded data
     **/
    protected function requestCore( $canonical_uri, $request_body = "" ) {

        $request_header = $this->makeHeader($canonical_uri,$request_body);

        $request_uri = $this->instance.".".$this->otsurl."/".$canonical_uri;

        $headers = array(); 
        foreach( $request_header as $name => $value ) $headers[] = $name . ":" . $value;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request_uri);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, self::REQUEST_METHOD);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request_body);
        $res = curl_exec($ch);
        if(curl_errno($ch)) {
            $ret = array("error"=>self::ERR_CURL,"msg"=>curl_errno($ch),"data"=>$res);
        }
        else {
            $http_status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $res = explode("\r\n\r\n",$res); //HTTP协议，Body和Header的间隔标识

            $ret = array("error"=>self::OK,"data"=>isset($res[1])?$res[1]:"","header"=>$res[0]);

            if (200 !== $http_status_code) {
                $ret['error'] = self::ERR_HTTP;
            }
        }
        curl_close ($ch);
        return $ret;
    }

    protected function getRespFromRet($ret,$canonical_uri) {
      if($ret['error'] == self::OK) {
        $resp_cls = "Ots_{$canonical_uri}Response"; //每个接口的返回类为Ots_xxxResponse形式命名
        $resp = new $resp_cls();
        $resp->parseFromString($ret['data']);
        return $resp;
      }
      else if($ret['error'] == self::ERR_HTTP) {
        $error = new Ots_Error();
        $error->parseFromString($ret['data']);
        throw new \Exception($error->getCode().":".$error->getMessage());
      }
      else {
        throw new \Exception("curl errno = ".$ret['msg']);
      }
    }

    public function listTable() {
        $req = new Ots_ListTableRequest();
        $ret = $this->requestCore("ListTable",$req->serializeToString());
        return $this->getRespFromRet($ret,"ListTable");
    }

    public function createTable(Ots_TableMeta $table_meta=null,$read_tp=1,$write_tp=1) {

        $req = new Ots_CreateTableRequest();

        if(empty($table_meta)) {
          $id = new Ots_ColumnSchema();
          $id->setName("_id");
          $id->setType(Ots_ColumnType::INTEGER);

          $tableMeta = new Ots_TableMeta();
          $tableMeta->setTableName("test");
          $tableMeta->appendPrimaryKey($id);
        }

        $req->setTableMeta($table_meta);

        $cu = new Ots_CapacityUnit();
        $cu->setRead($read_tp);
        $cu->setWrite($write_tp);

        $rt = new Ots_ReservedThroughput();
        $rt->setCapacityUnit($cu);
        
        $req->setReservedThroughput($rt);

        $ret = $this->requestCore("CreateTable",$req->SerializeToString());
        return $this->getRespFromRet($ret,"CreateTable");
    }

    public function deleteTable($table_name) {
        $req = new Ots_DeleteTableRequest();
        $req->setTableName($table_name);
        return $this->getRespFromRet($this->requestCore("DeleteTable",$req->serializeToString()),"DeleteTable");
    }

    /**
     * 更新表的读写吞吐量，注意此接口有频次限制，超过限制将会报错
     **/
    public function updateTable($table_name, $read_to_update=null, $write_to_update=null) {
      $req = new Ots_UpdateTableRequest();
      $req->setTableName($table_name);

      $cu = new Ots_CapacityUnit();
      if(!empty($read_to_update)) {
        $cu->setRead($read_to_update);
      }
      
      if(!empty($write_to_update)) {
        $cu->setWrite($write_to_update);
      }
      
      $rt = new Ots_ReservedThroughput();
      $rt->setCapacityUnit($cu);

      $req->setReservedThroughput($rt);
      return $this->getRespFromRet($this->requestCore("UpdateTable",$req->serializeToString()),"UpdateTable");
    }

    public function describeTable($table_name) {
      $req = new Ots_DescribeTableRequest();
      $req->setTableName($table_name);
      return $this->getRespFromRet($this->requestCore("DescribeTable",$req->serializeToString()),"DescribeTable");
    }

    /**
     * @param $table_name string
     * @param $pk array(k=>v) or array(Ots_Column)
     * @param optional $condition int(0,1,2) or Ots_Condition
     * @param optional $attrs array() or Ots_Column...
     */
    public function putRow($table_name, Array $pks) {
      $req = new Ots_PutRowRequest();
      $req->setTableName($table_name);

      foreach($pks as $k => $pk) {
        if($pk instanceof Ots_Column) {
          $req->appendPrimaryKey($pk);
        }
        else {
          $newc = new Ots_Column();
          $newc->setName($k);

          $newcv = new Ots_ColumnValue();
          $newcv->setValue($pk);

          $newc->setValue($newcv);

          $req->appendPrimaryKey($newc);
        }
      }
    
      $args = func_get_args();
      $args = array_slice($args, 2); 
      //必须的参数后面如果出现：
      //1，Ots_Condition（或者枚举0,1,2数字），则识别为条件$condition；
      //2，Ots_Column，则识别为AttrColumn；
      //3，Array，则识别为AttrColumn（Ots_Column直接append，kv pair解析成Ots_Column后append）
      //其他则舍弃
      if(!empty($args)) {
        foreach($args as $arg) {

          if($arg instanceof Ots_Condition) {
            $condition = $arg;
          }    
          else if( is_int($arg) && in_array($arg,array(Ots_RowExistenceExpectation::IGNORE,Ots_RowExistenceExpectation::EXPECT_EXIST,Ots_RowExistenceExpectation::EXPECT_NOT_EXIST)) ) {
            $condition = new Ots_Condition();
            $condition->setRowExistence($arg);
          }
          else if($arg instanceof Ots_Column) {
            $req->appendAttributeColumns($arg);
          }
          else if(is_array($arg)) {
            foreach($arg as $k => $v) {
              if($v instanceof Ots_Column) {
                $req->appendAttributeColumns($v);
              }
              else {
                $newc = new Ots_Column();
                $newc->setName($k);

                $newcv = new Ots_ColumnValue();
                $newcv->setValue($v);

                $newc->setValue($newcv);

                $req->appendAttributeColumns($newc);
              }
            }
          }
          //其他的参数类型舍弃
        }
      }

      if(empty($condition)) {
        $condition = new Ots_Condition();
        $condition->setRowExistence(Ots_RowExistenceExpectation::IGNORE); //默认不做存在性检查
      }
      $req->setCondition($condition);

      $ret = $this->requestCore("PutRow",$req->serializeToString());
      return $this->getRespFromRet($ret,"PutRow");
    }

    /**
     * @param $table_name string
     * @param $pk array(k=>v) or array(Ots_Column)
     * @param optional $column_to_get array() or string...
     */
    public function getRow($table_name, Array $pks) {
      $req = new Ots_GetRowRequest();
      $req->setTableName($table_name);

      foreach($pks as $k => $pk) {
        if($pk instanceof Ots_Column) {
          $req->appendPrimaryKey($pk);
        }
        else {
          $newc = new Ots_Column();
          $newc->setName($k);

          $newcv = new Ots_ColumnValue();
          $newcv->setValue($pk);

          $newc->setValue($newcv);

          $req->appendPrimaryKey($newc);
        }
      }

      $args = func_get_args();
      $args = array_slice($args, 2); 
      //必须参数后面出现：
      //1，字符串，依序当做待取的字段名
      //2，数组含字符串，同上
      //其他则舍弃
      foreach($args as $arg) {
        if(is_string($arg)) {
          $req->appendColumnsToGet($arg);
        }
        else if(is_array($arg)) {
          foreach($arg as $v) {
            if(is_string($v)) {
              $req->appendColumnsToGet($v);
            }
          }
        }
      }

      return $this->getRespFromRet($this->requestCore("GetRow",$req->serializeToString()),"GetRow");
    }

    public function updateRow($table_name, Array $pks) {
      $req = new Ots_UpdateRowRequest();
      $req->setTableName($table_name);

      foreach($pks as $k => $pk) {
        if($pk instanceof Ots_Column) {
          $req->appendPrimaryKey($pk);
        }
        else {
          $newc = new Ots_Column();
          $newc->setName($k);

          $newcv = new Ots_ColumnValue();
          $newcv->setValue($pk);

          $newc->setValue($newcv);

          $req->appendPrimaryKey($newc);
        }
      }

      $args = func_get_args();
      $args = array_slice($args, 2); 
      //必须的参数后面如果出现：
      //1，Ots_Condition（或者枚举0,1,2数字），则识别为条件$condition；
      //2，Ots_ColumnUpdate，则识别为AttrColumnToUpdate；
      //3，Array，则识别为AttrColumnToUpdate（Ots_ColumnUpdate直接append，kv pair解析成Ots_ColumnUpdate后执行，如果需要删除某行时，置某行为null）
      //其他则舍弃
      if(!empty($args)) {
        foreach($args as $arg) {

          if($arg instanceof Ots_Condition) {
            $condition = $arg;
          }    
          else if( is_int($arg) && in_array($arg,array(Ots_RowExistenceExpectation::IGNORE,Ots_RowExistenceExpectation::EXPECT_EXIST,Ots_RowExistenceExpectation::EXPECT_NOT_EXIST)) ) {
            $condition = new Ots_Condition();
            $condition->setRowExistence($arg);
          }
          else if($arg instanceof Ots_ColumnUpdate) {
            $req->appendAttributeColumns($arg);
          }
          else if(is_array($arg)) {
            foreach($arg as $k => $v) {
              if($v instanceof Ots_ColumnUpdate) {
                $req->appendAttributeColumns($v);
              }
              else {
                $newc = new Ots_ColumnUpdate();
                $newc->setName($k);

                if($v == null) {
                  $newc->setType(Ots_OperationType::DELETE);
                }
                else $newc->setType(Ots_OperationType::PUT);

                if($v != null) {
                  $newcv = new Ots_ColumnValue();
                  $newcv->setValue($v);
                  $newc->setValue($newcv);
                }

                $req->appendAttributeColumns($newc);
              }
            }
          }
          //其他的参数类型舍弃
        }
      }

      if(empty($condition)) {
        $condition = new Ots_Condition();
        $condition->setRowExistence(Ots_RowExistenceExpectation::IGNORE); //默认不做存在性检查
      }
      $req->setCondition($condition);
      return $this->getRespFromRet($this->requestCore("UpdateRow",$req->serializeToString()),"UpdateRow");
    }

    public function deleteRow($table_name, Array $pks, $row_existence = 0) {
      $req  = new Ots_DeleteRowRequest();
      $req->setTableName($table_name);

      foreach($pks as $k => $pk) {
        if($pk instanceof Ots_Column) {
          $req->appendPrimaryKey($pk);
        }
        else {
          $newc = new Ots_Column();
          $newc->setName($k);

          $newcv = new Ots_ColumnValue();
          $newcv->setValue($pk);

          $newc->setValue($newcv);

          $req->appendPrimaryKey($newc);
        }
      }

      $condition = new Ots_Condition();
      $condition->setRowExistence($row_existence);

      $req->setCondition($condition);
      return $this->getRespFromRet($this->requestCore("DeleteRow",$req->serializeToString()),"DeleteRow");
    }

    public function getRange($table_name, Array $start_pks, $limit=5000, Array $column_to_get=null, Array $end_pks=null, $direction=0) {
      $req = new Ots_GetRangeRequest();
      $req->setTableName($table_name);

      foreach($start_pks as $k => $pk) {
        if($pk instanceof Ots_Column) {
          $req->appendInclusiveStartPrimaryKey($pk);
        }
        else {
          $newc = new Ots_Column();
          $newc->setName($k);

          $newcv = new Ots_ColumnValue();
          $newcv->setValue($pk);

          $newc->setValue($newcv);

          $req->appendInclusiveStartPrimaryKey($newc);
        }
      }

      //如果end_pks为空的时候，根据start_pks和direction设置默认值
      if(empty($end_pks)) {
        foreach($start_pks as $k => $pk) {
          if($direction == Ots_Direction::FORWARD) {
            $end_pks[$k] = PHP_INT_MAX;
          }
          else $end_pks[$k] = -1*PHP_INT_MAX;
        }
      }

      foreach($end_pks as $k => $pk) {
        if($pk instanceof Ots_Column) {
          $req->appendExclusiveEndPrimaryKey($pk);
        }
        else {
          $newc = new Ots_Column();
          $newc->setName($k);

          $newcv = new Ots_ColumnValue();
          $newcv->setValue($pk);

          $newc->setValue($newcv);

          $req->appendExclusiveEndPrimaryKey($newc);
        }
      }

      $req->setLimit($limit);

      foreach($column_to_get as $ctg) {
        $req->appendColumnsToGet($ctg);
      }

      $req->setDirection($direction);

      return $this->getRespFromRet($this->requestCore("GetRange",$req->serializeToString()),"GetRange");
    }

    /**
     * @param $table array("table_name"=>xxx, "rows"=>array( array("pk1"=>xx,"pk2"=>xxx), ), "columns"=>array("c1","c2"))
     **/
    public function batchGetRow(Array $table) {
      $req = new Ots_BatchGetRowRequest();

      $tables = func_get_args();

      foreach($tables as $table) {

        if(isset($table['table_name']) && isset($table['rows']) && isset($table['columns'])) {
          $treq = new Ots_TableInBatchGetRowRequest();
          $treq->setTableName($table['table_name']);

          foreach($table['rows'] as $row) {
            $rreq = new Ots_RowInBatchGetRowRequest();

            foreach($row as $k=>$v) {
              $pk = new Ots_Column();
              $pk->setName($k);

              $cv = new Ots_ColumnValue();
              $cv->setValue($v);

              $pk->setValue($cv);

              $rreq->appendPrimaryKey($pk);
            }
            $treq->appendRows($rreq);
          }

          foreach($table['columns'] as $ctg) {
            $treq->appendColumnsToGet($ctg);
          }

          $req->appendTables($treq);
        }

      }

      return $this->getRespFromRet($this->requestCore("BatchGetRow",$req->serializeToString()),"BatchGetRow");
    }

    public function batchWriteRow(Array $table_to_write) {
      $req = new Ots_BatchWriteRowRequest();

      $tables_to_write = func_get_args();

      foreach($tables_to_write as $table_to_write) {
        if(isset($table_to_write['table_name'])) {

          if(isset($table_to_write['put_rows']) && is_array($table_to_write['put_rows'])) {
            foreach($table_to_write['put_rows'] as $row) {
              
            }
          }

        }
      }

    }



}

