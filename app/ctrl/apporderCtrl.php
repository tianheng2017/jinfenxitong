<?php

namespace app\ctrl;

use app\model\user\UserModel;

use app\model\tram\OrderModel;

class apporderCtrl extends commonCtrl
{
	public static $webconfig;
	public static $myuserinfo;
	
	public function __construct()
	{
        $language = intval($_SESSION['language']);
        if ($language && $language == 2){
            $this->INDEX_OR_ADMIN = "app/views/app_cn_v1";
        }else{
            $this->INDEX_OR_ADMIN = "app/views/app_en_v1";
        }
        $this->assign('language', $language?:1);
		
		$this->assign('WsCtrlClass',self::$WsCtrlClass);
		
		self::$webconfig=self::webconfig();
		$this->assign('webconfig',self::$webconfig);
		//print_r(self::$webconfig);exit;
		
		$ActionUnloginArr = array("","");	//免登录Action数组
		
		if(in_array(strtolower(self::$WsAction), $ActionUnloginArr)){
			//免登录
			
		}else{
			//未登录跳登录页
			if(!UserModel::haslogin()){
				HeaderLocationCA("appuser","login");
			}
		}
		
		
		if(UserModel::haslogin()){
			$myuserinfo = self::DB()->query("SELECT id,username,name,money,money2,money3,coinaddress,authentication FROM `user` WHERE id='".$_SESSION['userinfo']['id']."' ")->fetchAll();
			self::$myuserinfo=$myuserinfo[0];
			$this->assign('myuserinfo',$myuserinfo[0]);
		}
	}
	
	
	/**
     * 保存订单
     * @access public
     * @return json
     */
    public function saveOrderDo()
    {
		$user = self::$myuserinfo;
        
		
		$mintramoney = self::$webconfig['mintramoney']['val'];
		
		if (!is_numeric($mintramoney)) {
            $mintramoney = 10;
        }
		
		$mintramoney = round($mintramoney,4);
		
		if ($mintramoney<0 || $mintramoney==0) {
            $mintramoney = 10;
        }
		
		$userc = self::DB()->select("user" ,[
			"id","money","authentication"
		],["AND" =>[
			"id[=]" => $user['id']
		]]);
		
		$money = post("money");
		if (!is_numeric($money)) {
            error(-1011 , "接单金额填写有误");
        }
		
		$money = round($money,4);
		
		if($money<0 || $money==0){
			error(-1011 , "接单金额填写有误");
		}
		
		if(count($userc)>0){
			
			//id	uid	money 接单金额	surplusmoney 剩余返还金额	hand 分配单数
			//surplushand 剩余返还单数数量	buytime 下单时间	state 订单状态，1投资进行中，2交易结束
			
			
			
			if($money<$mintramoney){
				error(-1007 , "接单金额最低限 " . number_format($mintramoney, 4, '.', '') . " ".PFCOINNAME);
			}
			
			if($userc[0]['money']<$money){
				error(-1012 , "账户USDT余额不足");
			}
			
			if($userc[0]['authentication']!=2){
				error(-1010 , "接单前请先进行身份认证");
			}
			
			
			$tradeordering = self::DB()->select("tradeorder" ,[
				"id"
			],["AND" =>[
				"uid[=]" => $user['id'],
				"state[=]" => 1
			]]);
			if(count($tradeordering)>0){
				error(-1021 , "当前已存在接单中订单，请完成后再接单");
			}
			
			
			
			$usercup = self::DB()->update("user",[
				"money" => $userc[0]['money']-$money
			], [
				"id[=]" => $userc[0]['id']
			]);
			
			$hand = mt_rand(5,20);
			
			if($usercup){
				$datetime = new \DateTime;
				
				$insert_id = self::DB()->insert("tradeorder", [
					"uid" => $userc[0]['id'],
					"money" => $money,
					'surplusmoney'=> $money,
					"hand" => $hand,
					"surplushand" => $hand,
					"buytime" => $datetime->format('Y-m-d H:i:s'),
					"state" => 1
				]);
				
				if($insert_id){
					$mpcontent = "类型：接单交易 | 订单ID：".$insert_id;
					OrderModel::insertMoneypath($userc[0]['id'],-$money,"151",$mpcontent,$insert_id,$datetime->format('Y-m-d H:i:s'));
					
					success(1 , "接单成功");
				}else{
					error(-1008 , "接单中途异常");
				}
				
				
			}else{
				error(-1006 , "接单失败");
			}
			
			
		}else{
			error(-1006 , "接单失败");
		}
			
		
		
    }
}
?>