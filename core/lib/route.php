<?php
namespace core\lib;
use core\lib\conf;
class route
{
	public $ctrl;
	public $action;
	public function __construct()
	{
		//***.com/index/index
		//***.com/index.php/index/index
		/**
		 * 1.隐藏index.php
		 * 2.获取URL 参数部分
		 * 3.返回对应控制器和方法
		 */
		 if(INSTALL_DIR!=""){
			$reuest_uri_get=explode(INSTALL_DIR,$_SERVER['REQUEST_URI'])[1];
		 }else{
			$reuest_uri_get=$_SERVER['REQUEST_URI'];
		 }
		 //print_r($_SERVER['REQUEST_URI']);exit;
		 //print_r($reuest_uri_get);exit;
		 if(isset($reuest_uri_get) && $reuest_uri_get != '/'){

			 //对get格式处理
			 if(true||(strpos($reuest_uri_get, '?')!==false && strpos($reuest_uri_get, '=')!==false)){
				 $reuest_uri_get=str_replace("?", "/", $reuest_uri_get);
				 $reuest_uri_get=str_replace("=", "/", $reuest_uri_get);
				 $reuest_uri_get=str_replace("&", "/", $reuest_uri_get);
			 }
			 
			 
			 
			 // index/index
			 $path = $reuest_uri_get;
			 $patharr = explode('/',trim($path,'/'));
			 //print_r($patharr);exit;
			 if(isset($patharr[0])){
				 $this->ctrl = $patharr[0];
			 }
			 unset($patharr[0]);
			 if(isset($patharr[1])){
				 $this->action = $patharr[1];
			 } else {
				 $this->action = conf::get('ACTION','route');
			 }
			 // url多余部分转换成 GET
			 // id/1/str/2/test/3
			 
			 $count = count($patharr) +2;
			 $i = 2;
			 while($i < $count){
				 if(isset($patharr[$i + 1])){
					 
					 //对get格式处理
					 if(strpos($patharr[$i + 1], '_b_f_h_')!==false){
						 $patharr[$i + 1]=str_replace("_b_f_h_", "%", $patharr[$i + 1]);
						 $_GET[$patharr[$i]] = urldecode($patharr[$i + 1]);
					 }else{
						 $_GET[$patharr[$i]] = $patharr[$i + 1];
					 }
				 }
				 $i = $i + 2;
			 }
		 } else {
			 $this->ctrl =  conf::get('CTRL','route');
			 $this->action =  conf::get('ACTION','route');
		 }
	}
}
?>