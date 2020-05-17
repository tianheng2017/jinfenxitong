<?php

namespace app\ctrl;

use app\model\admin\AdminModel;

use app\model\user\UserModel;
use app\model\tram\OrderModel;
use app\ormModel\Coupon;
use app\ormModel\Itemlist;
use app\ormModel\Itemlog;
use app\ormModel\Itemlogp;
use app\ormModel\User;
use app\ormModel\Moneypath;

class adminuserCtrl extends commonCtrl
{
	public static $webconfig;
	public function __construct()
	{
		$this->INDEX_OR_ADMIN = VIEW_ADMINDIR;//后台标识
		
		$this->assign('WsCtrlClass',self::$WsCtrlClass);
		
		self::$webconfig=self::webconfig();
		$this->assign('webconfig',self::$webconfig);
		//print_r(self::$webconfig);exit;
		
		$ActionUnloginArr = array();	//免登录Action数组
		
		if(in_array(strtolower(self::$WsAction), $ActionUnloginArr)){
			//免登录
			
		}else{
			//未登录跳登录页
			if(!AdminModel::haslogin()){
				HeaderLocationCA("admin","login");
			}
		}
	}

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
		$list = self::DB()->select("regpath" ,"uidsubordinate",["AND" =>[
			"uiduidsubordinatesuperior[=]" => $uid
		]]);
		$arr = '';		
		foreach($list as $k=>$v){
			$arr.= $v.',';
		}
		$arr = '('.rtrim($arr,',').')';
		if($arr != '()'){
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
	
	public function itemlist()
	{
		if(empty($_GET['page'])||$_GET['page']<1){
			$_GET['page']=1;
		}
		
		$pagenum=self::$webconfig['pagelistnumber']['val'];

		$data = Itemlist::order('id','desc')->page(($_GET['page']-1)*$pagenum, $pagenum)->select()->toArray();
		foreach($data as $k => $v){
			$data[$k]['time'] = date('Y-m-d H:i:s',$v['time']);
			if ($v['type'] == 0){
			    $data[$k]['type'] = '定期';
			}else{
			    $data[$k]['type'] = '活期';
			    $data[$k]['day_num'] = '活期';
			}
		}
		$sqlall="SELECT id FROM `itemlist`";
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		$this->assign('data',$data);
		$this->display();
	}
	
	
	public function itemadd()
	{
		$this->display();
	}
	
	public function itemedit()
	{
		$data = Itemlist::where('id',$_GET['id'])->find();
		$this->assign('data',$data);
		$this->display();
	}
	
	public function itemedit_do()
	{
        $res = self::DB()->query("SELECT count(*) num from `itemlist` where isty=1")->fetchAll()[0]['num'];
        if (post('isty') == 1 && $res>0){
            echo "新手体验金项目只能存在一个";exit;
        }
        if (intval(post('price')) == 0){
            echo "请设置项目金额";exit;
        }
        if (post('type') == 0 && post('day_num') < 2){
            echo "投资天数不能低于1天";exit;
        }
        if (floatval(post('arate')) <= 0){
            echo "年化利率不能低于0";exit;
        }
        if (!in_array(intval(post('type')), [0,1])){
            echo "项目类型只能为定期或活期";exit;
        }

        $info = Itemlist::update([
            "item_name" => post('item_name'),
            "price" => floatval(post('price')),
            "arate" => floatval(post('arate')),
            "day_num" => intval(post('type')) ? 0 : intval(post('day_num')),
            "desc" => post('desc'),
            "time" => time(),
            'isty' => intval(post('isty')),
            'tymoney' => floatval(post('tymoney')),
            'coupon' => intval(post('coupon')),
            'type'  =>  intval(post('type')),
        ],[
            "id" => post('id')
        ]);
        if($info->item_name){
            echo "成功";
        }else{
            echo "修改失败！";
        }
	}	
	
	
	public function itemadd_do()
	{
        $res = self::DB()->query("SELECT count(*) num from `itemlist` where isty=1")->fetchAll()[0]['num'];
        if (post('isty') == 1 && $res>0){
            echo "新手体验金项目只能存在一个";exit;
        }
        if (intval(post('price')) == 0){
            echo "请设置项目金额";exit;
        }
        if (post('day_num') < 2){
            echo "产品天数不能低于2天";exit;
        }
        if (floatval(post('arate')) <= 0){
            echo "年化利率不能低于0";exit;
        }
        if (!in_array(intval(post('type')), [0,1])){
            echo "项目类型只能为定期或活期";exit;
        }
        // if (intval(post('coupon'))){
        //     if (intval(post('coupon')) <= floatval(post('price'))*0.15){
        //         echo "优惠劵不得低于项目金额的15%";exit;
        //     }
        // }
        $info = Itemlist::create([
            "item_name" => post('item_name'),
            "price" => floatval(post('price')),
            "arate" => floatval(post('arate')),
            "day_num" => intval(post('day_num')),
            "desc" => post('desc'),
            "time" => time(),
            'isty' => intval(post('isty')),
            'tymoney' => floatval(post('tymoney')),
            'coupon' => intval(post('coupon')),
            'type'  =>  intval(post('type')),
        ]);
        if($info->id){
            echo "成功";
        }else{
            echo "添加失败！";
        }
	}

	public function itemdel(){
	    $id = post('id');
	    if(empty($id)){
            echo "项目不存在!";exit;
        }
	    $a = Itemlog::where(['item_id'=>$id,'status'=>0])->count();
	    $b = Itemlogp::where(['item_id'=>$id,'status'=>0])->count();
	    if ($a || $b){
	        echo "删除失败, 该项目有订单尚未结算!";exit;
        }else{
	        Itemlist::where('id', $id)->delete();
	        echo "成功";exit;
        }
    }
	
	public function itemlog()
	{
		if(empty($_GET['page'])||$_GET['page']<1){
			$_GET['page']=1;
		}
		
		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `itemlog` order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		$data = self::DB()->query($sql)->fetchAll();
		for($i=0;$i<count($data);$i++){
		    $item = itemlist::where('id', $data[$i]['item_id'])->find();

			$data[$i]['time'] = date('Y-m-d H:i:s',$data[$i]['time']);
			$data[$i]['stime'] = date('Y-m-d H:i:s',$data[$i]['stime']);
            $data[$i]['uid_username'] = User::where('id', $data[$i]['uid'])->value('username');
            $data[$i]['sy'] = Moneypath::where(['mtype' => 152, 'additionalid' => $data[$i]['id'], 'uid' => $data[$i]['uid']])->sum('money');
            
            if ($item['type'] == 1){
                $data[$i]['day_num'] = '无';
                $data[$i]['stime'] = '无';
            }
            $data[$i]['item_name'] = $item['item_name'];
		}
		$sqlall="SELECT id FROM `itemlog`";
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		$this->assign('data',$data);
		$this->display();
	}
	
	public function itemlogp()
	{
		if(empty($_GET['page'])||$_GET['page']<1){
			$_GET['page']=1;
		}
		
		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `itemlogp` order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		$data = self::DB()->query($sql)->fetchAll();
		for($i=0;$i<count($data);$i++){
		    $item = itemlist::where('id', $data[$i]['item_id'])->find();
		    $data[$i]['day_num'] =  $item['day_num'];
		    
			$data[$i]['time'] = date('Y-m-d H:i:s',$data[$i]['time']);
			$data[$i]['stime'] = date('Y-m-d H:i:s',$data[$i]['stime']);
			
            $data[$i]['uid_username'] = User::where('id', $data[$i]['uid'])->value('username');
            $data[$i]['fuid_username'] = User::where('id', $data[$i]['fuid'])->value('username');
            
            $data[$i]['sy'] = Moneypath::where(['mtype' => 153, 'additionalid' => $data[$i]['item_no'], 'uid' => $data[$i]['uid']])->sum('money');
            
            if ($item['type'] == 1){
                $data[$i]['day_num'] = '无';
                $data[$i]['stime'] = '无';
            }
            $data[$i]['item_name'] = $item['item_name'];
		}
		$sqlall="SELECT id FROM `itemlogp`";
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		$this->assign('data',$data);
		$this->display();
	}
	
  	public function auto_ratiopn($uid)
	{
		$list = self::DB()->select("regpath" ,"uidsubordinate",["AND" =>[
			"uiduidsubordinatesuperior[=]" => $uid
		]]);
      	
      	
      	
		$arr = '';		
		foreach($list as $k=>$v){
			$arr.= $v.',';
		}
		$arr = '('.rtrim($arr,',').')';
		if($arr != '()'){
          $data = self::DB()->query("SELECT count(1) FROM moneypath where (mtype = 111 or mtype = 113 ) and money >= 100  and  uid in ".$arr." group by uid ")->fetchAll();
          $num = count($data);

          if($num >0){
              return $num;
          } else {
              return 0;
          }
          
        }else {
			return 0;
		}
		
	}
  	public function auto_ratiopshow()
	{
		$list = self::DB()->select("regpath" ,"uidsubordinate",["AND" =>[
			"uiduidsubordinatesuperior[=]" => get('id')
		]]);
      	
      	
      	
		$arr = '';		
		foreach($list as $k=>$v){
			$arr.= $v.',';
		}
		$arr = '('.rtrim($arr,',').')';
		if($arr != '()'){
          $data = self::DB()->query("SELECT count(1) FROM moneypath where (mtype = 111 or mtype = 113 ) and money >= 100  and  uid in ".$arr." group by uid ")->fetchAll();
          $num = count($data);

          print_r("有效客户：".$num);exit;
         
		} else {
			print_r("有效客户：0");exit;
		}
	}
	/**
	 * 用户列表
	 */
	 
	public function lists()
	{
		$this->assign('pagesigntitle',"用户列表");
		
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
			
			$sqlwhereadd=" WHERE id = '".$_GET['querykeywords']."' or username = '".$_GET['querykeywords']."' ";
			$pagehrefadd="/querykeywords/".$_GET['querykeywords'];
			$querykeywords=$_GET['querykeywords'];
		}else{
			$sqlwhereadd=" ";
		}
		
		

		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `user` ".$sqlwhereadd." order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		for($i=0;$i<count($data);$i++){
			$allinvestmenti = self::DB()->query("SELECT SUM(money) allinvestment FROM `tradeorder` WHERE uid='".$data[$i]['id']."' ")->fetchAll();
			$data[$i]['allinvestment'] = $allinvestmenti[0]['allinvestment']?: 0;
			
			$data[$i]['proportion'] = $this->auto_ratio($data[$i]['id']);
			$data[$i]['proportionp'] = $this->auto_ratiop($data[$i]['id']);
			$data[$i]['auto_ratiopn'] = $this->auto_ratiopn($data[$i]['id']);
          
			$superioruser = self::DB()->select("user" ,[
				"id","username"
			],["AND" =>[
				"id[=]" => $data[$i]['superioruid']
			]]);
			if(count($superioruser)>0){
				$data[$i]['superiorusername'] = $superioruser[0]['username'];
			}else{
				$data[$i]['superiorusername'] = "";
			}
			
		}
		
		$sqlall="SELECT id FROM `user` ".$sqlwhereadd;
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		
		
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		
		
		
		
		$this->assign('querykeywords',$querykeywords);
		$this->assign('pagehrefadd',$pagehrefadd);
		$this->assign('data',$data);
		
		
		
		
		$allusernumber = self::DB()->query("SELECT count(*) countu FROM `user` ")->fetchAll();
		$allinvestment = self::DB()->query("SELECT SUM(money) allinvestment FROM `tradeorder`")->fetchAll();
        
		$this->assign('allusernumber',$allusernumber[0]['countu']+0);
		$this->assign('allinvestment',$allinvestment[0]['allinvestment']+0);
		
		
		
		$this->display();
	}
	public function lists1()
	{
		$this->assign('pagesigntitle',"一级用户列表");
		
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
			
			$sqlwhereadd=" WHERE superioruid=0 and id = '".$_GET['querykeywords']."' or username = '".$_GET['querykeywords']."' ";
			$pagehrefadd="/querykeywords/".$_GET['querykeywords'];
			$querykeywords=$_GET['querykeywords'];
		}else{
			$sqlwhereadd=" WHERE superioruid=0 ";
		}
		
		

		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `user` ".$sqlwhereadd." order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		for($i=0;$i<count($data);$i++){
			$allinvestmenti = self::DB()->query("SELECT SUM(money) allinvestment FROM `tradeorder` WHERE uid='".$data[$i]['id']."' ")->fetchAll();
			$data[$i]['allinvestment'] = $allinvestmenti[0]['allinvestment']?: 0;
			
			$data[$i]['proportion'] = $this->auto_ratio($data[$i]['id']);
			$data[$i]['proportionp'] = $this->auto_ratiop($data[$i]['id']);
			$data[$i]['auto_ratiopn'] = $this->auto_ratiopn($data[$i]['id']);
			
			$superioruser = self::DB()->select("user" ,[
				"id","username"
			],["AND" =>[
				"id[=]" => $data[$i]['superioruid']
			]]);
			if(count($superioruser)>0){
				$data[$i]['superiorusername'] = $superioruser[0]['username'];
			}else{
				$data[$i]['superiorusername'] = "";
			}
			
		}
		
		$sqlall="SELECT id FROM `user` ".$sqlwhereadd;
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		
		
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		
		
		
		
		$this->assign('querykeywords',$querykeywords);
		$this->assign('pagehrefadd',$pagehrefadd);
		$this->assign('data',$data);
		
		
		
		
		$allusernumber = self::DB()->query("SELECT count(*) countu FROM `user` ")->fetchAll();
		$allinvestment = self::DB()->query("SELECT SUM(money) allinvestment FROM `tradeorder`")->fetchAll();
        
		$this->assign('allusernumber',$allusernumber[0]['countu']+0);
		$this->assign('allinvestment',$allinvestment[0]['allinvestment']+0);
		
		
		
		$this->display(self::$WsCtrlClass."_"."lists.tpl");
	}
	
	public function upuserstate()
	{
	
		
		$useri = self::DB()->select("user" ,[
			"state","id"
		],["AND" =>[
			"id[=]" => post('id')
		]]);
		if(count($useri)<1){
			echo "失败";exit();
		}

		if($useri[0]["state"]=="1"){
			$state="-1";
		}else{
			$state="1";
		}
		
		$res = self::DB()->update("user",[
			"state" => $state
		], [
			"id[=]" => post('id')
		]);
		
		if($res){
			echo "成功";exit();
		}else{
			echo "失败";exit();
		}
	
	
	}
	
	
	
	
	public function upuserpas()
	{
	
		if(trim(post('password'))==""){
			echo "none";exit();
		}
		
		$useri = self::DB()->select("user" ,[
			"id","password"
		],["AND" =>[
			"id[=]" => get('id')
		]]);
		if(count($useri)<1){
			echo "失败";exit();
		}

		if($useri[0]["password"]==md5(post('password'))){
			echo "相同";exit();
		}
		
		
		$res = self::DB()->update("user",[
			"password" => md5(post('password'))
		], [
			"id[=]" => get('id')
		]);
		
		if($res){
			echo "成功";exit();
		}else{
			echo "失败";exit();
		}
	
	
	
	}
	
	
	
	
	
	
	
	/*
	 *一级用户-----------------------------------------------------------------------------
	 */
	
	
	/**
	 * 一级用户添加
	 */
	public function topuseradd()
	{
		$this->assign('pagesigntitle',"一级用户添加");
		
		$this->display();
	}
	
	
	
	public function topuseradddo()
	{
		if(preg_match("/^1[34578]\d{9}$/",post('username'))){  
		
		}else{
			echo "用户名格式不正确！（手机号）";exit();
		}
		
		if(post('username')==""){  
			echo "请输入用户名！";exit();
		}
		if(mb_strlen(post('password'),'utf8')<17&&mb_strlen(post('password'),'utf8')>5){
			
			if(preg_match(" /^[0-9a-zA-Z_]{6,16}$/",post('password'))){  
			
			}else{
				echo "密码格式不正确！（6-16位英文字母、数字组合）";exit();
			}
			
		}else{
			echo "密码格式不正确！（6-16位英文字母、数字组合）";exit();
		}
		
		if(mb_strlen(post('passwordtwo'),'utf8')<17&&mb_strlen(post('passwordtwo'),'utf8')>5){
			
			if(preg_match(" /^[0-9a-zA-Z_]{6,16}$/",post('passwordtwo'))){  
			
			}else{
				echo "安全密码格式不正确！（6-16位英文字母、数字组合）";exit();
			}
			
		}else{
			echo "安全密码格式不正确！（6-16位英文字母、数字组合）";exit();
		}
		
		$proportion = round(post('proportion'),4);
		
		if(!is_numeric($proportion) || $proportion<0 || $proportion>100){  
			echo "团队抽成比例不正确！（0-100）";exit();
		}
		
		
		
		$usered = self::DB()->select("user", [
			'username'
		], [
			"username[=]" => post('username')
		]);
		
		if(count($usered)<1){//如果没有被注册
			$datetime = new \DateTime;
			
			
			$last_insert_id = self::DB()->insert("user", [
				"username" => post('username'),
				"password" => md5(post('password')),
				"passwordtwo" => md5(post('passwordtwo')),
				"proportion" => $proportion,
				'remarks'=> post('remarks'),
				"regtime" => $datetime->format('Y-m-d H:i:s')
			]);
			if($last_insert_id){
				echo "成功";
			}else{
				echo "注册失败！";
			}
		}else{
			echo "该用户名已被注册！";
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	//用户信息编辑
	
	public function upuserinfo()
	{
		if(empty(get('id')) || !is_numeric(get('id'))){
			exit("参数有误！");
		}
		
		$user = self::DB()->select("user" ,[
			"id","password","passwordtwo","proportion","remarks","superioruid"
		],["AND" =>[
			"id[=]" => get('id')
		]]);
		
		
		if(count($user)>0){		
			$user = $user[0];
			$this->assign('pagesigntitle',"用户编辑".'ID:'.$user['id']);
			
			
			$this->assign('user',$user);
			
			
			$this->display();
		
		}else{
			exit("参数有误！");
		}
	}
	
	
	public function upuserinfodo()
	{
		
		if(empty(get('id')) || !is_numeric(get('id'))){
			exit("none");
		}
		
		$user = self::DB()->select("user" ,[
			"id","password","passwordtwo","proportion","remarks","superioruid"
		],["AND" =>[
			"id[=]" => get('id')
		]]);
		if(count($user)<1){
			exit("none");
		}
		$_POST['proportion'] = round($_POST['proportion'],4);
		if(!is_numeric($_POST['proportion']) || $_POST['proportion']<0 || $_POST['proportion']>100){  
			echo "团队抽成比例不正确！（0-100）";exit();
		}
		if($_POST['proportion']<$user[0]['proportion']){
			echo "团队抽成比例不能小于当前设置值！";exit();
		}
		
		if(!empty($user[0]['superioruid']) && $user[0]['superioruid']!=0){
			$_POST['proportion'] = $user[0]['proportion'];
		}
		
		if(count($user)>0){	
			$user = $user[0];
			
			$post = $_POST;
			
			
			$updata = array();
			
			foreach($post as $k=>$v){
			
				if(array_key_exists($k, $user)){
					$v = addslashes($v);
					if($v != $user[$k]){
						$updata[$k] = $v;
					}
				}
			
			}
			
			
			
			
			if(empty($updata)){
				echo "相同";exit();
			}
			//echo "成功";exit();
			$res = self::DB()->update("user",$updata, [
				"id[=]" => $user['id']
			]);
			
			if($res){
				echo "成功";exit();
			}else{
				echo "失败";exit();
			}
			
		}else{
			exit("none");
		}
	}
	
	
	
	
	
	//后台充值接口
	public function sendmoneydo()
	{
		$money = trim(post('money'));
		if(empty($money) || !(is_numeric($money)) || $money==0){
			echo "moneye";exit();
		}
		
		
		$useri = self::DB()->select("user" ,[
			"id","money"
		],["AND" =>[
			"id[=]" => get('id')
		]]);
		if(count($useri)<1){
			echo "失败";exit();
		}
		
		
		
		$res = self::DB()->update("user",[
			"money" => $useri[0]['money']+$money
		], [
			"id[=]" => $useri[0]['id']
		]);
		
		if($res){
			
			$mpcontent = "类型：后台充值";
			$insert_id = OrderModel::insertMoneypath($useri[0]['id'],$money,"113",$mpcontent);
			
			echo "成功";exit();
		}else{
			echo "失败";exit();
		}
	}
	
	
	
	
	
	
	
	
	
	/**
	 * 身份认证
	 */
	public function authenticationing()
	{
		$this->assign('pagesigntitle',"审核中-身份认证");
		
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
			
			$sqlwhereadd=" WHERE authentication=1 and id = '".$_GET['querykeywords']."' or username = '".$_GET['querykeywords']."' ";
			$pagehrefadd="/querykeywords/".$_GET['querykeywords'];
			$querykeywords=$_GET['querykeywords'];
		}else{
			$sqlwhereadd=" WHERE authentication=1 ";
		}
		
		

		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `user` ".$sqlwhereadd." order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		for($i=0;$i<count($data);$i++){
			
			$data[$i]['authenticationinfo'] = json_decode($data[$i]['authenticationinfo'],true);
			
		}
		
		$sqlall="SELECT id FROM `user` ".$sqlwhereadd;
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		
		
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		
		
		
		
		$this->assign('querykeywords',$querykeywords);
		$this->assign('pagehrefadd',$pagehrefadd);
		$this->assign('data',$data);
		
		
		
		$this->display();
	}
	
	public function authenticationed()
	{
		$this->assign('pagesigntitle',"已处理-身份认证");
		
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
			
			$sqlwhereadd=" WHERE (authentication=-1 or authentication=2) and id = '".$_GET['querykeywords']."' or username = '".$_GET['querykeywords']."' ";
			$pagehrefadd="/querykeywords/".$_GET['querykeywords'];
			$querykeywords=$_GET['querykeywords'];
		}else{
			$sqlwhereadd=" WHERE authentication=-1 or authentication=2 ";
		}
		
		

		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `user` ".$sqlwhereadd." order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		for($i=0;$i<count($data);$i++){
			
			$data[$i]['authenticationinfo'] = json_decode($data[$i]['authenticationinfo'],true);
			
		}
		
		$sqlall="SELECT id FROM `user` ".$sqlwhereadd;
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		
		
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		
		
		
		
		$this->assign('querykeywords',$querykeywords);
		$this->assign('pagehrefadd',$pagehrefadd);
		$this->assign('data',$data);
		
		
		
		$this->display(self::$WsCtrlClass."_"."authenticationing.tpl");
	}
	
	
	
	
	
	public function upuserauthentication()
	{
	
		if(post('authentication')!=-1 && post('authentication')!=2){
			echo "失败";exit();
		}
		
		$useri = self::DB()->select("user" ,[
			"id","authentication"
		],["AND" =>[
			"id[=]" => post('id')
		]]);
		if(count($useri)<1){
			echo "失败";exit();
		}

		if($useri[0]["authentication"]==post('authentication')){
			echo "成功";exit();
		}
		
		
		$res = self::DB()->update("user",[
			"authentication" => post('authentication')
		], [
			"id[=]" => post('id')
		]);
		
		
		
		self::DB()->update("regpath",[
			"authentication" => post('authentication')
		], [
			"uidsubordinate[=]" => post('id')
		]);
		
		if($res){
			echo "成功";exit();
		}else{
			echo "失败";exit();
		}
	
	
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/**
	 * 资金明细
	 */
	public function moneypath()
	{
		$this->assign('pagesigntitle',"资金明细");
		
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
			
			$sqlwhereadd=" WHERE uid = '".$_GET['querykeywords']."' or uid in (SELECT id FROM `user` WHERE username='".$_GET['querykeywords']."') ";
			$pagehrefadd="/querykeywords/".$_GET['querykeywords'];
			$querykeywords=$_GET['querykeywords'];
		}else{
			$sqlwhereadd=" ";
		}
		
		

		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `moneypath` ".$sqlwhereadd." order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		for($i=0;$i<count($data);$i++){
			$username = self::DB()->query("SELECT username FROM `user` WHERE id='".$data[$i]['uid']."' ")->fetchAll();
			$data[$i]['username'] = $username[0]['username']?: "";
		}
		
		$sqlall="SELECT id FROM `moneypath` ".$sqlwhereadd;
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
	 * 提现管理-审核中
	 */
	public function withdrawalon()
	{
		$this->assign('pagesigntitle',"审核中-提现管理");
		
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
			
			$sqlwhereadd=" WHERE state = 1 and ( uid = '".$_GET['querykeywords']."' or uid in (SELECT id FROM `user` WHERE username='".$_GET['querykeywords']."') ) ";
			$pagehrefadd="/querykeywords/".$_GET['querykeywords'];
			$querykeywords=$_GET['querykeywords'];
		}else{
			$sqlwhereadd=" WHERE state = 1 ";
		}
		
		

		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `withdrawal` ".$sqlwhereadd." order by id asc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		for($i=0;$i<count($data);$i++){
			$username = self::DB()->query("SELECT username FROM `user` WHERE id='".$data[$i]['uid']."' ")->fetchAll();
			$data[$i]['username'] = $username[0]['username']?: "";
		}
		
		$sqlall="SELECT id FROM `withdrawal` ".$sqlwhereadd;
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
	 * 提现管理-已处理
	 */
	public function withdrawaled()
	{
		$this->assign('pagesigntitle',"已处理-提现管理");
		
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
			
			$sqlwhereadd=" WHERE state <> 1 and ( uid = '".$_GET['querykeywords']."' or uid in (SELECT id FROM `user` WHERE username='".$_GET['querykeywords']."') ) ";
			$pagehrefadd="/querykeywords/".$_GET['querykeywords'];
			$querykeywords=$_GET['querykeywords'];
		}else{
			$sqlwhereadd=" WHERE state <> 1 ";
		}
		
		

		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `withdrawal` ".$sqlwhereadd." order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		for($i=0;$i<count($data);$i++){
			$username = self::DB()->query("SELECT username FROM `user` WHERE id='".$data[$i]['uid']."' ")->fetchAll();
			$data[$i]['username'] = $username[0]['username']?: "";
		}
		
		$sqlall="SELECT id FROM `withdrawal` ".$sqlwhereadd;
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		
		
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		
		
		
		
		$this->assign('querykeywords',$querykeywords);
		$this->assign('pagehrefadd',$pagehrefadd);
		$this->assign('data',$data);
		
		
		
		
		
		$this->display();
	}
	
	
	
	
	public function upwithdrawalstate()
	{
		$state = post('state');
		if($state != -1 && $state != 2){
			echo "失败";exit();
		}
		
		$withdrawali = self::DB()->select("withdrawal" ,[
			"id","uid","money","presentationfee","mtype","state",'coupon_id',
		],["AND" =>[
			"id[=]" => post('id')
		]]);
		
		if(count($withdrawali) < 1){
			echo "失败";exit();
		}

		if($withdrawali[0]["state"] != 1){
			echo "ed";exit();
		}
		
		$res = self::DB()->update("withdrawal",[
			"state" => $state,
            'coupon_id' => $withdrawali[0]["coupon_id"],
		],["AND" =>[
			"id[=]" => post('id'),
			"state[=]" => 1
		]]);
		
		if($res){

			$mtypev = "money";
			$mtypename = "RMB";
			$mtypepv = 161;
			$mtypepfv = 167;
			if($withdrawali[0]["mtype"]==2){
				$mtypev = "money3";
				$mtypename = "优惠券";
				$mtypepv = 163;
				$mtypepfv = 168;
			}
			
			if($state == -1){
			    if ($withdrawali[0]['mtype'] == 2){

			        Coupon::update([
			            'status' => 1,
                    ], [
                        'id' => $withdrawali[0]["coupon_id"]
                    ]);

                }else{
                    $userc = self::DB()->select("user" ,[
                        "id",$mtypev
                    ],["AND" =>[
                        "id[=]" => $withdrawali[0]["uid"]
                    ]]);


                    if(count($userc)>0 && is_numeric($withdrawali[0]["money"])){

                        $usercup = self::DB()->update("user",[
                            $mtypev => $userc[0][$mtypev]+$withdrawali[0]["money"]+$withdrawali[0]["presentationfee"]
                        ], [
                            "id[=]" => $userc[0]['id']
                        ]);
                    }
                }
			}
			
			if($state == 2){
                if ($withdrawali[0]['mtype'] == 2){

                    Coupon::update([
                        'status' => 3,
                    ], [
                        'id' => $withdrawali[0]["coupon_id"]
                    ]);

                    $datetime = new \DateTime;
                    $mpcontent = "类型：" . $mtypename . "提现 | 提现ID：" . $withdrawali[0]["id"];
                    OrderModel::insertMoneypath($withdrawali[0]["uid"], $withdrawali[0]["money"], 170, $mpcontent, $withdrawali[0]["id"], $datetime->format('Y-m-d H:i:s'));

                }else {
                    $datetime = new \DateTime;
                    $mpcontent = "类型：" . $mtypename . "提现 | 提现ID：" . $withdrawali[0]["id"];
                    OrderModel::insertMoneypath($withdrawali[0]["uid"], -$withdrawali[0]["money"], $mtypepv, $mpcontent, $withdrawali[0]["id"], $datetime->format('Y-m-d H:i:s'));

                    if ($withdrawali[0]["presentationfee"] > 0) {
                        $mpcontent = "类型：提现手续费 | 提现ID：" . $withdrawali[0]["id"];
                        OrderModel::insertMoneypath($withdrawali[0]["uid"], -$withdrawali[0]["presentationfee"], $mtypepfv, $mpcontent, $withdrawali[0]["id"], $datetime->format('Y-m-d H:i:s'));
                    }
                }
			}
			
			echo "成功";exit();
		}else{
			echo "失败";exit();
		}
	
	
	}
	
	
	
	
	
	
	
	
	
	
	/**
	 * 充值管理-审核中
	 */
	public function rechargeon()
	{
		$this->assign('pagesigntitle',"审核中-充值管理");
		
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
			
			$sqlwhereadd=" WHERE state = 1 and ( uid = '".$_GET['querykeywords']."' or uid in (SELECT id FROM `user` WHERE username='".$_GET['querykeywords']."') ) ";
			$pagehrefadd="/querykeywords/".$_GET['querykeywords'];
			$querykeywords=$_GET['querykeywords'];
		}else{
			$sqlwhereadd=" WHERE state = 1 ";
		}
		
		

		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `recharge` ".$sqlwhereadd." order by id asc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		for($i=0;$i<count($data);$i++){
			$username = self::DB()->query("SELECT username FROM `user` WHERE id='".$data[$i]['uid']."' ")->fetchAll();
			$data[$i]['username'] = $username[0]['username']?: "";
		}
		
		$sqlall="SELECT id FROM `recharge` ".$sqlwhereadd;
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		
		
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		
		
		
		
		$this->assign('querykeywords',$querykeywords);
		$this->assign('pagehrefadd',$pagehrefadd);
		$this->assign('data',$data);
		
		
		
		
		
		$this->display(self::$WsCtrlClass."_"."recharge.tpl");
	}
	/**
	 * 充值管理-已处理
	 */
	public function rechargeed()
	{
		$this->assign('pagesigntitle',"已处理-充值管理");
		
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
			
			$sqlwhereadd=" WHERE state <> 1 and ( uid = '".$_GET['querykeywords']."' or uid in (SELECT id FROM `user` WHERE username='".$_GET['querykeywords']."') ) ";
			$pagehrefadd="/querykeywords/".$_GET['querykeywords'];
			$querykeywords=$_GET['querykeywords'];
		}else{
			$sqlwhereadd=" WHERE state <> 1 ";
		}
		
		

		$pagenum=self::$webconfig['pagelistnumber']['val'];
		
		$sql="SELECT * FROM `recharge` ".$sqlwhereadd." order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
		for($i=0;$i<count($data);$i++){
			$username = self::DB()->query("SELECT username FROM `user` WHERE id='".$data[$i]['uid']."' ")->fetchAll();
			$data[$i]['username'] = $username[0]['username']?: "";
		}
		
		$sqlall="SELECT id FROM `recharge` ".$sqlwhereadd;
		$dallnum = self::DB()->query($sqlall)->fetchAll();
		
		
		/*设置分页导航*/
		$pagination = new \core\lib\model\vir\pagination();
		$pagination->setnav($data,$dallnum,$pagenum,$this);
		
		
		
		
		$this->assign('querykeywords',$querykeywords);
		$this->assign('pagehrefadd',$pagehrefadd);
		$this->assign('data',$data);
		
		
		
		
		
		$this->display(self::$WsCtrlClass."_"."recharge.tpl");
	}
	
	
	
	public function rechargedo()
	{
		$state = post('state');
		if($state != -1 && $state != 2){
			echo "失败";exit();
		}
		
		$rechargei = self::DB()->select("recharge" ,[
			"id","uid","money","state"
		],["AND" =>[
			"id[=]" => post('id')
		]]);
		
		if(count($rechargei) < 1){
			echo "失败";exit();
		}

		if($rechargei[0]["state"] != 1){
			echo "ed";exit();
		}
		
		$res = self::DB()->update("recharge",[
			"state" => $state
		],["AND" =>[
			"id[=]" => post('id'),
			"state[=]" => 1
		]]);
		
		if($res){
			
			$mtypev = "money";
			$mtypepv = 111;
			
			if($state == -1){
				
				
			}
			
			if($state == 2){
				
				$userc = self::DB()->select("user" ,[
					"id",$mtypev
				],["AND" =>[
					"id[=]" => $rechargei[0]["uid"]
				]]);
				
				
				if(count($userc)>0 && is_numeric($rechargei[0]["money"])){
					
					$usercup = self::DB()->update("user",[
						$mtypev => $userc[0][$mtypev]+$rechargei[0]["money"]
					], [
						"id[=]" => $userc[0]['id']
					]);
				}
				
				$datetime = new \DateTime;
				$mpcontent = "类型：用户充值 | 充值ID：".$rechargei[0]["id"];
				OrderModel::insertMoneypath($rechargei[0]["uid"],$rechargei[0]["money"],$mtypepv,$mpcontent,$rechargei[0]["id"],$datetime->format('Y-m-d H:i:s'));
				
			}
			
			echo "成功";exit();
		}else{
			echo "失败";exit();
		}
	}

    public function slidelist()
    {
        if(empty($_GET['page'])||$_GET['page']<1){
            $_GET['page']=1;
        }
        $pagenum=self::$webconfig['pagelistnumber']['val'];
        $sql="SELECT * FROM `slide` order by id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
        $data = self::DB()->query($sql)->fetchAll();
        for($i=0;$i<count($data);$i++){
            $data[$i]['time'] = date('Y-m-d H:i:s',$data[$i]['time']);
        }
        $sqlall="SELECT id FROM `slide`";
        $dallnum = self::DB()->query($sqlall)->fetchAll();
        /*设置分页导航*/
        $pagination = new \core\lib\model\vir\pagination();
        $pagination->setnav($data,$dallnum,$pagenum,$this);
        $this->assign('data',$data);
        $this->display();
    }

    public function slideadd()
    {
        $this->display();
    }

    public function slideadd_do()
    {
        $last_insert_id = self::DB()->insert("slide", [
            "name" => post('name'),
            "type" => post('type'),
            "img" => post('img'),
            "status" => post('status'),
            "time" => time()
        ]);
        if($last_insert_id){
            echo "成功";
        }else{
            echo "添加失败！";
        }
    }

    public function slideedit()
    {
        $sql = "SELECT * FROM `slide` where id = ".$_GET['id'];
        $data = self::DB()->query($sql)->fetchAll();
        $this->assign('data',$data[0]);
        $this->display();
    }

    public function slideedit_do()
    {
        $res = self::DB()->update("slide",[
            "name" => post('name'),
            "type" => post('type'),
            "img" => post('img'),
            "status" => post('status'),
            "time" => time()
        ], [
            "id[=]" => post('id')
        ]);
        if($res == 1){
            echo "成功";
        } else {
            echo "编辑失败";
        }
    }
}
?>