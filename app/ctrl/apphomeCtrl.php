<?php

namespace app\ctrl;

use app\model\user\UserModel;

use app\model\tram\OrderModel;
use app\ormModel\Coupon;
use app\ormModel\Itemlist;
use app\ormModel\Itemlog;
use app\ormModel\Itemlogp;
use app\ormModel\Moneypath;
use app\ormModel\User;
use think\facade\Db;

class apphomeCtrl extends commonCtrl
{
	public static $webconfig;
	public static $myuserinfo;
	
	public function __construct()
	{
	    $this->INDEX_OR_ADMIN = "app/views/app_cn_v1";
		
		$this->assign('WsCtrlClass',self::$WsCtrlClass);
		
		self::$webconfig=self::webconfig();
		$this->assign('webconfig',self::$webconfig);
		//print_r(self::$webconfig);exit;
		
		$ActionUnloginArr = array("auto_task","");	//免登录Action数组
		
		if(in_array(strtolower(self::$WsAction), $ActionUnloginArr)){
			//免登录
		}else{
			//未登录跳登录页
			if(!UserModel::haslogin()){
				HeaderLocationCA("appuser","login");
			}
		}
		if(UserModel::haslogin()){
			$myuserinfo = self::DB()->query("SELECT id,username,name,money,money2,money3,proportion,coinaddress,authentication FROM `user` WHERE id='".$_SESSION['userinfo']['id']."' ")->fetchAll();
			self::$myuserinfo=$myuserinfo[0];
			$this->assign('myuserinfo',$myuserinfo[0]);
		}
	}
	
	//每分钟执行
	public function auto_task()
	{
	    $time = time() - 24*3600;
		$list = Itemlog::where([['status', '=' , 0], ['ltime', '<', $time]])->select();
		$mpcontent = '投资返利';
		foreach($list as $k => $v){
		    $item = self::DB()->select("itemlist","*",['id[=]'=>$v['item_id']]);
            $item = $item[0];
            $day_num =  ceil((time() - $v['time'])/3600/24)-1;
            
		    if ($day_num > 0){
                $lx = round($v['money'] * $v['arate']/100/360 * $v['num'], 2);
                //派发利息
    			User::update(['money' => Db::raw('money+'.$lx)], ['id' => $v['uid']]);
    			//余额记录
    			OrderModel::insertMoneypath_proportion($v['uid'], $lx, "152", $mpcontent, $v['id'], $v['arate']);
    			//记录最后一次收益的时间
    			Itemlog::update(['ltime' => time()],['id' => $v['id']]);
            }
		}

        $list2 = Itemlogp::where([['status', '=' , 0], ['ltime', '<', $time]])->select();
		$mpcontent2 = '推广返利';
		foreach($list2 as $k=>$v){
		    $item = self::DB()->select("itemlist","*",['id[=]'=>$v['item_id']]);
            $item = $item[0];
            $day_num =  ceil((time() - $v['time'])/3600/24)-1;
            
		    if ($day_num > 0){
    		    $money = round($v['money'] * $v['arate']/100/360 * $v['num'] * $v['jlbl'], 2);
    			//派发推广奖励
                User::update(['money' => Db::raw('money+'.$money)], ['id' => $v['uid']]);
    			//余额记录
    			OrderModel::insertMoneypath_proportion($v['uid'], $money, "153", $v['lown'].'级'.$mpcontent2, $v['item_no'], $v['jlbl']);
    			//记录最后一次收益的时间
        	    itemlogp::update(['ltime' => time()],['id' => $v['id']]);
		    }
		}
	}
	
	/*
	 *首页
	 */
	public function index()
	{
        $list = self::DB()->query("SELECT * from `itemlist` where isty=0")->fetchAll();
        $this->assign('tradeorders', $list);

        $slides = self::DB()->query("SELECT * FROM `slide` where status=1 and type=1 order by id desc")->fetchAll();
        $this->assign('slides', $slides);

        $ty = self::DB()->query("SELECT * from `itemlist` where isty = 1 order by id limit 1")->fetchAll();
        $this->assign('ty', $ty[0]);

        $tynum = self::DB()->query("SELECT count(*) num from `itemlog` where uid='".$_SESSION['userinfo']['id']."' and isty=1")->fetchAll();
        $this->assign('tyswitch', ($tynum[0]['num']==0 && $ty) ? 1 : 0);

		$this->display();
	}

    /**
     * 项目详情
     */
    public function itemdetail()
    {
        $id = $_GET['id'];
        $item = self::DB()->query("SELECT * from `itemlist` where id ='".$id."'")->fetchAll();
        $time2 = date('Y-m-d', strtotime("+".$item[0]['day_num']." days"));
        $this->assign('time2',$time2);
        $this->assign('item',$item[0]);
        $this->assign('id',$id);
        $this->display();
    }

    /**
     * 立即存入
     */
    public function itembuy()
    {
        $id = intval($_GET['id']);
        $item = self::DB()->query("SELECT * from `itemlist` where id ='".$id."'")->fetchAll();
		$uinfo = self::DB()->select("user",['money'],['id'=>$_SESSION['userinfo']['id']]);
	    $day = date('Y.m.d', strtotime("+1 day"));
	    $day2 = date('Y.m.d',(time() + $item[0]['day_num'] * 86400));
	    $yqsy = round($item[0]['arate']/100/360 * $item[0]['price'], 2);
	    
	    $this->assign('day2',$day2);
        $this->assign('yqsy',$yqsy);
        $this->assign('item',$item[0]);
		$this->assign('day',$day);
		$this->assign('uinfo',$uinfo[0]);
        $this->display();
    }
	
	public function itembuydo()
    {
		$id = intval($_POST['id']);
		$num = intval($_POST['num']);
		$uinfo = self::DB()->select("user",['money','id','superioruid'],['id'=>$_SESSION['userinfo']['id']]);
		$uinfo = $uinfo[0];
        $item = self::DB()->select("itemlist","*",['id[=]'=>$id]);
        $item = $item[0];
		if($item['price'] * $num > $uinfo['money']){
			error(-1002 , "余额不足");
		}

		$insert_id = self::DB()->insert("itemlog", [
			"uid" => $uinfo['id'],
			"money" => $item['price'],
			"num"   =>  $num,
			"item_id" => $item['id'],
			"arate" => $item['arate'],
			"day_num" => $item['type'] ? 0 : $item['day_num'],
			"time" => time(),
			"stime" => $item['type'] ? time() : time() + ($item['day_num'] * 86400),
			"status" => 0
		]);
		if($insert_id){
            Db::startTrans();
            try {
                if($uinfo['superioruid'] != 0){
                    if (($item['price'] * $num >= 1000) && ($item['price'] * $num % 1000 == 0)){
                        $yjjl = intval(self::$webconfig['yjjl']['val'])/100;
                        Itemlogp::create([
                            "item_no" => $insert_id,
                            "uid" => $uinfo['superioruid'],
                            "fuid" => $uinfo['id'],
                            "money" => $item['price'],
                            "num"   =>  $num,
                            "arate" => $item['arate'],
                            "item_id" => $item['id'],
                            "lown" => 1,
                            "jlbl" => $yjjl,
                            "time" => time(),
                            "stime" => $item['type'] ? time() : time() + ($item['day_num'] * 86400),
                            "status" => 0
                        ]);
                    }
                    if ($item['price'] * $num >= 1000){
                        $uinfo2 = User::where('id', $uinfo['superioruid'])->field('money,id,superioruid')->find();
                        if($uinfo2['superioruid'] != 0){
                            $ejjl = intval(self::$webconfig['ejjl']['val'])/100;
                            Itemlogp::create([
                                "item_no" => $insert_id,
                                "uid" => $uinfo2['superioruid'],
                                "fuid" => $uinfo['id'],
                                "money" => $item['price'],
                                "num"   =>  $num,
                                "arate" => $item['arate'],
                                "item_id" => $item['id'],
                                "lown" => 2,
                                "jlbl" => $ejjl,
                                "time" => time(),
                                "stime" => $item['type'] ? time() : time() + ($item['day_num'] * 86400),
                                "status" => 0
                            ]);
                        }
                    }
                }
                User::update(['money' => Db::raw('money-'.$item['price'] * $num)], ['id' => $uinfo['id']]);
                Db::commit();
            } catch (\Exception $e) {
                Db::rollback();
                error(-1008 , "存入失败");
            }

			$mpcontent = '项目投资';
			OrderModel::insertMoneypath($uinfo['id'],$item['price'] * $num,"151",$mpcontent,$id);
			$_SESSION['itemlog_id'] = $insert_id;
			success(1000 , "存入成功");
		} else {
			error(-1008 , "存入失败");
		}
    }

    public function itemsuccess()
    {
        $order = self::DB()->query("SELECT * from `itemlog` where id = '".$_SESSION['itemlog_id']."'")->fetchAll();
        $this->assign('order', $order[0]);
        $this->display();
    }
		
	/*
	 *接单中订单
	 */
	public function tradeorderon()
	{
	   //新增
        $tradeorders = Itemlog::where(['uid'=>$_SESSION['userinfo']['id'],'status'=>0])->order('id','desc')->select()->toArray();

		$m152 = 0;
		foreach($tradeorders as $k=>$v){

			$tradeorders[$k]['timesv'] = round( (time()-$v['time']) / ($v['stime']-$v['time']),2);
            $tradeorders[$k]['time'] = date('Y-m-d',$v['time']);
            $tradeorders[$k]['stime'] = date('Y-m-d',$v['stime']);

            $item = self::DB()->select("itemlist","*",['id[=]'=>$v['item_id']]);
            $item = $item[0];
            $tradeorders[$k]['item_name'] = $item['item_name'];
            $tradeorders[$k]['type'] = $item['type'];
            
            $tradeorders[$k]['sy'] = round(Moneypath::where(['mtype' => 152, 'additionalid' => $v['id'], 'uid' => self::$myuserinfo['id']])->sum('money'), 2);
            
            $tradeorders[$k]['type'] = $item['type'];
            
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
			$m152 += $moneyp ?? 0;
		}
		
		$this->assign('tradeorders',$tradeorders);
		
		
		$jtimev = date("Y-m-d 00:00:00");
		$ztimev = date("Y-m-d 00:00:00",strtotime("-1 day"));
		$zctimev = date("Y-m-d H:i:s",strtotime("-1 day"));
		
		
		$moneya151 = self::DB()->query("SELECT SUM(money) summoney FROM moneypath where mtype = 151 and uid='".self::$myuserinfo['id']."' ")->fetchAll();
		$moneya151 = $moneya151[0]['summoney']?: 0;
		
		$this->assign('moneya151',abs($moneya151));

		$zmoneya151 = self::DB()->query("SELECT SUM(money) summoney FROM moneypath where mtype = 151 and time > '".$ztimev."' and time < '".$jtimev."' and uid='".self::$myuserinfo['id']."' ")->fetchAll();
		$zmoneya151 = $zmoneya151[0]['summoney']?: 0;
		
		$this->assign('zmoneya151',abs($zmoneya151));

		$money = Moneypath::where(['mtype' => 152, 'uid' => self::$myuserinfo['id']])->sum('money');
		$moneya152 = round($money, 2);
		
		$this->assign('moneya152',$moneya152);

		$this->display();
	}

	public function tradeorderon_detail()
    {
        $id = intval($_GET['id']);
		$tradeorder = self::DB()->query("SELECT * from `itemlog` where id = '".$id."' and uid = '".$_SESSION['userinfo']['id']."' ")->fetchAll();

		$tradeorder[0]['time1'] = date('Y-m-d',$tradeorder[0]['time']);
		$tradeorder[0]['time2'] = date('Y-m-d',$tradeorder[0]['time']+3600*24);
		$tradeorder[0]['timev1'] = date('Y-m-d H:i:s',$tradeorder[0]['time']);
		$tradeorder[0]['timev2'] = date('Y-m-d H:i:s',$tradeorder[0]['time']+3600*24);
		$tradeorder[0]['stime1'] = date('Y-m-d H:i:s',$tradeorder[0]['stime']);

		$item = self::DB()->select("itemlist","*",['id[=]'=>$tradeorder[0]['item_id']]);
        $item = $item[0];
        
        $tradeorder[0]['item_name'] = $item['item_name'];
        $tradeorder[0]['type'] = $item['type'];
        
    	$tradeorder[0]['sy'] = round(Moneypath::where(['mtype' => 152, 'additionalid' => $tradeorder[0]['id'], 'uid' => self::$myuserinfo['id']])->sum('money'), 2);
    	
		$tradeorder[0]['status'] = '确认中';
		if(date('Y-m-d',time()) == $tradeorder[0]['time1']){
			$tradeorder[0]['status'] = '确认中';
		}
		if(date('Y-m-d',time()) == $tradeorder[0]['time2']){
			$tradeorder[0]['status'] = '购买成功';
		}
		if(date('Y-m-d',time()) > $tradeorder[0]['time2']){
			$tradeorder[0]['status'] = '产生收益中';
		}
		
        $this->assign('tradeorder',$tradeorder[0]);
        $this->display();
    }
	
	//项目列表
	public function itemlist()
	{
		$list = self::DB()->query("SELECT * from `itemlist`")->fetchAll();	
		
		$this->assign('tradeorders',$list);
		
		$this->display();
	}
	
	//项目列表
	public function itemlogp()
	{
		$list = self::DB()->query("SELECT * from `itemlogp` WHERE uid in(SELECT id from user WHERE superioruid = '".$_SESSION['userinfo']['id']."') order by id desc")->fetchAll();	
		
		foreach($list as $k=>$v){
			
			$list[$k]['time'] = date('Y-m-d',$v['time']);
			$list[$k]['stime'] = date('Y-m-d',$v['stime']);
			if($v['status'] == 0){
				$list[$k]['status'] = '未返利';
			} else {
				$list[$k]['status'] = '已返利';
			}
			/* $info =  self::DB()->query("SELECT item_name from `itemlist` where id = '".$v['item_id']."'")->fetchAll();	
			$tradeorders[$k]['item_name'] = $info[0]['item_name']; */
		}
		
		$this->assign('tradeorders',$list);
		
		$this->display();
	}
	
	
	public function gettraorderonallData()
	{		
		$tradeorders = self::DB()->query("SELECT * from `tradeorder` where state = 1 and uid = '".$_SESSION['userinfo']['id']."'")->fetchAll();	
		
		
		foreach($tradeorders as $k=>$v){
			$profitc = self::DB()->query("SELECT SUM(money) summoney FROM `moneypath` WHERE additionalid='".$v['id']."' and mtype=152 and uid='".self::$myuserinfo['id']."' ")->fetchAll();
			$profitc = $profitc[0]['summoney']?: 0;
						
			$profitc = number_format($profitc, 4, '.', '');
			
			$tradeorders[$k]['profit'] = $profitc;
		}
		
		success(1,"SUCCESS",$tradeorders);
	}
	
	
	
	
	
	
	/**
	 * 已完成订单
	 */
	public function tradeordered()
	{
		$this->display();
	}
	
	
	//已完成订单接口
	public function seltradeordereddo()
	{		
		if(empty(get('page')) || !is_numeric(get('page')) || get('page') <1){
			$page=1;
		}else{
			$page=ceil(get('page'));
		}
		
		
		$pagenum=SelPageApiDataNumber;
		$sqlwhereadd=" WHERE state = 2 and uid like '".$_SESSION['userinfo']['id']."'";
		$sql="SELECT * FROM tradeorder"." ".$sqlwhereadd." order by  id desc limit ".(($page-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
   		foreach($data as $k=>$v){
			$profitc = self::DB()->query("SELECT SUM(money) summoney FROM `moneypath` WHERE additionalid='".$v['id']."' and mtype=152 and uid='".self::$myuserinfo['id']."' ")->fetchAll();
			$profitc = $profitc[0]['summoney']?: 0;
						
			$profitc = number_format($profitc, 4, '.', '');
			
			$data[$k]['profit'] = $profitc;
		}
		
		$res = array();
		$res["data"] = $data;
		if(count($data)<1){
			success(1005,"SUCCESS",$data);
		}else{
			success(1001,"SUCCESS",$data);
		}
	}

    public function tystartdo()
    {
        $id = intval($_GET['id']);
        $uinfo = self::DB()->select("user",['money','id'],['id'=>$_SESSION['userinfo']['id']])[0];
        $item = self::DB()->select("itemlist","*",['id[=]'=>$id])[0];
        $res = self::DB()->query("SELECT count(*) num from `itemlog` where uid='".$uinfo['id']."' and isty=1")->fetchAll()[0]['num'];
        if (!$item['isty']){
            echo json_encode(['code' => 0, 'msg'=> "该项目不是新手体验金项目"]);exit;
        }
        if ($res>0){
            echo json_encode(['code' => 0, 'msg'=> "每个账号只能领取一次新手体验金"]);exit;
        }

        $insert_id = self::DB()->insert("itemlog", [
            "uid" => $uinfo['id'],
            'isty' => $item['isty'],
            "money" => $item['tymoney'],
            "smoney" => ($item['day_num'] * $item['arate']/100 / 360) * $item['tymoney'],
            "item_id" => $item['id'],
            "arate" => $item['arate'],
            "day_num" => $item['day_num'],
            "time" => time(),
            "stime" => time() + ($item['day_num'] * 86400),
            "status" => 0
        ]);
        if($insert_id){
            OrderModel::insertMoneypath($uinfo['id'], $item['tymoney'], "151", '新手体验金', $id, date('Y-m-d H:i:s', time()), 1);
            echo json_encode(['code' => 1, 'msg'=> "恭喜您, 领取成功"]);exit;
        } else {
            echo json_encode(['code' => 0, 'msg'=> "领取失败"]);exit;
        }
    }
    
    /*
	 *转出存单
	 */
	public function itemsell()
	{
	    $item_id = intval(get('id'));

        $tradeorders = Itemlog::where(['uid' => self::$myuserinfo['id'], 'status' => 0, 'item_id' => $item_id])->order('id','desc')->select()->toArray();
        
        $item = self::DB()->select("itemlist","*",['id[=]'=>$item_id]);
        $item = $item[0];

		foreach($tradeorders as $k=>$v){

			$tradeorders[$k]['timesv'] = round( (time()-$v['time']) / ($v['stime']-$v['time']),2);
            $tradeorders[$k]['time'] = date('Y-m-d',$v['time']);
            $tradeorders[$k]['stime'] = date('Y-m-d',$v['stime']);

            
            $tradeorders[$k]['item_name'] = $item['item_name'];
            $tradeorders[$k]['type'] = $item['type'];
        
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
                if (time() >=  $tradeorders[$k]['stime']){
                    $tradeorders[$k]['switch'] = '未到期，转出扣15%';
                    $tradeorders[$k]['switch_a'] = 0;
                }else{
                    $tradeorders[$k]['switch'] = '可转出';
                    $tradeorders[$k]['switch_a'] = 1;
                }
                
            }else{
                $tradeorders[$k]['timesv'] = 0;
                $tradeorders[$k]['bg1'] = '#514e36';
                $tradeorders[$k]['bg2'] = '#514e36';
                $tradeorders[$k]['bg3'] = '#514e36';
                $tradeorders[$k]['switch'] = '可转出';
                $tradeorders[$k]['switch_a'] = 1;
            }
		}
		
		$this->assign('tradeorders', $tradeorders);
		$this->assign('item', $item);
		
		$jtimev = date("Y-m-d 00:00:00");
		$ztimev = date("Y-m-d 00:00:00",strtotime("-1 day"));
		$zctimev = date("Y-m-d H:i:s",strtotime("-1 day"));
		
		$this->display();
	}
	
	public function itemselldo(){
	    $id = intval(post('id'));
	    $data = Itemlog::where('id', $id)->find();
	    $item = Itemlist::where('id', $data['item_id'])->find();
	    if (empty($data)){
	        echo json_encode(['code' => 0, 'msg'=> "存单不存在"]);exit;
	    }
	    if ($data['uid'] <> self::$myuserinfo['id']){
	        echo json_encode(['code' => 0, 'msg'=> "提交数据出错"]);exit;
	    }
	    if ($item['type'] == 0){
	        if (time() <= $data['stime']){
	            $data['money'] *= 0.85;
	        }
	    }
	    Db::startTrans();
	    try{
	        User::update([
	            'money'     =>  Db::raw('money + ' . ($data['money'] * $data['num'])),
	        ],[
	            'id'        =>  $data['uid']
	        ]);
	        Itemlog::update([
	            'status'    =>  1,
	        ],[
	            'id'        =>  $data['id']
	        ]);
	        Itemlogp::update([
	            'status'    =>  1,
	        ],[
	            'item_no'   =>  $data['id']
	        ]);
	        Db::commit();
			OrderModel::insertMoneypath($data['uid'], $data['money'] * $data['num'], "170", '存单金额转出', $data['id']);
	        echo json_encode(['code' => 1, 'msg'=> "转出成功"]);exit;
	    }catch(\Exception $e){
	        Db::rollback();
	        echo json_encode(['code' => 0, 'msg'=> "转出失败：".$e->getMessage()]);exit;
	    }

	}
}
?>