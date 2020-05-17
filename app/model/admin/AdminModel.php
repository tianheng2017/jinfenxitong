<?php

namespace app\model\admin;

class AdminModel
{
	public static $DB;
	public static $DBISOPEN = false;
	
	public function __construct()
	{
		
	}
	
	public static function DB()
	{
		if(self::$DBISOPEN){
			return self::$DB;
		}else{
			self::$DB = new \core\lib\model\DB();
			self::$DBISOPEN = true;
			return self::$DB;
		}
	}
	
	static public function logindo($username,$password)
	{
		if($username!="" && $password!=""){
			
			$admin = self::DB()->select("admin",[
				'id','username','password'
			], ["AND" =>[
				"username[=]" => $username
			]]);
			if(count($admin)>0 && md5($password)==$admin[0]['password']){
				$admininfo=array('id'=>$admin[0]['id'],'password'=>$admin[0]['password'],'username'=>$admin[0]['username']);
				$_SESSION['admininfo']=$admininfo;
				return true;
			}
			return false;
		}else{
			return false;
		}
	}
	static public function haslogin()
	{
		if(!empty($_SESSION['admininfo'])&&!empty($_SESSION['admininfo']['id'])&&!empty($_SESSION['admininfo']['password'])){
			
			$admin = self::DB()->select("admin",[
				'id','username','password'
			], [
				"id" => $_SESSION['admininfo']['id']
			]);
			if(count($admin)>0 && $admin[0]['password']==$_SESSION['admininfo']['password']){
				return true;
			}else{
				unset($_SESSION['admininfo']);
				return false;
			}
		}else{
			unset($_SESSION['admininfo']);
			return false;
		}
	}
}
?>