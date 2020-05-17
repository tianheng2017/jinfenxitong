<?php
/* Smarty version 3.1.30, created on 2020-05-17 22:04:39
  from "/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/apphome_itemsuccess.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec144778db198_33369038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfd6eed286c1fcbabafdc43d1f29e871bf9ad2a6' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/apphome_itemsuccess.tpl',
      1 => 1589724261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec144778db198_33369038 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
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
/assets/wap/css/framework7-icons.css">
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/css/style.css">
	<link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/scrollmenu/css/animate.css">
	<link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/scrollmenu/css/scrollmenu.css">
	<link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap2/css/style.css">
	<!--vue_alert_start-->
	<link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/wu-ui.css" />
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/vuealert/js/vue.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/js/wu-ui.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/alert/css/alert.css">
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
	.coininfodivlay{
		border-top: 1px solid #ffffff42;
		margin:.6em 0 1em 0;
		background: #2C2C2C !important;
		font-size: 20px;
		padding: 15px 25px 15px 25px;
		position: relative;
	}
	.coininfoicodiv{
		width:2rem;height:2rem;border-radius: 6px;background: #fff;padding:.2rem;
		display: inline-block;
	}
	.coininfotxtdiv{
		width:66%;
		line-height: 1rem;
		display: inline-block;
		vertical-align: top;
	}
	.coininfotxt1{
		width:100%;color:#fff;font-size:.9rem;
	}
	.coininfotxt2{
		color:#fff;
		font-size: .7rem;
		overflow: hidden;
		margin-top: 0.2rem;
	}
	.coininfotxt3{
		width:97%;text-align:right;color:#fff;font-size:1.2rem;
	}
	.coininfotxt4{
		width:97%;text-align:right;color:#fff;font-size:.7rem;
	}
	.coininfotxt12{
		color:#fff;
		font-size: .7rem;
		margin-top: 0.2rem;
	}
	.coininfotxtsondiv12 {
		width: 49%;
		color: #8cdfff;
		padding: 3px 0 3px 3%;
		border: 1px solid rgba(190, 244, 255, 0.1);
		display: inline-block;
	}
	.container {
		padding: 0;
	}
	.user-menu li a {
		display: block;
		padding: 10px 20px;
		background-color: rgba(255, 255, 255, 0.11);
		border-radius: 0;
		text-align: center;
	}
	.user-menu li {
		margin-bottom: 0;
		width: 50%;
		float: left;
		border: 0.5px solid rgba(40, 51, 80, 0);
	}
	.user-menu li a img{
		width: 1.7rem;
		height: 1.7rem;
	}
	.user-menu li a:before{
		float: inherit;
	}
	.menu-footer{
		background-color: #242424;
		border-top: 1px solid rgba(62, 62, 62, 0.88);
		color:#D3D3D3;
	}
	.menu-footer li span{
		color: #D3D3D3;
	}
	.coininfodivlay ul li{
		list-style: none;
		margin: 0;
		padding: 0;
		float: left;
		width: 33.33%;
		text-align: center;
		margin-bottom: 5px;
	}
	.coininfodivlay ul li p{
		color: #8E8D92;
		font-size: 16px;
	}
	input::-webkit-input-placeholder {
		color: #484848;
		font-size: 18px;
	}
	.ul1 li::before{
		content: "◆";
		color: #C5A176;
		font-size: 14px;
		margin-right: 10px;
	}
</style>
	
<body style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
			<div class="page-content" style="padding-bottom: 100px;background: #2c2c2e;">
				<div class="navbar" style="position: fixed;background: #2C2C2E!important;font-size: 16px;height: 60px;">
					<div class="navbar-inner">
						<div class="left" style="font-weight: bold;color: #fff;">
							<a href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'index');?>
" class="link icon-only external color-white">
								<i class="icon icon-back"></i>
							</a>
						</div>
						<div style="text-align: center;width: 100%;">
							存单
						</div>
					</div>
				</div>
				<div style="height: 173px;width: 100%;border-bottom: 1px solid #323234;">
					<div style="width: 100%;text-align: center;margin-top: 130px;">
						<img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/success.png" alt="" width="80" height="80">
					</div>
					<div style="width: 100%;text-align: center;margin-top: 12px;font-size: 16px;">
						您已购买成功
					</div>
				</div>
				<div style="padding: 15px 3%;font-size: 16px;">
					<span style="color: #B8B8B8;">购买份额</span>
					<span style="color: #727679;margin-left: 20px;"><?php echo floatval($_smarty_tpl->tpl_vars['order']->value['num']);?>
份</span>
				</div>
				<div style="padding: 15px 3%;font-size: 16px;">
					<span style="color: #B8B8B8;">支付金额</span>
					<span style="color: #727679;margin-left: 20px;">¥<?php echo floatval($_smarty_tpl->tpl_vars['order']->value['money']*$_smarty_tpl->tpl_vars['order']->value['num']);?>
</span>
				</div>
				<div style="padding: 12px 3%;font-size: 16px;border-bottom: 1px solid #323234;">
					<span style="color: #B8B8B8;">存单编号</span>
					<span style="color: #727679;margin-left: 20px;"><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</span>
				</div>
				<div style="width: 100%;background: #2C2C2E;height: 97px;margin-top: 12px;">
					<button id="view" data-id="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" onclick="detail(this)" style="cursor:pointer;font-size:18px;width:90%;color:#fff;background:linear-gradient(128deg,rgba(223,199,161,1) 0%,rgba(188,149,104,1) 100%);
box-shadow:0px 6px 21px 0px rgba(191,153,109,0.1);border-radius:4px;height: 50px;margin: 20px auto;border: unset;left: 5%;position: absolute;">查看订单</button>
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
/assets/wap/scrollmenu/js/bscroll.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/scrollmenu/js/scrollmenu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='<?php echo VIEW_ROOTPATH;?>
/assets/alert/js/alert.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	function detail(obj) {
		var id = $(obj).attr('data-id');
		window.location.href = '/apphome/tradeorderon_detail/id/' + id;
	}
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
