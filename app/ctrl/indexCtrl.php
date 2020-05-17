<?php

namespace app\ctrl;

use app\model\user\UserModel;

class indexCtrl extends commonCtrl
{
	public static $webconfig;
	
	public static $myuserinfo;
	
	public function __construct()
	{
		$this->INDEX_OR_ADMIN = "app/views/web_cn_v1";
		
		$this->assign('WsCtrlClass',self::$WsCtrlClass);

		self::$webconfig=self::webconfig();
		$this->assign('webconfig',self::$webconfig);
	}
	
	/**
	 * 首页
	 */
	public function index()
	{
		HeaderLocationCA("appuser","login");
	}
	
}
?>