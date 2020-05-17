<!DOCTYPE html>
<html>
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
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/wu-ui.css" />
	<script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/vuealert/js/vue.min.js"></script>
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
		height: 60px;
		line-height: 60px;
	}
	.coininfodivlay{
		/*
		width:90%;
		background: #5186d6;
		margin:2%;
		border-radius: 7px;
		*/
		
		margin:.6em 0 1em 0;
		background: rgba(255, 255, 255, 0.11);
		
		padding: 5% 3%;
		
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
		width:76%;margin-left:12%;text-align:center;color:#fff;font-size:3em;word-break: break-all;
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
	
	.coinnavspan{
		width:32.5%;text-align:center;display: inline-block;
		padding: 5px 0;
		background: rgba(255, 255, 255, 0.06);
	}
	canvas{
		width: 50%;
		border: 12px solid rgb(255, 255, 255);
	}
	.ios .navbar{
		background: #232323!important;
	}
	.page-content{
		background: #282828!important;
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
</style>
<body style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
            <div class="page-content" style="padding-top:80px;background: #2c2c2e!important;">
				<div class="navbar" style="position: fixed;background: #2c2c2e!important;">
					<div class="navbar-inner">
						<div class="left" style="font-weight: bold;color: #fff;">
							<a href="javascript:history.go(-1);" class="link icon-only external color-white">
								<i class="icon icon-back"></i>
							</a>
						</div>
						<div style="text-align: center;width: 100%;margin-left: -40px;">
							邀请好友
						</div>
					</div>
				</div>
				<div class="coininfodivlay coininfodivlayusdt" style="display:;">
					<div style="height: 60px;width: 100%;text-align: center;">
						<p style="font-size: 24px;font-weight: bold;">邀请好友有好礼</p>
						<p style="color:#727679;line-height: 40px;">你想要的 触手可及</p>
					</div>
					<div style="width: 300px;height: 315px;background:rgba(44,44,46,1);box-shadow:0 1px 50px 0 rgba(0,0,0,0.5) inset;border-radius:20px;margin: 30px auto 0;position: relative;">
						<p style="color: #FFFFFF;position: absolute;top: 7%;left: 30.5%;font-size: 15px;">您的专属邀请码</p>
						<p style="font-size: 30px;font-weight:bold;color: #BC9568;position: absolute;top: 13.4%;left: 36%;"><{$myuserinfo["id"]}></p>
						<img src="<{$qrcode}>" alt="" style="width: 185px;position: absolute;top: 28.5%;left: 20%;">
					</div>
					<!--div style="margin-top: 20px;width: 100%;text-align: center;">
						<button style="cursor:pointer;font-size: 16px;display:inline-block;color:#BC9568;background:none;width: 140px;height:48px;border-radius:44px;border:1px solid rgba(188,149,104,1);">分享链接</button>
						<button style="cursor:pointer;font-size: 16px;display:inline-block;color:#FFF;background:linear-gradient(128deg,rgba(223,199,161,1) 0%,rgba(188,149,104,1) 100%);box-shadow:0px 6px 21px 0px rgba(191,153,109,0.1);width: 140px;height:48px;border-radius:44px;border: unset;margin-left: 10px;">分享专属海报</button>
					</div-->
				</div>
            </div>
        </div>
    </div>
</div>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/framework7.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/clipboard.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/app.js"></script>
<script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.qrcode.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/js/bscroll.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/js/scrollmenu.js"></script>
<script>
	$(document).ready(function () {
		var copycallM = function(){
			wu.showMessage({
				title: "复制成功！",
				backgroundColor: '#2bde62',
				duration: 3000
			});
		};
		var clipboard1 = new ClipboardJS('.copybtn1');
		clipboard1.on('success', function(e) {
			copycallM();
			e.clearSelection();
		});
	});
</script>


</body>
</html>
