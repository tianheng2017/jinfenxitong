<?php

namespace app\model\tram;

class OrderModel
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
	
	/****************************** 以下为公共操作的方法 ******************************/

	
	/**
     * 资金详情记录
     */
	public static function insertMoneypath($uid,$money,$mtype,$content,$additionalid=0,$time=null,$isty=0)
    {
		if($time == null){
			$time = date('Y-m-d H:i:s', time());
		}
		
		//uid	
		//mtype 111：充值；112：提现；113：后台充值；131：余额兑换额度；132：额度兑换余额；151：投资交易；152：投资收益；153：团队返利；
		//161：USDT提现；163：佣金提现；167：提现手续费；168：提现手续费；
		//money 金额	content 描述	additionalid 额外 ID	additionalproportion	返利或收益时的比例	time 时间
		
		$insert_id = self::DB()->insert("moneypath", [
			"uid" => $uid,
			"mtype" => $mtype,
			'money'=> $money,
			"content" => $content,
			"additionalid" => $additionalid,
			'time' => $time,
            'isty' => $isty
		]);
		
		return $insert_id;
	}
	
	public static function insertMoneypath_proportion($uid,$money,$mtype,$content,$additionalid=0,$additionalproportion=0,$time=null,$isty=0)
    {
		if($time == null){
			$time = date('Y-m-d H:i:s', time());
		}
		
		//uid	
		//mtype 111：充值；112：提现；113：后台充值；131：余额兑换额度；132：额度兑换余额；151：投资交易；152：投资收益；153：团队返利；
		//money 金额	content 描述	additionalid 额外 ID	additionalproportion	返利或收益时的比例	time 时间
		
		$insert_id = self::DB()->insert("moneypath", [
			"uid" => $uid,
			"mtype" => $mtype,
			'money'=> $money,
			"content" => $content,
			"additionalid" => $additionalid,
			"additionalproportion" => $additionalproportion,
			'time' => $time,
            'isty' => $isty
		]);
		
		return $insert_id;
	}
	

}
?>