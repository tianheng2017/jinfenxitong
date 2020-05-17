<?php
namespace core;

class virphp
{
	public static $WsCtrlClass;
	public static $WsAction;
	
	public static $classMap = array();
	public $assign;
	public $INDEX_OR_ADMIN = VIEW_INDEXDIR;//默认为前台模板，开发后台时注意在控制器初始化方法中加上   $this->INDEX_OR_ADMIN = VIEW_ADMINDIR;
	static public function run()
	{
		\core\lib\log::init();	//日志开启 - 初始化
		//\core\lib\log::log('test');	//日志测试
		//\core\lib\log::log($_SERVER,'server');	//日志测试
		
		require_once 'core/lib/model/medoo.php';//medoo 注册---数据库轻量级操作类
		
		//加载think-orm
        require_once 'vendor/autoload.php';
        require_once 'core/config/ormconfig.php';
		
		
		if(SESSION_STARTFLAG){
			if(!isset($_SESSION)){ session_start();}  //开启Session
		}
		
		$route = new \core\lib\route();
		$ctrlClass = $route->ctrl;
		$action = $route->action;
		$action = str_replace(".html","",$action);
		$action = str_replace("-","",$action);
		
		
		self::$WsCtrlClass = $ctrlClass;
		self::$WsAction = $action;
		
		$ctrlfile = APP.'ctrl/'.$ctrlClass.'Ctrl.php';
		$ctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
		if(is_file($ctrlfile)){
			include $ctrlfile;
			$ctrl = new $ctrlClass;
			if(!method_exists($ctrl,$action)){
				ErrorPage(NULL,"Error-actionNone","该页面不存在！","404");
				//throw new \Exception('找不到该方法'.$action);
			}
			$ctrl->$action();
		} else {
			ErrorPage(NULL,"Error-ctrlNone","该页面不存在！","404");
			//throw new \Exception('找不到控制器'.$ctrlClass);
		}
	}
	
	static public function load($class)
	{
		//自动加载类库
		if(isset($classMap[$class])){
			return true;
		} else {
			$class = str_replace('\\','/',$class);
			$file = $class.'.php';
			
			if(is_file($file)){
				include $file;
				self::$classMap[$class] = $class;
			} else {
				return false;
			}
		}
	}
	
	public function assign($name,$value)
	{
		$this->assign[$name] = $value;
	}
	public function display($file)
	{
		define('VIEW_ROOTPATH',INSTALL_DIR.'/'.$this->INDEX_OR_ADMIN);  //当前所用的视图模板文件夹相对于根目录路径
		$file = $this->INDEX_OR_ADMIN.'/'.$file;
		if(is_file($file)){
			//extract($this->assign);
			//include $file;

			//-----------------     smarty 注册       --------------------------
			require_once 'core/lib/smarty/libs/Smarty.class.php';
			$smarty = new \Smarty;
			//$smarty->debugging = true;     //开启调试
			//$smarty->caching = true;       //开启缓存
			//定界符----修改默认定界符‘ {} ’防止与HTML文件冲突
			$smarty->left_delimiter = '<{';
			$smarty->right_delimiter = '}>';
			$smarty->template_dir = $this->INDEX_OR_ADMIN.'/';  //修改视图目录
			/**参数修改
			$smarty->template_dir = __SITE_ROOT . "/templates/";
		　　$smarty->compile_dir = __SITE_ROOT . "/templates_c/";
		　　$smarty->config_dir = __SITE_ROOT . "/configs/";
		　　$smarty->cache_dir = __SITE_ROOT . "/cache/";
		　　$smarty->left_delimiter = '<{';
		　　$smarty->right_delimiter = '}>';    */
			$smarty->cache_lifetime = 120;
			$smarty->assign($this->assign);
			$smarty->display($file);
		}
	}
	
}
?>