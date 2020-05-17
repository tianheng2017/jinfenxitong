<?php
/* Smarty version 3.1.30, created on 2020-05-17 18:55:38
  from "/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/appuser_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec1182a8db390_03146751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17c3811b39e27714714806ea4ca9fee2fa5b8a1a' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/appuser_login.tpl',
      1 => 1588603624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec1182a8db390_03146751 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#2196f3">
    <title><?php echo $_smarty_tpl->tpl_vars['webconfig']->value['webtitle']['val'];?>
</title>
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/css/framework7.ios.min.css">
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/css/style.css">
	<link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/css/jquery.toast.css">
	
	<!--vue_alert_start-->
	<link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/wu-ui.css" />
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/js/vue.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/js/wu-ui.js"><?php echo '</script'; ?>
>
	<!--vue_alert_end-->
</head>

<style>
.ios .login-box .list .item-inner {
    padding-left: 0;
    padding-right: 10px;
}
.ios .theme-dark .list ul, .list.ios .theme-dark ul, .ios .list ul {
    background: rgba(49, 56, 94, 0.45);
    border: 1px solid rgba(59, 66, 114, 0.64);
}
.ios .button.button-fill, .ios .button.button-fill-ios {
    background-color: rgba(59, 66, 114, 0.89);
    border: 1px solid rgba(142, 149, 192, 0.2);
}


body {
    color: #fff;
    background-color: #ffffff;
    background: none;
	font-family: SFUIDisplay-Semibold,SFUIDisplay;
}
.ios a {
    color: #a6a6a6;
}
.ios .theme-dark .list ul, .list.ios .theme-dark ul, .ios .list ul {
    background: none;
    border: 0;
}
.ios .theme-dark .list input[type=date], .ios .theme-dark .list input[type=datetime-local], .ios .theme-dark .list input[type=email], .ios .theme-dark .list input[type=number], .ios .theme-dark .list input[type=password], .ios .theme-dark .list input[type=search], .ios .theme-dark .list input[type=tel], .ios .theme-dark .list input[type=text], .ios .theme-dark .list input[type=time], .ios .theme-dark .list input[type=url], .ios .theme-dark .list select, .list.ios .theme-dark input[type=date], .list.ios .theme-dark input[type=datetime-local], .list.ios .theme-dark input[type=email], .list.ios .theme-dark input[type=number], .list.ios .theme-dark input[type=password], .list.ios .theme-dark input[type=search], .list.ios .theme-dark input[type=tel], .list.ios .theme-dark input[type=text], .list.ios .theme-dark input[type=time], .list.ios .theme-dark input[type=url], .list.ios .theme-dark select {
    color: #979797;
}
.ios .login-box .list .item-content {
    border: 2px solid #c0c0c0;
    border-radius: 100px;
	margin-top: 1em;
	font-size: 24px;
}
.ios .theme-dark .item-inner:after {
    background-color: rgba(255, 255, 255, 0);
}
.logo-img {
    display: block;
	margin: 0 auto;
    width: 70px;
    height: auto;
}
.ios .block {
    margin: 66px 0 35px 0;
    padding: 0 15px;
    color: #6d6d72;
}


.jq-icon-error {
    background-color: #a4a4a4;
    color: #ffffff;
    border-color: #ffffff;
}
.jq-icon-success {
    background-color: #09f;
    color: #ffffff;
    border-color: #ffffff;
}
.jq-toast-loaded{
	display:none;
}


.ios .theme-dark .page, .page.ios .theme-dark {
    background-color: #2C2C2E;
}
.ios .login-box .list .item-content {
    border-radius: 0;
    border: none;
    border-bottom: 2px solid #343436;
    margin-top: 1em;
}
.ios .list input[type=date], .ios .list input[type=datetime-local], .ios .list input[type=email], .ios .list input[type=number], .ios .list input[type=password], .ios .list input[type=search], .ios .list input[type=tel], .ios .list input[type=text], .ios .list input[type=time], .ios .list input[type=url], .ios .list select {
    height: 44px;
    color: #000;
    font-size: 21px;
    font-weight: bolder;
}

.ios .button.button-fill, .ios .button.button-fill-ios {
    background-color: #515151 !important;
    border: 1px solid rgba(142, 149, 192, 0.2);
}
.ios .button.button-fill, .ios .button.button-fill-ios {
    border-radius: 5px;
    border: 1px solid rgba(142, 149, 192, 0.2);
}
.ios .button.button-big, .ios .button.button-big-ios {
    font-size: 16px;
    height: 50px;
    line-height: 50px;
    color: #d1d1d1;
    font-weight: bold;
}

::-webkit-input-placeholder {
	/* Chrome/Opera/Safari */
	color: #616467 !important;
}

::-moz-placeholder {
	/* Firefox 19+ */
	color: #616467 !important;
}

:-ms-input-placeholder {
	/* IE 10+ */
	color: #616467 !important;
}

:-moz-placeholder {
	/* Firefox 18- */
	color: #616467 !important;
}
.fsubmitbtn:active{
	background: #333333;
	transition-duration: .2s;
}

</style>
<body class="theme-dark">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page login-page">
            <div class="page-content">
				<br>
                <div class="block" style="margin: 35px 0 15px 0;text-align: left;font-size: 33px;font-weight: 600;color:#BC9568;">
					<p style="">Hello!</p>
					<p>欢迎登陆U Finance</p>
                </div>
                <div class="login-box block">
                    <div class="list no-margin no-hairlines">
						<form action="#" id="form_post" name="form_post" method="post">
							<ul>
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<input id="username" type="text" name="username" placeholder="请输入手机号">
										</div>
									</div>
								</li>
								
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<input id="password" type="password" name="password" placeholder="请输入密码">
										</div>
									</div>
								</li>
							</ul>
						</form>
                    </div>
					<div class="text-align-right margin-top" style="font-size: 16px;width:49%;display:inline-block;float:right;color:#dce1b4;"><a href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'forgetpassw');?>
" style="color:#5D6063;" class="external">忘记密码</a></div>
					<div>
                    	<button id="submits" style="cursor:pointer;font-size: 16px;width:120px;height:40px;background:rgba(36,36,38,1);border-radius:48px;color: #757575;border: 1px solid #242426;position: absolute;top: 225px;right: 40px;" disabled="disabled">登录</button>
						<div class="text-align-left margin-top" style="font-size: 16px;padding: 0 10px 5px 10px;position: absolute;top: 215px;left:40px;border-bottom: 2px solid #424242;"><a href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'reg');?>
" style="color:#EEEEEF;font-size: 18px;" class="external">注册</a></div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/framework7.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/public/js/jquery.toast.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	$('#username,#password').keyup(function(){
		if ($('#username').val() && $('#password').val()){
			$('#submits').attr('style','cursor:pointer;font-size: 16px;width:120px;height:40px;background:#B9966C;color:#fff;border-radius:48px;border: 1px solid #242426;position: absolute;top: 225px;right: 40px;');
			$("#submits").prop("disabled",false);
		}else{
			$('#submits').attr('style','cursor:pointer;font-size: 16px;width:120px;height:40px;background:rgba(36,36,38,1);color:#757575;border-radius:48px;border: 1px solid #242426;position: absolute;top: 225px;right: 40px;');
			$("#submits").prop("disabled",true);
		}
	});
	$(document).ready(function () {
		try {
			<?php if ($_smarty_tpl->tpl_vars['device_type']->value == 'ios') {?>
				getvel('token', function(val) {
					if (val == 'false' || !val){
						return false;
					} else {
						$.post("<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'applogin');?>
",{'token':val},function(res){
							res = JSON.parse(res);
							if (res.code == 0){
								wu.showMessage({
									title: "登录状态已失效！",
									backgroundColor: 'red',
									duration: 3000
								});
								setvel('token','false');
							}else{
								self.location = "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'index');?>
";
							}
						},'json');
					}
				});
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['device_type']->value == 'android') {?>
				var token = AndroidJs.getToken();
				if (token == 'false' || !val){
					return false;
				} else {
					$.post("<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'applogin');?>
",{'token':token}, function(res){
						res = JSON.parse(res);
						if (res.status == 0){
							wu.showMessage({
								title: "登录状态已失效！",
								backgroundColor: 'red',
								duration: 3000
							});
							AndroidJs.saveToken('false');
						}else{
							self.location = "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'index');?>
";
						}
					},'json');
				}
			<?php }?>
		}catch(err){
		}
		$("#submits").click(function () {
			var options = {
				url: "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'loginform');?>
",
				type: 'post',
				dataType: 'text',
				data: $("#form_post").serialize(),
				success: function (data) {
					data = JSON.parse(data);
					if (data.code == 1) {
						wu.showMessage({
							title: "登录成功！",
							backgroundColor: '#D4AF37',
							duration: 3000
						});
						try {
							<?php if ($_smarty_tpl->tpl_vars['device_type']->value == 'ios') {?>
								setvel('token', data.token);
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['device_type']->value == 'android') {?>
								AndroidJs.saveToken(data.token);
							<?php }?>
						}catch(err){
						}
						setTimeout(function(){
							self.location = "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'index');?>
";
						},3000);
					}
					if (data.msg == "1002") {
						wu.showMessage({
							title: "登录失败！",
							backgroundColor: 'red',
							duration: 3000
						});
					}
					if (data.msg == "false") {
						wu.showMessage({
							title: "用户名、密码错误！",
							backgroundColor: 'red',
							duration: 3000
						});
					}
					if (data.msg == "stop") {
						wu.showMessage({
							title: "账号已冻结，请联系官方！",
							backgroundColor: 'red',
							duration: 3000
						});
					}
				}
			};
			$.ajax(options);
			return false;
		});
	});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
