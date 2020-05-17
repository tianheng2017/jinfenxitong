<?php
//错误页
function ErrorPage($title="Error",$name="Error",$content="页面出错了！",$code="500"){
	if($title==NULL){	$title="Error";	}
	if($name==NULL){	$name="Error";	}
	if($content==NULL){	$content="页面出错了！";	}
	if($code==NULL){	$title="500";	}
	
	include('core/view/errorpage/index.php');
	exit;
}
function InfoPage($title="VIRPHP",$name="Welcome.",$content="框架引用成功！",$code="200"){
	if($title==NULL){	$title="VIRPHP";	}
	if($name==NULL){	$name="Welcome.";	}
	if($content==NULL){	$content="框架引用成功！";	}
	if($code==NULL){	$title="200";	}
	
	include('core/view/infopage/index.php');
	exit;
}

function AlertPage($title="Title",$name="Name.",$content="Content",$code="200"){
	if($title==NULL){	$title="Title";	}
	if($name==NULL){	$name="Name.";	}
	if($content==NULL){	$content="Content";	}
	if($code==NULL){	$title="200";	}
	
	include('core/view/alertpage/index.php');
	exit;
}

//地址跳转
function HeaderLocation($WsUrl){
	header('Location:'.$WsUrl);
	exit;
}
function HeaderLocationCA($WsCtrlClass="",$WsAction="",$_GETSTR=""){
	header('Location:'.WSURLVAL($WsCtrlClass,$WsAction,$_GETSTR));
	exit;
}

//返回地址
function WSURLVAL($WsCtrlClass="",$WsAction="",$_GETSTR=""){
	
	if($WsCtrlClass=="" || $WsAction==""){
		$WsCtrlClass = core\lib\conf::get('CTRL','route');
		$WsAction = core\lib\conf::get('CTRL','route');
	}
	
	
	
	if(strpos($_GETSTR, '=')!==false){
		$_GETSTR=str_replace("=", "/?/", $_GETSTR);
		$_GETSTR=str_replace("&", "/?/", $_GETSTR);
		$_GETSTR=urlencode($_GETSTR);
		
		$_GETSTR=str_replace("%2F%3F%2F", "/", $_GETSTR);
		
		$_GETSTR=str_replace("%", "_b_f_h_", $_GETSTR);
		
		return INSTALL_DIR.'/'.$WsCtrlClass.'/'.$WsAction.'/'.$_GETSTR;
	}else{
		return INSTALL_DIR.'/'.$WsCtrlClass.'/'.$WsAction;
	}
}

//输出地址
function WSURLSHOW($WsCtrlClass="",$WsAction="",$_GETSTR=""){
	
	if($WsCtrlClass=="" || $WsAction==""){
		$WsCtrlClass = core\lib\conf::get('CTRL','route');
		$WsAction = core\lib\conf::get('CTRL','route');
	}
	
	
	
	if(strpos($_GETSTR, '=')!==false){
		$_GETSTR=str_replace("=", "/?/", $_GETSTR);
		$_GETSTR=str_replace("&", "/?/", $_GETSTR);
		$_GETSTR=urlencode($_GETSTR);
		
		$_GETSTR=str_replace("%2F%3F%2F", "/", $_GETSTR);
		
		$_GETSTR=str_replace("%", "_b_f_h_", $_GETSTR);
		
		print_r( INSTALL_DIR.'/'.$WsCtrlClass.'/'.$WsAction.'/'.$_GETSTR );
	}else{
		print_r( INSTALL_DIR.'/'.$WsCtrlClass.'/'.$WsAction );
	}
}






function PJSONRES($res=array()){
	$resjson = json_encode($res,true);
	print_r($resjson);
	exit;
}
function PJSONRESC($res=array()){
	$resjson = json_encode($res,true);
	print_r($resjson);
}



function success($code=200,$info="",$data=null){
	PJSONRES(['state' => 'success', 'code' => $code, 'info' => $info, 'data' => $data]);
}


function error($code=-1,$info="",$data=null){
	PJSONRES(['state' => 'error', 'code' => $code, 'info' => $info, 'data' => $data]);
}


function rsuccess($code=200,$info="",$data=null){
	return ['state' => 'success', 'code' => $code, 'info' => $info, 'data' => $data];
}

function rerror($code=-1,$info="",$data=null){
	return ['state' => 'error', 'code' => $code, 'info' => $info, 'data' => $data];
}





function get($key,$val=null){
	
	if(array_key_exists($key, $_GET)){
		return addslashes($_GET[$key]);
	}else{
		return "";
	}
	
}

function post($key,$val=null){
	
	if(array_key_exists($key, $_POST)){
		return addslashes($_POST[$key]);
	}else{
		return "";
	}
}
?>