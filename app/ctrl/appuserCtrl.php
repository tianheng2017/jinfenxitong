<?php
namespace app\ctrl;
use app\model\user\UserModel;
use app\model\tram\OrderModel;
use app\ormModel\Coupon;
use app\ormModel\Itemlist;
use app\ormModel\Itemlog;
use app\ormModel\Itemlogp;
use app\ormModel\Regpath;
use app\ormModel\User;
use app\ormModel\Moneypath;

class appuserCtrl extends commonCtrl
{
	public static $webconfig;
	public static $myuserinfo;
	
	public function __construct()
	{
	    $this->INDEX_OR_ADMIN = "app/views/app_cn_v1";
		$this->assign('WsCtrlClass',self::$WsCtrlClass);
		self::$webconfig = self::webconfig();
		$this->assign('webconfig',self::$webconfig);
		
		
		$ActionUnloginArr = array("applogin","login","loginform","reg","regform","codeusername","forgetpassw","forgetpasswform","sellanguage");	//免登录Action数组
		
		if(in_array(strtolower(self::$WsAction), $ActionUnloginArr)){
			//免登录
			if(UserModel::haslogin() && strtolower(self::$WsAction)!="sellanguage" && strtolower(self::$WsAction)!="codeusername"){
				HeaderLocationCA("apphome","index");
			}
		}else{
			//未登录跳登录页
			if(!UserModel::haslogin()){
				HeaderLocationCA("appuser","login");
			}
		}
		
		
		if(UserModel::haslogin()){
			$myuserinfo = self::DB()->query("SELECT id,username,name,money,money2,money3,coinaddress,authentication,authbankinfo,bankname,banknumber,bankhome FROM `user` WHERE id='".$_SESSION['userinfo']['id']."' ")->fetchAll();
			self::$myuserinfo=$myuserinfo[0];
			$this->assign('myuserinfo',$myuserinfo[0]);
		}
	}
	
	public function auto_ratiop($uid = '11005')
	{
		//直推用户
		$list = self::DB()->select("regpath" ,"uidsubordinate",["AND" =>[
			"uiduidsubordinatesuperior[=]" => $uid
		]]);
		$arr = '';		
		foreach($list as $k=>$v){
			$arr.= $v.',';
		}
		$arr = '('.rtrim($arr,',').')';
		//有效用户（充值金额超过100的个数）
		$data = self::DB()->query("SELECT uid FROM moneypath where (mtype = 111 or mtype = 113 ) and money >= 100  and  uid in ".$arr." group by uid ")->fetchAll();
		$num = count($data);
		if($num >=20){
			return 0.05;
		}
		if($num >=17){
			return 0.02;
		} else {
			return 0;
		}
	}
	
	/**
	 * 登录
	 */
	public function login()
	{
        $this->assign('device_type',$this->get_device_type());
		$this->display();
	}
	/**
	 * 登录验证
	 */
	public function loginform()
	{
		$result=UserModel::logindo(post('username'),post('password'));
		if($result=='stop'){
		    echo json_encode(['code'=>0,'msg'=>'stop']);exit;
		}
		if($result=='true'){
            echo json_encode(['code'=>1,'msg'=>'true','token'=>$_SESSION['userinfo']['token']]);exit;
		}
		if($result=='false'){
            echo json_encode(['code'=>0,'msg'=>'false']);exit;
		}
        echo json_encode(['code'=>0,'msg'=>'false']);exit;
	}
    /**
     * app登录验证
     */
    public function applogin()
    {
        $result=UserModel::applogindo(post('token'));
        if($result=='stop'){
            echo json_encode(['code'=>0,'msg'=>'stop']);exit;
        }
        if($result=='true'){
            echo json_encode(['code'=>1,'msg'=>'true']);exit;
        }
        if($result=='false'){
            echo json_encode(['code'=>0,'msg'=>'false']);exit;
        }
        echo json_encode(['code'=>0,'msg'=>'false']);exit;
    }
	// 判断客户端类型
    private function get_device_type()
    {
        //全部变成小写字母
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        $type = 'other';
        //分别进行判断
        if(strpos($agent, 'iphone') || strpos($agent, 'ipad'))
        {
            $type = 'ios';
        }
        if(strpos($agent, 'android'))
        {
            $type = 'android';
        }
        //echo $_SERVER['HTTP_USER_AGENT'];exit;
        return $type;
    }
	/**
	 * 退出登录
	 */
	public function esclogin()
	{
		echo UserEscLogin('user');
	}
	
	/**
	 * 注册
	 */
	public function reg()
	{
	    $code = get('code');
        $this->assign('superioruid', $code);
        if ($code) {
            $this->assign('readonly', 'readonly');
        }
		$this->display();
	}
	
	/**
	 * 注册接口
	 */
	public function regform()
	{
		$unametrimall1=array(" ","　","\t","\n","\r");
		$unametrimall2=array("","","","","");
		$username = str_replace($unametrimall1,$unametrimall2,post('username')); 
		$password = post('password');
		$passwordtwo = post('passwordtwo');
		$superioruid = post('superioruid');
		
		$pattern="/^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/";
		
		if(mb_strlen($username,'utf8')<6 || !preg_match($pattern,$username)){
			echo "1005";exit();//手机号格式有误！
		}
		
		if(mb_strlen($password,'utf8')<6){
			echo "1006";exit();//密码长度不能小于6位！
		}
		if(mb_strlen($passwordtwo,'utf8')<6){
			echo "10006";exit();//安全密码长度不能小于6位！
		}
		
// 		if(!empty($_SESSION["ucode"])&&!empty($_SESSION["ucode"]["codeusername"])&&$_SESSION["ucode"]["codeusername"]==$username&&!empty($_SESSION["ucode"]["code"])&&$_SESSION["ucode"]["code"]==post('codeusername')&&!empty($_SESSION["ucode"]["time"])){
// 			if((time()-$_SESSION["ucode"]["time"]>60*5)){
// 				echo "1007";exit();//验证码已超时，请重新发送！
// 			}else{
// 				if($_SESSION["ucode"]["code"]==post('codeusername')){

// 				}else{
// 					echo "1008";exit();//验证码错误！
// 				}
// 			}
// 		}else{
// 			echo "1009";exit();//验证码错误！
// 		}
		
		
		$datasuperioruid = self::DB()->select("user", [
			'id','username','regpath'
		], [
			"id[=]" => $superioruid
		]);
		
		if(count($datasuperioruid)<1){
			echo "1011";exit();//邀请码有误！
		}
		
		
		$resultreg = self::DB()->select("user", [
			'username'
		], [
			"username[=]" => $username
		]);
		
		if(count($resultreg)>0){
			echo "1012";exit();//该手机号已被注册！
		}else{
			$datetime = new \DateTime;
			
			$regpath = "";
			
			$last_user_id = self::DB()->insert("user", [
				"username" => $username,
				"password" => md5($password),
				"passwordtwo" => md5($passwordtwo),
				"superioruid" => $superioruid,
				"proportion" => 0,
				"authentication" => 0,
				"regpath" => $regpath,
				"regtime" => $datetime->format('Y-m-d H:i:s')
			]);
			
			if($last_user_id){
			
				if(empty($datasuperioruid[0]['regpath'])){
					
					$regpath=$datasuperioruid[0]['id'];
					
					//uid	uidsubordinate	uiduidsubordinatesuperior	lown	authentication	regtime
					self::DB()->insert("regpath", [
						"uid" => $datasuperioruid[0]['id'],
						"uidsubordinate" => $last_user_id,
						"uiduidsubordinatesuperior" => $datasuperioruid[0]['id'],
						"lown" => 1,
						"authentication" => -1,
						"regtime" => $datetime->format('Y-m-d H:i:s')
					]);
				}else{
					$regpath=$datasuperioruid[0]['regpath'].",".$datasuperioruid[0]['id'];
					
					
					$regpatha=explode(",",$datasuperioruid[0]['regpath']);
					for($i=0;$i<count($regpatha);$i++){
						
						$dbun = self::DB()->select("user", [
							'id','username'
						], ["AND" =>[
							"id[=]" => $regpatha[$i]
						]]);
						
						self::DB()->insert("regpath", [
							"uid" => $dbun[0]['id'],
							"uidsubordinate" => $last_user_id,
							"uiduidsubordinatesuperior" => $datasuperioruid[0]['id'],
							"lown" => count($regpatha)+1-$i,
							"authentication" => -1,
							"regtime" => $datetime->format('Y-m-d H:i:s')
						]);
					}
					
					
					self::DB()->insert("regpath", [
						"uid" => $datasuperioruid[0]['id'],
						"uidsubordinate" => $last_user_id,
						"uiduidsubordinatesuperior" => $datasuperioruid[0]['id'],
						"lown" => 1,
						"authentication" => -1,
						"regtime" => $datetime->format('Y-m-d H:i:s')
					]);
				}
			
				self::DB()->update("user",[
					"regpath" => $regpath
				], [
					"id[=]" => $last_user_id
				]);
			
			
				echo "1003";exit();//注册成功！
			}else{
				echo "1004";exit();//注册失败！
			}
			
		}
		
	}
    /**
     * 验证码发送
     */
    public function codeusername()
    {
        if(!empty(post('codeusername'))){
            $unametrimall1=array(" ","　","\t","\n","\r");
            $unametrimall2=array("","","","","");
            $codeusername = str_replace($unametrimall1,$unametrimall2,post('codeusername'));
        }else{
            echo "1002";exit();//发送失败！
        }
        if(!isset($_SESSION)){ session_start();}  //开启Session
        if(!empty($_SESSION["ucode"])&&!empty($_SESSION["ucode"]["time"])&&(time()-$_SESSION["ucode"]["time"]<60)){
            echo "".(60-time()+$_SESSION["ucode"]["time"])."";exit();//发送频率过快，请稍等		s
        }
        $codeval = rand(100000,999999);
        $text=$codeval;
        $mobile = trim($codeusername);
        $content="Your verification code is：".$text;
        $phone = $mobile;
        $sendurl="http://intlapi.1cloudsp.com/intl/api/v2/send?accesskey=BamIbzaJdLNU7EK4&secret=nbwLqqEI00XALOj0LuNj7D6ndL3eXcQW&sign=".str_replace('+', '%20', urlencode('【U Finance】'))."&mobile=".$phone."&content=".str_replace('+', '%20', urlencode($content));
        $result = @json_decode(file_get_contents($sendurl));
        if($result->code == 0){
            $_SESSION["ucode"]["time"]=time();
            $_SESSION["ucode"]["code"]=$codeval;
            $_SESSION["ucode"]["codeusername"]=$codeusername;
            echo "1001";exit();
        }else{
            echo "1002";exit();
        }
    }
	/**
	 * 找回密码
	 */
	public function forgetpassw()
	{
		$this->display();
	}
	
	/**
	 * 找回密码接口
	 */
	public function forgetpasswform()
	{
		$unametrimall1=array(" ","　","\t","\n","\r");
		$unametrimall2=array("","","","","");
		$username = str_replace($unametrimall1,$unametrimall2,post('username')); 
		$password = post('password');
		$usersign = post('usersign');
		
		$pattern="/^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/";
		
		if(mb_strlen($username,'utf8')<6 || !preg_match($pattern,$username)){
			echo "1005";exit();//手机号格式有误！
		}
		
		if(mb_strlen($password,'utf8')<6){
			echo "1006";exit();//密码长度不能小于6位！
		}
		
		if(!empty($_SESSION["ucode"])&&!empty($_SESSION["ucode"]["codeusername"])&&$_SESSION["ucode"]["codeusername"]==$username&&!empty($_SESSION["ucode"]["code"])&&$_SESSION["ucode"]["code"]==post('codeusername')&&!empty($_SESSION["ucode"]["time"])){
			if((time()-$_SESSION["ucode"]["time"]>60*5)){
				echo "1007";exit();//验证码已超时，请重新发送！
			}else{
				if($_SESSION["ucode"]["code"]==post('codeusername')){
					
				}else{
					echo "1008";exit();//验证码错误！
				}
			}
		}else{
			echo "1009";exit();//验证码错误！
		}
		
		
		$resultreg = self::DB()->select("user", [
			'username'
		], [
			"username[=]" => $username
		]);
		
		if(count($resultreg)>0){
			//已存在
			$datasreged = self::DB()->select("user" ,[
				"username","password"
			],["AND" =>[
				"username[=]" => $username
			]]);
			
			
			if($datasreged[0]["password"]==md5($password)){
				echo "1001";exit();//重置成功！
			}
			
			$res = self::DB()->update("user",[
				"password" => md5($password)
			], [
				"username[=]" => $username
			]);
			
			if($res){
				echo "1001";exit();//重置成功！
			}else{
				echo "1002";exit();//重置失败！
			}
			
		}else{
			//未注册
			
			echo "1003";exit();//账号不存在！
			
		}
	}
	
	
	/**
	 * 个人中心
	 */
	public function index()
	{
        $this->assign('device_type',$this->get_device_type());
		$this->display();
	}
	
	
	
	//获取个人资金接口
	public function getUserMoneyData()
	{		
		$data['mymoney1'] = number_format(self::$myuserinfo['money'], 2, '.', '');
		$data['mymoney1_2'] = number_format(self::$myuserinfo['money'], 2, '.', '');
		
		$data['mymoney2'] = self::$myuserinfo['money2'];
		
		$data['mymoney3'] = self::$myuserinfo['money3'];
		
		$data['mymoneyall'] = number_format(self::$myuserinfo['money']+self::$myuserinfo['money2']+self::$myuserinfo['money3'], 2, '.', '');
		
		
		$jtimev = date("Y-m-d 00:00:00");
		$ztimev = date("Y-m-d 00:00:00",strtotime("-1 day"));
		$zctimev = date("Y-m-d H:i:s",strtotime("-1 day"));
		
		
		$alltramoneying = self::DB()->query("SELECT SUM(money) allinvestment FROM `tradeorder` WHERE state=1 and uid='".self::$myuserinfo['id']."' ")->fetchAll();
		$alltramoneying = $alltramoneying[0]['allinvestment']?: 0;
		
		$alltramoney = self::DB()->query("SELECT SUM(money) allinvestment FROM `tradeorder` WHERE uid='".self::$myuserinfo['id']."' and buytime > '".$jtimev."' ")->fetchAll();
		$alltramoney = $alltramoney[0]['allinvestment']?: 0;
		
		
		$data['alltramoneying'] = $alltramoneying;
		$data['alltramoney'] = $alltramoney;
		
		$data['alltramoneying'] = number_format($data['alltramoneying'], 2, '.', '');
		$data['alltramoney'] = number_format($data['alltramoney'], 2, '.', '');
		
		
		
		
		
		
		$moneypath152 = self::DB()->query("SELECT SUM(money) summoney FROM `moneypath` WHERE mtype=152 and time > '".$jtimev."' and uid='".self::$myuserinfo['id']."' ")->fetchAll();
		$moneypath152 = $moneypath152[0]['summoney']?: 0;
		
		$moneypath153 = self::DB()->query("SELECT SUM(money) summoney FROM `moneypath` WHERE mtype=153 and time > '".$jtimev."' and uid='".self::$myuserinfo['id']."' ")->fetchAll();
		$moneypath153 = $moneypath153[0]['summoney']?: 0;
		
		
		$data['moneypath152'] = $moneypath152;
		$data['moneypath153'] = $moneypath153;
		
		$data['moneypath152'] = number_format($data['moneypath152'], 4, '.', '');
		$data['moneypath153'] = number_format($data['moneypath153'], 4, '.', '');
		
		
		success(1,"SUCCESS",$data);
	}
	
	
	/**
	 * 资金明细
	 */
	public function moneypath()
	{
		$this->display();
	}
	
	
	
	//资金明细接口
	public function selmoneypathdo()
	{		
		if(empty(get('page')) || !is_numeric(get('page')) || get('page') <1){
			$page=1;
		}else{
			$page=ceil(get('page'));
		}
		$pagenum=SelPageApiDataNumber;
		$sqlwhereadd=" WHERE uid like '".$_SESSION['userinfo']['id']."'";
		$sql="SELECT id,uid,mtype,money,additionalid,time,content,isty FROM moneypath"." ".$sqlwhereadd." order by id desc limit ".(($page-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		$res = array();
		$res["data"] = $data;
		if(count($data)<1){
			success(1005,"SUCCESS",$data);
		}else{
			success(1001,"SUCCESS",$data);
		}
		
	}
	
	
	/**
	 * 充值
	 */
	public function recharge()
	{
		$this->display();
	}
	
	
	
	//充值接口
	public function rechargeform()
	{
		$minrechargemoney = self::$webconfig['minrechargemoney']['val'];
		
		if (!is_numeric($minrechargemoney)) {
            $minrechargemoney = 10;
        }
		
		$minrechargemoney = round($minrechargemoney,4);
		
		
		if ($minrechargemoney < 0) {
            $minrechargemoney = 10;
        }
		
		
		$user = self::$myuserinfo;
		
		$money = post('money');
		$phone = post('phone');
		
		if (!is_numeric($money)) {
            error(-1002 , "充值金额有误");
        }
		
		
		$money = round($money,2);
		
		
		if ($money < $minrechargemoney) {
            error(-1003 , "充值金额最小限".$minrechargemoney);
        }
		
		if (empty($phone)) {
            error(-1004 , "请填写手机号");
        }
		if (!preg_match("/^1[345789]\d{9}$/", $phone)){
            error(-1012 , "手机号格式有误");
        }
		if(empty($_FILES["img1"])){
			error(-1010 , "请上传充值凭证");
		}
		
		
		if ( !empty( $_FILES["img1"] ) ) {
			$filetype = ['image/jpg', 'image/jpeg', 'image/bmp', 'image/png'];
			if(!in_array($_FILES["img1"]["type"], $filetype)){
				error(-1011 , "充值凭证格式有误");
			}
			$tempPath = $_FILES[ 'img1' ][ 'tmp_name' ];
			$photouploadtime= new \DateTime;
			$randname=md5(rand(999,9999)."_1_".$_SESSION['userinfo']['id']);
			if ($_FILES["img1"]["type"] == "image/gif"){
				$photoname=strtotime($photouploadtime->format('Y-m-d H:i:s')).'_'.$randname.'.gif';
			}else{
				$photoname=strtotime($photouploadtime->format('Y-m-d H:i:s')).'_'.$randname.'.png';
			}
			$dirpath='upload/user/recharge';
			$uploadPath =$dirpath.'/'.$photoname;
			if (!file_exists($dirpath)){
				mkdirs($dirpath);
			}
			$upre=move_uploaded_file( $tempPath, $uploadPath );
			if($upre){
				$imgurlval1=$photoname;
			}else{
				error(-1011 , "充值凭证格式有误");
			}
		}else{
			error(-1010 , "请上传充值凭证");
		}
		
		
		$datetime = new \DateTime;
		$insert_id = self::DB()->insert("recharge", [
			"uid" => $user['id'],
			'money'=> $money,
			'phone'=> htmlspecialchars($phone),
			'img1'=> $imgurlval1,
			"state" => 1,
			"time" => $datetime->format('Y-m-d H:i:s')
		]);
		
		if($insert_id){
			success(1 , "提交成功，审核中");
		}else{
			error(-1008 , "提交中途异常");
		}
		
	}
	
	
	
	//充值记录
	public function rechargelog()
	{
		$this->display();
	}
	
	
	//充值记录接口
	public function rechargelogdo()
	{		
		if(empty(get('page')) || !is_numeric(get('page')) || get('page') <1){
			$page=1;
		}else{
			$page=ceil(get('page'));
		}
		
		
		$pagenum=SelPageApiDataNumber;
		$sqlwhereadd=" WHERE uid like '".$_SESSION['userinfo']['id']."'";
		$sql="SELECT id,uid,money,phone,address,state,time FROM recharge"." ".$sqlwhereadd." order by  id desc limit ".(($page-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		foreach ($data as $k => $v){
		    $data[$k]['money'] = floatval($data[$k]['money']);
        }
		$res = array();
		$res["data"] = $data;
		if(count($data)<1){
			success(1005,"SUCCESS",$data);
		}else{
			success(1001,"SUCCESS",$data);
		}
		
	}

	/**
	 * 提现
	 */
	public function presentation()
	{
		$this->display();
	}
	
	
	//提现接口
	public function presentationform()
	{
		$presentationfee = self::$webconfig['presentationfee']['val'];
		
		if (!is_numeric($presentationfee)) {
            $presentationfee = 1;
        }
		
		$presentationfee = round($presentationfee,2);
		
		
		if ($presentationfee < 0) {
            $presentationfee = 1;
        }
		
		
		$user = self::$myuserinfo;
		
		$money = post('money');
		
		if (!is_numeric($money)) {
            error(-1002 , "提现金额有误");
        }
		
		
		$money = round($money,2);
		
		
		if ($money < floatval(self::$webconfig['minwithdrawal']['val'])) {
            error(-1003 , "最小提现金额".self::$webconfig['minwithdrawal']['val']."元");
        }

		$userc = User::where('id', $user['id'])->find()->toArray();
		
		
		if(count($userc)>0){

			$presentationfee = $money * $presentationfee/100;
			if($userc['money'] < $money + $presentationfee){
				error(-1007 , "账户余额不足");
			}
            // if(empty($_FILES["img1"])){
            //     error(-1010 , "请上传收款二维码");
            // }
            // if ( !empty( $_FILES["img1"] ) ) {
            //     $filetype = ['image/jpg', 'image/jpeg', 'image/bmp', 'image/png'];
            //     if(!in_array($_FILES["img1"]["type"], $filetype)){
            //         error(-1011 , "收款二维码格式有误");
            //     }
            //     $tempPath = $_FILES[ 'img1' ][ 'tmp_name' ];
            //     $photouploadtime= new \DateTime;
            //     $randname=md5(rand(999,9999)."_1_".$_SESSION['userinfo']['id']);
            //     if ($_FILES["img1"]["type"] == "image/gif"){
            //         $photoname=strtotime($photouploadtime->format('Y-m-d H:i:s')).'_'.$randname.'.gif';
            //     }else{
            //         $photoname=strtotime($photouploadtime->format('Y-m-d H:i:s')).'_'.$randname.'.png';
            //     }
            //     $dirpath='upload/user/withdrawal';
            //     $uploadPath =$dirpath.'/'.$photoname;
            //     if (!file_exists($dirpath)){
            //         mkdirs($dirpath);
            //     }
            //     $upre=move_uploaded_file( $tempPath, $uploadPath );
            //     if($upre){
            //         $imgurlval1=$photoname;
            //     }else{
            //         error(-1011 , "收款二维码有误");
            //     }
            // }else{
            //     error(-1010 , "请上传收款二维码");
            // }
			
			$usercup = self::DB()->update("user",[
				"money" => $userc['money']-$money-$presentationfee
			], [
				"id[=]" => $userc['id']
			]);
			
			if($usercup){
				$datetime = new \DateTime;
				$insert_id = self::DB()->insert("withdrawal", [
					"uid" => $userc['id'],
					'money'=> $money,
					'presentationfee'=> $presentationfee,
			//		'img1'=> $imgurlval1,
					'mtype'=> 1,
					"state" => 1,
					'bankname'  =>  $userc['bankname'],
                    'banknumber'  =>  $userc['banknumber'],
                    'bankhome'  =>  $userc['bankhome'],
					"time" => $datetime->format('Y-m-d H:i:s')
				]);
				
				if($insert_id){
					
					success(1 , "提交成功，审核中");
				}else{
					error(-1008 , "提交中途异常");
				}
				
				
			}else{
				error(-1006 , "提交失败");
			}
			
			
		}else{
			error(-1006 , "提交失败");
		}
		
	}

    //提现接口
    public function coupon_tx()
    {
        $id = intval(post('id'));

        $user = self::$myuserinfo;
        $userc = User::where('id', $user['id'])->field('id,money')->find();
        $coupon = Coupon::where('id', $id)->find();

        if (empty($coupon)){
            error(-1020 , "此优惠劵不存在");
        }
        if ($coupon->status <> 1){
            error(-1022 , "此优惠券已被使用");
        }
        if ($userc->id <> $coupon->uid){
            error(-1021 , "数据错误");
        }

        if(!empty($userc)){
            if(empty($_FILES["img1"])){
                error(-1010 , "请上传收款二维码");
            }
            if ( !empty( $_FILES["img1"] ) ) {
                $filetype = ['image/jpg', 'image/jpeg', 'image/bmp', 'image/png'];
                if(!in_array($_FILES["img1"]["type"], $filetype)){
                    error(-1011 , "收款二维码格式有误");
                }
                $tempPath = $_FILES[ 'img1' ][ 'tmp_name' ];
                $photouploadtime= new \DateTime;
                $randname=md5(rand(999,9999)."_1_".$_SESSION['userinfo']['id']);
                if ($_FILES["img1"]["type"] == "image/gif"){
                    $photoname=strtotime($photouploadtime->format('Y-m-d H:i:s')).'_'.$randname.'.gif';
                }else{
                    $photoname=strtotime($photouploadtime->format('Y-m-d H:i:s')).'_'.$randname.'.png';
                }
                $dirpath='upload/user/withdrawal';
                $uploadPath =$dirpath.'/'.$photoname;
                if (!file_exists($dirpath)){
                    mkdirs($dirpath);
                }
                $upre=move_uploaded_file( $tempPath, $uploadPath );
                if($upre){
                    $imgurlval1=$photoname;
                }else{
                    error(-1011 , "收款二维码有误");
                }
            }else{
                error(-1010 , "请上传收款二维码");
            }

            $datetime = new \DateTime;
            $insert_id = self::DB()->insert("withdrawal", [
                "uid" => $userc['id'],
                'money'=> $coupon['money'],
                'presentationfee'=> 0,
                'img1'=> $imgurlval1,
                'mtype'=> 2,
                "state" => 1,
                'coupon_id' =>  $coupon['id'],
                "time" => $datetime->format('Y-m-d H:i:s')
            ]);
            if($insert_id){
                Coupon::update(['status' => 2], ['id'=>$coupon->id]);
                success(1 , "提交成功，审核中");
            }else{
                error(-1008 , "提交中途异常");
            }
        }else{
            error(-1006 , "提交失败");
        }
    }
	
	
	
	
	//提现记录
	public function withdrawal()
	{
		$this->display();
	}
	
	
	//提现记录接口
	public function withdrawaldo()
	{		
		if(empty(get('page')) || !is_numeric(get('page')) || get('page') <1){
			$page=1;
		}else{
			$page=ceil(get('page'));
		}
		
		
		$pagenum=SelPageApiDataNumber;
		$sqlwhereadd=" WHERE uid like '".$_SESSION['userinfo']['id']."'";
		$sql="SELECT id,uid,money,state,time FROM withdrawal"." ".$sqlwhereadd." order by  id desc limit ".(($page-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		foreach ($data as $k => $v){
		    $data[$k]['money'] = floatval($data[$k]['money']);
        }
		
		
		$res = array();
		$res["data"] = $data;
		if(count($data)<1){
			success(1005,"SUCCESS",$data);
		}else{
			success(1001,"SUCCESS",$data);
		}
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	/**
	 * 客服
	 */
	public function callus()
	{
		$this->display();
	}
	
	/**
	 * 邀请
	 */
	public function invitation()
	{
	    $url = 'http://jinfenxitong.com/appuser/reg?code='.self::$myuserinfo['id'];
	    $qrcode = file_get_contents("http://qr.topscan.com/api.php?text=".$url);
	    $fileName = 'qrcode/qrcode_'.self::$myuserinfo['id'].'.png';
        file_put_contents($fileName, $qrcode);
	    $this->assign('qrcode', '/'.$fileName);
		$this->display();
	}
	
	public function account()
	{
		$this->display();
	}
	
	public function upassword()
	{
	    $username = preg_replace('/(\d{3})\d{4}(\d{4})/', '$1****$2', self::$myuserinfo['username']);
	    $this->assign('username', $username);
		$this->display();
	}
	
	
	public function upasswordform()
	{
		$res = array();
		if(empty(post('password'))){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1003";//请输入原密码！
			echo json_encode($res,true);
			exit();
		}
		if(empty(post('passwordn'))){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1004";//请输入新密码！
			echo json_encode($res,true);
			exit();
		}
		if(empty(post('passwordn2'))){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1005";//请确认新密码！
			echo json_encode($res,true);
			exit();
		}
		if(post('passwordn')!=post('passwordn2')){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1006";//两次输入的密码不同！
			echo json_encode($res,true);
			exit();
		}
		if(mb_strlen(post('passwordn2'),'utf8')<6){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1007";//密码长度不能小于6位！
			echo json_encode($res,true);
			exit();
		}
		
		
		$mydata = self::DB()->select("user",[
			'id','username','password'
		], [
			"id[=]" => $_SESSION['userinfo']['id']
		]);
		if(md5(post('password'))!=$mydata[0]["password"]){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1008";//原密码有误！
			echo json_encode($res,true);
			exit();
		}
		if(md5(post('passwordn2'))==$mydata[0]["password"]){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1009";//密码相同，无需修改！
			echo json_encode($res,true);
			exit();
		}
		$resu = self::DB()->update("user", [
			'password'=> md5(post('passwordn2'))
		], [
			"id[=]" => $_SESSION['userinfo']['id']
		]);
		
		if($resu){
			if($mydata[0]['password']!=md5(post('passwordn2'))){
				$_SESSION['userinfo']['password']=md5(post('passwordn2'));
			}
			$res["data"]["state"] = "true";
			$res["data"]["msg"] = "1001";//修改成功！
			echo json_encode($res,true);
			exit();
		}else{
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1002";//修改失败！
			echo json_encode($res,true);
			exit();
		}
	}
	
	
	
	
	public function upasswordtwo()
	{
        $username = preg_replace('/(\d{3})\d{4}(\d{4})/', '$1****$2', self::$myuserinfo['username']);
        $this->assign('username', $username);
		$this->display();
	}
	
	
	public function upasswordtwoform()
	{
		$res = array();
		
		if(!empty($_SESSION["ucode"])&&!empty($_SESSION["ucode"]["codeusername"])&&$_SESSION["ucode"]["codeusername"]==self::$myuserinfo['username']&&!empty($_SESSION["ucode"]["code"])&&$_SESSION["ucode"]["code"]==post('codeusername')&&!empty($_SESSION["ucode"]["time"])){
			if((time()-$_SESSION["ucode"]["time"]>60*5)){
				$res["data"]["state"] = "false";
				$res["data"]["msg"] = "1011";//验证码已超时，请重新发送！
				echo json_encode($res,true);
				exit();
			}else{
				if($_SESSION["ucode"]["code"]==post('codeusername')){
					
				}else{
					$res["data"]["state"] = "false";
					$res["data"]["msg"] = "1012";//验证码错误！
					echo json_encode($res,true);
					exit();
				}
			}
		}else{
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1013";//验证码错误！
			echo json_encode($res,true);
			exit();
		}
		
		
		if(empty(post('passwordtwon'))){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1004";//请输入新密码！
			echo json_encode($res,true);
			exit();
		}
		if(empty(post('passwordtwon2'))){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1005";//请确认新密码！
			echo json_encode($res,true);
			exit();
		}
		if(post('passwordtwon')!=post('passwordtwon2')){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1006";//两次输入的密码不同！
			echo json_encode($res,true);
			exit();
		}
		if(mb_strlen(post('passwordtwon'),'utf8')<6){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1007";//密码长度不能小于6位！
			echo json_encode($res,true);
			exit();
		}
		
		
		$mydata = self::DB()->select("user",[
			'id','username','passwordtwo'
		], [
			"id[=]" => $_SESSION['userinfo']['id']
		]);
		
		if(md5(post('passwordtwon2'))==$mydata[0]["passwordtwo"]){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1009";//密码相同，无需修改！
			echo json_encode($res,true);
			exit();
		}
		$resu = self::DB()->update("user", [
			'passwordtwo'=> md5(post('passwordtwon2'))
		], [
			"id[=]" => $_SESSION['userinfo']['id']
		]);
		
		if($resu){
			$res["data"]["state"] = "true";
			$res["data"]["msg"] = "1001";//修改成功！
			echo json_encode($res,true);
			exit();
		}else{
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1002";//修改失败！
			echo json_encode($res,true);
			exit();
		}
	}
	
	
	
	
	
	
	
	
	public function upuserinfo()
	{
        $language = self::DB()->select("user" ,[
            "language"
        ],["AND" =>[
            "id[=]" => $_SESSION['userinfo']['id']
        ]])[0]['language'];
        $language = ($language==1) ? 'English' : '中文';
        $this->assign('language', $language);
		$this->display();
	}
	
	
	public function upuserinfoform()
	{
		$res = array();
		
		
		if(empty(post('name'))){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1004";//请输入姓名！
			echo json_encode($res,true);
			exit();
		}
		if(empty(post('coinaddress'))){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1005";//请输入收币地址！
			echo json_encode($res,true);
			exit();
		}
		
		
		
		$mydata = self::DB()->select("user",[
			'id','name','coinaddress'
		], [
			"id[=]" => $_SESSION['userinfo']['id']
		]);
		
		if(post('name')==$mydata[0]["name"] && post('coinaddress')==$mydata[0]["coinaddress"]){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1009";//数据相同，无需修改！
			echo json_encode($res,true);
			exit();
		}
		$resu = self::DB()->update("user", [
			'name'=> htmlspecialchars(post('name')),
			'coinaddress'=> htmlspecialchars(post('coinaddress'))
		], [
			"id[=]" => $_SESSION['userinfo']['id']
		]);
		
		if($resu){
			$res["data"]["state"] = "true";
			$res["data"]["msg"] = "1001";//修改成功！
			echo json_encode($res,true);
			exit();
		}else{
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1002";//修改失败！
			echo json_encode($res,true);
			exit();
		}
	}
	
	
	
	
	/*
	 * 身份认证
	 */
	public function authentication()
	{
		if(self::$myuserinfo['authentication']!=0 && self::$myuserinfo['authentication']!=-1){
			HeaderLocationCA("appuser","account");
		}
		
		$this->display();
	}
	
	//身份认证接口
	public function authenticationform()
	{
		$res = array();
		if(empty($_POST["name"])){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1003";//请输入姓名！
			echo json_encode($res,true);
			exit();
		}
		if(empty($_POST["idcard"])){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1004";//请输入身份证号！
			echo json_encode($res,true);
			exit();
		}
		if(empty($_FILES["img2"])){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1007";//请上传身份证背面照片！
			echo json_encode($res,true);
			exit();
		}
		if(empty($_FILES["img1"])){
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1008";//请上传身份证正面照片！
			echo json_encode($res,true);
			exit();
		}
		
		
				
		$mydata = self::DB()->select("user",[
			'id','authentication','authenticationinfo'
		], [
			"id[=]" => $_SESSION['userinfo']['id']
		]);
		
		if($mydata[0]["authentication"]!=0 && $mydata[0]["authentication"]!=-1){
			exit();
		}
		
		if ( !empty( $_FILES["img1"] ) ) {
			$filetype = ['image/jpg', 'image/jpeg', 'image/bmp', 'image/png'];
			if(!in_array($_FILES["img1"]["type"], $filetype)){
				exit();
			}
			$tempPath = $_FILES[ 'img1' ][ 'tmp_name' ];
			$photouploadtime= new \DateTime;
			$randname=md5(rand(999,9999)."_1_".$_SESSION['userinfo']['id']);
			if ($_FILES["img1"]["type"] == "image/gif"){
				$photoname=strtotime($photouploadtime->format('Y-m-d H:i:s')).'_'.$randname.'.gif';
			}else{
				$photoname=strtotime($photouploadtime->format('Y-m-d H:i:s')).'_'.$randname.'.png';
			}
			$dirpath='upload/user/idcard';
			$uploadPath =$dirpath.'/'.$photoname;
			if (!file_exists($dirpath)){
				mkdirs($dirpath);
			}
			$upre=move_uploaded_file( $tempPath, $uploadPath );
			if($upre){
				$imgurlval1=$photoname;
			}
		}
		if ( !empty( $_FILES["img2"] ) ) {
			$filetype = ['image/jpg', 'image/jpeg', 'image/bmp', 'image/png'];
			if(!in_array($_FILES["img2"]["type"], $filetype)){
				exit();
			}
			$tempPath = $_FILES[ 'img2' ][ 'tmp_name' ];
			$photouploadtime= new \DateTime;
			$randname=md5(rand(999,9999)."_2_".$_SESSION['userinfo']['id']);
			if ($_FILES["img2"]["type"] == "image/gif"){
				$photoname=strtotime($photouploadtime->format('Y-m-d H:i:s')).'_'.$randname.'.gif';
			}else{
				$photoname=strtotime($photouploadtime->format('Y-m-d H:i:s')).'_'.$randname.'.png';
			}
			$dirpath='upload/user/idcard';
			$uploadPath =$dirpath.'/'.$photoname;
			if (!file_exists($dirpath)){
				mkdirs($dirpath);
			}
			$upre=move_uploaded_file( $tempPath, $uploadPath );
			if($upre){
				$imgurlval2=$photoname;
			}
		}
		
		
		
		
		$authenticationinfo = array();
		
		$authenticationinfo["name"] = htmlspecialchars(post("name"));
		$authenticationinfo["idcard"] = htmlspecialchars(post("idcard"));
		$authenticationinfo["img1"] = $imgurlval1;
		$authenticationinfo["img2"] = $imgurlval2;
		
		$authenticationinfo = json_encode($authenticationinfo , true);
		
		$resu = self::DB()->update("user", [
			'authentication'=> "1",
			'authenticationinfo'=> $authenticationinfo
		], [
			"id[=]" => $_SESSION['userinfo']['id']
		]);
		
		if($resu){
			$res["data"]["state"] = "true";
			$res["data"]["msg"] = "1001";//提交成功！
			echo json_encode($res,true);
			exit();
		}else{
			$res["data"]["state"] = "false";
			$res["data"]["msg"] = "1002";//提交失败！
			echo json_encode($res,true);
			exit();
		}
	}
	
	
	
	
	/**
	 * 额度兑换
	 */
	public function moneyexchange()
	{
		$this->display();
	}
	
	
	//额度兑换接口
	public function moneyexchangedo()
	{
		if(empty(get('ectype')) || (get('ectype')!=1 && get('ectype')!=2)){
			error(-1001 , "参数异常");
		}
		
		$user = self::$myuserinfo;
		
		$emoney = post('emoney');
		
		if (!is_numeric($emoney)) {
            error(-1002 , "兑换金额有误");
        }
		
		
		$emoney = round($emoney,4);
		
		
		if ($emoney < 0.0001) {
            error(-1003 , "金额最小限0.0001");
        }
		
		
		
		
		$userc = self::DB()->select("user" ,[
			"id","money","money2"
		],["AND" =>[
			"id[=]" => $user['id']
		]]);
		
		
		if(count($userc)>0){
			
			if(get('ectype')==1){
				
				if($userc[0]['money2']<$emoney){
					error(-10007 , "账户额度不足");
				}
				
				$usercup = self::DB()->update("user",[
					"money" => $userc[0]['money']+$emoney,
					"money2" => $userc[0]['money2']-$emoney
				], [
					"id[=]" => $userc[0]['id']
				]);
				
				if($usercup){
					$mpcontent = "类型：额度兑换余额";
					$insert_id = OrderModel::insertMoneypath($userc[0]['id'],$emoney,"132",$mpcontent);
					
					if($insert_id){
						success(1 , "兑换成功");
					}else{
						error(-1008 , "兑换中途异常");
					}
					
					
				}else{
					error(-1006 , "兑换失败");
				}
				
			}elseif(get('ectype')==2){
				
				if($userc[0]['money']<$emoney){
					error(-1007 , "账户余额不足");
				}
				
				$usercup = self::DB()->update("user",[
					"money" => $userc[0]['money']-$emoney,
					"money2" => $userc[0]['money2']+$emoney
				], [
					"id[=]" => $userc[0]['id']
				]);
				
				if($usercup){
					$mpcontent = "类型：余额兑换额度";
					$insert_id = OrderModel::insertMoneypath($userc[0]['id'],$emoney,"131",$mpcontent);
					
					if($insert_id){
						success(1 , "兑换成功");
					}else{
						error(-1008 , "兑换中途异常");
					}
					
					
				}else{
					error(-1006 , "兑换失败");
				}
				
			}else{
				error(-1006 , "兑换失败");
			}
			
		}else{
			error(-1006 , "兑换失败");
		}
		
	}
	
	
	
	//判断当前用户的点位
	public function auto_ratio($uid)
	{
        //直推用户
		$list = self::DB()->select("regpath" ,"uidsubordinate",["AND" =>[
			"uiduidsubordinatesuperior[=]" => $uid
		]]);
		if(count($list)==0){
			$ratio = 0.6;
			return $ratio;
		}
		$arr = '';		
		$narr = [];
		foreach($list as $k=>$v){
			$arr.= $v.',';
			$zc1 = self::DB()->query("SELECT sum(money+money2+money3) as zzc from user where id in (SELECT uidsubordinate from regpath where uid = ".$v.")")->fetchAll();
			$zc2 = self::DB()->query("SELECT sum(surplusmoney) as zzc from tradeorder where state = 1 and uid = ".$v)->fetchAll();
			$narr[$k] = $zc1[0]['zzc'] + $zc2[0]['zzc'];
		}
		foreach($narr as $k=>$v){
			if($v >= 1500){
				$zcp0 += 1;
			}
			if($v >= 9000){
				$zcp1 += 1;
			}
			if($v >= 10000){
				$zcp2 += 1;
			}
			if($v >= 15000){
				$zcp3 += 1;
			}
			if($v >= 20000){
				$zcp4 += 1;
			}
		}
		$arr = '('.rtrim($arr,',').')';
		//有效用户（充值超过100的个数）
		$data = self::DB()->query("SELECT count(1) FROM moneypath where (mtype = 111 or mtype = 113 ) and money >= 100  and  uid in ".$arr." group by uid ")->fetchAll();
		$num = count($data);
		if($num == 0){
			$ratio = 0.6;
			return $ratio;	
		} else {
			//下级用户
			$listp = self::DB()->select("regpath" ,"uidsubordinate",["AND" =>[
			"uid[=]" => $uid
			]]);
			$arrp = '';		
			foreach($listp as $k=>$v){
				$arrp.= $v.',';
			}
			$arrp = '('.rtrim($arrp,',').')';
			$money1 = self::DB()->query("SELECT sum(money+money2+money3) as zzc FROM user where id in ".$arrp)->fetchAll();
			$money2 = self::DB()->query("SELECT sum(surplusmoney) as zzc from tradeorder where state = 1 and uid in ".$arrp)->fetchAll();
			//总资产
			$zzc = $money1[0]['zzc'] + $money2[0]['zzc'];
			if($num >=20 && $zzc >=60000){
				if($zcp4 >=2){
					$ratio = 1.6;
					return $ratio;
				}
				if($zcp3 >=2){
					$ratio = 1.4;
					return $ratio;
				}
				if($zcp2 >=2){
					$ratio = 1.3;
					return $ratio;
				}
				if($zcp1 >=2){
					$ratio = 1.2;
					return $ratio;
				}
				if($zcp0 >=2){
					$ratio = 1.1;
					return $ratio;
				} else {
					$ratio = 1;
					return $ratio;
				}
			}
			if($num >=17 && $zzc >=50000){
				if($zcp3 >=2){
					$ratio = 1.4;
					return $ratio;
				}
				if($zcp2 >=2){
					$ratio = 1.3;
					return $ratio;
				}
				if($zcp1 >=2){
					$ratio = 1.2;
					return $ratio;
				}
				if($zcp0 >=2){
					$ratio = 1.1;
					return $ratio;
				} else {
					$ratio = 1;
					return $ratio;
				}
			}
			if($num >=15 && $zzc >=40000){
				if($zcp2 >=2){
					$ratio = 1.3;
					return $ratio;
				}
				if($zcp1 >=2){
					$ratio = 1.2;
					return $ratio;
				}
				if($zcp0 >=2){
					$ratio = 1.1;
					return $ratio;
				} else {
					$ratio = 1;
					return $ratio;
				}
			}
			if($num >=13 && $zzc >=30000){
				if($zcp1 >=2){
					$ratio = 1.2;
					return $ratio;
				}
				if($zcp0 >=2){
					$ratio = 1.1;
					return $ratio;
				} else {
					$ratio = 1;
					return $ratio;
				}
			}
			if($num >=11 && $zzc >=20000){
				if($zcp0 >=2){
					$ratio = 1.1;
					return $ratio;
				} else {
					$ratio = 1;
					return $ratio;
				}
			}
			if($num >=8 && $zzc >=10000){
				$ratio = 1;
				return $ratio;
			}
			if($num >=7 && $zzc >=5000){
				$ratio = 0.9;
				return $ratio;
			}
			if($num >=5 && $zzc >=1000){
				$ratio = 0.8;
				return $ratio;
			}
			if($num >=2 && $zzc >=200){
				$ratio = 0.7;
				return $ratio;
			} else {
				$ratio = 0.6;
				return $ratio;
			}
		}		
	}
	
	//我的团队
	public function myteam()
	{
		$countteaml1 = self::DB()->query("SELECT COUNT(*) countteaml1 FROM `regpath` WHERE uid='".self::$myuserinfo['id']."' and lown=1 ")->fetchAll();
		$countteaml1 = $countteaml1[0]['countteaml1']?: 0;
		$this->assign('countteaml1',$countteaml1);
		
        $countteaml2 = self::DB()->query("SELECT COUNT(*) countteaml2 FROM `regpath` WHERE uid='".self::$myuserinfo['id']."' and lown=2 ")->fetchAll();
        $countteaml2 = $countteaml2[0]['countteaml2']?: 0;
        $this->assign('countteaml2',$countteaml2);
        
        $moneya153 = self::DB()->query("SELECT SUM(money) summoney FROM moneypath where mtype = 153 and  uid = '".$_SESSION['userinfo']['id']."'")->fetchAll();
        $teamfanli = $moneya153[0]['summoney']?: 0;
        $this->assign('teamfanli', $teamfanli);
        
        $ids = Regpath::where([['uid', '=', $_SESSION['userinfo']['id']], ['lown', 'in', [1,2]]])->column('uidsubordinate');
        $tradeorders = Itemlog::whereIn('uid', $ids)->where('status', 0)->order('id','desc')->select()->toArray();
        
        foreach($tradeorders as $k=>$v){
            
            $tradeorders[$k]['sy'] = round(Moneypath::where(['mtype' => 152, 'additionalid' => $v['id'], 'uid' => $v['uid']])->sum('money'), 2);
            
			$tradeorders[$k]['time1'] = date('Y-m-d',$tradeorders[$k]['time']);
			$tradeorders[$k]['time2'] = date('Y-m-d',$tradeorders[$k]['time']+3600*24);
			
			$tradeorders[$k]['timev1'] = date('Y-m-d H:i:s',$tradeorders[$k]['time']);
			$tradeorders[$k]['timev2'] = date('Y-m-d H:i:s',$tradeorders[$k]['time']+3600*24);
			
			$tradeorders[$k]['stime1'] = date('Y-m-d',$tradeorders[$k]['stime']);
            $tradeorders[$k]['time'] = date('Y-m-d',$v['time']);
            $tradeorders[$k]['stime'] = date('Y-m-d',$v['stime']);

			$item = self::DB()->select("itemlist","*",['id[=]'=>$v['item_id']]);
            $item = $item[0];
            
            $tradeorders[$k]['item_name'] = $item['item_name'];
			$tradeorders[$k]['type'] = $item['type'];
            
            $tradeorders[$k]['timesv'] = round( (time()-$v['time']) / ($v['stime']-$v['time']),2);
			
			if ($item['type'] == 0){
    			$tradeorders[$k]['status'] = '未返利';
    			if($tradeorders[$k]['timesv'] >= 0 && $tradeorders[$k]['timesv']< 0.25){
                    $tradeorders[$k]['timesv'] = 0;
                    $tradeorders[$k]['bg1'] = '#514e36';
                    $tradeorders[$k]['bg2'] = '#514e36';
                    $tradeorders[$k]['bg3'] = '#514e36';
    			}else if ($tradeorders[$k]['timesv'] >= 0.25 && $tradeorders[$k]['timesv']< 0.5){
                    $tradeorders[$k]['timesv'] = 25;
                    $tradeorders[$k]['bg1'] = '#d7a973';
                    $tradeorders[$k]['bg2'] = '#514e36';
                    $tradeorders[$k]['bg3'] = '#514e36';
                }else if ($tradeorders[$k]['timesv'] >= 0.5 && $tradeorders[$k]['timesv']< 0.75){
                    $tradeorders[$k]['timesv'] = 50;
                    $tradeorders[$k]['bg1'] = '#d7a973';
                    $tradeorders[$k]['bg2'] = '#d7a973';
                    $tradeorders[$k]['bg3'] = '#514e36';
                }else if ($tradeorders[$k]['timesv'] >= 0.75 && $tradeorders[$k]['timesv']< 1){
                    $tradeorders[$k]['timesv'] = 75;
                    $tradeorders[$k]['bg1'] = '#d7a973';
                    $tradeorders[$k]['bg2'] = '#d7a973';
                    $tradeorders[$k]['bg3'] = '#d7a973';
                }else if ($tradeorders[$k]['timesv'] >= 1){
                    $tradeorders[$k]['timesv'] = 100;
                    $tradeorders[$k]['bg1'] = '#d7a973';
                    $tradeorders[$k]['bg2'] = '#d7a973';
                    $tradeorders[$k]['bg3'] = '#d7a973';
                }
            }else{
                $tradeorders[$k]['timesv'] = 0;
                $tradeorders[$k]['bg1'] = '#514e36';
                $tradeorders[$k]['bg2'] = '#514e36';
                $tradeorders[$k]['bg3'] = '#514e36';
            }
			
			$itemlogp = Itemlogp::where('item_no', $tradeorders[$k]['id'])->field('money,num')->find();
			
			$tradeorders[$k]['flbl'] = $this->get_flbl($tradeorders[$k]['uid']);
			$tradeorders[$k]['yfl'] = round($tradeorders[$k]['sy'] * $tradeorders[$k]['flbl'] / 100, 2);
        }
        $this->assign('tradeorders', $tradeorders);
		$this->display();
	}

	private function get_flbl($uid)
    {
	    $lown = Regpath::where(['uid' => $_SESSION['userinfo']['id'], 'uidsubordinate' => $uid])->value('lown');
	    if ($lown == 1){
	        return self::$webconfig['yjjl']['val'];
        }else if ($lown == 2){
            return self::$webconfig['ejjl']['val'];
        }else{
	        return 0;
        }
    }
	
	
	//我的团队接口
	public function myteamdo()
	{		
		if(empty(get('page')) || !is_numeric(get('page')) || get('page') <1){
			$page=1;
		}else{
			$page=ceil(get('page'));
		}
		$pagenum=SelPageApiDataNumber;
		$sqlwhereadd=" WHERE superioruid = '".$_SESSION['userinfo']['id']."'";
		$sql="SELECT id,username,superioruid,proportion FROM user"." ".$sqlwhereadd." order by  id desc limit ".(($page-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		foreach($data as $k=>$v){
			$data[$k]['proportion'] = $this->auto_ratio($v['id']);
		}
		$res = array();
		$res["data"] = $data;
		if(count($data)<1){
			success(1005,"SUCCESS",$data);
		}else{
			success(1001,"SUCCESS",$data);
		}
		
	}
	
	
	
	public function setlproportion()
	{
		
		
		$userl = self::DB()->select("user" ,[
			"id","username","proportion"
		],["AND" =>[
			"id[=]" => get('uid'),
			"superioruid[=]" => $_SESSION['userinfo']['id']
		]]);
		
		if(count($userl)<1){
			ErrorPage("Error","页面异常.","该页面出现未知错误！",$code="500");
		}
		
		$this->assign('userl',$userl[0]);
		
		
		$userm = self::DB()->select("user" ,[
			"id","proportion"
		],["AND" =>[
			"id[=]" => $_SESSION['userinfo']['id']
		]]);
		
		$this->assign('userm',$userm[0]);
		
		
		
		$countteamall = self::DB()->query("SELECT COUNT(*) countteamall FROM `regpath` WHERE uid='".$userl[0]['id']."' ")->fetchAll();
		$countteamall = $countteamall[0]['countteamall']?: 0;
		
		$this->assign('countteamall',$countteamall);
		
		$countteaml1 = self::DB()->query("SELECT COUNT(*) countteaml1 FROM `regpath` WHERE uid='".$userl[0]['id']."' and lown=1 ")->fetchAll();
		$countteaml1 = $countteaml1[0]['countteaml1']?: 0;
		
		$this->assign('countteaml1',$countteaml1);
		
		
		
		$jtimev = date("Y-m-d 00:00:00");
		$ztimev = date("Y-m-d 00:00:00",strtotime("-1 day"));
		$zctimev = date("Y-m-d H:i:s",strtotime("-1 day"));
		
		
		$alltramoney1 = self::DB()->query("SELECT SUM(money) allinvestment FROM `tradeorder` WHERE uid in (SELECT id FROM `regpath` WHERE uid='".$userl[0]['id']."') and buytime > '".$jtimev."' ")->fetchAll();
		$alltramoneyv1 = $alltramoney1[0]['allinvestment']?: 0;
		
		$alltramoney2 = self::DB()->query("SELECT SUM(money) allinvestment FROM `tradeorder` WHERE uid='".$userl[0]['id']."' and buytime > '".$jtimev."' ")->fetchAll();
		$alltramoneyv2 = $alltramoney2[0]['allinvestment']?: 0;
		
		$this->assign('alltramoneyv',number_format($alltramoneyv1+$alltramoneyv2, 4, '.', ''));
		
		
		$this->display();
	}
	
	public function setlproportiondo()
	{
		if(!is_numeric(get('uid'))){
			error(-1001 , "参数异常");
		}
		
		if(!is_numeric(post('proportion'))){
			error(-1002 , "比例值设置有误");
		}
		
		$proportion = round(post('proportion'),4);
		if(!is_numeric($proportion)){  
			error(-1002 , "比例值设置有误");
		}
		
		
		
		$userl = self::DB()->select("user" ,[
			"id","username","proportion"
		],["AND" =>[
			"id[=]" => get('uid'),
			"superioruid[=]" => $_SESSION['userinfo']['id']
		]]);
		
		if(count($userl)<1){
			error(-1001 , "参数异常");
		}
		
		
		$userm = self::DB()->select("user" ,[
			"id","proportion"
		],["AND" =>[
			"id[=]" => $_SESSION['userinfo']['id']
		]]);
		
		
		if($proportion==$userl[0]['proportion']){
			success(1 , "设置成功");
		}
		
		if($proportion<$userl[0]['proportion']){
			error(-1003 , "比例值不能小于当前设置值");
		}
		if($proportion>$userm[0]['proportion']){
			error(-1004 , "比例值不能大于团队总比例值");
		}
		
		if($proportion<0 || $proportion>100){  
			error(-1002 , "比例值设置有误");
		}
		
		
		
		
		$res = self::DB()->update("user",[
			"proportion" => $proportion
		],["AND" =>[
			"id[=]" => get('uid'),
			"superioruid[=]" => $_SESSION['userinfo']['id']
		]]);
		
		if($res){
			success(1 , "设置成功");
		}else{
			error(-1007 , "设置失败");
		}
	}
	//推荐人返利
	public function cashback()
    {
        $this->display();
    }
    //返利说明
    public function cashbackinfo()
    {
        $this->display();
    }
    public function language()
    {
        $language = self::DB()->select("user" ,[
            "language"
        ],["AND" =>[
            "id[=]" => $_SESSION['userinfo']['id']
        ]])[0]['language'];
        $this->assign('language', $language);
        $this->display();
    }
    public function languagedo()
    {
        $language = intval(post('lang'));
        if (!in_array($language,[1,2])){
            error(1001 , "");
        }
        self::DB()->update("user",[
            "language" => $language
        ], [
            "id[=]" => $_SESSION['userinfo']['id']
        ]);
        success(1000 , "");
    }

    public function coupon(){
	    $data = Coupon::where([['status', 'in', [1,2]], ['uid', '=', self::$myuserinfo['id']]])->select()->toArray();
	    foreach ($data as $k => $v){
	        $list = Itemlist::find($v['item_id']);
	        $data[$k]['name'] = $list['item_name'];
            $data[$k]['money'] = number_format($data[$k]['money'],2,'.','');
            $data[$k]['create_time'] = date('Y-m-d', strtotime($v['create_time']));
            $data[$k]['bg'] = ($v['status'] == 1) ? 3 : 1;
        }
        $this->assign('data', $data);
        $this->display();
    }

    public function coupon_detail(){
	    $id = intval(get('id'));
	    $data = Coupon::where('id', $id)->find();
	    $this->assign('data', $data);
	    $this->assign('myuserinfo', self::$myuserinfo);
        $this->display();
    }
    
    public function upbankinfo(){
        $this->display();
    }
    
    public function upbankinfodo(){
        $bankname = htmlspecialchars(trim(post('bankname')));
        $banknumber = htmlspecialchars(trim(post('banknumber')));
        $bankhome = htmlspecialchars(trim(post('bankhome')));
        $user = self::$myuserinfo;
        if (empty($bankname)) error(1003 , "");
        if (empty($banknumber)) error(1004 , "");
        if (empty($banknumber)) error(1005 , "");
        if ($bankname == $user['bankname'] && $banknumber == $user['banknumber'] && $bankhome == $user['bankhome'] && $user['authbankinfo'] == 1){
            error(1009 , "");
        }
        $update = User::update([
            'bankname'  =>  $bankname,
            'banknumber'  =>  $banknumber,
            'bankhome'  =>  $bankhome,
            'authbankinfo'  =>  1,
        ],[
            'id'    =>  $user['id']
        ]);
        if ($update->authbankinfo){
            success(1001 , "");
        }else{
            error(1002 , "");
        }
    }
}
?>