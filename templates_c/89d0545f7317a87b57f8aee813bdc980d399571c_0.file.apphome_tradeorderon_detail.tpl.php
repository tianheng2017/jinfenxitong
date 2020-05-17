<?php
/* Smarty version 3.1.30, created on 2020-05-17 17:26:18
  from "/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/apphome_tradeorderon_detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec1033a7353c4_22184521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89d0545f7317a87b57f8aee813bdc980d399571c' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/apphome_tradeorderon_detail.tpl',
      1 => 1589628602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec1033a7353c4_22184521 (Smarty_Internal_Template $_smarty_tpl) {
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
		background: #232323 !important;
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
	.ul1{
		margin-top: 5px;
		<?php if ($_smarty_tpl->tpl_vars['tradeorder']->value['type'] == 1) {?>
		padding-bottom: 130px;
		<?php } else { ?>
		padding-bottom: 160px;
		<?php }?>
		border-bottom: 1px solid #38383A;
	}
	.ul1 li{
		color:#727679!important;
		font-size: 14px!important;
		list-style: none;
		float: left;
		width: 100%;
		margin-bottom: 13px;
	}
	.ul1 li > div:nth-child(1){
		width: 49%;
		text-align: left;
		display: inline-block;
	}
	.ul1 li > div:nth-child(2){
		width: 49%;
		text-align: right;
		display: inline-block;
		color: #B8B8B8;
	}
</style>
	
<body style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
			<div class="page-content" style="padding-bottom: 100px;background: #2C2C2C;">
				<div class="navbar" style="position: fixed;background: #2C2C2E!important;font-size: 16px;height: 60px;">
					<div class="navbar-inner">
						<div class="left" style="font-weight: bold;color: #fff;">
							<a href="<?php echo WSURLSHOW('apphome','tradeorderon');?>
" class="link icon-only external color-white">
								<i class="icon icon-back"></i>
							</a>
						</div>
						<div style="text-align: center;width: 100%;margin-left: -40px;">
							存单明细
						</div>
					</div>
				</div>
				<div style="padding-top:90px;width: 100%;text-align: center;">
					<div style="font-size: 16px;color: #E8E8E8;">
						<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['item_name'];?>

					</div>
					<div style="font-size: 30px;color:#BC9568; line-height: 55px;">
						+<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['sy'];?>

					</div>
					<div style="color: #01DCA4;font-size: 16px;">
						<?php if ($_smarty_tpl->tpl_vars['tradeorder']->value['status'] == '确认中') {?>
						<span style="color:#0177F8;"><?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['status'];?>

						<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['status'];?>

						<?php }?>
					</div>
				</div>
				<div style="padding: 0 15px;margin-top: 52px;">
					<div style="color: #fff;font-size: 16px;line-height: 50px;">
						买入信息
					</div>
					<ul class="ul1">
						<li>
							<div>项目名称</div>
							<div><?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['item_name'];?>
</div>
						</li>
						<li>
							<div>购买份数</div>
							<div><?php echo floatval($_smarty_tpl->tpl_vars['tradeorder']->value['num']);?>
份</div>
						</li>
						<li>
							<div>支付金额</div>
							<div><?php echo floatval($_smarty_tpl->tpl_vars['tradeorder']->value['money']*$_smarty_tpl->tpl_vars['tradeorder']->value['num']);?>
元</div>
						</li>
						<li>
							<div>买入时间</div>
							<div><?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['timev1'];?>
</div>
						</li>
						<?php if ($_smarty_tpl->tpl_vars['tradeorder']->value['type'] == 0) {?>
						<li>
							<div>到期时间</div>
							<div><?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['stime1'];?>
</div>
						</li>
						<?php }?>
					</ul>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['tradeorder']->value['status'] <> '确认中') {?>
				<div style="padding: 0 15px;margin-top: 5px;">
					<div style="color: #fff;font-size: 16px;line-height: 50px;">
						确认信息
					</div>
					<ul class="ul1" style="border-bottom:unset;">
						<li>
							<div>确认时间</div>
							<div><?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['timev2'];?>
</div>
						</li>
						<li>
							<div>订单编号</div>
							<div>O<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['id'];?>
</div>
						</li>
						<li>
							<div>产品状态</div>
							<div style="color: #BC9568;"><?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['status'];?>
</div>
						</li>
					</ul>
				</div>
				<?php }?>
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
	$('#start').on('click',function () {
		window.location.href = '/apphome/itemstart/id/' + <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;
	});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
