<?php
/**打印文本
 * @param $var
 */
function p($var){
	echo($var);
}

/**创建多级文件夹
 * @param $dir
 * @param int $mode
 * @return bool
 */
function mkdirs($dir,$mode=0777){
	if(is_dir($dir)||@mkdir($dir,$mode)){
		return true;
	}
	if(!mkdirs(dirname($dir),$mode)){
		return false;
	}
	return @mkdir($dir,$mode);
}

/**获取用户客户端IP
 * @return mixed|string
 */
function getuserclientip(){
	if(getenv('HTTP_CLIENT_IP')&&strcasecmp(getenv('HTTP_CLIENT_IP'),'unknown'))
	{
		$ip=getenv('HTTP_CLIENT_IP');
	}
	elseif(getenv('HTTP_X_FORWARDED_FOR')&&strcasecmp(getenv('HTTP_X_FORWARDED_FOR'),'unknown'))
	{
		$ip=getenv('HTTP_X_FORWARDED_FOR');
	}
	elseif(getenv('REMOTE_ADDR')&&strcasecmp(getenv('REMOTE_ADDR'),'unknown'))
	{
		$ip=getenv('REMOTE_ADDR');
	}
	elseif(isset($_SERVER['REMOTE_ADDR'])&&$_SERVER['REMOTE_ADDR']&&strcasecmp($_SERVER['REMOTE_ADDR'],'unknown'))
	{
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	$ip=preg_replace("/^([\d\.]+).*/","\\1",$ip);
	return $ip;
}

/**判断是否是手机端
 * @return bool
 */
function isMobile() {
	$mobile = array();
	static $mobilebrowser_list ='Mobile|iPhone|Android|WAP|NetFront|JAVA|OperasMini|UCWEB|WindowssCE|Symbian|Series|webOS|SonyEricsson|Sony|BlackBerry|Cellphone|dopod|Nokia|samsung|PalmSource|Xphone|Xda|Smartphone|PIEPlus|MEIZU|MIDP|CLDC';
	//note 获取手机浏览器
	if(preg_match("/$mobilebrowser_list/i", $_SERVER['HTTP_USER_AGENT'], $mobile)) {
		return true;
	}else{
		if(preg_match('/(mozilla|chrome|safari|opera|m3gate|winwap|openwave)/i', $_SERVER['HTTP_USER_AGENT'])) {
			return false;
		}else{
			if($_GET['mobile'] === 'yes') {
				return true;
			}else{
				return false;
			}
		}
	}
}

/**sql防注入
 * @param $content
 * @return array
 */
function sql_injection($content)
{
	if (!get_magic_quotes_gpc()) {
		if (is_array($content)) {
			foreach ($content as $key=>$value) {
				$content[$key] = addslashes($value);
			}
		} else {
			addslashes($content);
		}
	}
	return $content;
}

/**图片上传接口
 * @param $dirstr
 */
function imguploadSM($dirstr)
{
	$imgurlval="";
	if ( !empty( $_FILES ) ) {
		$tempPath = $_FILES[ 'file' ][ 'tmp_name' ];
		$imguploadtime= new \DateTime;
		$randname=rand(100000,9999999)."".rand(100,999);
		if ($_FILES["file"]["type"] == "image/gif"){
			$imgname=strtotime($imguploadtime->format('Y-m-d H:i:s')).'-'.$randname.'.gif';
		}elseif($_FILES["file"]["type"] == "image/jpg"){
			$imgname=strtotime($imguploadtime->format('Y-m-d H:i:s')).'-'.$randname.'.jpg';
		}elseif($_FILES["file"]["type"] == "image/jpeg"){
			$imgname=strtotime($imguploadtime->format('Y-m-d H:i:s')).'-'.$randname.'.jpeg';
		}elseif($_FILES["file"]["type"] == "image/bmp"){
			$imgname=strtotime($imguploadtime->format('Y-m-d H:i:s')).'-'.$randname.'.bmp';
		}elseif($_FILES["file"]["type"] == "image/png"){
			$imgname=strtotime($imguploadtime->format('Y-m-d H:i:s')).'-'.$randname.'.png';
		}else{
			return false;
		}
		$dirpath='upload/images/'.$dirstr.'/'.$imguploadtime->format('Y').'/'.$imguploadtime->format('m').'/'.$imguploadtime->format('d');
		$uploadPath =$dirpath.'/'.$imgname;
		if (!file_exists($dirpath)){
			mkdirs($dirpath);
		}
		$upre=move_uploaded_file( $tempPath, $uploadPath );
		if($upre){
			$imgurlval=$imguploadtime->format('Y').'/'.$imguploadtime->format('m').'/'.$imguploadtime->format('d').'/'.$imgname;
		}
	}
	return $imgurlval;
}

//------------------抓包，数据抓取-------------------------------------------------------------------------------------------
/**curl    Get
 * @param $url
 * @param int $timeout
 * @return mixed
 */
function curlGetM($url, $timeout = 5){
	//有的网站有防爬设置,所以要设置header头,用来伪装
	$header = array ('User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
	$curl = curl_init ();//初始化
	curl_setopt ( $curl, CURLOPT_URL, $url);
	curl_setopt ( $curl, CURLOPT_HTTPHEADER, $header );
	curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
	//curl_setopt ( $curl, CURLOPT_FOLLOWLOCATION, 1 );
	if (ini_get('open_basedir') == '' && ini_get('safe_mode' == 'Off')) {
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	}
	curl_setopt ( $curl, CURLOPT_TIMEOUT,360);
	$res = curl_exec ( $curl );// 执行
	if ($res == FALSE) {
		echo "error:" . curl_error ( $curl );exit();
	}else{
		return $res;
	}
	curl_close ( $curl );// 关闭
}
/**curl    Post
 * @param $url
 * @param string $post_data
 * @param int $timeout
 * @return mixed
 */
function curlPostM($url, $post_data = '', $timeout = 5){//curl
	$curl = curl_init();
	curl_setopt ($curl, CURLOPT_URL, $url);
	curl_setopt ($curl, CURLOPT_POST, 1);
	if($post_data != ''){
		curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
	}
	curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
	curl_setopt($curl, CURLOPT_HEADER, false);
	$file_contents = curl_exec($curl);
	curl_close($curl);
	return $file_contents;
}
?>