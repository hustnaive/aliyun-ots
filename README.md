阿里云Ots非官方PHP SDK
==

阿里云ots的非官方PHP SDK，基于php-protobuf扩展。

安装
--

* 编译安装php-protobuf扩展：https://github.com/allegro/php-protobuf
* 将扩展配置到php中去


使用
--

```php

require 'path/to/src/Ots.php';

$ots = new Ots('appkey', 'appsecret', 'instance');
$ots->getRow('a', [1]);
```