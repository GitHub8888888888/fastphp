<?php
// 应用目录为当前目录；；define() 函数定义一个常量。
//define(常量名,常量值,是否大小写敏感)
//define(name,value,case_insensitive) 
define('APP_PATH', __DIR__ . '/');

// 开启调试模式
define('APP_DEBUG', true);

// 加载框架文件
require(APP_PATH . 'fastphp/Fastphp.php');

// 加载配置文件
$config = require(APP_PATH . 'config/config.php');

// 实例化框架类
(new fastphp\Fastphp($config))->run();
