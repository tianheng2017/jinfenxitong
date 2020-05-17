<?php

namespace app\ctrl;

use app\model\admin\AdminModel;
use app\model\tram\OrderModel;


class adminorderCtrl extends commonCtrl
{
	public static $webconfig;
	public function __construct()
	{
		$this->INDEX_OR_ADMIN = VIEW_ADMINDIR;//后台标识
		
		$this->assign('WsCtrlClass',self::$WsCtrlClass);
		
		self::$webconfig=self::webconfig();
		$this->assign('webconfig',self::$webconfig);
		//print_r(self::$webconfig);exit;
		
		$ActionUnloginArr = array('auto_ratio,auto_ratiop');	//免登录Action数组
		
		if(in_array(strtolower(self::$WsAction), $ActionUnloginArr)){
			//免登录
			
		}else{
			//未登录跳登录页
			if(!AdminModel::haslogin()){
				HeaderLocationCA("admin","login");
			}
		}
	}
	
	
	
	/**
	 * 全部接单
	 */
	public function lists()
	{
		
		$this->assign('pagesigntitle',"全部接单");
		
		$this->assign('pagesign',self::$WsAction);
		
		if(empty($_GET['page'])||$_GET['page']<1){
			$_GET['page']=1;
		}
		
		$sqlwhereadd="";
		$pagehrefadd="";
		$querykeywords="";
		if(!empty($_GET['querykeywords'])){
			$_GET["querykeywords"]=urldecode($_GET["querykeywords"]);
			$_GET["querykeywords"] = addslashes($_GET["querykeywords"]);
			
			$sqlwhereadd=" WHERE id = '".$_GET['querykeywords']."' or uid in (SELECT id FROM `user` WHERE username='".$_GET['querykeywords']."') ";
			$pagehrefadd="/querykeywords/".$_GET['querykeywords'];
			$querykeywords=$_GET['querykeywords'];
		}else{
			$sqlwhereadd=" ";
		}
		
		

		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `tradeorder` ".$sqlwhereadd." order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		for($i=0;$i<count($data);$i++){
			$username = self::DB()->query("SELECT username FROM `user` WHERE id='".$data[$i]['uid']."' ")->fetchAll();
			$data[$i]['username'] = $username[0]['username']?: "";
			
			
			$profitc = self::DB()->query("SELECT SUM(money) summoney FROM `moneypath` WHERE additionalid='".$data[$i]['id']."' and mtype=152 ")->fetchAll();
			$profitc = $profitc[0]['summoney']?: 0;
						
			$profitc = number_format($profitc, 4, '.', '');
			
			$data[$i]['profit'] = $profitc;
		}
		
		$sqlall="SELECT id FROM `tradeorder` ".$sqlwhereadd;
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		
		
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		
		
		
		
		$this->assign('querykeywords',$querykeywords);
		$this->assign('pagehrefadd',$pagehrefadd);
		$this->assign('data',$data);
		
		$this->display();
	}
	
	/**
	 * 接单中订单
	 */
	public function lists1()
	{
		
		$this->assign('pagesigntitle',"接单中订单");
		
		$this->assign('pagesign',self::$WsAction);
		
		if(empty($_GET['page'])||$_GET['page']<1){
			$_GET['page']=1;
		}
		
		$sqlwhereadd="";
		$pagehrefadd="";
		$querykeywords="";
		if(!empty($_GET['querykeywords'])){
			$_GET["querykeywords"]=urldecode($_GET["querykeywords"]);
			$_GET["querykeywords"] = addslashes($_GET["querykeywords"]);
			
			$sqlwhereadd=" WHERE state=1 and ( id = '".$_GET['querykeywords']."' or uid in (SELECT id FROM `user` WHERE username='".$_GET['querykeywords']."') ) ";
			$pagehrefadd="/querykeywords/".$_GET['querykeywords'];
			$querykeywords=$_GET['querykeywords'];
		}else{
			$sqlwhereadd=" WHERE state=1 ";
		}
		
		

		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `tradeorder` ".$sqlwhereadd." order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		for($i=0;$i<count($data);$i++){
			$username = self::DB()->query("SELECT username FROM `user` WHERE id='".$data[$i]['uid']."' ")->fetchAll();
			$data[$i]['username'] = $username[0]['username']?: "";
			
			
			$profitc = self::DB()->query("SELECT SUM(money) summoney FROM `moneypath` WHERE additionalid='".$data[$i]['id']."' and mtype=152 ")->fetchAll();
			$profitc = $profitc[0]['summoney']?: 0;
						
			$profitc = number_format($profitc, 4, '.', '');
			
			$data[$i]['profit'] = $profitc;
		}
		
		$sqlall="SELECT id FROM `tradeorder` ".$sqlwhereadd;
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		
		
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		
		
		
		
		$this->assign('querykeywords',$querykeywords);
		$this->assign('pagehrefadd',$pagehrefadd);
		$this->assign('data',$data);
		
		$this->display(self::$WsCtrlClass."_"."lists.tpl");
	}
	
	/**
	 * 已完成订单
	 */
	public function lists2()
	{
		
		$this->assign('pagesigntitle',"已完成订单");
		
		$this->assign('pagesign',self::$WsAction);
		
		if(empty($_GET['page'])||$_GET['page']<1){
			$_GET['page']=1;
		}
		
		$sqlwhereadd="";
		$pagehrefadd="";
		$querykeywords="";
		if(!empty($_GET['querykeywords'])){
			$_GET["querykeywords"]=urldecode($_GET["querykeywords"]);
			$_GET["querykeywords"] = addslashes($_GET["querykeywords"]);
			
			$sqlwhereadd=" WHERE state=2 and ( id = '".$_GET['querykeywords']."' or uid in (SELECT id FROM `user` WHERE username='".$_GET['querykeywords']."') ) ";
			$pagehrefadd="/querykeywords/".$_GET['querykeywords'];
			$querykeywords=$_GET['querykeywords'];
		}else{
			$sqlwhereadd=" WHERE state=2 ";
		}
		
		

		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `tradeorder` ".$sqlwhereadd." order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		for($i=0;$i<count($data);$i++){
			$username = self::DB()->query("SELECT username FROM `user` WHERE id='".$data[$i]['uid']."' ")->fetchAll();
			$data[$i]['username'] = $username[0]['username']?: "";
			
			
			$profitc = self::DB()->query("SELECT SUM(money) summoney FROM `moneypath` WHERE additionalid='".$data[$i]['id']."' and mtype=152 ")->fetchAll();
			$profitc = $profitc[0]['summoney']?: 0;
						
			$profitc = number_format($profitc, 4, '.', '');
			
			$data[$i]['profit'] = $profitc;
		}
		
		$sqlall="SELECT id FROM `tradeorder` ".$sqlwhereadd;
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		
		
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		
		
		
		
		$this->assign('querykeywords',$querykeywords);
		$this->assign('pagehrefadd',$pagehrefadd);
		$this->assign('data',$data);
		
		$this->display(self::$WsCtrlClass."_"."lists.tpl");
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
	
	public function auto_ratiop($uid)
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
		if($arr != '()'){
			//有效用户（充值超过100的个数）
			$data = self::DB()->query("SELECT count(1) FROM moneypath where (mtype = 111 or mtype = 113 ) and money >= 100  and  uid in ".$arr." group by uid ")->fetchAll();
			$num = count($data);
			if($num >=20){
				return 0.05;
			}
			if($num >=17){
				return 0.02;
			} else {
				return 0;
			}
		} else {
			return 0;
		}
	}
	
	public function sendonetraorderdo()
	{
		$id = post('id');
		if(!is_numeric($id)){
			exit("失败");
		}
		
		$tradeorder = self::DB()->select("tradeorder" ,"*",["AND" =>[
			"id[=]" => $id
		]]);
		
		if(count($tradeorder)>0){
			$tradeorder = $tradeorder[0];
			
			if($tradeorder['state']!=1){
				exit("该订单已完成");
			}
			
			if($tradeorder['surplusmoney']>0 && $tradeorder['surplushand']>0){
				
				$moneyone = 0;
				$state = 1;
				if($tradeorder['surplushand']==1){
					$moneyone = $tradeorder['surplusmoney'];
					$state = 2;
				}else{
					$moneyonec = $tradeorder['surplusmoney']/$tradeorder['surplushand'];
					
					$moneyonec = $moneyonec * mt_rand(50,150) /100;
					
					$moneyone = round($moneyonec,4);
				}
				
				$utradeorder = self::DB()->update("tradeorder",[
					"surplusmoney" => $tradeorder['surplusmoney'] - $moneyone,
					"surplushand" => $tradeorder['surplushand'] - 1,
					"state" => $state
				],["AND" =>[
					"id[=]" => $tradeorder['id'],
					"state[=]" => 1
				]]);
				
				if($utradeorder){
					
					$datetime = new \DateTime;
					
					$user = self::DB()->select("user" ,[
						"id","superioruid","money2","money3","proportion"
					],["AND" =>[
						"id[=]" => $tradeorder['uid']
					]]);
					if(count($user)>0){
						$user[0]['proportion'] = $this->auto_ratio($user[0]['id']);
						
						$moneyc = $moneyone*$user[0]['proportion']/100;
						
						$uuser = self::DB()->update("user",[
							"money2" => $user[0]['money2']+$moneyone,
							"money3" => $user[0]['money3']+$moneyc
						], [
							"id[=]" => $user[0]['id']
						]);
						
						if($uuser){
							
							$mpcontent = "类型：接单收益";
							$additionalproportion = $user[0]['proportion'];
							OrderModel::insertMoneypath_proportion($user[0]['id'],$moneyone,"152",$mpcontent,$tradeorder['id'],$additionalproportion,$datetime->format('Y-m-d H:i:s'));
							OrderModel::insertMoneypath_proportion($user[0]['id'],$moneyc,"152",$mpcontent,$tradeorder['id'],$additionalproportion,$datetime->format('Y-m-d H:i:s'));
							
							
							//上级返利
							function superiorallsendm($supuid,$lproportion,$moneyone,$tradeorder,$datetime,$DBM,$OrderModel,$thisv){
								
								if(empty($supuid) || !is_numeric($supuid)) {
									return false;
								}else{
									$supuser = $DBM->select("user" ,[
										"id","superioruid","money","money2","money3","proportion"
									],["AND" =>[
										"id[=]" => $supuid
									]]);
										if(count($supuser)>0){
									$supuser[0]['proportion'] = $thisv->auto_ratiop($supuser[0]['id']);
										} else {
									$supuser[0]['proportion'] = 0;		
										}
									if($supuser[0]['proportion']>0){
										
										$supmoneyc = $moneyone*($supuser[0]['proportion'])/100;
										//$supmoneyc = $moneyone*($supuser[0]['proportion']-$lproportion)/100;
										
										$supalltramoneying = $DBM->query("SELECT SUM(money) allinvestment FROM `tradeorder` WHERE state=1 and uid='".$supuser[0]['id']."' ")->fetchAll();
										$supalltramoneyingv = $supalltramoneying[0]['allinvestment']?: 0;
										
										if($supmoneyc>0 && ($supuser[0]['money']+$supuser[0]['money2']+$supuser[0]['money3']+$supalltramoneyingv)>=100){
											$usupuser = $DBM->update("user",[
												"money3" => $supuser[0]['money3']+$supmoneyc
											], [
												"id[=]" => $supuser[0]['id']
											]);
											
											if($usupuser){
												$mpcontent = "类型：团队返利";
												$supadditionalproportion = $supuser[0]['proportion'];
												//$supadditionalproportion = $supuser[0]['proportion']-$lproportion;
												$OrderModel->insertMoneypath_proportion($supuser[0]['id'],$supmoneyc,"153",$mpcontent,$tradeorder['id'],$supadditionalproportion,$datetime->format('Y-m-d H:i:s'));
											}
										}
										
										superiorallsendm($supuser[0]['superioruid'],$supuser[0]['proportion'],$moneyone,$tradeorder,$datetime,$DBM,$OrderModel,$thisv);
									}
									
								}
								
							}
							
							$DBM = self::DB();
							$OrderModel = new OrderModel();
							superiorallsendm($user[0]['superioruid'],$user[0]['proportion'],$moneyone,$tradeorder,$datetime,self::DB(),$OrderModel,$this);
							
							
							
							
							
							//2019-10-01新加 | 如果上级点位大于个人的  则获取差距返利  $moneyone*（上级点位-个人点位）/100
							
							if(!empty($user[0]['superioruid']) && is_numeric($user[0]['superioruid'])) {
								
								$supuser1 = $DBM->select("user" ,[
									"id","superioruid","money","money2","money3","proportion"
								],["AND" =>[
									"id[=]" => $user[0]['superioruid']
								]]);
								if(count($supuser1)>0){
									$supuser1[0]['proportion'] = $this->auto_ratio($supuser1[0]['id']);
									
									$myproportion = $this->auto_ratio($user[0]['id']);
									
									$s_me_c_proportion = $supuser1[0]['proportion']-$myproportion;
									
									if($supuser1[0]['proportion']>0 && $s_me_c_proportion>0){
										
										$supmoneyc1 = $moneyone*$s_me_c_proportion/100;
										
										$supalltramoneying1 = $DBM->query("SELECT SUM(money) allinvestment FROM `tradeorder` WHERE state=1 and uid='".$supuser1[0]['id']."' ")->fetchAll();
										$supalltramoneyingv1 = $supalltramoneying1[0]['allinvestment']?: 0;
										
										if($supmoneyc1>0 && ($supuser1[0]['money']+$supuser1[0]['money2']+$supuser1[0]['money3']+$supalltramoneyingv1)>=100){
											$usupuser1 = $DBM->update("user",[
												"money3" => $supuser1[0]['money3']+$supmoneyc1
											], [
												"id[=]" => $supuser1[0]['id']
											]);
											
											if($usupuser1){
												$mpcontents1 = "类型：团队返利";
												$supadditionalproportions1 = $s_me_c_proportion;
												$OrderModel->insertMoneypath_proportion($supuser1[0]['id'],$supmoneyc1,"153",$mpcontents1,$tradeorder['id'],$supadditionalproportions1,$datetime->format('Y-m-d H:i:s'));
											}
										}
										
									}
								}
							}
							
							//end of ^^^^^^^^^^^^^^^^^^^^^
							
							
							
							
							
							
							
							
							
							
						}
						
					}
					
					
					exit("成功");
				}else{
					exit("失败");
				}
				
			}else{
				exit("该订单已完成");
			}
			
			
		}else{
			exit("失败");
		}
		
	}
	
	public function sendonetraorderalldo()
	{
		
		$tradeorderall = self::DB()->select("tradeorder" ,"*",["AND" =>[
			"state[=]" => 1
		]]);
		
		
		
		//上级返利
		function superiorallsendallm($supuid,$lproportion,$moneyone,$tradeorder,$datetime,$DBM,$OrderModel,$thisv){
			
			if(empty($supuid) || !is_numeric($supuid)) {
				return false;
			}else{
				$supuser = $DBM->select("user" ,[
					"id","superioruid","money","money2","money3","proportion"
				],["AND" =>[
					"id[=]" => $supuid
				]]);
				if(count($supuser)>0){
						$supuser[0]['proportion'] = $thisv->auto_ratiop($supuser[0]['id']);
					} else {
						$supuser[0]['proportion'] = 0;
					}
				if($supuser[0]['proportion']>0){
				
					$supmoneyc = $moneyone*($supuser[0]['proportion'])/100;
					//$supmoneyc = $moneyone*($supuser[0]['proportion']-$lproportion)/100;
					
					$supalltramoneying = $DBM->query("SELECT SUM(money) allinvestment FROM `tradeorder` WHERE state=1 and uid='".$supuser[0]['id']."' ")->fetchAll();
					$supalltramoneyingv = $supalltramoneying[0]['allinvestment']?: 0;
					
					
					if($supmoneyc>0 && ($supuser[0]['money']+$supuser[0]['money2']+$supuser[0]['money3']+$supalltramoneyingv)>=100){
						$usupuser = $DBM->update("user",[
							"money3" => $supuser[0]['money3']+$supmoneyc
						], [
							"id[=]" => $supuser[0]['id']
						]);
						
						if($usupuser){
							$mpcontent = "类型：团队返利";
							$supadditionalproportion = $supuser[0]['proportion'];
							//$supadditionalproportion = $supuser[0]['proportion']-$lproportion;
							$OrderModel->insertMoneypath_proportion($supuser[0]['id'],$supmoneyc,"153",$mpcontent,$tradeorder['id'],$supadditionalproportion,$datetime->format('Y-m-d H:i:s'));
						}
					}
					
					superiorallsendallm($supuser[0]['superioruid'],$supuser[0]['proportion'],$moneyone,$tradeorder,$datetime,$DBM,$OrderModel,$thisv);
				}
				
			}
			
		}
		
		
		for($i=0;$i<count($tradeorderall);$i++){
		
			$tradeorder = $tradeorderall[$i];
			
			if($tradeorder['surplusmoney']>0 && $tradeorder['surplushand']>0){
				
				$moneyone = 0;
				$state = 1;
				if($tradeorder['surplushand']==1){
					$moneyone = $tradeorder['surplusmoney'];
					$state = 2;
				}else{
					$moneyonec = $tradeorder['surplusmoney']/$tradeorder['surplushand'];
					
					$moneyonec = $moneyonec * mt_rand(50,150) /100;
					
					$moneyone = round($moneyonec,4);
				}
				
				$utradeorder = self::DB()->update("tradeorder",[
					"surplusmoney" => $tradeorder['surplusmoney'] - $moneyone,
					"surplushand" => $tradeorder['surplushand'] - 1,
					"state" => $state
				],["AND" =>[
					"id[=]" => $tradeorder['id'],
					"state[=]" => 1
				]]);
				
				if($utradeorder){
					
					$datetime = new \DateTime;
					
					$user = self::DB()->select("user" ,[
						"id","superioruid","money2","money3","proportion"
					],["AND" =>[
						"id[=]" => $tradeorder['uid']
					]]);
					if(count($user)>0){
						$user[0]['proportion'] = $this->auto_ratio($user[0]['id']);
						
						$moneyc = $moneyone*$user[0]['proportion']/100;
						
						$uuser = self::DB()->update("user",[
							"money2" => $user[0]['money2']+$moneyone,
							"money3" => $user[0]['money3']+$moneyc
						], [
							"id[=]" => $user[0]['id']
						]);
						
						if($uuser){
							
							$mpcontent = "类型：接单收益";
							$additionalproportion = $user[0]['proportion'];
							OrderModel::insertMoneypath_proportion($user[0]['id'],$moneyone,"152",$mpcontent,$tradeorder['id'],$additionalproportion,$datetime->format('Y-m-d H:i:s'));
							OrderModel::insertMoneypath_proportion($user[0]['id'],$moneyc,"152",$mpcontent,$tradeorder['id'],$additionalproportion,$datetime->format('Y-m-d H:i:s'));
							
							$DBM = self::DB();
							$OrderModel = new OrderModel();
							superiorallsendallm($user[0]['superioruid'],$user[0]['proportion'],$moneyone,$tradeorder,$datetime,self::DB(),$OrderModel,$this);
							
							
							
							
							
							
							
							
							//2019-10-01新加 | 如果上级点位大于个人的  则获取差距返利  $moneyone*（上级点位-个人点位）/100
							
							if(!empty($user[0]['superioruid']) && is_numeric($user[0]['superioruid'])) {
								
								$supuser1 = $DBM->select("user" ,[
									"id","superioruid","money","money2","money3","proportion"
								],["AND" =>[
									"id[=]" => $user[0]['superioruid']
								]]);
								if(count($supuser1)>0){
									$supuser1[0]['proportion'] = $this->auto_ratio($supuser1[0]['id']);
									
									$myproportion = $this->auto_ratio($user[0]['id']);
									
									$s_me_c_proportion = $supuser1[0]['proportion']-$myproportion;
									
									if($supuser1[0]['proportion']>0 && $s_me_c_proportion>0){
										
										$supmoneyc1 = $moneyone*$s_me_c_proportion/100;
										
										$supalltramoneying1 = $DBM->query("SELECT SUM(money) allinvestment FROM `tradeorder` WHERE state=1 and uid='".$supuser1[0]['id']."' ")->fetchAll();
										$supalltramoneyingv1 = $supalltramoneying1[0]['allinvestment']?: 0;
										
										if($supmoneyc1>0 && ($supuser1[0]['money']+$supuser1[0]['money2']+$supuser1[0]['money3']+$supalltramoneyingv1)>=100){
											$usupuser1 = $DBM->update("user",[
												"money3" => $supuser1[0]['money3']+$supmoneyc1
											], [
												"id[=]" => $supuser1[0]['id']
											]);
											
											if($usupuser1){
												$mpcontents1 = "类型：团队返利";
												$supadditionalproportions1 = $s_me_c_proportion;
												$OrderModel->insertMoneypath_proportion($supuser1[0]['id'],$supmoneyc1,"153",$mpcontents1,$tradeorder['id'],$supadditionalproportions1,$datetime->format('Y-m-d H:i:s'));
											}
										}
										
									}
								}
							}
							
							//end of ^^^^^^^^^^^^^^^^^^^^^
							
							
							
							
							
							
							
							
						}
						
					}
					
					
					
				}else{
					continue;
				}
				
			}else{
				continue;
			}
			
		
		
		}
		
		exit("成功");
	}
	
}
?>