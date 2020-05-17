<?php

namespace app\model\user;

class UserModel
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
			$user = self::DB()->select("user",[
				'id','username','password','state'
			], ["AND" =>[
				"username[=]" => $username
			]]);
			if(count($user)>0 && md5($password)==$user[0]['password']){
				if($user[0]['state']!=1){
					return 'stop';
				}
                $token = md5(time().mt_rand(1,999999999));
                self::DB()->update("user",[
                    "token" => $token
                ], [
                    "id[=]" => $user[0]['id']
                ]);
				$userinfo=array('id'=>$user[0]['id'],'username'=>$user[0]['username'],'password'=>$user[0]['password'],'token'=>$token);
				$_SESSION['userinfo']=$userinfo;
				return 'true';
			}
			return 'false';
		}else{
			return 'false';
		}
	}

    static public function applogindo($token)
    {
        if($token!=""){
            $user = self::DB()->select("user",[
                'id','username','password','state'
            ], ["AND" =>[
                "token[=]" => $token
            ]]);
            if(count($user)>0){
                if($user[0]['state']!=1){
                    return 'stop';
                }
                $userinfo=array('id'=>$user[0]['id'],'username'=>$user[0]['username'],'password'=>$user[0]['password'],'token'=>$user[0]['token']);
                $_SESSION['userinfo']=$userinfo;
                return 'true';
            }
            return 'false';
        }else{
            return 'false';
        }
    }

	static public function logindopasmd5($username,$password)
	{
		if($username!="" && $password!=""){
			
			$user = self::DB()->select("user",[
				'id','username','password','state'
			], ["AND" =>[
				"username[=]" => $username
			]]);
			if(count($user)>0 && $password==$user[0]['password']){
				
				if($user[0]['state']!=1){
					return 'stop';
				}
				
				$userinfo=array('id'=>$user[0]['id'],'username'=>$user[0]['username'],'password'=>$user[0]['password']);
				$_SESSION['userinfo']=$userinfo;
				return 'true';
			}
			return 'false';
		}else{
			return 'false';
		}
	}
	
	
	static public function haslogin()
	{
		if(!empty($_SESSION['userinfo'])&&!empty($_SESSION['userinfo']['id'])&&!empty($_SESSION['userinfo']['username'])&&!empty($_SESSION['userinfo']['password'])){
			
			$user = self::DB()->select("user",[
				'id','username','password','state'
			], [
				"id" => $_SESSION['userinfo']['id']
			]);
			if(count($user)>0 && $user[0]['username']==$_SESSION['userinfo']['username'] && $user[0]['password']==$_SESSION['userinfo']['password'] && $user[0]['state']==1){
				return true;
			}else{
				unset($_SESSION['userinfo']);
				return false;
			}
		}else{
			unset($_SESSION['userinfo']);
			return false;
		}
	}
}
?>