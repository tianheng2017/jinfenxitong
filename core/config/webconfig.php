<?php
/**
 * 全局基本变量
 */
define('MySystemName','WSNAME');  //系统名称
define('MyHost','http://127.0.0.1');  //域名
define('INSTALL_DIR','');  //安装目录-根目录填空

define('SESSION_USERONELOGIN',false);  //开启只允许单用户账号登录
define('CLIENT_OPEN_MOBILE_VIEW',false);  //开启移动版视图模板

define('SC_PREFIX','vir_');  //session、cookie前缀-根据开发需求使用

define('VIEW_PC_INDEX','default_v1');  //当前前台所用的视图模板(PC端)
define('VIEW_MOBILE_INDEX','m_v1');  //当前前台所用的视图模板(移动端)
define('VIEW_ADMIN','admin_v1');  //当前后台所用的视图模板

define('PAGELISTNUMBER',20);  //列表页单页加载条数
define('PAGELISTPALLNUMSLEFTNUM',3);  

define('SelPageApiDataNumber',20);  //前台异步列表加载条数


define('PFCOINNAME','RMB');


/**
 * 全局MVC架构变量
 */
define('CORE','core/');
define('APP','app/');
define('MODULE','app');
/**
 * 全局调试模式控制变量
 */
define('DEBUG',false);


define('SESSION_STARTFLAG',true);
?>
