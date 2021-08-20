<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */

// 调试模式
define("DEBUG", true);

// 文件路径常量
define("MYFRAME", realpath("./"));
define("CORE", MYFRAME."/core");
define("APP", MYFRAME."/app");

// 修改配置文件，显示错误(调试模式)
if(DEBUG) {
    ini_set("display_error", "On");
} else {
    ini_set("display_error", "Off");
}

// 加载函数库
include_once CORE . "/common/function.php";

// 启动框架
include_once CORE . '/myframe.php';

// 自动加载类机制
spl_autoload_register("\core\myframe::load");

\core\myframe::run();
\core\route::sayHello();
?>