<?php
/* Smarty version 3.1.30, created on 2020-05-17 22:02:15
  from "/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/apphome_itemsell.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec143e7dec810_15601650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f6b08b2c5136c0f2f161a256eab33d19e49d47' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/apphome_itemsell.tpl',
      1 => 1589724130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec143e7dec810_15601650 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
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
/assets/public/vuealert/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/wu-ui.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/js/vue.min.js"><?php echo '</script'; ?>
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

    .coininfodivlay {
        /*
        width:90%;
        background: #5186d6;
        margin:2%;
        border-radius: 7px;
        */
        border-top: 1px solid #ffffff42;
        margin: .6em 0 1em 0;
        background: rgba(255, 255, 255, 0.11);

        padding: 1.1rem 3%;

        position: relative;
    }

    .coininfoicodiv {
        width: 2rem;
        height: 2rem;
        border-radius: 6px;
        background: #fff;
        padding: .2rem;
        display: inline-block;
    }

    .coininfotxtdiv {
        width: 66%;
        line-height: 1rem;
        display: inline-block;
        vertical-align: top;
    }

    .coininfotxt1 {
        width: 100%;
        color: #fff;
        font-size: 1rem;
    }

    .coininfotxt2 {
        color: #fff;
        font-size: .7rem;
        overflow: hidden;
        margin-top: 0.2rem;
    }

    .coininfotxt3 {
        width: 97%;
        text-align: right;
        color: #D4AF37;
        font-size: 1rem;
		position: absolute;
		top: 4.3rem;
		right: 2rem;
    }

    .coininfotxt4 {
        width: 97%;
        text-align: right;
		font-size: .9rem;
		position: absolute;
		top: 6.8rem;
		right: 2rem;
		color: #A8A8A7!important;
    }

    .coininfotxt12 {
        color: #fff;
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

    .user-menu li a img {
        width: 1.7rem;
        height: 1.7rem;
    }

    .user-menu li a:before {
        float: inherit;
    }
	.menu-footer {
		background-color: #242424;
		border-top: 1px solid rgba(62, 62, 62, 0.88);
		color: #D3D3D3;
	}
	.menu-footer li span {
		color: #D3D3D3;
	}
	.page-content{
		background: #2C2C2E;
	}
	.coininfodivlay{
		background: #242426 !important;
		margin-bottom: 5px!important;
		border-top:unset!important;
	}
    .menu-footer{
        border-top: unset;
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
            <div class="page-content" style="padding-bottom: 100px;">
				<div class="navbar" style="position: fixed;background: #2C2C2E!important;font-size: 16px;height: 60px;">
					<div class="navbar-inner">
						<div class="left" style="font-weight: bold;color: #fff;">
							<a href="javascript:history.go(-1);" class="link icon-only external color-white">
								<i class="icon icon-back"></i>
							</a>
						</div>
						<div style="text-align: center;width: 100%;margin-left: -40px;">
							存单转出
						</div>
					</div>
				</div>
                <div style="height: 60px;line-height: 60px;padding: 0 3%;font-size: 16px;color: #B8B8B8;padding-top:60px;"></div>
                <?php if ($_smarty_tpl->tpl_vars['tradeorders']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tradeorders']->value, 'tradeorder');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tradeorder']->value) {
?>
                    <div class="coininfodivlay alert-api-button alert-btn3" style="width: 95%;margin: 0 auto 7px!important;height: 110px;border-radius:12px;cursor: pointer;" id="<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['item_name'];?>
" switch_a="<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['switch_a'];?>
">
                        <div style="width:100%;">
                            <div class="coininfotxtdiv">
                                <div class="coininfotxt1">
                                    <?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['item_name'];?>

                                </div>
                                <div class="coininfotxt2">
                                    <div class="cpck_address" style="font-size:10px;color: #727679!important;position: absolute;top: 5.5rem;">
                                        购买时间：<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['time'];?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span style="font-size:12px;text-align:center;color:#727679;border-radius: 1px;min-width:7rem;padding: 5px;display:inline-block;position:absolute;right:.7rem;top: .6rem;">
                                投资金额 <?php echo floatval(number_format($_smarty_tpl->tpl_vars['tradeorder']->value['money']*$_smarty_tpl->tpl_vars['tradeorder']->value['num'],2,'.',''));?>
 元
                            </span>
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

                        <div style="width:100%;margin-top:.1rem;">
                            <div class="coininfotxt2">
                                <div class="cpck_address" style="font-size:10px;color: #727679!important;position: absolute;top: 2.8rem;">
                                    <span>购买份数：<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['num'];?>
</span> 份
                                </div>
                            </div>
                            <div class="coininfotxt3" style="color: #BC9568;width: 100%;top: 2.5rem;right: 1rem;">
                                <?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['switch'];?>

                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['tradeorder']->value['type'] == 0) {?>
                        <div style="text-align: right;color: #727679;font-size: 10px;position: absolute;top: 5.5rem;right: .85rem;">
                            <span>到期时间：<?php echo $_smarty_tpl->tpl_vars['tradeorder']->value['stime'];?>
</span>
                        </div>
                        <?php } else { ?>
                        <div style="text-align: right;color: #727679;font-size: 10px;position: absolute;top: 5.5rem;right: .85rem;">
                            <span>活期</span>
                        </div>
                        <?php }?>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php } else { ?>
                    <span style="display: block;text-align: center;color: #727679;">暂无存单</span>
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
/assets/alert/js/SyntaxHighlighter/shCore.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='<?php echo VIEW_ROOTPATH;?>
/assets/alert/js/SyntaxHighlighter/makeSy.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='<?php echo VIEW_ROOTPATH;?>
/assets/alert/js/alert.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var M = {}
	$(document).delegate(".alert-btn3",'click',function(){
	    var id = $(this).attr('id'), switch_a = $(this).attr('switch_a');
		if(M.dialog3){
			return M.dialog3.show();
		}
		M.dialog3 = jqueryAlert({
			'title'   : '温馨提示',
			'content' : switch_a == 0 ? '存单尚未到期，提前转出将扣除投资金额的15%，确定要操作吗？' : '当前存单可转出，确定要操作吗？',
			'modal'   : true,
			'animateType' : '',
			'buttons' :{
                '确定' : function(){
                    var options = {
        				url: "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'itemselldo');?>
",
        				type: 'post',
        				dataType: 'json',
        				data: "id="+id,
        				success: function (data) {
    						if (data.code == 1) {
    							wu.showMessage({
    								title: data.msg,
    								backgroundColor: '#09f',
    								duration: 3000
    							});
    						}else{
    						    wu.showMessage({
    								title: data.msg,
    								backgroundColor: 'red',
    								duration: 3000
    							});
    						}
    						M.dialog3.close();
    						setTimeout(function(){
    						    window.location.href = '/appuser/moneypath';
    						},1000);
        				}
        			};
        			$.ajax(options);
        			return false;
                },
                '取消' : function(){
                    M.dialog3.close();
                }
            }
		});
	});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
