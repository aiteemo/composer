<?php
/**
 * Created by PhpStorm.
 * User: jinfengchen
 * Date: 2020/4/14
 * Time: 11:53 AM
 */
require "vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

// 创建日志服务
$logger = new Logger('Monolog');

// 添加一些处理器
$logger->pushHandler(new StreamHandler(__DIR__.'/Monolog.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

// 现在你就可以用日志服务了
$logger->info('Hello Monolog');