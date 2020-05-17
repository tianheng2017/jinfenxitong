<?php

namespace app\ctrl;

use app\model\admin\AdminModel;

class adminCtrl extends commonCtrl
{
	public static $webconfig;
	public function __construct()
	{
		$this->INDEX_OR_ADMIN = VIEW_ADMINDIR;//后台标识
		
		$this->assign('WsCtrlClass',self::$WsCtrlClass);
		
		self::$webconfig=self::webconfig();
		$this->assign('webconfig',self::$webconfig);
		//print_r(self::$webconfig);exit;
		
		$ActionUnloginArr = array("login","loginform");	//免登录Action数组
		
		if(in_array(strtolower(self::$WsAction), $ActionUnloginArr)){
			//免登录
			if(AdminModel::haslogin()){
				HeaderLocationCA("admin","home");
			}
		}else{
			//未登录跳登录页
			if(!AdminModel::haslogin()){
				HeaderLocationCA("admin","login");
			}
		}
	}
	
	/**
	 * 登录
	 */
	public function login()
	{
		if(empty(get('token')) || get('token')!='kW0w9Sl2mcl6dc8Xv7n'){
			HeaderLocationCA();
		}
		$this->assign('token',get('token'));
		
		$this->display();
	}

	/**
	 * 登录验证
	 */
	public function loginform()
	{
		if(empty(get('token')) || get('token')!='kW0w9Sl2mcl6dc8Xv7n'){
			HeaderLocationCA();
		}
		$result=AdminModel::logindo(post('username'),post('password'));
		if($result){
			echo 'true';
		}else{
			echo 'false';
		}
	}


	/**
	 * 退出登录
	 */
	public function esclogin()
	{
		echo AdminEscLogin('admin');
	}

	/**
	 * 登录成功后首页
	 */
	public function home()
	{
		
		$this->display();
	}

	
	
	public function getHomeControlData()
	{	
		$data = array();
		
		$alluser = self::DB()->query("SELECT COUNT(*) alluser FROM `user` ")->fetchAll();
		$data['alluser'] = $alluser[0]['alluser']?: 0;
		
		
		$allinvestment = self::DB()->query("SELECT SUM(money) allinvestment FROM `tradeorder` ")->fetchAll();
		$data['allinvestment'] = $allinvestment[0]['allinvestment']?: 0;
		
		
		
		success(1,"SUCCESS",$data);
	}
	
	/**
	 * myinfo修改接口
	 */
	public function myinfo_updateform()
	{
		if(trim(post('password'))==""){
			echo "none";exit();
		}

		$data = self::DB()->select("admin",[
			'password'
		], [
			"id" => $_SESSION['admininfo']['id']
		]);
		if(md5(post('password')) == $data[0]['password']){
			echo "相同";exit();
		}else{
			$newpasv = md5(post('password'));
			$resu = self::DB()->update("admin",[
				'password'=> $newpasv
			], [
				"id" => $_SESSION['admininfo']['id']
			]);
			if($resu){
				if($data[0]['password']!=$newpasv){
					$_SESSION['admininfo']['password']=$newpasv;
				}
				echo "成功";exit();
			}else{
				echo "失败";exit();
			}
		}
	}
	public function sysinfo_updateform()
	{
		$webconfig = self::$webconfig;
		$post = $_POST;
		
		$res = "相同";
		
		foreach($post as $k=>$v){
			
			if(array_key_exists($k, $webconfig)){
				$v = addslashes($v);
				if($v != $webconfig[$k]['val']){
					$resu = self::DB()->update("webconfig",[
						'val'=> $v
					], [
						"name[=]" => $k
					]);
					if($resu){
						$res = "成功";
					}else{
						$res = "失败";
					}
				}
			}
		
		}

		echo $res;exit();
	}

    public function imguploaddo()
    {
        $imgurlval="";
        if ( !empty( $_FILES ) ) {
            $tempPath = $_FILES[ 'file' ][ 'tmp_name' ];
            $photouploadtime= new \DateTime;
            $randname=rand();
            if ($_FILES["file"]["type"] == "image/gif"){
                $photoname=strtotime($photouploadtime->format('Y-m-d H:i:s')).'-'.$randname.'.gif';
            }elseif($_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/png"){
                $photoname=strtotime($photouploadtime->format('Y-m-d H:i:s')).'-'.$randname.'.png';
            }else{
                exit;
            }
            $dirpath='upload/images/a';
            $uploadPath =$dirpath.'/'.$photoname;
            if (!file_exists($dirpath)){
                mkdirs($dirpath);
            }
            $upre=move_uploaded_file( $tempPath, $uploadPath );
            if($upre){
                $imgurlval=$photoname;
            }
        }
        echo $imgurlval;
    }
	
}
?>