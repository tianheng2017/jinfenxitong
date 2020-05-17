<?php

/**退出登录
 * @param $sign
 * @return string
 */
function UserEscLogin($sign){
	unset($_SESSION['userinfo']);
	return 'true';
}


function AgentEscLogin($sign){
	unset($_SESSION['agentinfo']);
	return 'true';
}

function AdminEscLogin($sign){
	unset($_SESSION['admininfo']);
	return 'true';
}


?>