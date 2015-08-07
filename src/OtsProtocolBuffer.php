<?php
namespace ots;

/**
 * OtsProtocolBuffer，Ots的pb消息体PHP封装，Ots的pb消息定义见ots.pb。
 * 
 * 本类文件基于https://github.com/allegro/php-protobuf扩展提供的ProtobufParser生成，要求必须安装php-protobuf扩展。
 * 
 * @author fangl
 *
 */
 
final class PB_WIRE_TYPES {

    const PB_TYPE_DOUBLE     = 1;
    const PB_TYPE_FIXED_32   = 2;
    const PB_TYPE_FIXED_64   = 3;
    const PB_TYPE_FLOAT      = 4;
    const PB_TYPE_INT        = 5;
    const PB_TYPE_SIGNED_INT = 6;
    const PB_TYPE_STRING     = 7;
    const PB_TYPE_BOOL       = 8;

}

/**
 * Auto generated from ots.pb at 2015-03-28 06:49:31
 * 
 * Ots package
 */

/**
 * ColumnType enum
 */
final class Ots_ColumnType
{
    const INF_MIN = 0;
    const INF_MAX = 1;
    const INTEGER = 2;
    const STRING = 3;
    const BOOLEAN = 4;
    const DOUBLE = 5;
    const BINARY = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'INF_MIN' => self::INF_MIN,
            'INF_MAX' => self::INF_MAX,
            'INTEGER' => self::INTEGER,
            'STRING' => self::STRING,
            'BOOLEAN' => self::BOOLEAN,
            'DOUBLE' => self::DOUBLE,
            'BINARY' => self::BINARY,
        );
    }
}

/**
 * RowExistenceExpectation enum
 */
final class Ots_RowExistenceExpectation
{
    const IGNORE = 0;
    const EXPECT_EXIST = 1;
    const EXPECT_NOT_EXIST = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'IGNORE' => self::IGNORE,
            'EXPECT_EXIST' => self::EXPECT_EXIST,
            'EXPECT_NOT_EXIST' => self::EXPECT_NOT_EXIST,
        );
    }
}

/**
 * OperationType enum
 */
final class Ots_OperationType
{
    const PUT = 1;
    const DELETE = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PUT' => self::PUT,
            'DELETE' => self::DELETE,
        );
    }
}

/**
 * Direction enum
 */
final class Ots_Direction
{
    const FORWARD = 0;
    const BACKWARD = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'FORWARD' => self::FORWARD,
            'BACKWARD' => self::BACKWARD,
        );
    }
}

/**
 * Error message
 */
class Ots_Error extends \ProtobufMessage
{
    /* Field index constants */
    const CODE = 1;
    const MESSAGE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => true,
            'type' => 7,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CODE] = null;
        $this->values[self::MESSAGE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return string
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->get(self::MESSAGE);
    }
}

/**
 * ColumnSchema message
 */
class Ots_ColumnSchema extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const TYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NAME] = null;
        $this->values[self::TYPE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }

    /**
     * Sets value of 'type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::TYPE);
    }
}

/**
 * ColumnValue message
 */
class Ots_ColumnValue extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const V_INT = 2;
    const V_STRING = 3;
    const V_BOOL = 4;
    const V_DOUBLE = 5;
    const V_BINARY = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => 5,
        ),
        self::V_INT => array(
            'name' => 'v_int',
            'required' => false,
            'type' => 5,
        ),
        self::V_STRING => array(
            'name' => 'v_string',
            'required' => false,
            'type' => 7,
        ),
        self::V_BOOL => array(
            'name' => 'v_bool',
            'required' => false,
            'type' => 8,
        ),
        self::V_DOUBLE => array(
            'name' => 'v_double',
            'required' => false,
            'type' => 1,
        ),
        self::V_BINARY => array(
            'name' => 'v_binary',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TYPE] = null;
        $this->values[self::V_INT] = null;
        $this->values[self::V_STRING] = null;
        $this->values[self::V_BOOL] = null;
        $this->values[self::V_DOUBLE] = null;
        $this->values[self::V_BINARY] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::TYPE);
    }

    /**
     * Sets value of 'v_int' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVInt($value)
    {
        return $this->set(self::V_INT, $value);
    }

    /**
     * Returns value of 'v_int' property
     *
     * @return int
     */
    public function getVInt()
    {
        return $this->get(self::V_INT);
    }

    /**
     * Sets value of 'v_string' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVString($value)
    {
        return $this->set(self::V_STRING, $value);
    }

    /**
     * Returns value of 'v_string' property
     *
     * @return string
     */
    public function getVString()
    {
        return $this->get(self::V_STRING);
    }

    /**
     * Sets value of 'v_bool' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setVBool($value)
    {
        return $this->set(self::V_BOOL, $value);
    }

    /**
     * Returns value of 'v_bool' property
     *
     * @return bool
     */
    public function getVBool()
    {
        return $this->get(self::V_BOOL);
    }

    /**
     * Sets value of 'v_double' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setVDouble($value)
    {
        return $this->set(self::V_DOUBLE, $value);
    }

    /**
     * Returns value of 'v_double' property
     *
     * @return float
     */
    public function getVDouble()
    {
        return $this->get(self::V_DOUBLE);
    }

    /**
     * Sets value of 'v_binary' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVBinary($value)
    {
        return $this->set(self::V_BINARY, $value);
    }

    /**
     * Returns value of 'v_binary' property
     *
     * @return string
     */
    public function getVBinary()
    {
        return $this->get(self::V_BINARY);
    }

    /**
     * 璁剧疆Value锛岃嚜鍔ㄦ牴鎹被鍨嬶紙bool,double,int,string锛夌‘瀹氳皟鐢ㄧ殑鍑芥暟锛屽鏋滄槸PHP_INT_MAX锛屽垯璁剧疆TYPE涓篒NF_MAX锛汸HP_INT_MIN锛屽垯璁剧疆TYPE涓篒NF_MIN
     */
    public function setValue($v) {
        if(is_nan($v) && $v == PHP_INT_MAX) {
            $this->setType(Ots_ColumnType::INF_MAX);
        }
        else if(is_nan($v) && $v == -1*PHP_INT_MAX) {
            $this->setType(Ots_ColumnType::INF_MIN);
        } else if(is_bool($v)) {
            $this->setType(Ots_ColumnType::BOOLEAN);
            $this->setVBool($v);
        }
        else if(is_float($v) || is_double($v)) {
            $this->setType(Ots_ColumnType::DOUBLE);
            $this->setVDouble($v);
        }
        else if(is_int($v) || is_long($v)) {
            $this->setType(Ots_ColumnType::INTEGER);
            $this->setVInt($v);
        }
        else {
            $this->setType(Ots_ColumnType::STRING);
            $this->setVString(is_string($v)?$v:json_encode($v)); //鍏朵粬绫诲瀷锛宩son_encode鍚庯紝鐢ㄥ瓧绗︿覆瀛樺偍
        }
    }

    public function getValue() {
        switch($this->getType()) {
            case self::V_INT:   return $this->getVInt();
            case self::V_BINARY:    return $this->getVBinary();
            case self::V_DOUBLE:    return $this->getVDouble();
            case self::V_BOOL:  return $this->getVBool();
            case self::V_STRING:    return $this->getVString();    
            default:    return null;
        }
    }

    function __toString() {
        return $this->getValue().'';
    }
}

/**
 * Column message
 */
class Ots_Column extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const VALUE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
        self::VALUE => array(
            'name' => 'value',
            'required' => true,
            'type' => 'Ots_ColumnValue'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NAME] = null;
        $this->values[self::VALUE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }

    /**
     * Sets value of 'value' property
     *
     * @param Ots_ColumnValue $value Property value
     *
     * @return null
     */
    public function setValue(Ots_ColumnValue $value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return Ots_ColumnValue
     */
    public function getValue()
    {
        return $this->get(self::VALUE);
    }
}

/**
 * Row message
 */
class Ots_Row extends \ProtobufMessage
{
    /* Field index constants */
    const PRIMARY_KEY_COLUMNS = 1;
    const ATTRIBUTE_COLUMNS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRIMARY_KEY_COLUMNS => array(
            'name' => 'primary_key_columns',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
        self::ATTRIBUTE_COLUMNS => array(
            'name' => 'attribute_columns',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::PRIMARY_KEY_COLUMNS] = array();
        $this->values[self::ATTRIBUTE_COLUMNS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'primary_key_columns' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendPrimaryKeyColumns(Ots_Column $value)
    {
        return $this->append(self::PRIMARY_KEY_COLUMNS, $value);
    }

    /**
     * Clears 'primary_key_columns' list
     *
     * @return null
     */
    public function clearPrimaryKeyColumns()
    {
        return $this->clear(self::PRIMARY_KEY_COLUMNS);
    }

    /**
     * Returns 'primary_key_columns' list
     *
     * @return Ots_Column[]
     */
    public function getPrimaryKeyColumns()
    {
        return $this->get(self::PRIMARY_KEY_COLUMNS);
    }

    /**
     * Returns 'primary_key_columns' iterator
     *
     * @return ArrayIterator
     */
    public function getPrimaryKeyColumnsIterator()
    {
        return new \ArrayIterator($this->get(self::PRIMARY_KEY_COLUMNS));
    }

    /**
     * Returns element from 'primary_key_columns' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getPrimaryKeyColumnsAt($offset)
    {
        return $this->get(self::PRIMARY_KEY_COLUMNS, $offset);
    }

    /**
     * Returns count of 'primary_key_columns' list
     *
     * @return int
     */
    public function getPrimaryKeyColumnsCount()
    {
        return $this->count(self::PRIMARY_KEY_COLUMNS);
    }

    /**
     * Appends value to 'attribute_columns' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendAttributeColumns(Ots_Column $value)
    {
        return $this->append(self::ATTRIBUTE_COLUMNS, $value);
    }

    /**
     * Clears 'attribute_columns' list
     *
     * @return null
     */
    public function clearAttributeColumns()
    {
        return $this->clear(self::ATTRIBUTE_COLUMNS);
    }

    /**
     * Returns 'attribute_columns' list
     *
     * @return Ots_Column[]
     */
    public function getAttributeColumns()
    {
        return $this->get(self::ATTRIBUTE_COLUMNS);
    }

    /**
     * Returns 'attribute_columns' iterator
     *
     * @return ArrayIterator
     */
    public function getAttributeColumnsIterator()
    {
        return new \ArrayIterator($this->get(self::ATTRIBUTE_COLUMNS));
    }

    /**
     * Returns element from 'attribute_columns' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getAttributeColumnsAt($offset)
    {
        return $this->get(self::ATTRIBUTE_COLUMNS, $offset);
    }

    /**
     * Returns count of 'attribute_columns' list
     *
     * @return int
     */
    public function getAttributeColumnsCount()
    {
        return $this->count(self::ATTRIBUTE_COLUMNS);
    }
}

/**
 * TableMeta message
 */
class Ots_TableMeta extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;
    const PRIMARY_KEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
        self::PRIMARY_KEY => array(
            'name' => 'primary_key',
            'repeated' => true,
            'type' => 'Ots_ColumnSchema'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
        $this->values[self::PRIMARY_KEY] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }

    /**
     * Appends value to 'primary_key' list
     *
     * @param Ots_ColumnSchema $value Value to append
     *
     * @return null
     */
    public function appendPrimaryKey(Ots_ColumnSchema $value)
    {
        return $this->append(self::PRIMARY_KEY, $value);
    }

    /**
     * Clears 'primary_key' list
     *
     * @return null
     */
    public function clearPrimaryKey()
    {
        return $this->clear(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' list
     *
     * @return Ots_ColumnSchema[]
     */
    public function getPrimaryKey()
    {
        return $this->get(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' iterator
     *
     * @return ArrayIterator
     */
    public function getPrimaryKeyIterator()
    {
        return new \ArrayIterator($this->get(self::PRIMARY_KEY));
    }

    /**
     * Returns element from 'primary_key' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_ColumnSchema
     */
    public function getPrimaryKeyAt($offset)
    {
        return $this->get(self::PRIMARY_KEY, $offset);
    }

    /**
     * Returns count of 'primary_key' list
     *
     * @return int
     */
    public function getPrimaryKeyCount()
    {
        return $this->count(self::PRIMARY_KEY);
    }
}

/**
 * Condition message
 */
class Ots_Condition extends \ProtobufMessage
{
    /* Field index constants */
    const ROW_EXISTENCE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROW_EXISTENCE => array(
            'name' => 'row_existence',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::ROW_EXISTENCE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'row_existence' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRowExistence($value)
    {
        return $this->set(self::ROW_EXISTENCE, $value);
    }

    /**
     * Returns value of 'row_existence' property
     *
     * @return int
     */
    public function getRowExistence()
    {
        return $this->get(self::ROW_EXISTENCE);
    }
}

/**
 * CapacityUnit message
 */
class Ots_CapacityUnit extends \ProtobufMessage
{
    /* Field index constants */
    const READ = 1;
    const WRITE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::READ => array(
            'name' => 'read',
            'required' => false,
            'type' => 5,
        ),
        self::WRITE => array(
            'name' => 'write',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::READ] = null;
        $this->values[self::WRITE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'read' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRead($value)
    {
        return $this->set(self::READ, $value);
    }

    /**
     * Returns value of 'read' property
     *
     * @return int
     */
    public function getRead()
    {
        return $this->get(self::READ);
    }

    /**
     * Sets value of 'write' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setWrite($value)
    {
        return $this->set(self::WRITE, $value);
    }

    /**
     * Returns value of 'write' property
     *
     * @return int
     */
    public function getWrite()
    {
        return $this->get(self::WRITE);
    }
}

/**
 * ReservedThroughputDetails message
 */
class Ots_ReservedThroughputDetails extends \ProtobufMessage
{
    /* Field index constants */
    const CAPACITY_UNIT = 1;
    const LAST_INCREASE_TIME = 2;
    const LAST_DECREASE_TIME = 3;
    const NUMBER_OF_DECREASES_TODAY = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CAPACITY_UNIT => array(
            'name' => 'capacity_unit',
            'required' => true,
            'type' => 'Ots_CapacityUnit'
        ),
        self::LAST_INCREASE_TIME => array(
            'name' => 'last_increase_time',
            'required' => true,
            'type' => 5,
        ),
        self::LAST_DECREASE_TIME => array(
            'name' => 'last_decrease_time',
            'required' => false,
            'type' => 5,
        ),
        self::NUMBER_OF_DECREASES_TODAY => array(
            'name' => 'number_of_decreases_today',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CAPACITY_UNIT] = null;
        $this->values[self::LAST_INCREASE_TIME] = null;
        $this->values[self::LAST_DECREASE_TIME] = null;
        $this->values[self::NUMBER_OF_DECREASES_TODAY] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'capacity_unit' property
     *
     * @param Ots_CapacityUnit $value Property value
     *
     * @return null
     */
    public function setCapacityUnit(Ots_CapacityUnit $value)
    {
        return $this->set(self::CAPACITY_UNIT, $value);
    }

    /**
     * Returns value of 'capacity_unit' property
     *
     * @return Ots_CapacityUnit
     */
    public function getCapacityUnit()
    {
        return $this->get(self::CAPACITY_UNIT);
    }

    /**
     * Sets value of 'last_increase_time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLastIncreaseTime($value)
    {
        return $this->set(self::LAST_INCREASE_TIME, $value);
    }

    /**
     * Returns value of 'last_increase_time' property
     *
     * @return int
     */
    public function getLastIncreaseTime()
    {
        return $this->get(self::LAST_INCREASE_TIME);
    }

    /**
     * Sets value of 'last_decrease_time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLastDecreaseTime($value)
    {
        return $this->set(self::LAST_DECREASE_TIME, $value);
    }

    /**
     * Returns value of 'last_decrease_time' property
     *
     * @return int
     */
    public function getLastDecreaseTime()
    {
        return $this->get(self::LAST_DECREASE_TIME);
    }

    /**
     * Sets value of 'number_of_decreases_today' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNumberOfDecreasesToday($value)
    {
        return $this->set(self::NUMBER_OF_DECREASES_TODAY, $value);
    }

    /**
     * Returns value of 'number_of_decreases_today' property
     *
     * @return int
     */
    public function getNumberOfDecreasesToday()
    {
        return $this->get(self::NUMBER_OF_DECREASES_TODAY);
    }
}

/**
 * ReservedThroughput message
 */
class Ots_ReservedThroughput extends \ProtobufMessage
{
    /* Field index constants */
    const CAPACITY_UNIT = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CAPACITY_UNIT => array(
            'name' => 'capacity_unit',
            'required' => true,
            'type' => 'Ots_CapacityUnit'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CAPACITY_UNIT] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'capacity_unit' property
     *
     * @param Ots_CapacityUnit $value Property value
     *
     * @return null
     */
    public function setCapacityUnit(Ots_CapacityUnit $value)
    {
        return $this->set(self::CAPACITY_UNIT, $value);
    }

    /**
     * Returns value of 'capacity_unit' property
     *
     * @return Ots_CapacityUnit
     */
    public function getCapacityUnit()
    {
        return $this->get(self::CAPACITY_UNIT);
    }
}

/**
 * ConsumedCapacity message
 */
class Ots_ConsumedCapacity extends \ProtobufMessage
{
    /* Field index constants */
    const CAPACITY_UNIT = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CAPACITY_UNIT => array(
            'name' => 'capacity_unit',
            'required' => true,
            'type' => 'Ots_CapacityUnit'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CAPACITY_UNIT] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'capacity_unit' property
     *
     * @param Ots_CapacityUnit $value Property value
     *
     * @return null
     */
    public function setCapacityUnit(Ots_CapacityUnit $value)
    {
        return $this->set(self::CAPACITY_UNIT, $value);
    }

    /**
     * Returns value of 'capacity_unit' property
     *
     * @return Ots_CapacityUnit
     */
    public function getCapacityUnit()
    {
        return $this->get(self::CAPACITY_UNIT);
    }
}

/**
 * CreateTableRequest message
 */
class Ots_CreateTableRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_META = 1;
    const RESERVED_THROUGHPUT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_META => array(
            'name' => 'table_meta',
            'required' => true,
            'type' => 'Ots_TableMeta'
        ),
        self::RESERVED_THROUGHPUT => array(
            'name' => 'reserved_throughput',
            'required' => true,
            'type' => 'Ots_ReservedThroughput'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_META] = null;
        $this->values[self::RESERVED_THROUGHPUT] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_meta' property
     *
     * @param Ots_TableMeta $value Property value
     *
     * @return null
     */
    public function setTableMeta(Ots_TableMeta $value)
    {
        return $this->set(self::TABLE_META, $value);
    }

    /**
     * Returns value of 'table_meta' property
     *
     * @return Ots_TableMeta
     */
    public function getTableMeta()
    {
        return $this->get(self::TABLE_META);
    }

    /**
     * Sets value of 'reserved_throughput' property
     *
     * @param Ots_ReservedThroughput $value Property value
     *
     * @return null
     */
    public function setReservedThroughput(Ots_ReservedThroughput $value)
    {
        return $this->set(self::RESERVED_THROUGHPUT, $value);
    }

    /**
     * Returns value of 'reserved_throughput' property
     *
     * @return Ots_ReservedThroughput
     */
    public function getReservedThroughput()
    {
        return $this->get(self::RESERVED_THROUGHPUT);
    }
}

/**
 * CreateTableResponse message
 */
class Ots_CreateTableResponse extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }
}

/**
 * UpdateTableRequest message
 */
class Ots_UpdateTableRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;
    const RESERVED_THROUGHPUT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
        self::RESERVED_THROUGHPUT => array(
            'name' => 'reserved_throughput',
            'required' => true,
            'type' => 'Ots_ReservedThroughput'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
        $this->values[self::RESERVED_THROUGHPUT] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }

    /**
     * Sets value of 'reserved_throughput' property
     *
     * @param Ots_ReservedThroughput $value Property value
     *
     * @return null
     */
    public function setReservedThroughput(Ots_ReservedThroughput $value)
    {
        return $this->set(self::RESERVED_THROUGHPUT, $value);
    }

    /**
     * Returns value of 'reserved_throughput' property
     *
     * @return Ots_ReservedThroughput
     */
    public function getReservedThroughput()
    {
        return $this->get(self::RESERVED_THROUGHPUT);
    }
}

/**
 * UpdateTableResponse message
 */
class Ots_UpdateTableResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RESERVED_THROUGHPUT_DETAILS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESERVED_THROUGHPUT_DETAILS => array(
            'name' => 'reserved_throughput_details',
            'required' => true,
            'type' => 'Ots_ReservedThroughputDetails'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::RESERVED_THROUGHPUT_DETAILS] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'reserved_throughput_details' property
     *
     * @param Ots_ReservedThroughputDetails $value Property value
     *
     * @return null
     */
    public function setReservedThroughputDetails(Ots_ReservedThroughputDetails $value)
    {
        return $this->set(self::RESERVED_THROUGHPUT_DETAILS, $value);
    }

    /**
     * Returns value of 'reserved_throughput_details' property
     *
     * @return Ots_ReservedThroughputDetails
     */
    public function getReservedThroughputDetails()
    {
        return $this->get(self::RESERVED_THROUGHPUT_DETAILS);
    }
}

/**
 * DescribeTableRequest message
 */
class Ots_DescribeTableRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }
}

/**
 * DescribeTableResponse message
 */
class Ots_DescribeTableResponse extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_META = 1;
    const RESERVED_THROUGHPUT_DETAILS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_META => array(
            'name' => 'table_meta',
            'required' => true,
            'type' => 'Ots_TableMeta'
        ),
        self::RESERVED_THROUGHPUT_DETAILS => array(
            'name' => 'reserved_throughput_details',
            'required' => true,
            'type' => 'Ots_ReservedThroughputDetails'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_META] = null;
        $this->values[self::RESERVED_THROUGHPUT_DETAILS] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_meta' property
     *
     * @param Ots_TableMeta $value Property value
     *
     * @return null
     */
    public function setTableMeta(Ots_TableMeta $value)
    {
        return $this->set(self::TABLE_META, $value);
    }

    /**
     * Returns value of 'table_meta' property
     *
     * @return Ots_TableMeta
     */
    public function getTableMeta()
    {
        return $this->get(self::TABLE_META);
    }

    /**
     * Sets value of 'reserved_throughput_details' property
     *
     * @param Ots_ReservedThroughputDetails $value Property value
     *
     * @return null
     */
    public function setReservedThroughputDetails(Ots_ReservedThroughputDetails $value)
    {
        return $this->set(self::RESERVED_THROUGHPUT_DETAILS, $value);
    }

    /**
     * Returns value of 'reserved_throughput_details' property
     *
     * @return Ots_ReservedThroughputDetails
     */
    public function getReservedThroughputDetails()
    {
        return $this->get(self::RESERVED_THROUGHPUT_DETAILS);
    }
}

/**
 * ListTableRequest message
 */
class Ots_ListTableRequest extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }
}

/**
 * ListTableResponse message
 */
class Ots_ListTableResponse extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAMES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAMES => array(
            'name' => 'table_names',
            'repeated' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAMES] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'table_names' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendTableNames($value)
    {
        return $this->append(self::TABLE_NAMES, $value);
    }

    /**
     * Clears 'table_names' list
     *
     * @return null
     */
    public function clearTableNames()
    {
        return $this->clear(self::TABLE_NAMES);
    }

    /**
     * Returns 'table_names' list
     *
     * @return string[]
     */
    public function getTableNames()
    {
        return $this->get(self::TABLE_NAMES);
    }

    /**
     * Returns 'table_names' iterator
     *
     * @return ArrayIterator
     */
    public function getTableNamesIterator()
    {
        return new \ArrayIterator($this->get(self::TABLE_NAMES));
    }

    /**
     * Returns element from 'table_names' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getTableNamesAt($offset)
    {
        return $this->get(self::TABLE_NAMES, $offset);
    }

    /**
     * Returns count of 'table_names' list
     *
     * @return int
     */
    public function getTableNamesCount()
    {
        return $this->count(self::TABLE_NAMES);
    }
}

/**
 * DeleteTableRequest message
 */
class Ots_DeleteTableRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }
}

/**
 * DeleteTableResponse message
 */
class Ots_DeleteTableResponse extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }
}

/**
 * GetRowRequest message
 */
class Ots_GetRowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;
    const PRIMARY_KEY = 2;
    const COLUMNS_TO_GET = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
        self::PRIMARY_KEY => array(
            'name' => 'primary_key',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
        self::COLUMNS_TO_GET => array(
            'name' => 'columns_to_get',
            'repeated' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
        $this->values[self::PRIMARY_KEY] = array();
        $this->values[self::COLUMNS_TO_GET] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }

    /**
     * Appends value to 'primary_key' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendPrimaryKey(Ots_Column $value)
    {
        return $this->append(self::PRIMARY_KEY, $value);
    }

    /**
     * Clears 'primary_key' list
     *
     * @return null
     */
    public function clearPrimaryKey()
    {
        return $this->clear(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' list
     *
     * @return Ots_Column[]
     */
    public function getPrimaryKey()
    {
        return $this->get(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' iterator
     *
     * @return ArrayIterator
     */
    public function getPrimaryKeyIterator()
    {
        return new \ArrayIterator($this->get(self::PRIMARY_KEY));
    }

    /**
     * Returns element from 'primary_key' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getPrimaryKeyAt($offset)
    {
        return $this->get(self::PRIMARY_KEY, $offset);
    }

    /**
     * Returns count of 'primary_key' list
     *
     * @return int
     */
    public function getPrimaryKeyCount()
    {
        return $this->count(self::PRIMARY_KEY);
    }

    /**
     * Appends value to 'columns_to_get' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendColumnsToGet($value)
    {
        return $this->append(self::COLUMNS_TO_GET, $value);
    }

    /**
     * Clears 'columns_to_get' list
     *
     * @return null
     */
    public function clearColumnsToGet()
    {
        return $this->clear(self::COLUMNS_TO_GET);
    }

    /**
     * Returns 'columns_to_get' list
     *
     * @return string[]
     */
    public function getColumnsToGet()
    {
        return $this->get(self::COLUMNS_TO_GET);
    }

    /**
     * Returns 'columns_to_get' iterator
     *
     * @return ArrayIterator
     */
    public function getColumnsToGetIterator()
    {
        return new \ArrayIterator($this->get(self::COLUMNS_TO_GET));
    }

    /**
     * Returns element from 'columns_to_get' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getColumnsToGetAt($offset)
    {
        return $this->get(self::COLUMNS_TO_GET, $offset);
    }

    /**
     * Returns count of 'columns_to_get' list
     *
     * @return int
     */
    public function getColumnsToGetCount()
    {
        return $this->count(self::COLUMNS_TO_GET);
    }
}

/**
 * GetRowResponse message
 */
class Ots_GetRowResponse extends \ProtobufMessage
{
    /* Field index constants */
    const CONSUMED = 1;
    const ROW = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONSUMED => array(
            'name' => 'consumed',
            'required' => true,
            'type' => 'Ots_ConsumedCapacity'
        ),
        self::ROW => array(
            'name' => 'row',
            'required' => true,
            'type' => 'Ots_Row'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CONSUMED] = null;
        $this->values[self::ROW] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'consumed' property
     *
     * @param Ots_ConsumedCapacity $value Property value
     *
     * @return null
     */
    public function setConsumed(Ots_ConsumedCapacity $value)
    {
        return $this->set(self::CONSUMED, $value);
    }

    /**
     * Returns value of 'consumed' property
     *
     * @return Ots_ConsumedCapacity
     */
    public function getConsumed()
    {
        return $this->get(self::CONSUMED);
    }

    /**
     * Sets value of 'row' property
     *
     * @param Ots_Row $value Property value
     *
     * @return null
     */
    public function setRow(Ots_Row $value)
    {
        return $this->set(self::ROW, $value);
    }

    /**
     * Returns value of 'row' property
     *
     * @return Ots_Row
     */
    public function getRow()
    {
        return $this->get(self::ROW);
    }
}

/**
 * ColumnUpdate message
 */
class Ots_ColumnUpdate extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const NAME = 2;
    const VALUE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => 5,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
        self::VALUE => array(
            'name' => 'value',
            'required' => false,
            'type' => 'Ots_ColumnValue'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TYPE] = null;
        $this->values[self::NAME] = null;
        $this->values[self::VALUE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::TYPE);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }

    /**
     * Sets value of 'value' property
     *
     * @param Ots_ColumnValue $value Property value
     *
     * @return null
     */
    public function setValue(Ots_ColumnValue $value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return Ots_ColumnValue
     */
    public function getValue()
    {
        return $this->get(self::VALUE);
    }
}

/**
 * UpdateRowRequest message
 */
class Ots_UpdateRowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;
    const CONDITION = 2;
    const PRIMARY_KEY = 3;
    const ATTRIBUTE_COLUMNS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
        self::CONDITION => array(
            'name' => 'condition',
            'required' => true,
            'type' => 'Ots_Condition'
        ),
        self::PRIMARY_KEY => array(
            'name' => 'primary_key',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
        self::ATTRIBUTE_COLUMNS => array(
            'name' => 'attribute_columns',
            'repeated' => true,
            'type' => 'Ots_ColumnUpdate'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
        $this->values[self::CONDITION] = null;
        $this->values[self::PRIMARY_KEY] = array();
        $this->values[self::ATTRIBUTE_COLUMNS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }

    /**
     * Sets value of 'condition' property
     *
     * @param Ots_Condition $value Property value
     *
     * @return null
     */
    public function setCondition(Ots_Condition $value)
    {
        return $this->set(self::CONDITION, $value);
    }

    /**
     * Returns value of 'condition' property
     *
     * @return Ots_Condition
     */
    public function getCondition()
    {
        return $this->get(self::CONDITION);
    }

    /**
     * Appends value to 'primary_key' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendPrimaryKey(Ots_Column $value)
    {
        return $this->append(self::PRIMARY_KEY, $value);
    }

    /**
     * Clears 'primary_key' list
     *
     * @return null
     */
    public function clearPrimaryKey()
    {
        return $this->clear(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' list
     *
     * @return Ots_Column[]
     */
    public function getPrimaryKey()
    {
        return $this->get(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' iterator
     *
     * @return ArrayIterator
     */
    public function getPrimaryKeyIterator()
    {
        return new \ArrayIterator($this->get(self::PRIMARY_KEY));
    }

    /**
     * Returns element from 'primary_key' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getPrimaryKeyAt($offset)
    {
        return $this->get(self::PRIMARY_KEY, $offset);
    }

    /**
     * Returns count of 'primary_key' list
     *
     * @return int
     */
    public function getPrimaryKeyCount()
    {
        return $this->count(self::PRIMARY_KEY);
    }

    /**
     * Appends value to 'attribute_columns' list
     *
     * @param Ots_ColumnUpdate $value Value to append
     *
     * @return null
     */
    public function appendAttributeColumns(Ots_ColumnUpdate $value)
    {
        return $this->append(self::ATTRIBUTE_COLUMNS, $value);
    }

    /**
     * Clears 'attribute_columns' list
     *
     * @return null
     */
    public function clearAttributeColumns()
    {
        return $this->clear(self::ATTRIBUTE_COLUMNS);
    }

    /**
     * Returns 'attribute_columns' list
     *
     * @return Ots_ColumnUpdate[]
     */
    public function getAttributeColumns()
    {
        return $this->get(self::ATTRIBUTE_COLUMNS);
    }

    /**
     * Returns 'attribute_columns' iterator
     *
     * @return ArrayIterator
     */
    public function getAttributeColumnsIterator()
    {
        return new \ArrayIterator($this->get(self::ATTRIBUTE_COLUMNS));
    }

    /**
     * Returns element from 'attribute_columns' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_ColumnUpdate
     */
    public function getAttributeColumnsAt($offset)
    {
        return $this->get(self::ATTRIBUTE_COLUMNS, $offset);
    }

    /**
     * Returns count of 'attribute_columns' list
     *
     * @return int
     */
    public function getAttributeColumnsCount()
    {
        return $this->count(self::ATTRIBUTE_COLUMNS);
    }
}

/**
 * UpdateRowResponse message
 */
class Ots_UpdateRowResponse extends \ProtobufMessage
{
    /* Field index constants */
    const CONSUMED = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONSUMED => array(
            'name' => 'consumed',
            'required' => true,
            'type' => 'Ots_ConsumedCapacity'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CONSUMED] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'consumed' property
     *
     * @param Ots_ConsumedCapacity $value Property value
     *
     * @return null
     */
    public function setConsumed(Ots_ConsumedCapacity $value)
    {
        return $this->set(self::CONSUMED, $value);
    }

    /**
     * Returns value of 'consumed' property
     *
     * @return Ots_ConsumedCapacity
     */
    public function getConsumed()
    {
        return $this->get(self::CONSUMED);
    }
}

/**
 * PutRowRequest message
 */
class Ots_PutRowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;
    const CONDITION = 2;
    const PRIMARY_KEY = 3;
    const ATTRIBUTE_COLUMNS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
        self::CONDITION => array(
            'name' => 'condition',
            'required' => true,
            'type' => 'Ots_Condition'
        ),
        self::PRIMARY_KEY => array(
            'name' => 'primary_key',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
        self::ATTRIBUTE_COLUMNS => array(
            'name' => 'attribute_columns',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
        $this->values[self::CONDITION] = null;
        $this->values[self::PRIMARY_KEY] = array();
        $this->values[self::ATTRIBUTE_COLUMNS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }

    /**
     * Sets value of 'condition' property
     *
     * @param Ots_Condition $value Property value
     *
     * @return null
     */
    public function setCondition(Ots_Condition $value)
    {
        return $this->set(self::CONDITION, $value);
    }

    /**
     * Returns value of 'condition' property
     *
     * @return Ots_Condition
     */
    public function getCondition()
    {
        return $this->get(self::CONDITION);
    }

    /**
     * Appends value to 'primary_key' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendPrimaryKey(Ots_Column $value)
    {
        return $this->append(self::PRIMARY_KEY, $value);
    }

    /**
     * Clears 'primary_key' list
     *
     * @return null
     */
    public function clearPrimaryKey()
    {
        return $this->clear(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' list
     *
     * @return Ots_Column[]
     */
    public function getPrimaryKey()
    {
        return $this->get(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' iterator
     *
     * @return ArrayIterator
     */
    public function getPrimaryKeyIterator()
    {
        return new \ArrayIterator($this->get(self::PRIMARY_KEY));
    }

    /**
     * Returns element from 'primary_key' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getPrimaryKeyAt($offset)
    {
        return $this->get(self::PRIMARY_KEY, $offset);
    }

    /**
     * Returns count of 'primary_key' list
     *
     * @return int
     */
    public function getPrimaryKeyCount()
    {
        return $this->count(self::PRIMARY_KEY);
    }

    /**
     * Appends value to 'attribute_columns' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendAttributeColumns(Ots_Column $value)
    {
        return $this->append(self::ATTRIBUTE_COLUMNS, $value);
    }

    /**
     * Clears 'attribute_columns' list
     *
     * @return null
     */
    public function clearAttributeColumns()
    {
        return $this->clear(self::ATTRIBUTE_COLUMNS);
    }

    /**
     * Returns 'attribute_columns' list
     *
     * @return Ots_Column[]
     */
    public function getAttributeColumns()
    {
        return $this->get(self::ATTRIBUTE_COLUMNS);
    }

    /**
     * Returns 'attribute_columns' iterator
     *
     * @return ArrayIterator
     */
    public function getAttributeColumnsIterator()
    {
        return new \ArrayIterator($this->get(self::ATTRIBUTE_COLUMNS));
    }

    /**
     * Returns element from 'attribute_columns' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getAttributeColumnsAt($offset)
    {
        return $this->get(self::ATTRIBUTE_COLUMNS, $offset);
    }

    /**
     * Returns count of 'attribute_columns' list
     *
     * @return int
     */
    public function getAttributeColumnsCount()
    {
        return $this->count(self::ATTRIBUTE_COLUMNS);
    }
}

/**
 * PutRowResponse message
 */
class Ots_PutRowResponse extends \ProtobufMessage
{
    /* Field index constants */
    const CONSUMED = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONSUMED => array(
            'name' => 'consumed',
            'required' => true,
            'type' => 'Ots_ConsumedCapacity'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CONSUMED] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'consumed' property
     *
     * @param Ots_ConsumedCapacity $value Property value
     *
     * @return null
     */
    public function setConsumed(Ots_ConsumedCapacity $value)
    {
        return $this->set(self::CONSUMED, $value);
    }

    /**
     * Returns value of 'consumed' property
     *
     * @return Ots_ConsumedCapacity
     */
    public function getConsumed()
    {
        return $this->get(self::CONSUMED);
    }
}

/**
 * DeleteRowRequest message
 */
class Ots_DeleteRowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;
    const CONDITION = 2;
    const PRIMARY_KEY = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
        self::CONDITION => array(
            'name' => 'condition',
            'required' => true,
            'type' => 'Ots_Condition'
        ),
        self::PRIMARY_KEY => array(
            'name' => 'primary_key',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
        $this->values[self::CONDITION] = null;
        $this->values[self::PRIMARY_KEY] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }

    /**
     * Sets value of 'condition' property
     *
     * @param Ots_Condition $value Property value
     *
     * @return null
     */
    public function setCondition(Ots_Condition $value)
    {
        return $this->set(self::CONDITION, $value);
    }

    /**
     * Returns value of 'condition' property
     *
     * @return Ots_Condition
     */
    public function getCondition()
    {
        return $this->get(self::CONDITION);
    }

    /**
     * Appends value to 'primary_key' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendPrimaryKey(Ots_Column $value)
    {
        return $this->append(self::PRIMARY_KEY, $value);
    }

    /**
     * Clears 'primary_key' list
     *
     * @return null
     */
    public function clearPrimaryKey()
    {
        return $this->clear(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' list
     *
     * @return Ots_Column[]
     */
    public function getPrimaryKey()
    {
        return $this->get(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' iterator
     *
     * @return ArrayIterator
     */
    public function getPrimaryKeyIterator()
    {
        return new \ArrayIterator($this->get(self::PRIMARY_KEY));
    }

    /**
     * Returns element from 'primary_key' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getPrimaryKeyAt($offset)
    {
        return $this->get(self::PRIMARY_KEY, $offset);
    }

    /**
     * Returns count of 'primary_key' list
     *
     * @return int
     */
    public function getPrimaryKeyCount()
    {
        return $this->count(self::PRIMARY_KEY);
    }
}

/**
 * DeleteRowResponse message
 */
class Ots_DeleteRowResponse extends \ProtobufMessage
{
    /* Field index constants */
    const CONSUMED = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONSUMED => array(
            'name' => 'consumed',
            'required' => true,
            'type' => 'Ots_ConsumedCapacity'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CONSUMED] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'consumed' property
     *
     * @param Ots_ConsumedCapacity $value Property value
     *
     * @return null
     */
    public function setConsumed(Ots_ConsumedCapacity $value)
    {
        return $this->set(self::CONSUMED, $value);
    }

    /**
     * Returns value of 'consumed' property
     *
     * @return Ots_ConsumedCapacity
     */
    public function getConsumed()
    {
        return $this->get(self::CONSUMED);
    }
}

/**
 * RowInBatchGetRowRequest message
 */
class Ots_RowInBatchGetRowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const PRIMARY_KEY = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRIMARY_KEY => array(
            'name' => 'primary_key',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::PRIMARY_KEY] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'primary_key' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendPrimaryKey(Ots_Column $value)
    {
        return $this->append(self::PRIMARY_KEY, $value);
    }

    /**
     * Clears 'primary_key' list
     *
     * @return null
     */
    public function clearPrimaryKey()
    {
        return $this->clear(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' list
     *
     * @return Ots_Column[]
     */
    public function getPrimaryKey()
    {
        return $this->get(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' iterator
     *
     * @return ArrayIterator
     */
    public function getPrimaryKeyIterator()
    {
        return new \ArrayIterator($this->get(self::PRIMARY_KEY));
    }

    /**
     * Returns element from 'primary_key' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getPrimaryKeyAt($offset)
    {
        return $this->get(self::PRIMARY_KEY, $offset);
    }

    /**
     * Returns count of 'primary_key' list
     *
     * @return int
     */
    public function getPrimaryKeyCount()
    {
        return $this->count(self::PRIMARY_KEY);
    }
}

/**
 * TableInBatchGetRowRequest message
 */
class Ots_TableInBatchGetRowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;
    const ROWS = 2;
    const COLUMNS_TO_GET = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
        self::ROWS => array(
            'name' => 'rows',
            'repeated' => true,
            'type' => 'Ots_RowInBatchGetRowRequest'
        ),
        self::COLUMNS_TO_GET => array(
            'name' => 'columns_to_get',
            'repeated' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
        $this->values[self::ROWS] = array();
        $this->values[self::COLUMNS_TO_GET] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }

    /**
     * Appends value to 'rows' list
     *
     * @param Ots_RowInBatchGetRowRequest $value Value to append
     *
     * @return null
     */
    public function appendRows(Ots_RowInBatchGetRowRequest $value)
    {
        return $this->append(self::ROWS, $value);
    }

    /**
     * Clears 'rows' list
     *
     * @return null
     */
    public function clearRows()
    {
        return $this->clear(self::ROWS);
    }

    /**
     * Returns 'rows' list
     *
     * @return Ots_RowInBatchGetRowRequest[]
     */
    public function getRows()
    {
        return $this->get(self::ROWS);
    }

    /**
     * Returns 'rows' iterator
     *
     * @return ArrayIterator
     */
    public function getRowsIterator()
    {
        return new \ArrayIterator($this->get(self::ROWS));
    }

    /**
     * Returns element from 'rows' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_RowInBatchGetRowRequest
     */
    public function getRowsAt($offset)
    {
        return $this->get(self::ROWS, $offset);
    }

    /**
     * Returns count of 'rows' list
     *
     * @return int
     */
    public function getRowsCount()
    {
        return $this->count(self::ROWS);
    }

    /**
     * Appends value to 'columns_to_get' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendColumnsToGet($value)
    {
        return $this->append(self::COLUMNS_TO_GET, $value);
    }

    /**
     * Clears 'columns_to_get' list
     *
     * @return null
     */
    public function clearColumnsToGet()
    {
        return $this->clear(self::COLUMNS_TO_GET);
    }

    /**
     * Returns 'columns_to_get' list
     *
     * @return string[]
     */
    public function getColumnsToGet()
    {
        return $this->get(self::COLUMNS_TO_GET);
    }

    /**
     * Returns 'columns_to_get' iterator
     *
     * @return ArrayIterator
     */
    public function getColumnsToGetIterator()
    {
        return new \ArrayIterator($this->get(self::COLUMNS_TO_GET));
    }

    /**
     * Returns element from 'columns_to_get' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getColumnsToGetAt($offset)
    {
        return $this->get(self::COLUMNS_TO_GET, $offset);
    }

    /**
     * Returns count of 'columns_to_get' list
     *
     * @return int
     */
    public function getColumnsToGetCount()
    {
        return $this->count(self::COLUMNS_TO_GET);
    }
}

/**
 * BatchGetRowRequest message
 */
class Ots_BatchGetRowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLES => array(
            'name' => 'tables',
            'repeated' => true,
            'type' => 'Ots_TableInBatchGetRowRequest'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLES] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'tables' list
     *
     * @param Ots_TableInBatchGetRowRequest $value Value to append
     *
     * @return null
     */
    public function appendTables(Ots_TableInBatchGetRowRequest $value)
    {
        return $this->append(self::TABLES, $value);
    }

    /**
     * Clears 'tables' list
     *
     * @return null
     */
    public function clearTables()
    {
        return $this->clear(self::TABLES);
    }

    /**
     * Returns 'tables' list
     *
     * @return Ots_TableInBatchGetRowRequest[]
     */
    public function getTables()
    {
        return $this->get(self::TABLES);
    }

    /**
     * Returns 'tables' iterator
     *
     * @return ArrayIterator
     */
    public function getTablesIterator()
    {
        return new \ArrayIterator($this->get(self::TABLES));
    }

    /**
     * Returns element from 'tables' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_TableInBatchGetRowRequest
     */
    public function getTablesAt($offset)
    {
        return $this->get(self::TABLES, $offset);
    }

    /**
     * Returns count of 'tables' list
     *
     * @return int
     */
    public function getTablesCount()
    {
        return $this->count(self::TABLES);
    }
}

/**
 * RowInBatchGetRowResponse message
 */
class Ots_RowInBatchGetRowResponse extends \ProtobufMessage
{
    /* Field index constants */
    const IS_OK = 1;
    const ERROR = 2;
    const CONSUMED = 3;
    const ROW = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::IS_OK => array(
            'default' => true, 
            'name' => 'is_ok',
            'required' => true,
            'type' => 8,
        ),
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 'Ots_Error'
        ),
        self::CONSUMED => array(
            'name' => 'consumed',
            'required' => false,
            'type' => 'Ots_ConsumedCapacity'
        ),
        self::ROW => array(
            'name' => 'row',
            'required' => false,
            'type' => 'Ots_Row'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::IS_OK] = null;
        $this->values[self::ERROR] = null;
        $this->values[self::CONSUMED] = null;
        $this->values[self::ROW] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'is_ok' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsOk($value)
    {
        return $this->set(self::IS_OK, $value);
    }

    /**
     * Returns value of 'is_ok' property
     *
     * @return bool
     */
    public function getIsOk()
    {
        return $this->get(self::IS_OK);
    }

    /**
     * Sets value of 'error' property
     *
     * @param Ots_Error $value Property value
     *
     * @return null
     */
    public function setError(Ots_Error $value)
    {
        return $this->set(self::ERROR, $value);
    }

    /**
     * Returns value of 'error' property
     *
     * @return Ots_Error
     */
    public function getError()
    {
        return $this->get(self::ERROR);
    }

    /**
     * Sets value of 'consumed' property
     *
     * @param Ots_ConsumedCapacity $value Property value
     *
     * @return null
     */
    public function setConsumed(Ots_ConsumedCapacity $value)
    {
        return $this->set(self::CONSUMED, $value);
    }

    /**
     * Returns value of 'consumed' property
     *
     * @return Ots_ConsumedCapacity
     */
    public function getConsumed()
    {
        return $this->get(self::CONSUMED);
    }

    /**
     * Sets value of 'row' property
     *
     * @param Ots_Row $value Property value
     *
     * @return null
     */
    public function setRow(Ots_Row $value)
    {
        return $this->set(self::ROW, $value);
    }

    /**
     * Returns value of 'row' property
     *
     * @return Ots_Row
     */
    public function getRow()
    {
        return $this->get(self::ROW);
    }
}

/**
 * TableInBatchGetRowResponse message
 */
class Ots_TableInBatchGetRowResponse extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;
    const ROWS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
        self::ROWS => array(
            'name' => 'rows',
            'repeated' => true,
            'type' => 'Ots_RowInBatchGetRowResponse'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
        $this->values[self::ROWS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }

    /**
     * Appends value to 'rows' list
     *
     * @param Ots_RowInBatchGetRowResponse $value Value to append
     *
     * @return null
     */
    public function appendRows(Ots_RowInBatchGetRowResponse $value)
    {
        return $this->append(self::ROWS, $value);
    }

    /**
     * Clears 'rows' list
     *
     * @return null
     */
    public function clearRows()
    {
        return $this->clear(self::ROWS);
    }

    /**
     * Returns 'rows' list
     *
     * @return Ots_RowInBatchGetRowResponse[]
     */
    public function getRows()
    {
        return $this->get(self::ROWS);
    }

    /**
     * Returns 'rows' iterator
     *
     * @return ArrayIterator
     */
    public function getRowsIterator()
    {
        return new \ArrayIterator($this->get(self::ROWS));
    }

    /**
     * Returns element from 'rows' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_RowInBatchGetRowResponse
     */
    public function getRowsAt($offset)
    {
        return $this->get(self::ROWS, $offset);
    }

    /**
     * Returns count of 'rows' list
     *
     * @return int
     */
    public function getRowsCount()
    {
        return $this->count(self::ROWS);
    }
}

/**
 * BatchGetRowResponse message
 */
class Ots_BatchGetRowResponse extends \ProtobufMessage
{
    /* Field index constants */
    const TABLES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLES => array(
            'name' => 'tables',
            'repeated' => true,
            'type' => 'Ots_TableInBatchGetRowResponse'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLES] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'tables' list
     *
     * @param Ots_TableInBatchGetRowResponse $value Value to append
     *
     * @return null
     */
    public function appendTables(Ots_TableInBatchGetRowResponse $value)
    {
        return $this->append(self::TABLES, $value);
    }

    /**
     * Clears 'tables' list
     *
     * @return null
     */
    public function clearTables()
    {
        return $this->clear(self::TABLES);
    }

    /**
     * Returns 'tables' list
     *
     * @return Ots_TableInBatchGetRowResponse[]
     */
    public function getTables()
    {
        return $this->get(self::TABLES);
    }

    /**
     * Returns 'tables' iterator
     *
     * @return ArrayIterator
     */
    public function getTablesIterator()
    {
        return new \ArrayIterator($this->get(self::TABLES));
    }

    /**
     * Returns element from 'tables' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_TableInBatchGetRowResponse
     */
    public function getTablesAt($offset)
    {
        return $this->get(self::TABLES, $offset);
    }

    /**
     * Returns count of 'tables' list
     *
     * @return int
     */
    public function getTablesCount()
    {
        return $this->count(self::TABLES);
    }
}

/**
 * PutRowInBatchWriteRowRequest message
 */
class Ots_PutRowInBatchWriteRowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const CONDITION = 1;
    const PRIMARY_KEY = 2;
    const ATTRIBUTE_COLUMNS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONDITION => array(
            'name' => 'condition',
            'required' => true,
            'type' => 'Ots_Condition'
        ),
        self::PRIMARY_KEY => array(
            'name' => 'primary_key',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
        self::ATTRIBUTE_COLUMNS => array(
            'name' => 'attribute_columns',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CONDITION] = null;
        $this->values[self::PRIMARY_KEY] = array();
        $this->values[self::ATTRIBUTE_COLUMNS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'condition' property
     *
     * @param Ots_Condition $value Property value
     *
     * @return null
     */
    public function setCondition(Ots_Condition $value)
    {
        return $this->set(self::CONDITION, $value);
    }

    /**
     * Returns value of 'condition' property
     *
     * @return Ots_Condition
     */
    public function getCondition()
    {
        return $this->get(self::CONDITION);
    }

    /**
     * Appends value to 'primary_key' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendPrimaryKey(Ots_Column $value)
    {
        return $this->append(self::PRIMARY_KEY, $value);
    }

    /**
     * Clears 'primary_key' list
     *
     * @return null
     */
    public function clearPrimaryKey()
    {
        return $this->clear(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' list
     *
     * @return Ots_Column[]
     */
    public function getPrimaryKey()
    {
        return $this->get(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' iterator
     *
     * @return ArrayIterator
     */
    public function getPrimaryKeyIterator()
    {
        return new \ArrayIterator($this->get(self::PRIMARY_KEY));
    }

    /**
     * Returns element from 'primary_key' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getPrimaryKeyAt($offset)
    {
        return $this->get(self::PRIMARY_KEY, $offset);
    }

    /**
     * Returns count of 'primary_key' list
     *
     * @return int
     */
    public function getPrimaryKeyCount()
    {
        return $this->count(self::PRIMARY_KEY);
    }

    /**
     * Appends value to 'attribute_columns' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendAttributeColumns(Ots_Column $value)
    {
        return $this->append(self::ATTRIBUTE_COLUMNS, $value);
    }

    /**
     * Clears 'attribute_columns' list
     *
     * @return null
     */
    public function clearAttributeColumns()
    {
        return $this->clear(self::ATTRIBUTE_COLUMNS);
    }

    /**
     * Returns 'attribute_columns' list
     *
     * @return Ots_Column[]
     */
    public function getAttributeColumns()
    {
        return $this->get(self::ATTRIBUTE_COLUMNS);
    }

    /**
     * Returns 'attribute_columns' iterator
     *
     * @return ArrayIterator
     */
    public function getAttributeColumnsIterator()
    {
        return new \ArrayIterator($this->get(self::ATTRIBUTE_COLUMNS));
    }

    /**
     * Returns element from 'attribute_columns' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getAttributeColumnsAt($offset)
    {
        return $this->get(self::ATTRIBUTE_COLUMNS, $offset);
    }

    /**
     * Returns count of 'attribute_columns' list
     *
     * @return int
     */
    public function getAttributeColumnsCount()
    {
        return $this->count(self::ATTRIBUTE_COLUMNS);
    }
}

/**
 * UpdateRowInBatchWriteRowRequest message
 */
class Ots_UpdateRowInBatchWriteRowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const CONDITION = 1;
    const PRIMARY_KEY = 2;
    const ATTRIBUTE_COLUMNS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONDITION => array(
            'name' => 'condition',
            'required' => true,
            'type' => 'Ots_Condition'
        ),
        self::PRIMARY_KEY => array(
            'name' => 'primary_key',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
        self::ATTRIBUTE_COLUMNS => array(
            'name' => 'attribute_columns',
            'repeated' => true,
            'type' => 'Ots_ColumnUpdate'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CONDITION] = null;
        $this->values[self::PRIMARY_KEY] = array();
        $this->values[self::ATTRIBUTE_COLUMNS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'condition' property
     *
     * @param Ots_Condition $value Property value
     *
     * @return null
     */
    public function setCondition(Ots_Condition $value)
    {
        return $this->set(self::CONDITION, $value);
    }

    /**
     * Returns value of 'condition' property
     *
     * @return Ots_Condition
     */
    public function getCondition()
    {
        return $this->get(self::CONDITION);
    }

    /**
     * Appends value to 'primary_key' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendPrimaryKey(Ots_Column $value)
    {
        return $this->append(self::PRIMARY_KEY, $value);
    }

    /**
     * Clears 'primary_key' list
     *
     * @return null
     */
    public function clearPrimaryKey()
    {
        return $this->clear(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' list
     *
     * @return Ots_Column[]
     */
    public function getPrimaryKey()
    {
        return $this->get(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' iterator
     *
     * @return ArrayIterator
     */
    public function getPrimaryKeyIterator()
    {
        return new \ArrayIterator($this->get(self::PRIMARY_KEY));
    }

    /**
     * Returns element from 'primary_key' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getPrimaryKeyAt($offset)
    {
        return $this->get(self::PRIMARY_KEY, $offset);
    }

    /**
     * Returns count of 'primary_key' list
     *
     * @return int
     */
    public function getPrimaryKeyCount()
    {
        return $this->count(self::PRIMARY_KEY);
    }

    /**
     * Appends value to 'attribute_columns' list
     *
     * @param Ots_ColumnUpdate $value Value to append
     *
     * @return null
     */
    public function appendAttributeColumns(Ots_ColumnUpdate $value)
    {
        return $this->append(self::ATTRIBUTE_COLUMNS, $value);
    }

    /**
     * Clears 'attribute_columns' list
     *
     * @return null
     */
    public function clearAttributeColumns()
    {
        return $this->clear(self::ATTRIBUTE_COLUMNS);
    }

    /**
     * Returns 'attribute_columns' list
     *
     * @return Ots_ColumnUpdate[]
     */
    public function getAttributeColumns()
    {
        return $this->get(self::ATTRIBUTE_COLUMNS);
    }

    /**
     * Returns 'attribute_columns' iterator
     *
     * @return ArrayIterator
     */
    public function getAttributeColumnsIterator()
    {
        return new \ArrayIterator($this->get(self::ATTRIBUTE_COLUMNS));
    }

    /**
     * Returns element from 'attribute_columns' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_ColumnUpdate
     */
    public function getAttributeColumnsAt($offset)
    {
        return $this->get(self::ATTRIBUTE_COLUMNS, $offset);
    }

    /**
     * Returns count of 'attribute_columns' list
     *
     * @return int
     */
    public function getAttributeColumnsCount()
    {
        return $this->count(self::ATTRIBUTE_COLUMNS);
    }
}

/**
 * DeleteRowInBatchWriteRowRequest message
 */
class Ots_DeleteRowInBatchWriteRowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const CONDITION = 1;
    const PRIMARY_KEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONDITION => array(
            'name' => 'condition',
            'required' => true,
            'type' => 'Ots_Condition'
        ),
        self::PRIMARY_KEY => array(
            'name' => 'primary_key',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CONDITION] = null;
        $this->values[self::PRIMARY_KEY] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'condition' property
     *
     * @param Ots_Condition $value Property value
     *
     * @return null
     */
    public function setCondition(Ots_Condition $value)
    {
        return $this->set(self::CONDITION, $value);
    }

    /**
     * Returns value of 'condition' property
     *
     * @return Ots_Condition
     */
    public function getCondition()
    {
        return $this->get(self::CONDITION);
    }

    /**
     * Appends value to 'primary_key' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendPrimaryKey(Ots_Column $value)
    {
        return $this->append(self::PRIMARY_KEY, $value);
    }

    /**
     * Clears 'primary_key' list
     *
     * @return null
     */
    public function clearPrimaryKey()
    {
        return $this->clear(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' list
     *
     * @return Ots_Column[]
     */
    public function getPrimaryKey()
    {
        return $this->get(self::PRIMARY_KEY);
    }

    /**
     * Returns 'primary_key' iterator
     *
     * @return ArrayIterator
     */
    public function getPrimaryKeyIterator()
    {
        return new \ArrayIterator($this->get(self::PRIMARY_KEY));
    }

    /**
     * Returns element from 'primary_key' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getPrimaryKeyAt($offset)
    {
        return $this->get(self::PRIMARY_KEY, $offset);
    }

    /**
     * Returns count of 'primary_key' list
     *
     * @return int
     */
    public function getPrimaryKeyCount()
    {
        return $this->count(self::PRIMARY_KEY);
    }
}

/**
 * TableInBatchWriteRowRequest message
 */
class Ots_TableInBatchWriteRowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;
    const PUT_ROWS = 2;
    const UPDATE_ROWS = 3;
    const DELETE_ROWS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
        self::PUT_ROWS => array(
            'name' => 'put_rows',
            'repeated' => true,
            'type' => 'Ots_PutRowInBatchWriteRowRequest'
        ),
        self::UPDATE_ROWS => array(
            'name' => 'update_rows',
            'repeated' => true,
            'type' => 'Ots_UpdateRowInBatchWriteRowRequest'
        ),
        self::DELETE_ROWS => array(
            'name' => 'delete_rows',
            'repeated' => true,
            'type' => 'Ots_DeleteRowInBatchWriteRowRequest'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
        $this->values[self::PUT_ROWS] = array();
        $this->values[self::UPDATE_ROWS] = array();
        $this->values[self::DELETE_ROWS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }

    /**
     * Appends value to 'put_rows' list
     *
     * @param Ots_PutRowInBatchWriteRowRequest $value Value to append
     *
     * @return null
     */
    public function appendPutRows(Ots_PutRowInBatchWriteRowRequest $value)
    {
        return $this->append(self::PUT_ROWS, $value);
    }

    /**
     * Clears 'put_rows' list
     *
     * @return null
     */
    public function clearPutRows()
    {
        return $this->clear(self::PUT_ROWS);
    }

    /**
     * Returns 'put_rows' list
     *
     * @return Ots_PutRowInBatchWriteRowRequest[]
     */
    public function getPutRows()
    {
        return $this->get(self::PUT_ROWS);
    }

    /**
     * Returns 'put_rows' iterator
     *
     * @return ArrayIterator
     */
    public function getPutRowsIterator()
    {
        return new \ArrayIterator($this->get(self::PUT_ROWS));
    }

    /**
     * Returns element from 'put_rows' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_PutRowInBatchWriteRowRequest
     */
    public function getPutRowsAt($offset)
    {
        return $this->get(self::PUT_ROWS, $offset);
    }

    /**
     * Returns count of 'put_rows' list
     *
     * @return int
     */
    public function getPutRowsCount()
    {
        return $this->count(self::PUT_ROWS);
    }

    /**
     * Appends value to 'update_rows' list
     *
     * @param Ots_UpdateRowInBatchWriteRowRequest $value Value to append
     *
     * @return null
     */
    public function appendUpdateRows(Ots_UpdateRowInBatchWriteRowRequest $value)
    {
        return $this->append(self::UPDATE_ROWS, $value);
    }

    /**
     * Clears 'update_rows' list
     *
     * @return null
     */
    public function clearUpdateRows()
    {
        return $this->clear(self::UPDATE_ROWS);
    }

    /**
     * Returns 'update_rows' list
     *
     * @return Ots_UpdateRowInBatchWriteRowRequest[]
     */
    public function getUpdateRows()
    {
        return $this->get(self::UPDATE_ROWS);
    }

    /**
     * Returns 'update_rows' iterator
     *
     * @return ArrayIterator
     */
    public function getUpdateRowsIterator()
    {
        return new \ArrayIterator($this->get(self::UPDATE_ROWS));
    }

    /**
     * Returns element from 'update_rows' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_UpdateRowInBatchWriteRowRequest
     */
    public function getUpdateRowsAt($offset)
    {
        return $this->get(self::UPDATE_ROWS, $offset);
    }

    /**
     * Returns count of 'update_rows' list
     *
     * @return int
     */
    public function getUpdateRowsCount()
    {
        return $this->count(self::UPDATE_ROWS);
    }

    /**
     * Appends value to 'delete_rows' list
     *
     * @param Ots_DeleteRowInBatchWriteRowRequest $value Value to append
     *
     * @return null
     */
    public function appendDeleteRows(Ots_DeleteRowInBatchWriteRowRequest $value)
    {
        return $this->append(self::DELETE_ROWS, $value);
    }

    /**
     * Clears 'delete_rows' list
     *
     * @return null
     */
    public function clearDeleteRows()
    {
        return $this->clear(self::DELETE_ROWS);
    }

    /**
     * Returns 'delete_rows' list
     *
     * @return Ots_DeleteRowInBatchWriteRowRequest[]
     */
    public function getDeleteRows()
    {
        return $this->get(self::DELETE_ROWS);
    }

    /**
     * Returns 'delete_rows' iterator
     *
     * @return ArrayIterator
     */
    public function getDeleteRowsIterator()
    {
        return new \ArrayIterator($this->get(self::DELETE_ROWS));
    }

    /**
     * Returns element from 'delete_rows' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_DeleteRowInBatchWriteRowRequest
     */
    public function getDeleteRowsAt($offset)
    {
        return $this->get(self::DELETE_ROWS, $offset);
    }

    /**
     * Returns count of 'delete_rows' list
     *
     * @return int
     */
    public function getDeleteRowsCount()
    {
        return $this->count(self::DELETE_ROWS);
    }
}

/**
 * BatchWriteRowRequest message
 */
class Ots_BatchWriteRowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLES => array(
            'name' => 'tables',
            'repeated' => true,
            'type' => 'Ots_TableInBatchWriteRowRequest'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLES] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'tables' list
     *
     * @param Ots_TableInBatchWriteRowRequest $value Value to append
     *
     * @return null
     */
    public function appendTables(Ots_TableInBatchWriteRowRequest $value)
    {
        return $this->append(self::TABLES, $value);
    }

    /**
     * Clears 'tables' list
     *
     * @return null
     */
    public function clearTables()
    {
        return $this->clear(self::TABLES);
    }

    /**
     * Returns 'tables' list
     *
     * @return Ots_TableInBatchWriteRowRequest[]
     */
    public function getTables()
    {
        return $this->get(self::TABLES);
    }

    /**
     * Returns 'tables' iterator
     *
     * @return ArrayIterator
     */
    public function getTablesIterator()
    {
        return new \ArrayIterator($this->get(self::TABLES));
    }

    /**
     * Returns element from 'tables' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_TableInBatchWriteRowRequest
     */
    public function getTablesAt($offset)
    {
        return $this->get(self::TABLES, $offset);
    }

    /**
     * Returns count of 'tables' list
     *
     * @return int
     */
    public function getTablesCount()
    {
        return $this->count(self::TABLES);
    }
}

/**
 * RowInBatchWriteRowResponse message
 */
class Ots_RowInBatchWriteRowResponse extends \ProtobufMessage
{
    /* Field index constants */
    const IS_OK = 1;
    const ERROR = 2;
    const CONSUMED = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::IS_OK => array(
            'default' => true, 
            'name' => 'is_ok',
            'required' => true,
            'type' => 8,
        ),
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 'Ots_Error'
        ),
        self::CONSUMED => array(
            'name' => 'consumed',
            'required' => false,
            'type' => 'Ots_ConsumedCapacity'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::IS_OK] = null;
        $this->values[self::ERROR] = null;
        $this->values[self::CONSUMED] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'is_ok' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsOk($value)
    {
        return $this->set(self::IS_OK, $value);
    }

    /**
     * Returns value of 'is_ok' property
     *
     * @return bool
     */
    public function getIsOk()
    {
        return $this->get(self::IS_OK);
    }

    /**
     * Sets value of 'error' property
     *
     * @param Ots_Error $value Property value
     *
     * @return null
     */
    public function setError(Ots_Error $value)
    {
        return $this->set(self::ERROR, $value);
    }

    /**
     * Returns value of 'error' property
     *
     * @return Ots_Error
     */
    public function getError()
    {
        return $this->get(self::ERROR);
    }

    /**
     * Sets value of 'consumed' property
     *
     * @param Ots_ConsumedCapacity $value Property value
     *
     * @return null
     */
    public function setConsumed(Ots_ConsumedCapacity $value)
    {
        return $this->set(self::CONSUMED, $value);
    }

    /**
     * Returns value of 'consumed' property
     *
     * @return Ots_ConsumedCapacity
     */
    public function getConsumed()
    {
        return $this->get(self::CONSUMED);
    }
}

/**
 * TableInBatchWriteRowResponse message
 */
class Ots_TableInBatchWriteRowResponse extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;
    const PUT_ROWS = 2;
    const UPDATE_ROWS = 3;
    const DELETE_ROWS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
        self::PUT_ROWS => array(
            'name' => 'put_rows',
            'repeated' => true,
            'type' => 'Ots_RowInBatchWriteRowResponse'
        ),
        self::UPDATE_ROWS => array(
            'name' => 'update_rows',
            'repeated' => true,
            'type' => 'Ots_RowInBatchWriteRowResponse'
        ),
        self::DELETE_ROWS => array(
            'name' => 'delete_rows',
            'repeated' => true,
            'type' => 'Ots_RowInBatchWriteRowResponse'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
        $this->values[self::PUT_ROWS] = array();
        $this->values[self::UPDATE_ROWS] = array();
        $this->values[self::DELETE_ROWS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }

    /**
     * Appends value to 'put_rows' list
     *
     * @param Ots_RowInBatchWriteRowResponse $value Value to append
     *
     * @return null
     */
    public function appendPutRows(Ots_RowInBatchWriteRowResponse $value)
    {
        return $this->append(self::PUT_ROWS, $value);
    }

    /**
     * Clears 'put_rows' list
     *
     * @return null
     */
    public function clearPutRows()
    {
        return $this->clear(self::PUT_ROWS);
    }

    /**
     * Returns 'put_rows' list
     *
     * @return Ots_RowInBatchWriteRowResponse[]
     */
    public function getPutRows()
    {
        return $this->get(self::PUT_ROWS);
    }

    /**
     * Returns 'put_rows' iterator
     *
     * @return ArrayIterator
     */
    public function getPutRowsIterator()
    {
        return new \ArrayIterator($this->get(self::PUT_ROWS));
    }

    /**
     * Returns element from 'put_rows' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_RowInBatchWriteRowResponse
     */
    public function getPutRowsAt($offset)
    {
        return $this->get(self::PUT_ROWS, $offset);
    }

    /**
     * Returns count of 'put_rows' list
     *
     * @return int
     */
    public function getPutRowsCount()
    {
        return $this->count(self::PUT_ROWS);
    }

    /**
     * Appends value to 'update_rows' list
     *
     * @param Ots_RowInBatchWriteRowResponse $value Value to append
     *
     * @return null
     */
    public function appendUpdateRows(Ots_RowInBatchWriteRowResponse $value)
    {
        return $this->append(self::UPDATE_ROWS, $value);
    }

    /**
     * Clears 'update_rows' list
     *
     * @return null
     */
    public function clearUpdateRows()
    {
        return $this->clear(self::UPDATE_ROWS);
    }

    /**
     * Returns 'update_rows' list
     *
     * @return Ots_RowInBatchWriteRowResponse[]
     */
    public function getUpdateRows()
    {
        return $this->get(self::UPDATE_ROWS);
    }

    /**
     * Returns 'update_rows' iterator
     *
     * @return ArrayIterator
     */
    public function getUpdateRowsIterator()
    {
        return new \ArrayIterator($this->get(self::UPDATE_ROWS));
    }

    /**
     * Returns element from 'update_rows' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_RowInBatchWriteRowResponse
     */
    public function getUpdateRowsAt($offset)
    {
        return $this->get(self::UPDATE_ROWS, $offset);
    }

    /**
     * Returns count of 'update_rows' list
     *
     * @return int
     */
    public function getUpdateRowsCount()
    {
        return $this->count(self::UPDATE_ROWS);
    }

    /**
     * Appends value to 'delete_rows' list
     *
     * @param Ots_RowInBatchWriteRowResponse $value Value to append
     *
     * @return null
     */
    public function appendDeleteRows(Ots_RowInBatchWriteRowResponse $value)
    {
        return $this->append(self::DELETE_ROWS, $value);
    }

    /**
     * Clears 'delete_rows' list
     *
     * @return null
     */
    public function clearDeleteRows()
    {
        return $this->clear(self::DELETE_ROWS);
    }

    /**
     * Returns 'delete_rows' list
     *
     * @return Ots_RowInBatchWriteRowResponse[]
     */
    public function getDeleteRows()
    {
        return $this->get(self::DELETE_ROWS);
    }

    /**
     * Returns 'delete_rows' iterator
     *
     * @return ArrayIterator
     */
    public function getDeleteRowsIterator()
    {
        return new \ArrayIterator($this->get(self::DELETE_ROWS));
    }

    /**
     * Returns element from 'delete_rows' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_RowInBatchWriteRowResponse
     */
    public function getDeleteRowsAt($offset)
    {
        return $this->get(self::DELETE_ROWS, $offset);
    }

    /**
     * Returns count of 'delete_rows' list
     *
     * @return int
     */
    public function getDeleteRowsCount()
    {
        return $this->count(self::DELETE_ROWS);
    }
}

/**
 * BatchWriteRowResponse message
 */
class Ots_BatchWriteRowResponse extends \ProtobufMessage
{
    /* Field index constants */
    const TABLES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLES => array(
            'name' => 'tables',
            'repeated' => true,
            'type' => 'Ots_TableInBatchWriteRowResponse'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLES] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'tables' list
     *
     * @param Ots_TableInBatchWriteRowResponse $value Value to append
     *
     * @return null
     */
    public function appendTables(Ots_TableInBatchWriteRowResponse $value)
    {
        return $this->append(self::TABLES, $value);
    }

    /**
     * Clears 'tables' list
     *
     * @return null
     */
    public function clearTables()
    {
        return $this->clear(self::TABLES);
    }

    /**
     * Returns 'tables' list
     *
     * @return Ots_TableInBatchWriteRowResponse[]
     */
    public function getTables()
    {
        return $this->get(self::TABLES);
    }

    /**
     * Returns 'tables' iterator
     *
     * @return ArrayIterator
     */
    public function getTablesIterator()
    {
        return new \ArrayIterator($this->get(self::TABLES));
    }

    /**
     * Returns element from 'tables' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_TableInBatchWriteRowResponse
     */
    public function getTablesAt($offset)
    {
        return $this->get(self::TABLES, $offset);
    }

    /**
     * Returns count of 'tables' list
     *
     * @return int
     */
    public function getTablesCount()
    {
        return $this->count(self::TABLES);
    }
}

/**
 * GetRangeRequest message
 */
class Ots_GetRangeRequest extends \ProtobufMessage
{
    /* Field index constants */
    const TABLE_NAME = 1;
    const DIRECTION = 2;
    const COLUMNS_TO_GET = 3;
    const LIMIT = 4;
    const INCLUSIVE_START_PRIMARY_KEY = 5;
    const EXCLUSIVE_END_PRIMARY_KEY = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TABLE_NAME => array(
            'name' => 'table_name',
            'required' => true,
            'type' => 7,
        ),
        self::DIRECTION => array(
            'name' => 'direction',
            'required' => true,
            'type' => 5,
        ),
        self::COLUMNS_TO_GET => array(
            'name' => 'columns_to_get',
            'repeated' => true,
            'type' => 7,
        ),
        self::LIMIT => array(
            'name' => 'limit',
            'required' => false,
            'type' => 5,
        ),
        self::INCLUSIVE_START_PRIMARY_KEY => array(
            'name' => 'inclusive_start_primary_key',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
        self::EXCLUSIVE_END_PRIMARY_KEY => array(
            'name' => 'exclusive_end_primary_key',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TABLE_NAME] = null;
        $this->values[self::DIRECTION] = null;
        $this->values[self::COLUMNS_TO_GET] = array();
        $this->values[self::LIMIT] = null;
        $this->values[self::INCLUSIVE_START_PRIMARY_KEY] = array();
        $this->values[self::EXCLUSIVE_END_PRIMARY_KEY] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::TABLE_NAME, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->get(self::TABLE_NAME);
    }

    /**
     * Sets value of 'direction' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDirection($value)
    {
        return $this->set(self::DIRECTION, $value);
    }

    /**
     * Returns value of 'direction' property
     *
     * @return int
     */
    public function getDirection()
    {
        return $this->get(self::DIRECTION);
    }

    /**
     * Appends value to 'columns_to_get' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendColumnsToGet($value)
    {
        return $this->append(self::COLUMNS_TO_GET, $value);
    }

    /**
     * Clears 'columns_to_get' list
     *
     * @return null
     */
    public function clearColumnsToGet()
    {
        return $this->clear(self::COLUMNS_TO_GET);
    }

    /**
     * Returns 'columns_to_get' list
     *
     * @return string[]
     */
    public function getColumnsToGet()
    {
        return $this->get(self::COLUMNS_TO_GET);
    }

    /**
     * Returns 'columns_to_get' iterator
     *
     * @return ArrayIterator
     */
    public function getColumnsToGetIterator()
    {
        return new \ArrayIterator($this->get(self::COLUMNS_TO_GET));
    }

    /**
     * Returns element from 'columns_to_get' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getColumnsToGetAt($offset)
    {
        return $this->get(self::COLUMNS_TO_GET, $offset);
    }

    /**
     * Returns count of 'columns_to_get' list
     *
     * @return int
     */
    public function getColumnsToGetCount()
    {
        return $this->count(self::COLUMNS_TO_GET);
    }

    /**
     * Sets value of 'limit' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLimit($value)
    {
        return $this->set(self::LIMIT, $value);
    }

    /**
     * Returns value of 'limit' property
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->get(self::LIMIT);
    }

    /**
     * Appends value to 'inclusive_start_primary_key' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendInclusiveStartPrimaryKey(Ots_Column $value)
    {
        return $this->append(self::INCLUSIVE_START_PRIMARY_KEY, $value);
    }

    /**
     * Clears 'inclusive_start_primary_key' list
     *
     * @return null
     */
    public function clearInclusiveStartPrimaryKey()
    {
        return $this->clear(self::INCLUSIVE_START_PRIMARY_KEY);
    }

    /**
     * Returns 'inclusive_start_primary_key' list
     *
     * @return Ots_Column[]
     */
    public function getInclusiveStartPrimaryKey()
    {
        return $this->get(self::INCLUSIVE_START_PRIMARY_KEY);
    }

    /**
     * Returns 'inclusive_start_primary_key' iterator
     *
     * @return ArrayIterator
     */
    public function getInclusiveStartPrimaryKeyIterator()
    {
        return new \ArrayIterator($this->get(self::INCLUSIVE_START_PRIMARY_KEY));
    }

    /**
     * Returns element from 'inclusive_start_primary_key' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getInclusiveStartPrimaryKeyAt($offset)
    {
        return $this->get(self::INCLUSIVE_START_PRIMARY_KEY, $offset);
    }

    /**
     * Returns count of 'inclusive_start_primary_key' list
     *
     * @return int
     */
    public function getInclusiveStartPrimaryKeyCount()
    {
        return $this->count(self::INCLUSIVE_START_PRIMARY_KEY);
    }

    /**
     * Appends value to 'exclusive_end_primary_key' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendExclusiveEndPrimaryKey(Ots_Column $value)
    {
        return $this->append(self::EXCLUSIVE_END_PRIMARY_KEY, $value);
    }

    /**
     * Clears 'exclusive_end_primary_key' list
     *
     * @return null
     */
    public function clearExclusiveEndPrimaryKey()
    {
        return $this->clear(self::EXCLUSIVE_END_PRIMARY_KEY);
    }

    /**
     * Returns 'exclusive_end_primary_key' list
     *
     * @return Ots_Column[]
     */
    public function getExclusiveEndPrimaryKey()
    {
        return $this->get(self::EXCLUSIVE_END_PRIMARY_KEY);
    }

    /**
     * Returns 'exclusive_end_primary_key' iterator
     *
     * @return ArrayIterator
     */
    public function getExclusiveEndPrimaryKeyIterator()
    {
        return new \ArrayIterator($this->get(self::EXCLUSIVE_END_PRIMARY_KEY));
    }

    /**
     * Returns element from 'exclusive_end_primary_key' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getExclusiveEndPrimaryKeyAt($offset)
    {
        return $this->get(self::EXCLUSIVE_END_PRIMARY_KEY, $offset);
    }

    /**
     * Returns count of 'exclusive_end_primary_key' list
     *
     * @return int
     */
    public function getExclusiveEndPrimaryKeyCount()
    {
        return $this->count(self::EXCLUSIVE_END_PRIMARY_KEY);
    }
}

/**
 * GetRangeResponse message
 */
class Ots_GetRangeResponse extends \ProtobufMessage
{
    /* Field index constants */
    const CONSUMED = 1;
    const NEXT_START_PRIMARY_KEY = 2;
    const ROWS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONSUMED => array(
            'name' => 'consumed',
            'required' => true,
            'type' => 'Ots_ConsumedCapacity'
        ),
        self::NEXT_START_PRIMARY_KEY => array(
            'name' => 'next_start_primary_key',
            'repeated' => true,
            'type' => 'Ots_Column'
        ),
        self::ROWS => array(
            'name' => 'rows',
            'repeated' => true,
            'type' => 'Ots_Row'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CONSUMED] = null;
        $this->values[self::NEXT_START_PRIMARY_KEY] = array();
        $this->values[self::ROWS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'consumed' property
     *
     * @param Ots_ConsumedCapacity $value Property value
     *
     * @return null
     */
    public function setConsumed(Ots_ConsumedCapacity $value)
    {
        return $this->set(self::CONSUMED, $value);
    }

    /**
     * Returns value of 'consumed' property
     *
     * @return Ots_ConsumedCapacity
     */
    public function getConsumed()
    {
        return $this->get(self::CONSUMED);
    }

    /**
     * Appends value to 'next_start_primary_key' list
     *
     * @param Ots_Column $value Value to append
     *
     * @return null
     */
    public function appendNextStartPrimaryKey(Ots_Column $value)
    {
        return $this->append(self::NEXT_START_PRIMARY_KEY, $value);
    }

    /**
     * Clears 'next_start_primary_key' list
     *
     * @return null
     */
    public function clearNextStartPrimaryKey()
    {
        return $this->clear(self::NEXT_START_PRIMARY_KEY);
    }

    /**
     * Returns 'next_start_primary_key' list
     *
     * @return Ots_Column[]
     */
    public function getNextStartPrimaryKey()
    {
        return $this->get(self::NEXT_START_PRIMARY_KEY);
    }

    /**
     * Returns 'next_start_primary_key' iterator
     *
     * @return ArrayIterator
     */
    public function getNextStartPrimaryKeyIterator()
    {
        return new \ArrayIterator($this->get(self::NEXT_START_PRIMARY_KEY));
    }

    /**
     * Returns element from 'next_start_primary_key' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Column
     */
    public function getNextStartPrimaryKeyAt($offset)
    {
        return $this->get(self::NEXT_START_PRIMARY_KEY, $offset);
    }

    /**
     * Returns count of 'next_start_primary_key' list
     *
     * @return int
     */
    public function getNextStartPrimaryKeyCount()
    {
        return $this->count(self::NEXT_START_PRIMARY_KEY);
    }

    /**
     * Appends value to 'rows' list
     *
     * @param Ots_Row $value Value to append
     *
     * @return null
     */
    public function appendRows(Ots_Row $value)
    {
        return $this->append(self::ROWS, $value);
    }

    /**
     * Clears 'rows' list
     *
     * @return null
     */
    public function clearRows()
    {
        return $this->clear(self::ROWS);
    }

    /**
     * Returns 'rows' list
     *
     * @return Ots_Row[]
     */
    public function getRows()
    {
        return $this->get(self::ROWS);
    }

    /**
     * Returns 'rows' iterator
     *
     * @return ArrayIterator
     */
    public function getRowsIterator()
    {
        return new \ArrayIterator($this->get(self::ROWS));
    }

    /**
     * Returns element from 'rows' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Ots_Row
     */
    public function getRowsAt($offset)
    {
        return $this->get(self::ROWS, $offset);
    }

    /**
     * Returns count of 'rows' list
     *
     * @return int
     */
    public function getRowsCount()
    {
        return $this->count(self::ROWS);
    }
}