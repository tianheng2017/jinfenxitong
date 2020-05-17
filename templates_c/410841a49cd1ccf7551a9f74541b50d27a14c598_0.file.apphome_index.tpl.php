<?php
/* Smarty version 3.1.30, created on 2020-05-17 17:24:53
  from "/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/apphome_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec102e5eeea37_14560922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '410841a49cd1ccf7551a9f74541b50d27a14c598' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/apphome_index.tpl',
      1 => 1589074278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec102e5eeea37_14560922 (Smarty_Internal_Template $_smarty_tpl) {
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
/assets/vuealert/js/vue.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/js/wu-ui.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/alert/css/alert.css">
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/css/layer.css">
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
        background: #232323 !important;
        padding: 15px 25px 15px 25px;
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
        font-size: .9rem;
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
        color: #fff;
        font-size: 1.2rem;
    }
    .coininfotxt4 {
        width: 76%;
        margin-left: 12%;
        text-align: center;
        color: #fff;
        font-size: 1rem;
        word-break: break-all;
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
    .coinnavspan {
        width: 32.5%;
        text-align: center;
        display: inline-block;
        padding: 5px 0;
        background: rgba(255, 255, 255, 0.06);
    }
    canvas {
        width: 50%;
        border: 12px solid rgb(255, 255, 255);
    }
    .user-menu li a p {
        margin: 1em 0;
    }
    .user-menu li {
        margin-bottom: 0;
        width: 50%;
        float: left;
        border: 0;
    }
    .user-menu li a {
        display: block;
        padding: 10px 20px;
        background-color: #09f !important;
        border-radius: 0;
        text-align: center;
    }
    .listbb .user-menu li a {
        display: block;
        padding: 10px 20px;
        background-color: #fff !important;
        color: #a6a6a6;
        border-radius: 0;
        text-align: center;
    }
    .menu-footer {
        background-color: #242424;
        border-top: 1px solid rgba(62, 62, 62, 0.88);
        color: #D3D3D3;
    }
    .menu-footer li span {
        color: #D3D3D3;
    }
    .coininfodivlay2 {
        background: #242426;
        padding: 25px;
        position: relative;
        border-bottom: 5px solid #282828;
        border-radius:12px;
    }
    .coininfoicodiv{
        border-radius: 30px;
    }
    .menu-footer{
        border-top: unset;
    }
    .layui-m-layer0 .layui-m-layerchild{
        background: #2c2c2e;
    }
    .layui-m-layerbtn span:active {
        background-color:#2c2c2f;
    }
    .layui-m-layerbtn{
        background-color:#2c2c2e;
        border-top: 1px solid #3c3c3c;
    }
    .layui-m-layerbtn span[no]{
        border-right: 1px solid #3c3c3c;
    }
    .layui-m-layerbtn span[yes]{
        color: rgba(188,149,104,1);
    }
    .layui-m-layerbtn span[no]{
        color: #B8B8B8;
    }
    .layui-m-layer1 .layui-m-layerchild{
        background-color: transparent;
        box-shadow: 0 0 0 rgba(0,0,0,0);
    }
</style>
<body style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
            <ul class="menu-footer clearfix">
                <li>
                    <a href="<?php echo WSURLSHOW('apphome','index');?>
" class="external">
                        <img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/licai_on.png" alt="" width="22" height="22" style="margin-bottom: 5px;">
                        <span>理财</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo WSURLSHOW('apphome','tradeorderon');?>
" class="external">
                        <img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/cundan.png" alt="" width="22" height="22" style="margin-bottom: 5px;">
                        <span style="color: #505253;">存单</span>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo WSURLSHOW('appuser','index');?>
" class="external">
                        <img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/wode.png" alt="" width="22" height="22" style="margin-bottom: 5px;">
                        <span style="color: #505253;">我的</span>
                    </a>
                </li>
            </ul>
            <div class="page-content" style="padding-bottom: 100px;background: #2C2C2E;">
                <!--div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
                        <div class="swiper-slide"><img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['img'];?>
" alt="" height="200"></div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div style="width: 100%;padding: 0 10px;position:relative;margin-top: -30px;z-index: 999;">
                    <div style="padding:15px;height:120px;background:linear-gradient(273deg,rgba(249,243,229,1) 0%,rgba(236,220,197,1) 100%);border-radius:12px;">
                        <div>
                            <span style="font-family:PingFangSC-Semibold,PingFang SC;padding:2px 3px;font-size:10px;width:49px;height:16px;background:linear-gradient(229deg,rgba(185,65,130,1) 0%,rgba(234,125,95,1) 100%);border-radius:3px;">
                                新手专享
                            </span>
                            <span style="font-family:PingFangSC-Semibold,PingFang SC;vertical-align:middle;margin-left:10px;font-size:18px;font-weight:600;color:rgba(121,82,40,1);">
                                首次投资推荐
                            </span>
                        </div>
                        <div>
                            <span style="font-family:DINAlternate-Bold,DINAlternate;font-size:24px;height:46px;line-height:46px;font-weight:bold;color:rgba(121,83,41,1);">
                                3.97%
                            </span>
                            <span style="margin-left:10px;font-size:16px;font-family:'PingFangSC-Semibold,PingFang SC';font-weight:600;color:rgba(121,83,41,1);">
                                数量有限先到先得
                            </span>
                        </div>
                        <div>
                            <span style="color:#987B59;font-family:PingFangSC-Regular,PingFang SC;font-weight:400;color:rgba(152,123,89,1);">
                                年化收益率
                            </span>
                            <span style="margin-left:10px;padding-left:7px;color: #987B59;font-family:PingFangSC-Regular,PingFang SC;font-weight:400;color:rgba(152,123,89,1);">
                                高收益  中低风险
                            </span>
                        </div>
                        <button style="cursor:pointer;position:absolute;top:40%;right:20px;color:#fff;width:88px;height:33px;background:linear-gradient(128deg,rgba(223,199,161,1) 0%,rgba(188,149,104,1) 100%);box-shadow:0px 6px 21px 0px rgba(191,153,109,0.1);border-radius:30px;">
                            立即投资
                        </button>
                    </div>
                </div-->
                <div style="padding: 0 10px;margin: 20px 0 10px;text-align: center;">
                    <span style="color: #fff;font-size: 18px;">
                        精选产品
                    </span>
                    <!--span style="cursor:pointer;color: #727679;float: right;font-size: 12px;">
                        更多
                    </span-->
                </div>
                <div style="position: relative;cursor: pointer;padding: 0 10px!important;">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tradeorders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
                    <div id="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" onclick="join(this);" style="padding:10px 17px;background:rgba(36,36,38,1);border-radius:12px;margin-bottom: 8px;">
                        <div style="border-bottom: 1px solid #2d2d2d;">
                            <span style="height:37px;font-family:PingFangSC-Medium,PingFang SC;font-weight:500;color:rgba(173,173,173,1);line-height:37px;">
                                <?php echo $_smarty_tpl->tpl_vars['order']->value['item_name'];?>

                            </span>
                            <span style="float: right;height:37px;font-family:PingFangSC-Medium,PingFang SC;font-weight:500;color:rgba(173,173,173,1);line-height:50px;">
                                <img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/more.png" alt="" width="20" height="20">
                            </span>
                        </div>
                        <div style="margin-top: 10px;">
                            <span style="text-align:left;width:49%;display:inline-block;font-size:24px;font-family:DINAlternate-Bold,DINAlternate;font-weight:bold;color:rgba(188,149,104,1);">
                                <?php echo floatval($_smarty_tpl->tpl_vars['order']->value['price']);?>
元
                            </span>
                            <span style="text-align:center;width:49%;display:inline-block;color: #cccccc;font-size:18px;">
                                <?php echo floatval($_smarty_tpl->tpl_vars['order']->value['arate']);?>
%
                            </span>
                        </div>
                        <div style="margin: 5px 0 10px;">
                            <span style="text-align:left;color:#727679;font-size:12px;width:49%;display:inline-block;">
                                项目金额
                            </span>
                            <span style="text-align:center;color:#727679;font-size:12px;width:49%;display:inline-block;">
                                年化收益率
                            </span>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
/assets/wap/js/swiper.min.js"><?php echo '</script'; ?>
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
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/layer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var mySwiper = new Swiper('.swiper-container',{
        pagination : '.swiper-pagination',
        autoplay : 5000,
        grabCursor : true,
    });
    function join(obj) {
        var id = $(obj).attr('id');
        window.location.href = '/apphome/itemdetail/id/' + id;
    }
    <?php if ($_smarty_tpl->tpl_vars['tyswitch']->value > 0) {?>
    layer.open({
        type: 1
        ,content: '<img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/hongbao.png" width="200" onclick="hongbao();">'
    });
    function hongbao() {
        $.get('/apphome/tystartdo/id/' + <?php echo $_smarty_tpl->tpl_vars['ty']->value['id'];?>
, function (res) {
            res = JSON.parse(res);
            if(res.code){
                layer.open({content:res.msg, time: 2});
                setTimeout(function () {
                    window.location.href = '/apphome/tradeorderon';
                },2100);
            }else{
                layer.open({content:res.msg, time: 5});
            }
        });
    }
    <?php }
echo '</script'; ?>
>
</body>
</html>
<?php }
}
