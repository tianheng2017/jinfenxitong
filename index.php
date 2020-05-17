<?php
ini_set('date.timezone','Asia/Shanghai');
/**
 * 入口文件
 * 	加载系统配置文件，定义变量
 * 	调试模式开/关   开启移动版视图模板
 * 	加载函数库
 * 	启动框架
 */
include 'core/config/webconfig.php';  //加载系统配置文件

/**
 * 调试模式开/关
 */
if(DEBUG){
	ini_set('display_errors','On');
}else{
	ini_set('display_errors','Off');
}

include CORE.'common/front_functions.php';  //加载前置函数
/**
 *开启移动版视图模板时调用
 */
if(isMobile_Front()&&CLIENT_OPEN_MOBILE_VIEW){
	define('VIEW_INDEX',VIEW_MOBILE_INDEX);  //调用移动端模板
}else{
	define('VIEW_INDEX',VIEW_PC_INDEX);  //调用PC端模板
}
/**
 * VIEW_INDEXDIR默认为前台模板，开发后台时注意在控制器初始化方法中加上   $this->INDEX_OR_ADMIN = VIEW_ADMINDIR;
 */
define('VIEW_INDEXDIR','app/views/'.VIEW_INDEX);  //当前前台所用的视图模板文件夹目录
define('VIEW_ADMINDIR','app/views/'.VIEW_ADMIN);  //当前后台所用的视图模板文件夹目录



include CORE.'common/functions.php';  //加载函数库
include CORE . 'virphp.php';  //加载基类
spl_autoload_register('\core\virphp::load');  //自动加载
\core\virphp::run();
?>