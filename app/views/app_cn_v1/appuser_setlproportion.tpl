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
</style>
	
<body style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
            
            <div class="page-content" style="padding-top:40px;">
				
				
				
				
				<div class="coininfodivlay">
					<div style="width:100%;">
						<div class="coininfoicodiv" style="background: #54baff;border: 1px solid #fff;">
							<img style="width:100%;" src="<{VIEW_ROOTPATH}>/assets/wap/images/myteam01.png" />
						</div>
						<div class="coininfotxtdiv">
							<div class="coininfotxt1">当前比例：<{$userl.proportion}> %</div>
							<div class="coininfotxt2">
								<div class="cpck_address" style="width:77%;display:inline-block;overflow: hidden;" id="copytxtid">
									<{$userl.username}>
								</div>
							</div>
						</div>
					</div>
					<div style="width:100%;margin-top:.4rem;display:none;">
						<div class="coininfotxt3" style="color: #ffffff;">
							<span class="mymoney1"><{$userm.proportion}> %</span>
						</div>
						<div class="coininfotxt4" style="text-align:right;width:97%;margin-left:0;color: #fae4c5;">
							我的团队总返利比例
						</div>
					</div>
					
					<div style="width:100%;margin-top:.4rem;">
						<div class="coininfotxt3" style="color: #ffffff;">
							<span class="mymoney1"><{$alltramoneyv}> USDT</span>
						</div>
						<div class="coininfotxt4" style="text-align:right;width:97%;margin-left:0;color: #fae4c5;">
							今日团队总接单
						</div>
					</div>
					
				</div>
				
				<div class="item-content margin-top alerttxt" style="padding:0;text-align:center;font-size:12px;border-top: 1px solid #bdddff;background: #09f;margin-top:0px !important;height:60px;line-height: 60px;color: #fff;">
					<div style="width:49%;text-align:center;display:inline-block;">直推：<b><{$countteaml1}></b> / 人</div>
					<div style="width:49%;text-align:center;display:inline-block;">团队：<b><{$countteamall}></b> / 人</div>
				</div>
			
				<div class="navbar" style="position: fixed;">
					<div class="navbar-inner">
						<div class="left" style="font-weight: bold;color: #fff;">
							<a href="javascript:history.go(-1);" class="link icon-only external color-white">
								<i class="icon icon-back"></i>
							</a>
						</div>
						<div class="title text-color-white" style="left: -20px;">下线返利比例设置</div>
						<div class="right">
							<!--<a href="" class="link external color-white"></a>-->
						</div>
					</div>
				</div>
				
				
                <div class="login-box block">
					<form action="#" id="form_post" name="form_post" method="post">
						<div class="list no-margin no-hairlines">
							<ul>
								
								<li class="item-content item-input" style="border: 1px solid #4c5b85;padding-left: 10px;padding-right: 10px;font-size:12px;">
									<div style="width:33%;display:inline-block;float:left;text-align:center;color:#a6a6a6;">团队总返利比例</div>
									<div style="width:33%;display:inline-block;float:left;text-align:center;color:#a6a6a6;">
										该下级可得
									</div>
									<div style="width:33%;display:inline-block;float:left;text-align:center;color:#a6a6a6;">该分支我可得</div>
								</li>
								
								
								<li class="item-content item-input" style="border: 1px solid #4c5b85;padding-left: 10px;padding-right: 10px;">
									<div style="width:33%;display:inline-block;float:left;text-align:center;color:#a6a6a6;"><{$userm.proportion}> %</div>
									<div style="width:33%;display:inline-block;float:left;text-align:center;color:#a6a6a6;">
										<{$userl.proportion}> %
									</div>
									<div style="width:33%;display:inline-block;float:left;text-align:center;color:#a6a6a6;"><{$userm.proportion-$userl.proportion}> %</div>
								</li>
								<br>
								
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<input type="number" name="proportion" style="border: 0;padding-left: 10px;" placeholder="划分下级新比例值">
										</div>
									</div>
								</li>
								<div style="color:#b3b8d1c2;padding: 10px 0;">注：不可低于当前值(<{$userl.proportion}> ~ <{$userm.proportion}>)</div>
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
		
		
		
		$(".poatformbtn").click(function () {
			wu.showLoadingBg();
			setTimeout(() => {
				//隐藏loading
				wu.hideToast();
			}, 3000);
			
			var options = {
				url: "<{WSURLSHOW($WsCtrlClass,'setlproportiondo')}>/uid/<{$userl['id']}>",
				type: 'post',
				dataType: 'json',
				data: $("#form_post").serialize(),
				success: function (res) {
					if (res["state"]=="success" && res["code"]==1) {
						wu.showMessage({
							title: "设置成功！",
							backgroundColor: '#2bde62',
							duration: 3000
						});
						
						setTimeout(function(){
							location.reload();
						},3000);
						
					}
					if (res["state"]=="error") {
						var msg = "网络异常！";
						
						if(res["code"]==-1001){
							msg = "参数异常！";
						}
						
						if(res["code"]==-1002){
							msg = "比例值设置有误！";
						}
						
						
						if(res["code"]==-1003){
							msg = "比例值不能小于当前设置值！";
						}
						if(res["code"]==-1004){
							msg = "比例值不能大于团队总比例值！";
						}
						if(res["code"]==-1007){
							msg = "设置失败！";
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
