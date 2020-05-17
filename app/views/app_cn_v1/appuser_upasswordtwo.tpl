<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#2196f3">
    <title><{$webconfig.webtitle.val}></title>
    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap/css/framework7.ios.min.css">
    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap/css/style.css">
	
	<!--vue_alert_start-->
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/wu-ui.css" />
	<script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/public/vuealert/js/vue.min.js"></script>
	<script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/public/vuealert/js/wu-ui.js"></script>
	<!--vue_alert_end-->
	
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
	.ios .login-box .list .item-inner {
    padding-left: 10px;
    padding-right: 10px;
}
.ios .theme-dark .list ul, .list.ios .theme-dark ul, .ios .list ul {
    background: rgba(49, 56, 94, 0.45);
    border: 1px solid rgba(59, 66, 114, 0.64);
}
.ios .button.button-fill, .ios .button.button-fill-ios {
    background-color: rgba(59, 66, 114, 0.89);
    border: 1px solid rgba(142, 149, 192, 0.2);
}
	.ios .theme-dark .navbar, .navbar.ios .theme-dark, .ios .navbar{
		background: #282828!important;
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
	.ios .list .item-inner{
		border-bottom: 2px solid #2c2c2c;
	}
	.ios .button.button-fill, .ios .button.button-fill-ios {
		background-color: #26A07B !important;
	}

	.ios .theme-dark .navbar, .navbar.ios .theme-dark, .ios .navbar {
		background-color: #2C2C2E!important;
		height: 55px;
	}
	.ios .button.button-fill, .ios .button.button-fill-ios {
		background-color: #BC9568 !important;
		border-radius: 5px;
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
	.ios .theme-dark .navbar:after, .navbar.ios .theme-dark:after{
		background: unset;
	}
	.ios .login-box .list .item-content{
		border: unset;
	}
	input{
		border-bottom: 2px solid #313133!important;
	}
	.ios .theme-dark .block{
		margin-top: 10px;
	}
	.ios .login-box .list .item-content{
		margin-top: 9px;
	}
</style>
	
<body class="theme-dark">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
			<div class="navbar">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="javascript:history.go(-1);" class="link icon-only external color-white">
                            <i class="icon icon-back"></i>
                        </a>
                    </div>
                    <div class="title text-color-white">修改安全密码</div>
                </div>
            </div>
            <div class="page-content" style="padding-top: 55px;">
				<div style="height: 70px;color: #727679;font-size: 14px;text-align: center;padding-top: 10px;background: #2C2C2E;">
					请为您<span style="color: #fff;"> <{$username}> </span>设置一个<br>
					<span style="text-align: center;">新密码</span>
				</div>
                <div class="login-box block">
					<form action="#" id="form_post" name="form_post" method="post">
						<div class="list no-margin no-hairlines">
							<ul>
								<li class="item-content">
									<div class="item-inner">
										<div class="item-input-wrap">
											<p style="font-size: 12px;">验证码</p>
											<input id="codeusername" type="text" name="codeusername" placeholder="输入验证码">
										</div>
										<div class="item-after">
											<button class="button button-fill codeusernamebtn">获取</button>
										</div>
									</div>
								</li>
								
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<p style="font-size: 12px;">新安全密码</p>
											<input type="password" name="passwordtwon" placeholder="输入新安全密码">
										</div>
									</div>
								</li>
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<p style="font-size: 12px;">再次输入</p>
											<input type="password" name="passwordtwon2" placeholder="再次输入新安全密码">
										</div>
									</div>
								</li>
							</ul>
						</div>
					</form>
					<button class="button button-fill button-big margin-top poatformbtn">确定</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/framework7.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/app.js"></script>

<script>
	$(".poatformbtn").click(function () {
		wu.showLoadingBg();
		setTimeout(() => {
			//隐藏loading
			wu.hideToast();
		}, 3000);
		
		var options = {
			url: "<{WSURLSHOW($WsCtrlClass,'upasswordtwoform')}>",
			type: 'post',
			dataType: 'json',
			data: $("#form_post").serialize(),
			success: function (res) {
				var restxt = "网络异常！";
				if (res["data"]["state"]=="true") {
					if(res["data"]["msg"]=="1001"){
						restxt = "修改成功！";
					}
					wu.showMessage({
						title: restxt,
						backgroundColor: '#2bde62',
						duration: 3000
					});
					setTimeout(function(){
						history.go(-1);
					},3000);
				}
				if (res["data"]["state"]=="false") {
					if(res["data"]["msg"]=="1002"){
						restxt = "修改失败！";
					}
					if(res["data"]["msg"]=="1003"){
						restxt = "请输入原密码！";
					}
					if(res["data"]["msg"]=="1004"){
						restxt = "请输入新密码！";
					}
					if(res["data"]["msg"]=="1005"){
						restxt = "请确认新密码！";
					}
					if(res["data"]["msg"]=="1006"){
						restxt = "两次输入的密码不同！";
					}
					if(res["data"]["msg"]=="1007"){
						restxt = "密码长度不能小于6位！";
					}
					if(res["data"]["msg"]=="1008"){
						restxt = "原密码有误！";
					}
					if(res["data"]["msg"]=="1009"){
						restxt = "密码相同，无需修改！";
					}
					
					if(res["data"]["msg"]=="1011"){
						restxt = "验证码已超时，请重新发送！";
					}
					if(res["data"]["msg"]=="1012"){
						restxt = "验证码错误！";
					}
					if(res["data"]["msg"]=="1013"){
						restxt = "验证码错误！";
					}
					
					wu.showMessage({
						title: restxt,
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
	
	
	
	
	var flagpcode=true;
	var pcodetime=60;
	$(".codeusernamebtn").click(function () {
		var codeusername="<{$myuserinfo['username']}>";
		
		if(!flagpcode){
			return false;
		}
		$(".codeusernamebtn").html("发送中···");
		flagpcode=false;
		
		
		
		var options = {
			url: "<{WSURLSHOW($WsCtrlClass,'codeusername')}>",
			type: 'post',
			dataType: 'text',
			data: "codeusername="+codeusername,
			success: function (data) {
				if (data.length > 0) {
					if (data == "1001") {
						wu.showMessage({
							title: "发送成功！",
							backgroundColor: '#2bde62',
							duration: 3000
						});
						var intj=self.setInterval(function (){
							if(pcodetime==0){
								window.clearInterval(intj);
								flagpcode=true;
								pcodetime=60;
								$(".codeusernamebtn").html("重新发送");
							}else{
								pcodetime=pcodetime-1;
								$(".codeusernamebtn").html(pcodetime+"s");
							}
							
						},1000);
					}
					if (data !="1001") {
					
						flagpcode=true;
						pcodetime=60;
						$(".codeusernamebtn").html("重新发送");
						
						var restxt = "网络异常！";
						if (data == "1002") {
							restxt = "发送失败！";
						}else if (data == "1005") {
							restxt = "手机号格式有误！";
						}else{
							restxt = "发送频率过快，请稍等"+data+"s";
						}
						
						wu.showMessage({
							title: restxt,
							backgroundColor: 'red',
							duration: 3000
						});
					}
				}
			}
		};
		$.ajax(options);
		return false;
	});
</script>

</body>
</html>
