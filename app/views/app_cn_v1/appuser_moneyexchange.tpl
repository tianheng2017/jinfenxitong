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
		width:76%;margin-left:12%;text-align:center;color:#fff;font-size:1rem;word-break: break-all;
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
            
            <div class="page-content" style="padding-top:40px;">
				
				
				
				<div class="navbar" style="position: fixed;">
					<div class="navbar-inner">
						<div class="left" style="font-weight: bold;color: #fff;">
							<a href="javascript:history.go(-1);" class="link icon-only external color-white">
								<i class="icon icon-back"></i>
							</a>
						</div>
						<div class="title text-color-white" style="left: -20px;">额度兑换</div>
						<div class="right">
							<!--<a href="" class="link external color-white"></a>-->
						</div>
					</div>
				</div>
				
				
				
				<div class="coininfodivlay">
					<div style="width:100%;">
						<div class="coininfoicodiv">
							<img style="width:100%;" src="<{VIEW_ROOTPATH}>/assets/wap/images/tether_200_200.png" />
						</div>
						<div class="coininfotxtdiv">
							<div class="coininfotxt1"><{PFCOINNAME}></div>
							<div class="coininfotxt2">
								<div class="cpck_address" style="width:77%;display:inline-block;overflow: hidden;" id="copytxtid">
									总资产：<span class="mymoneyall"><{number_format($myuserinfo["money"]+$myuserinfo["money2"]+$myuserinfo["money3"], 4, '.', '')}></span>
								</div>
							</div>
						</div>
					</div>
					<div style="width:100%;margin-top:.4rem;">
						<div class="coininfotxt3" style="color: #ffffff;">
							USDT：<span class="mymoney1"><{$myuserinfo["money"]}></span>
						</div>
						<div class="coininfotxt4" style="text-align:right;width:97%;margin-left:0;color: #fae4c5;">
							额度：<span class="mymoney2"><{$myuserinfo["money2"]}></span>&nbsp;&nbsp;&nbsp;&nbsp;佣金：<span class="mymoney3"><{$myuserinfo["money3"]}></span>
						</div>
					</div>
					
				</div>
				
				
                <div class="login-box block">
					<form action="#" id="form_post" name="form_post" method="post">
						<div class="list no-margin no-hairlines">
							<ul>
								
								<li class="item-content item-input" style="padding-left: 10px;padding-right: 10px;border: 1px solid #565656;background: #2c2c2c;">
									<div style="width:33%;display:inline-block;float:left;text-align:left;color:#fff;" class="ecv1">额度</div>
									<div style="width:33%;display:inline-block;float:left;text-align:center;">
										<img onclick="ecvM()" style="height:2em;" src="<{VIEW_ROOTPATH}>/assets/wap/images/lrchar03.png" />
									</div>
									<div style="width:33%;display:inline-block;float:left;text-align:right;color:#fff;" class="ecv2">USDT</div>
								</li>
								
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<input type="number" name="emoney" style="padding-left: 10px;" placeholder="USDT">
										</div>
									</div>
								</li>
								
							</ul>
						</div>
					</form>
					<button class="button button-fill button-big margin-top poatformbtn">提交</button>
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

		
		function getUMData(){
			$.get("<{WSURLSHOW('appuser','getUserMoneyData')}>?" + Math.random(), function(json) {
				var data=JSON.parse(json);
				if(data.state == "success"){
				
					$('.mymoney1').html(data.data.mymoney1);
					$('.mymoney2').html(data.data.mymoney2);
					$('.mymoney3').html(data.data.mymoney3);
					$('.mymoneyall').html(data.data.mymoneyall);
				
				}
			});
		}
		
		setInterval(getUMData,1000);
		
		
		var ectype = 1;
		
		ecvM = function(){
			if(ectype == 1){
				ectype = 2;
				$('.ecv1').html("USDT");
				$('.ecv2').html("额度");
			}else{
				ectype = 1;
				$('.ecv1').html("额度");
				$('.ecv2').html("USDT");
			}
		}
		
		
		$(".poatformbtn").click(function () {
			wu.showLoadingBg();
			setTimeout(() => {
				//隐藏loading
				wu.hideToast();
			}, 3000);
			
			var options = {
				url: "<{WSURLSHOW($WsCtrlClass,'moneyexchangedo')}>/ectype/"+ectype,
				type: 'post',
				dataType: 'json',
				data: $("#form_post").serialize(),
				success: function (res) {
					if (res["state"]=="success" && res["code"]==1) {
						wu.showMessage({
							title: "兑换成功！",
							backgroundColor: '#2bde62',
							duration: 3000
						});
						
					}
					if (res["state"]=="error") {
						var msg = "网络异常！";
						
						if(res["code"]==-1001){
							msg = "参数异常！";
						}
						
						if(res["code"]==-1002){
							msg = "兑换USDT有误！";
						}
						if(res["code"]==-1003){
							msg = "USDT最小限0.0001";
						}
						
						if(res["code"]==-1006){
							msg = "兑换失败！";
						}
						if(res["code"]==-1007){
							msg = "账户USDT不足！";
						}
						if(res["code"]==-10007){
							msg = "账户额度不足！";
						}
						
						if(res["code"]==-1008){
							msg = "兑换中途异常！";
						}
						
						
						
						
						wu.showMessage({
							title: msg,
							backgroundColor: 'red',
							duration: 3000
						});
					}
				},
				complete: function(XMLHttpRequest, textStatus){
				},
				error: function(){
					wu.showMessage({
						title: "网络异常！",
						backgroundColor: 'red',
						duration: 3000
					});
				} 
			};
			$.ajax(options);
			return false;
		});
		
		
		
	});
</script>


</body>
</html>
