<?php
/* Smarty version 3.1.30, created on 2020-05-17 19:05:26
  from "/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/appuser_account.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec11a769360f8_37241462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6be83b4dfbf6a03635629357c54dfc49d208aff2' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/appuser_account.tpl',
      1 => 1589198940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec11a769360f8_37241462 (Smarty_Internal_Template $_smarty_tpl) {
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
	img {
		display: initial;
		width: initial;
		border: 0;
	}
	.ios .navbar {
		background-color: rgba(255, 255, 255, 0.11);
	}
	.ios .login-box .list .item-inner {
    padding-left: 10px;
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
    .ios .navbar{
        background: #232323!important;
    }
    .page-content{
        background: #2C2C2E!important
    }
    .ios .block{
        margin: 5px 0 35px 0;
        background: #2c2c2c;
    }
    .ios .login-box .list .item-content{
        border: 1px solid #565656;
    }
    .coininfodivlay{
        background: #2C2C2C !important;
        padding: 1rem 3%;
    }
    .coininfoicodiv{
        width: 3rem;
        height: 3rem;
    }
    .coininfotxt1{
        font-size: 13px;
        padding-left: 5px;
    }
    .coininfotxt2{
        font-size: 13px;
        margin-top: 13px;
        padding-left: 5px;
    }
    .ios .list .item-inner{
        border-bottom: 2px solid #2c2c2c;
    }
    .ios .button.button-fill, .ios .button.button-fill-ios {
        background-color: #26A07B !important;
    }
    .ios .button.button-fill, .ios .button.button-fill-ios {
        background-color: #242426 !important;
        border-radius: 5px;
        margin-top: 20px;
    }
    .ios .list .item-content{
        border-bottom: 1px solid #313133;
    }


    .ios .theme-dark .navbar, .navbar.ios .theme-dark, .ios .navbar {
        background-color: #2C2C2E!important;
        height: 55px;
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
    .ios .theme-dark .navbar:after, .navbar.ios .theme-dark:after{
        background: unset;
    }
    .ios .login-box .list .item-content{
        border: unset;
    }
    input{
        border-bottom: 2px solid #313133!important;
    }
    .ios .theme-dark .block{
        margin-top: 10px;
    }
    .ios .login-box .list .item-content{
        margin-top: 9px;
    }
</style>
	
<body>
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
			<div class="navbar">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="javascript:history.go(-1);" class="link icon-only external color-white">
                            <i class="icon icon-back"></i>
                        </a>
                    </div>
                    <div class="title">账户安全</div>
                </div>
            </div>
            <div class="page-content" style="padding-top: 40px;">
                <div class="list no-hairlines margin-vertical" style="border-top: 9px solid #242426;">
                    <ul>
                        <li class="item-content">
							<div class="item-inner">
								<div class="item-title">账号</div>
								<div class="item-after" style="color: #727679;"><?php echo $_smarty_tpl->tpl_vars['myuserinfo']->value["username"];?>
</div>
							</div>
                        </li>
						
						<!--li>
                            <a href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'upuserinfo');?>
" class="item-link item-content external">
                                <div class="item-inner">
                                    <div class="item-title">修改资料</div>
                                </div>
                            </a>
                        </li-->
						
						<li>
                            <span onclick="authenticationM()" class="item-link item-content external">
                                <div class="item-inner">
                                    <div class="item-title">身份认证</div>
									<div style="">
										<?php if ($_smarty_tpl->tpl_vars['myuserinfo']->value['authentication'] == 0) {?>
										<span style="background: #acacac;color:#fff;padding: 4px 10px;border-radius: 2px;">	未认证</span>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['myuserinfo']->value['authentication'] == 1) {?>
										<span style="background: #87dde6;color:#fff;padding: 4px 10px;border-radius: 2px;">	审核中</span>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['myuserinfo']->value['authentication'] == 2) {?>
										<span style="background: #BC9568;color:#fff;padding: 4px 5px;border-radius: 2px;font-size: 12px;">	认证成功</span>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['myuserinfo']->value['authentication'] == -1) {?>
										<span style="background: #ff5a92;color:#fff;padding: 4px 10px;border-radius: 2px;">	认证失败</span>
										<?php }?>
									</div>
                                </div>
                            </span>
                        </li>
                        
                        <li>
                            <a href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'upbankinfo');?>
" class="item-link item-content external">
                                <div class="item-inner">
                                    <div class="item-title">修改银行卡</div>
                                    <div style="">
										<?php if ($_smarty_tpl->tpl_vars['myuserinfo']->value['authbankinfo'] == 0) {?>
										<span style="background: #acacac;color:#fff;padding: 4px 10px;border-radius: 2px;">未绑定</span>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['myuserinfo']->value['authbankinfo'] == 1) {?>
										<span style="background: #BC9568;color:#fff;padding: 4px 5px;border-radius: 2px;font-size: 12px;">已绑定</span>
										<?php }?>
									</div>
                                </div>
                            </a>
                        </li>
						
                        <li>
                            <a href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'upassword');?>
" class="item-link item-content external">
                                <div class="item-inner">
                                    <div class="item-title">修改密码</div>
                                </div>
                            </a>
                        </li>
						
						<!--li>
                            <a href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'upasswordtwo');?>
" class="item-link item-content external">
                                <div class="item-inner">
                                    <div class="item-title">修改安全密码</div>
                                </div>
                            </a>
                        </li-->
                    </ul>
                </div>
				<div class="block"><button onclick="esclogin()" style="color: #787878!important;" class="button button-big color-red button-fill">退出登录</button></div>
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
 type="text/javascript">
	function esclogin(){
        $.post("<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'esclogin');?>
", function (data) {
            if (data == 'true') {
                try{
                    <?php if ($_smarty_tpl->tpl_vars['device_type']->value == 'ios') {?>
                        setvel('token','false');
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['device_type']->value == 'android') {?>
                        AndroidJs.saveToken('false');
                    <?php }?>
                }catch(err){
                }
                window.location.reload();
            }
        });
	}
	
	authenticationM = function(){
		<?php if ($_smarty_tpl->tpl_vars['myuserinfo']->value['authentication'] == 0) {?>
		window.location.href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'authentication');?>
";
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['myuserinfo']->value['authentication'] == 1) {?>
		wu.showMessage({
			title: "审核中",
			backgroundColor: '#87dde6',
			duration: 3000
		});
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['myuserinfo']->value['authentication'] == 2) {?>
		wu.showMessage({
			title: "认证成功",
			backgroundColor: '#BC9568',
			duration: 3000
		});
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['myuserinfo']->value['authentication'] == -1) {?>
		window.location.href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'authentication');?>
";
		<?php }?>
	}
	
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
