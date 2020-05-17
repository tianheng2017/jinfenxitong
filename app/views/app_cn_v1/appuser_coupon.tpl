<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#2196f3">
    <title><{$webconfig.webtitle.val}></title>
    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap/css/framework7.ios.min.css">
    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap/css/framework7-icons.css">
    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap/css/style.css">


    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/css/animate.css">
    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/css/scrollmenu.css">

    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap2/css/style.css">


    <!--vue_alert_start-->
    <link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/wu-ui.css"/>
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/public/vuealert/js/vue.min.js"></script>
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/public/vuealert/js/wu-ui.js"></script>

    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/alert/css/alert.css">
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

        margin: .6em 0 1em 0;
        background: rgba(255, 255, 255, 0.11);

        padding: 1rem 3%;

        position: unset!important;
    }

    .coininfoicodiv {
        width: 2rem;
        height: 2rem;
        border-radius: 6px;
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

    .ios .login-box .list .item-content {
        border: 1px solid #c0c0c0;
        border-radius: 100px;
        margin-top: 1em;
        padding: 0 10px;
    }
    .page-content{
        background: #2C2C2E;
    }
    .coininfodivlay{
        background: #2C2C2C !important;
        margin-bottom: 10px!important;
        border-top:unset!important;
    }
    .ios .navbar{
        background: #232323!important;
    }
    .ios .block{
        margin: 5px 0 35px 0;
        background: #2c2c2c;
    }
    .ios .login-box .list .item-content{
        border: 1px solid #565656;
    }
    .ios .button.button-fill, .ios .button.button-fill-ios {
        background-color: #26A07B !important;
    }
    .coininfoicodiv{
        border-radius: 30px;
    }
    .coininfotxtdiv{
        margin-top: 5px;
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
    body{
        font-family:PingFangSC-Regular,PingFang SC;
    }
    input{
        border: 2px solid #404040!important;
        width: 100%!important;
        height: 60px!important;
        color: #fff!important;
        font-size: 16px!important;
    }
    .img-upload {
        display: block;
        position: relative;
        background-color: #2C2C2C;
        border: 1px solid #565656;
        border-radius: 5px;
        text-align: center;
        padding-top: 100%;
        height: 0;
        overflow: hidden;
        top: 0.6rem;
    }

    .img-upload .text i {
        background-color: #09f;
        display: block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        margin-bottom: 10px;
    }
</style>
<style type="text/css">
    .stamp * {
        padding: 0;
        margin: 0;
        list-style:none;
        font-family:"Microsoft YaHei", 'Source Code Pro', Menlo, Consolas, Monaco, monospace;
    }
    .stamp {
        width: 100%;
        height: 140px;
        padding: 0 10px;
        margin-bottom: 20px;
        position: relative;
        overflow: hidden;
    }
    .stamp:before {
        content: '';
        position: absolute;
        top:0;
        bottom:0;
        left:10px;
        right:10px;
        z-index: -1;
    }
    .stamp .par {
        float: left;
        padding: 16px 15px;
        width: 220px;
        border-right:2px dashed rgba(255, 255, 255, .3);
        text-align: left;
    }
    .stamp .par p {
        color:#fff;
        font-size: 16px;
        line-height: 21px;
        text-align: center;
    }
    .stamp .par span {
        font-size: 48px;
        color:#fff;
        line-height: 60px;
    }
    .stamp .par .sign {
        font-size: 34px;
    }
    .stamp .par sub {
        position: relative;
        top:-5px;
        color:rgba(255, 255, 255, .8);
    }
    .stamp .copy {
        display: inline-block;
        padding:21px 14px;
        width:110px;
        vertical-align: text-bottom;
        font-size: 30px;
        color:rgb(255,255,255);
        text-align: center;
        line-height: initial;
    }
    .stamp .copy p {
        font-size: 16px;
        margin-top: 15px;
    }
    .stamp01 {
        background: radial-gradient(rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 5px, #F39B00 5px);
        background-size: 15px 15px;
        background-position: 9px 3px;
    }
    .stamp01:before {
        background-color:#F39B00;
    }
    .stamp02 {
        background: radial-gradient(transparent 0, transparent 5px, #D24161 5px);
        background-size: 15px 15px;
        background-position: 9px 3px;
    }
    .stamp02:before {
        background-color:#D24161;
    }
    .stamp03 {
        background: radial-gradient(transparent 0, transparent 5px, #7EAB1E 5px);
        background-size: 15px 15px;
        background-position: 9px 3px;
    }
    .stamp03:before {
        background-color:#7EAB1E;
    }
    .stamp03 .copy {
        padding: 10px 6px 10px 12px;
        font-size: 24px;
        margin-top: 50px;
    }
    .stamp03 .copy p {
        font-size: 14px;
        margin-top: 5px;
        margin-bottom: 8px;
    }
    .stamp03 .copy a {
        background-color:#fff;
        color:#333;
        font-size: 14px;
        text-decoration:none;
        padding:5px 10px;
        border-radius:3px;
        display: block;
    }
    .stamp04 {
        width: 390px;
        background: radial-gradient(rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 4px, #50ADD3 4px);
        background-size: 12px 8px;
        background-position: -5px 10px;
    }
    .stamp04:before {
        background-color:#50ADD3;
        left: 5px;
        right: 5px;
    }
    .stamp04 .copy {
        padding: 10px 6px 10px 12px;
        font-size: 24px;
    }
    .stamp04 .copy p {
        font-size: 14px;
        margin-top: 5px;
        margin-bottom: 8px;
    }
    .stamp04 .copy a {
        background-color:#fff;
        color:#333;
        font-size: 14px;
        text-decoration:none;
        padding:5px 10px;
        border-radius:3px;
        display: block;
    }
</style>
<body style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
            <div class="page-content" style="padding-bottom: 100px;background: #242426;">
                <div class="navbar" style="position: fixed;background: #2C2C2E!important;font-size: 16px;height: 60px;">
                    <div class="navbar-inner">
                        <div class="left" style="font-weight: bold;color: #fff;">
                            <a href="javascript:history.go(-1);" class="link icon-only external color-white">
                                <i class="icon icon-back"></i>
                            </a>
                        </div>
                        <div style="text-align: center;width: 100%;margin-left: -50px;">
                            我的优惠卷
                        </div>
                    </div>
                </div>
                <div style="width: 100%;padding: 10px;margin-top: 70px;text-align: center;">
                    <ul>
                        <{if $data}>
                            <{foreach from=$data item=$v}>
                            <li>
                                <div class="stamp stamp0<{$v.bg}>">
                                    <div class="par">
                                        <p><{$v.name}> 优惠劵</p>
                                        <sub class="sign">￥</sub>
                                        <span><{$v.money}></span>
                                        <p>获得时间：<{$v.create_time}></p>
                                    </div>
                                    <div class="copy">
                                        <{if $v.status == 1}>
                                            <a href="<{WSURLSHOW($WsCtrlClass,'coupon_detail')}>/id/<{$v.id}>" class="link external">立即提现</a>
                                        <{else}>
                                            <span style="font-size: 16px;height: 100px;line-height: 100px;display: block;">提现审核中</span>
                                        <{/if}>
                                    </div>
                                </div>
                            </li>
                            <{/foreach}>
                        <{else}>
                        <li style="color:#B8B8B8;">暂无优惠券</li>
                        <{/if}>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/framework7.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/upload.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/clipboard.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/app.js"></script>
<script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.qrcode.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/js/bscroll.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/js/scrollmenu.js"></script>
</body>
</html>