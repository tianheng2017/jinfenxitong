<?php
/* Smarty version 3.1.30, created on 2020-05-17 17:26:32
  from "/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/appuser_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec1034893e8d8_82595228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34167f27286b74ca706e849e0429057436509857' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/appuser_index.tpl',
      1 => 1589180139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec1034893e8d8_82595228 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<style>
    .ios .navbar {
        background-color: #2C2C2C;
    }

    .coininfodivlay {
        /*
        width:90%;
        background: #5186d6;
        margin:2%;
        border-radius: 7px;
        */

        margin: .6em 0 1em 0;
        background: #2C2C2C !important;

        padding: 0 5%;

        position: relative;
        height: 200px;
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
        height: 2rem;
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
        width: 97%;
        text-align: right;
        color: #fff;
        font-size: .7rem;
    }

    .container {
        padding: 0;
    }

    .user-menu li a {
        display: block;
        padding: 10px 5%;
        background-color: #2C2C2C!important;
        border-radius: 0;
        text-align: left;
    }

    .user-menu li {
        margin-bottom: 0;
        width: 100%;
        height: 55px;
        float: left;
        border: 1px solid rgba(40, 51, 80, 0);
    }

    .user-menu li a img {
        width: 25px;
    }

    .user-menu li a:before {
        float: inherit;
    }


    .user-menu li a {
        display: block;
        padding: 10px 5%;
        background-color: #2C2C2C!important;
        border-radius: 0;
        text-align: left;
    }
    .menu-footer {
        background-color: #242424;
        border-top: 3px solid rgba(62, 62, 62, 0.88);
        color: #D3D3D3;
    }
    .menu-footer li span {
        color: #D3D3D3;
    }
    .ios .navbar{
        background: #2C2C2C!important;
    }
    .page-content{
        background: #2C2C2C!important;
    }
    .coininfoicodiv{
        border-radius: 30px;
    }
    .coininfotxtdiv{
        margin-top: 5px;
    }
    .ios .navbar-inner{
        padding: 0 5%;
        border-bottom: 1px solid #323234;
    }
    .user-menu li a img,.user-menu li a p{
        display: inline-block;
    }
    .user-menu li a p{
        width: 80px;
        text-align: left;
        font-size: 15px;
        color: #B8B8B8;
        vertical-align: middle;
        margin-left: 10px;
    }
    .right_icon{
        background-size: 8px 13px;
        background-repeat: no-repeat;
        background-position: 95% center;
        background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20width%3D'8px'%20height%3D'13px'%20viewBox%3D'0%200%208%2013'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Cpolygon%20fill%3D'%23c7c7cc'%20transform%3D'translate(1.500000%2C%206.500000)%20rotate(-45.000000)%20translate(-1.500000%2C%20-6.500000)%20'%20points%3D'6%2011%206%202%204%202%204%209%20-3%209%20-3%2011%205%2011'%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E");
        position: absolute;
        color: #fff;
        width: 35px;
        height: 35px;
        right: 5%;
        margin-top: 10px;
    }
    .menu-footer li.active span{
        color: #BC9568;
    }
    .menu-footer{
        border-top:unset;
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
/assets/wap/img/licai.png" alt="" width="22" height="22" style="margin-bottom: 5px;">
                        <span style="color: #505253;">理财</span>
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
/assets/wap/img/wode_on.png" alt="" width="22" height="22" style="margin-bottom: 5px;">
                        <span>我的</span>
                    </a>
                </li>
            </ul>
            <div class="page-content" style="padding-bottom: 100px;padding-top:85px;">
                <div class="navbar" style="position: absolute;height: 80px;cursor: pointer;" id="user" data-url="<?php echo WSURLSHOW('appuser','account');?>
">
                    <div class="navbar-inner">
                        <div class="left" style="font-weight: bold;color: #fff;">
                            <div style="width: 100%;display: block;color: #BC9568!important;font-size: 22px;"><?php echo $_smarty_tpl->tpl_vars['myuserinfo']->value["username"];?>
</div>
                            <!--div>UID: <?php echo $_smarty_tpl->tpl_vars['myuserinfo']->value["id"];?>
</div-->
                        </div>
                        <div class="title text-color-white"></div>
                        <div class="right" style="position: absolute;right: 5%;top: 30px;">
                            <i class="right_icon"></i>
                        </div>
                    </div>
                </div>


                <div class="coininfodivlay">
                    <div style="width:100%;">
                        <div style="height: 60px;line-height: 60px;">
                            <img style="width:27px;" src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/qianbao.png"/>
                            <span style="font-size: 16px;color:#B8B8B8;margin-left: 10px;vertical-align: middle;">我的资产</span>
                        </div>
                        <div style="height: 60px;width: 100%;">
                            <span style="display: block;font-size: 13px;color: #727679;">账户总资产</span>
                            <span style="display: block;margin-top: 10px;font-size: 22px;color: #BC9568;font-weight: bold;"><?php echo floatval(number_format(($_smarty_tpl->tpl_vars['myuserinfo']->value["money"]),4,'.',''));?>
</span>
                            <!--span style="display: block;color:#727679;font-size: 12px;margin-top: 5px;">≈ ¥ <?php echo floatval(number_format(($_smarty_tpl->tpl_vars['myuserinfo']->value["money"]),4,'.',''));?>
</span-->
                        </div>
                        <div style="width: 100%;position: relative;">
                            <a class="external" href="<?php echo WSURLSHOW('appuser','recharge');?>
"
                               style="text-align:center;border: 1px solid #242426;border-radius: 12px;background:#242426;min-width:4rem;display:inline-block;position:absolute;left:0;top: 35px;width:48%;height: 44px;line-height: 44px;font-size: 16px;color:#BC9568;">
                                充值
                            </a>
                            <a class="external" href="<?php echo WSURLSHOW('appuser','presentation');?>
"
                               style="text-align:center;border: 1px solid #BC9568;border-radius: 12px;background: #BC9568;min-width:4rem;display:inline-block;position:absolute;right:0;top: 35px;width:48%;height: 44px;line-height: 44px;font-size: 16px;">
                                提现
                            </a>
                        </div>
                    </div>
                </div>


                <div class="container" style="padding-bottom: 60px;padding-top: 5px;">
                    <ul class="user-menu">
                        <li>
                            <a class="external" href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'moneypath');?>
">
                                <img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/mingxi.png"/>
                                <p>交易明细</p>
                                <i class="right_icon"></i>
                            </a>
                        </li>

                        <li>
                            <a class="external" href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'myteam');?>
">
                                <img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/tuandui.png"/>
                                <p>团队数据</p>
                                <i class="right_icon"></i>
                            </a>
                        </li>
                        <!--li>
                            <a class="external" href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'coupon');?>
">
                                <img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/yeji.png"/>
                                <p>优惠卷</p>
                                <i class="right_icon"></i>
                            </a>
                        </li-->
                        <li>
                            <a class="external" href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'invitation');?>
">
                                <img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/yaoqing.png"/>
                                <p>邀请好友</p>
                                <i class="right_icon"></i>
                            </a>
                        </li>
                        <li>
                            <a class="external" href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'account');?>
">
                                <img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/anquan.png"/>
                                <p>账户安全</p>
                                <i class="right_icon"></i>
                            </a>
                        </li>
                        <li>
                            <a class="external" href="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'callus');?>
">
                                <img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/kefu.png"/>
                                <p>客服</p>
                                <i class="right_icon"></i>
                            </a>
                        </li>
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
>
    $('#user').on('click',function () {
        window.location.href = $(this).attr('data-url');
    });
    $(document).ready(function () {
        function getUMData() {
            $.get("<?php echo WSURLSHOW('appuser','getUserMoneyData');?>
?" + Math.random(), function (json) {
                var data = JSON.parse(json);
                if (data.state == "success") {
                    $('.mymoney1').html(data.data.mymoney1);
                    $('.mymoney2').html(data.data.mymoney2);
                    $('.mymoney3').html(data.data.mymoney3);
                    $('.mymoneyall').html(data.data.mymoneyall);
                }
            });
        }
        setInterval(getUMData, 1000);
    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
