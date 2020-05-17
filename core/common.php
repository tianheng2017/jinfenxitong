<?php

namespace core;

class common extends virphp
{
	
	public static $DB;
	public static $DBISOPEN = false;
	
	public function __construct()
	{
		
		
		
	}
	
	public function display($view = "")
	{
		if($view == ""){
			parent::display(self::$WsAction.'.tpl');
		}else{
			parent::display($view);
		}
	}
	
	
	public function DB()
	{
		if(self::$DBISOPEN){
			return self::$DB;
		}else{
			self::$DB = new \core\lib\model\DB();
			self::$DBISOPEN = true;
			return self::$DB;
		}
	}
}
?>