<?php
/* Smarty version 3.1.30, created on 2020-05-17 17:24:52
  from "/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/apphome_itemdetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec102e430f281_33096227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62f9ba7c954cb7c4632880a09dedd043ee4cd1c4' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/apphome_itemdetail.tpl',
      1 => 1589548111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec102e430f281_33096227 (Smarty_Internal_Template $_smarty_tpl) {
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
	.ul1 li{
		list-style: none;
		float: left;
		padding: 1px 6px;
		margin-right: 5px;
		border-radius:2px;
		text-align: center;
		border:1px solid #979797;
		color: #979797;
	}
	.ul2 li::before{
		content: "◆";
		color: #C5A176;
		font-size: 14px;
		margin-right: 10px;
	}
	.ul2 li{
		padding: 0 0 10px;
		color: #727679;
		font-size: 15px;
	}
	.time-horizontal {
		list-style-type: none;
		border-top: 2px solid #707070;
		padding: 0;
		margin: 0;
	}
	.time-horizontal li {
		float: left;
		position: relative;
		text-align: center;
		<?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 1) {?>
		    width: 50%;
		<?php } else { ?>
			width: 33%;
		<?php }?>
		padding-top: 10px;
		font-size: 14px;
	}
	.time-horizontal li b:before {
		content: '';
		position: absolute;
		top: -6px;
		left: 47%;
		width: 10px;
		height: 10px;
		border: 1px solid #727679;
		border-radius: 8px;
		background: #2C2C2E;
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
							<a href="javascript:history.go(-1);" class="link icon-only external color-white">
								<i class="icon icon-back"></i>
							</a>
						</div>
						<div style="text-align: center;width: 100%;margin-left: -40px;">
							<?php echo $_smarty_tpl->tpl_vars['item']->value['item_name'];?>

						</div>
					</div>
				</div>
				<div style="padding:88px 15px 50px;border-bottom: 5px solid #242426;">
					<div>
						<div style="display:inline-block;width: 32%;text-align: left;color: #727679;font-size: 13px;">
							项目金额
						</div>
						<div style="display:inline-block;width: 32%;text-align: left;color: #727679;font-size: 13px;">
							年化收益
						</div>
						<div style="display:inline-block;width: 32%;text-align: left;color: #727679;font-size: 13px;">
							产品期限
						</div>
					</div>
					<div style="margin-top: 5px;">
						<div style="font-size:24px;display:inline-block;width: 32%;text-align: left;color: #BD966A;">
							<?php echo floatval($_smarty_tpl->tpl_vars['item']->value['price']);?>

						</div>
						<div style="font-size:24px;display:inline-block;width: 32%;text-align: left;color: #FFF;">
							<?php echo floatval($_smarty_tpl->tpl_vars['item']->value['arate']);?>
%
						</div>
						<div style="font-size:24px;display:inline-block;width: 32%;text-align: left;color: #FFF;">
						<?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 1) {?>
						    活期
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['item']->value['day_num'];?>
天
						<?php }?>
						</div>
					</div>
					<div style="margin-top: 10px;">
						<ul class="ul1">
							<li>高收益</li>
							<li>低风险</li>
						</ul>
					</div>
				</div>
				<div style="padding:10px 15px 25px;border-bottom: 5px solid #242426;">
					<div style="margin: 15px 0;font-size: 18px;color: #fff;">
						产品特色
					</div>
					<div style="font-size: 15px;color: #727679;">
						<?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>

					</div>
				</div>
				<div style="padding:10px 15px 25px;">
					<div style="margin: 15px 0;font-size: 18px;color: #fff;">
						交易规则
					</div>
					<div style="font-size: 15px;color: #727679;height: 100px;padding-top: 25px;">
						<ul class="time-horizontal">
							<li>
								<b></b>
								<span style="font-size: 14px;">今日</span>
								<span style="display: block;text-align: center;color: #fff;">预约买入</span>
							</li>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 1) {?>
                    		    <li>
    								<b></b>
    								<span style="font-size: 14px;">明日</span>
    								<span style="display: block;color: #fff;">预计产生收益</span>
    							</li>
                    		<?php } else { ?>
                    			<li>
    								<b></b>
    								<span style="font-size: 14px;">明日</span>
    								<span style="display: block;color: #fff;">预计产生收益</span>
    							</li>
    							<li>
    								<b></b>
    								<span style="font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['time2']->value;?>
</span>
    								<span style="display: block;color: #fff;">到期</span>
    							</li>
                    		<?php }?>
						</ul>
					</div>
					<div>
						<ul class="ul2">
							<li>收益规则：当日转入，次日计息</li>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 1) {?>
							<li>活期项目：当日转出，立即停止计息</li>
							<?php } else { ?>
							<li>定期项目：提前转出需扣除金额15%的违约金</li>
							<?php }?>
						</ul>
					</div>
				</div>
				<div style="width: 100%;background: #2C2C2E;height: 97px;position: fixed;bottom: 0;">
					<button id="buy" style="cursor:pointer;font-size:18px;width:40%;color:#fff;background:linear-gradient(128deg,rgba(223,199,161,1) 0%,rgba(188,149,104,1) 100%);
box-shadow:0px 6px 21px 0px rgba(191,153,109,0.1);border-radius:4px;height: 50px;margin: 20px auto;position: fixed;bottom: 0;border: unset;left: 5%;">转入</button>
                    <button id="sell" style="cursor:pointer;font-size:18px;width:40%;color:#fff;background:linear-gradient(128deg,rgba(223,199,161,1) 0%,rgba(188,149,104,1) 100%);
box-shadow:0px 6px 21px 0px rgba(191,153,109,0.1);border-radius:4px;height: 50px;margin: 20px auto;position: fixed;bottom: 0;border: unset;right: 5%;">转出</button>
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
	$('#buy').on('click',function () {
		window.location.href = '/apphome/itembuy/id/' + <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;
	});
	$('#sell').on('click',function () {
		window.location.href = '/apphome/itemsell/id/' + <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;
	});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
