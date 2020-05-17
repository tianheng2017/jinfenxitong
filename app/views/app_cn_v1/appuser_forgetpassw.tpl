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
	<link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/public/css/jquery.toast.css">
	
	<!--vue_alert_start-->
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/wu-ui.css" />
	<script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/public/vuealert/js/vue.min.js"></script>
	<script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/public/vuealert/js/wu-ui.js"></script>
	<!--vue_alert_end-->

	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/codrops/css/style.css" />
	<script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/public/codrops/js/modernizr.custom.79639.js"></script>
</head>

<style>
.ios .login-box .list .item-inner {
    padding-left: 0;
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

body {
    color: #fff;
    background-color: #ffffff;
    background: none;
}
.ios a {
    color: #a6a6a6;
}
.ios .theme-dark .list ul, .list.ios .theme-dark ul, .ios .list ul {
    background: none;
    border: 0;
}
.ios .theme-dark .list input[type=date], .ios .theme-dark .list input[type=datetime-local], .ios .theme-dark .list input[type=email], .ios .theme-dark .list input[type=number], .ios .theme-dark .list input[type=password], .ios .theme-dark .list input[type=search], .ios .theme-dark .list input[type=tel], .ios .theme-dark .list input[type=text], .ios .theme-dark .list input[type=time], .ios .theme-dark .list input[type=url], .ios .theme-dark .list select, .list.ios .theme-dark input[type=date], .list.ios .theme-dark input[type=datetime-local], .list.ios .theme-dark input[type=email], .list.ios .theme-dark input[type=number], .list.ios .theme-dark input[type=password], .list.ios .theme-dark input[type=search], .list.ios .theme-dark input[type=tel], .list.ios .theme-dark input[type=text], .list.ios .theme-dark input[type=time], .list.ios .theme-dark input[type=url], .list.ios .theme-dark select {
    color: #979797;
}
.ios .login-box .list .item-content {
    border: 1px solid #c0c0c0;
    border-radius: 100px;
	margin-top: 1em;
}
.ios .theme-dark .item-inner:after {
    background-color: rgba(255, 255, 255, 0);
}
.ios .button.button-fill, .ios .button.button-fill-ios {
    background-color: #09f;
    border-radius: 100px;
    border: 1px solid rgba(142, 149, 192, 0.2);
}
.ios .block {
    margin: 35px 0 15px 0;
    padding: 0 15px;
    color: #6d6d72;
}
.ios .theme-dark .navbar, .navbar.ios .theme-dark {
    background: #09f;
}

.jq-icon-error {
    background-color: #a4a4a4;
    color: #ffffff;
    border-color: #ffffff;
}
.jq-icon-success {
    background-color: #09f;
    color: #ffffff;
    border-color: #ffffff;
}
.jq-toast-loaded{
	display:none;
}


.ios .theme-dark .page, .page.ios .theme-dark {
    background-color: #000;
}
.ios .login-box .list .item-content {
    border-radius: 0;
    border: none;
    border-bottom: 1.1px solid #727272;
    margin-top: 1em;
}
.ios .list input[type=date], .ios .list input[type=datetime-local], .ios .list input[type=email], .ios .list input[type=number], .ios .list input[type=password], .ios .list input[type=search], .ios .list input[type=tel], .ios .list input[type=text], .ios .list input[type=time], .ios .list input[type=url], .ios .list select {
    height: 44px;
    color: #000;
    font-size: 21px;
    font-weight: bolder;
}

.ios .button.button-fill, .ios .button.button-fill-ios {
    background-color: #515151 !important;
    border: 1px solid rgba(142, 149, 192, 0.2);
}
.ios .button.button-fill, .ios .button.button-fill-ios {
    border-radius: 5px;
    border: 1px solid rgba(142, 149, 192, 0.2);
}
.ios .button.button-big, .ios .button.button-big-ios {
    font-size: 16px;
    height: 50px;
    line-height: 50px;
    color: #d1d1d1;
    font-weight: bold;
}
.ios .theme-dark .navbar, .navbar.ios .theme-dark, .ios .navbar {
    background: transparent !important;
}
.page-content{
	background: #2C2C2E!important;
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
        <div class="page login-page">
		
			<div class="navbar">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="javascript:history.go(-1);" class="link icon-only external color-white">
                            <i class="icon icon-back"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="page-content">
				
                <br>
                <div class="block" style="margin: 10px 0 15px 0;">
                    <img src="<{VIEW_ROOTPATH}>/assets/wap/images/logo2.png" style="margin: 0;display:none;" class="logo-img">
                    <div class="margin-top">
						<span style="font-size: 26px;font-weight: bold;color: #BC9568;">找回密码</span>
					</div>
                </div>
                <div class="login-box block">
                    <div class="list no-margin no-hairlines">
						<form action="#" id="form_post" name="form_post" method="post">
							<ul>
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<section class="main" style="width: 33%;display:inline-block;float:left;">
												<div class="wrapper-demo" style="margin:0;">
													<div id="dd" class="wrapper-dropdown-2" tabindex="1" style="border-left:unset;background:unset;border-right: 1px solid #343436;padding: 0 15px 0 15px;margin-top: 15px;">
														<span>+86 中国</span>
														<ul class="dropdown" style="background: #fff !important;padding:0;z-index: 999999;">
															<li><a href="#">+86 中国</a></li>
															<li><a href="#">+66 泰国</a></li>
															<li><a href="#">+62 印尼</a></li>
															<li><a href="#">+60 马来西亚</a></li>
															<li><a href="#">+00855 柬埔寨</a></li>
															<li><a href="#">+0063 菲律宾</a></li>
															<li><a href="#">+0084 越南</a></li>
															<li><a href="#">+00856 老挝</a></li>
															<li><a href="#">+0095 缅甸</a></li>
														</ul>
													</div>
												</div>
											</section>
											<input style="display:inline-block;float:left;width:55%;margin-left: 5%;" id="username" type="text" name="username" placeholder="请输入手机号">
										</div>
									</div>
								</li>
								<li class="item-content">
									<div class="item-inner">
										<div class="item-input-wrap">
											<p id="code" style="font-size: 10px;color: red;display: none;">验证码错误，请重新输入</p>
											<input id="codeusername" type="text" name="codeusername" placeholder="请输入验证码">
										</div>
										<div class="item-after">
											<span class="codeusernamebtn" style="cursor: pointer;color:#BC9568;">获取</span>
										</div>
									</div>
								</li>
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<input id="password" type="password" name="password" placeholder="请输入新密码">
										</div>
									</div>
								</li>
								
							</ul>
						</form>
                    </div>
					<button id="submits" style="color:#fff;font-size: 16px;width:110px;height:45px;background:linear-gradient(128deg,rgba(223,199,161,1) 0%,rgba(188,149,104,1) 100%);box-shadow:0px 6px 21px 0px rgba(191,153,109,0.1);border-radius:48px;border:1px solid rgba(151,151,151,1);position: absolute;top: 200px;right: 20px;cursor: pointer;">重置密码</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/framework7.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/app.js"></script>
<!-- jquery.toast JS -->
<script src="<{VIEW_ROOTPATH}>/assets/public/js/jquery.toast.js"></script>
<script type="text/javascript">
	function DropDown(el) {
		this.dd = el;
		this.placeholder = this.dd.children('span');
		this.opts = this.dd.find('ul.dropdown > li');
		this.val = '';
		this.index = -1;
		this.initEvents();
	}
	DropDown.prototype = {
		initEvents : function() {
			var obj = this;
			obj.dd.on('click', function(event){
				$(this).toggleClass('active');
				return false;
			});
			obj.opts.on('click',function(){
				var opt = $(this);
				obj.val = opt.text();
				obj.index = opt.index();
				obj.placeholder.text(obj.val);
			});
		},
		getValue : function() {
			return this.val;
		},
		getIndex : function() {
			return this.index;
		}
	};
	$(function() {
		var dd = new DropDown($('#dd'));
		$(document).click(function() {
			$('.wrapper-dropdown-2').removeClass('active');
		});
	});
</script>
<script>
	$(document).ready(function () {
		<!--注册提交 -->
		$("#submits").click(function () {
			var options = {
				url: "<{WSURLSHOW($WsCtrlClass,'forgetpasswform')}>",
				type: 'post',
				dataType: 'text',
				data: $("#form_post").serialize(),
				success: function (data) {
					if (data.length > 0) {
						if (data == "1001") {
							wu.showMessage({
								title: "重置成功！",
								backgroundColor: '#09f',
								duration: 3000
							});
							setTimeout(function(){
								self.location = "<{WSURLSHOW($WsCtrlClass,'login')}>";
							},3000);
						}
						if (data == "1003") {
							wu.showMessage({
								title: "账号不存在！",
								backgroundColor: 'red',
								duration: 3000
							});
						}
						
						if (data == "1002") {
							wu.showMessage({
								title: "重置失败！",
								backgroundColor: 'red',
								duration: 3000
							});
						}
						
						
						
						if (data == "1005") {
							wu.showMessage({
								title: "手机号格式有误！",
								backgroundColor: 'red',
								duration: 3000
							});
						}
						if (data == "1006") {
							wu.showMessage({
								title: "密码长度不能小于6位！",
								backgroundColor: 'red',
								duration: 3000
							});
						}
						if (data == "1007") {
							wu.showMessage({
								title: "验证码已超时，请重新发送！",
								backgroundColor: 'red',
								duration: 3000
							});
						}
						if (data == "1008") {
							// wu.showMessage({
							// 	title: "验证码错误！",
							// 	backgroundColor: 'red',
							// 	duration: 3000
							// });
							$('#code').show();
						}
						if (data == "1009") {
							// wu.showMessage({
							// 	title: "验证码错误！",
							// 	backgroundColor: 'red',
							// 	duration: 3000
							// });
							$('#code').show();
						}
						if (data == "1010") {
							wu.showMessage({
								title: "用户名、密码错误！",
								backgroundColor: 'red',
								duration: 3000
							});
						}
						if (data == "1011") {
							wu.showMessage({
								title: "账号已冻结，请联系官方！",
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
		
		var flagpcode=true;
		var pcodetime=60;
		$(".codeusernamebtn").click(function () {
			//var codeusername=$("#username").val();
			var qh = $(dd).children('span').text().split(' ')[0];
			var codeusername = qh + $("#username").val();
			
			if (codeusername.length<6) {
				wu.showMessage({
					title: '请输入有效的手机号！',
					backgroundColor: 'red',
					duration: 3000
				});
				return false;
			}
			
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
								title: '发送成功！',
								backgroundColor: '#09f',
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
		
		
		
		
		
	});
</script>
	
	
	
</body>
</html>
