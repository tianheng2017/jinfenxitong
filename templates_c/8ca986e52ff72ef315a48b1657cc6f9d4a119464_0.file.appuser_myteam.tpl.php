<?php
/* Smarty version 3.1.30, created on 2020-05-17 19:05:20
  from "/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/appuser_myteam.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec11a7091eaa3_18144501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ca986e52ff72ef315a48b1657cc6f9d4a119464' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/appuser_myteam.tpl',
      1 => 1589708132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec11a7091eaa3_18144501 (Smarty_Internal_Template $_smarty_tpl) {
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
	ul li{
		width: 95%;
		margin: 2px auto 0;
		background:rgba(36,36,38,1);
		border-radius:12px;
		list-style: none;
		padding: 15px;
		cursor: pointer;
		margin-bottom: 10px;
	}
</style>
<style type="text/css">
	.progress_bar .pro-bar {
        background: hsl(53, 28%, 24%);
        box-shadow: 0 1px 2px hsla(0, 0%, 0%, 0.1) inset;
        height:3px;
        margin-bottom: 12px;
        margin-top: 30px;
        position: relative;
    }
    .progress_bar .progress_bar_title{
        /*color: hsl(218, 4%, 50%);*/
        color: #D5D6E2;
        font-size: 11px;
        font-weight: 300;
        position: relative;
        top: -28px;
        z-index: 1;
    }
    .progress_bar .progress_number{
        float: right;
        font-size: 11px;
        margin-top: -24px;
    }
    .progress_bar .progress-bar-inner {
        background-color: hsl(0, 0%, 88%);
        display: block;
        width: 0;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        transition: width 1s linear 0s;
        animation: animate-positive 2s;
    }
    @-webkit-keyframes animate-positive{
        0% { width: 0%; }
    }
    @keyframes animate-positive{
        0% { width: 0%; }
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
						<div style="text-align: center;width: 100%;margin-left:-50px;">
							团队数据
						</div>
						<!--div onclick="javascript:window.location.href='/appuser/invitation'" style="color: #727679;display: inline-block;width: 80px;text-align: right;cursor: pointer;">
							邀请码
						</div-->
					</div>
				</div>
				<div style="padding-top:90px;width: 100%;text-align: center;padding-bottom: 28px;border-bottom: 13px solid #242426;">
					<div style="color: #727679;font-size: 14px;">
						<span>历史总返利</span>
						<!--img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/msg.png" alt="" style="cursor: pointer;vertical-align: middle;margin-left: 3px;"onclick="javascript:window.location.href='/appuser/cashbackinfo'"-->
					</div>
					<div style="color: #BC9568;font-size: 30px;line-height: 65px;">
						<?php echo $_smarty_tpl->tpl_vars['teamfanli']->value;?>

					</div>
					<div style="color: #727679;font-size: 14px;margin-top: 7px;">
						<div style="display:inline-block;width: 49%;text-align: center;">
							<span>一级下线</span>
							<span style="color: #fff;margin-left: 3px;"><?php echo $_smarty_tpl->tpl_vars['countteaml1']->value;?>
 人</span>
						</div>
						<div style="display:inline-block;width: 49%;text-align: center;">
							<span>二级下线</span>
							<span style="color: #fff;margin-left: 3px;"><?php echo $_smarty_tpl->tpl_vars['countteaml2']->value;?>
 人</span>
						</div>
					</div>
				</div>
				<div style="width: 100%;padding: 10px">
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tradeorders']->value, 'tradeorder');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tradeorder']->value) {
?>
						<li>
							<div>
								<div style="width: 49%;font-size: 16px;text-align: left;display: inline-block;">
									下级ID：<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['uid'];?>

								</div>
								<div style="width: 49%;font-size: 13px;color: #727679;text-align: right;display: inline-block;">
									<span>数量 <?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['num'];?>
 份，收益 <?php echo floatval(round($_smarty_tpl->tpl_vars['tradeorder']->value['sy'],2));?>
 元</span>
								</div>
							</div>
							<div style="margin-top: 10px;">
								<div style="width: 49%;font-size: 13px;color:#727679;text-align: left;display: inline-block;">
									<span>返利比例</span>
									<span><?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['flbl'];?>
%</span>
								</div>
								<div style="width: 49%;font-size: 14px;color: #BC9568;text-align: right;display: inline-block;">
									已返利 <?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['yfl'];?>
 元
								</div>
							</div>
							
							<div class="progress_bar">
                                <div class="pro-bar">
                                    <span style="width: 7px;height: 7px;background: <?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['bg1'];?>
;border-radius: 50%;position: absolute;left: 25%;top: -2px;margin-left:-3.5px;"></span>
                                    <span style="width: 7px;height: 7px;background: <?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['bg2'];?>
;border-radius: 50%;position: absolute;left: 50%;top: -2px;margin-left:-3.5px;"></span>
                                    <span style="width: 7px;height: 7px;background: <?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['bg3'];?>
;border-radius: 50%;position: absolute;left: 75%;top: -2px;margin-left:-3.5px;"></span>
                                    <span class="progress-bar-inner" style="background-color: #d7a973; width: <?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['timesv'];?>
%;" data-value="<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['timesv'];?>
" data-percentage-value="<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['timesv'];?>
"></span>
                                </div>
                            </div>
							
							<div style="position: relative;">
								<div style="width: 49%;font-size: 5px;color:#727679;text-align: left;display: inline-block;">
									<span>购买时间</span>
									<span><?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['time'];?>
</span>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['tradeorder']->value['type'] == 0) {?>
								<div style="text-align: right;color: #727679;font-size: 10px;position: absolute;top: 0.1rem;right: 0;">
									<span>到期时间</span>
									<span><?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['stime'];?>
</span>
								</div>
								<?php } else { ?>
								<div style="text-align: right;color: #727679;font-size: 10px;position: absolute;top: 0.1rem;right: 0;">
									<span>活期</span>
								</div>
								<?php }?>
							</div>
						</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</ul>
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
	$(function(){
		var progress = $(".progress-bar-inner");
		progress.each(function (i)
		{
			var data = $(this).attr('data-value');
			$(this).prev().find("span").html(data+"%");
		});
	});
<?php echo '</script'; ?>
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
</html><?php }
}
