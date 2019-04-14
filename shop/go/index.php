<?php
// 定义上级目录
define("APP_PATH","../");
// 设置程序模式为调试模式
define("APP_DEBUG",true);
// 把css,img,js的路径定义为常量
define("SITE_URL","http://www.thinkshop.com/");
define("CSS_URL",SITE_URL."public/css/");
define("IMG_URL",SITE_URL."public/img/");
define("JS_URL",SITE_URL."public/js/");
// 包含框架
include "../../ThinkPHP/ThinkPHP.php";