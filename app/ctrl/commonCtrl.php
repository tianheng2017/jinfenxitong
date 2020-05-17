<?php

namespace app\ctrl;

class commonCtrl extends \core\common
{
	
	public function __construct()
	{

	}
	
	
	public function display($view = "")
	{
		if($view == ""){
			parent::display(self::$WsCtrlClass."_".self::$WsAction.".tpl");
		}else{
			parent::display($view);
		}
	}
	
	
	public function webconfig($name = "")
	{
		if($name == ""){
			$webconfig = self::DB()->query(" SELECT id,name,val,content FROM `webconfig` order by id asc")->fetchAll();
			$data = array();
			
			foreach($webconfig as $k=>$v){
				$data[$v['name']] = $v;
			}
			
			return $data;
			
		}else{
			$webconfig = self::DB()->select("webconfig",[
				'id','name','val','content'
			], [
				"name" => $name
			]);
			if(count($webconfig)>0){
				return $webconfig[0];
			}else{
				return "";
			}
		}
	}
	
}
?>