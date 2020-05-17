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
		height: 55px;
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
    background-color: #BC9568!important;
}
	.ios .theme-dark .navbar, .navbar.ios .theme-dark, .ios .navbar{
		background: #2C2C2E!important;
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
	ul{
		padding-top: 20px;
	}
	ul li:nth-child(1){
		font-size: 16px;
		border-bottom: 1px solid #383838;
		padding-bottom: 10px;
	}
	ul li:nth-child(2){
		font-size: 16px;
		padding-bottom: 20px;
	}
	ul li label{
		display: block;
		padding: 10px 0;
	}
	ul li label input{
		display: none;
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
                    <div class="title text-color-white">语言</div>
                </div>
            </div>
            <div class="page-content" style="padding-top:60px;">
                <div class="login-box block">
					<div class="list-block">
						<ul>
							<li onclick="checkbox1(this)">
								<label class="label-radio item-content">
									<span>English</span>
									<img id="img1" src="<{VIEW_ROOTPATH}>/assets/wap/img/gou.png" alt="" style="vertical-align: middle;float: right;margin-right:3%;<{($language==1) ? 'display: unset;': 'display: none;'}>">
								</label>
							</li>
							<li onclick="checkbox2(this)">
								<label class="label-radio item-content">
									<span>中文</span>
									<img id="img2" src="<{VIEW_ROOTPATH}>/assets/wap/img/gou.png" alt="" style="vertical-align: middle;float: right;margin-right:3%;<{($language==2) ? 'display: unset;': 'display: none;'}>">
								</label>
							</li>
						</ul>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/framework7.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/app.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.cookie.js"></script>
<script>
	var language = localStorage.getItem('language');
	if (language == 2){
		$('#img1').hide();
		$('#img2').show();
	}else{
		$('#img1').show();
		$('#img2').hide();
	}
	function checkbox1() {
		$('#img1').show();
		$('#img2').hide();
		localStorage.setItem('language', 1);
		$.cookie('language', 1);
		window.location.reload();
	}
	function checkbox2() {
		$('#img1').hide();
		$('#img2').show();
		localStorage.setItem('language', 2);
		$.cookie('language', 2);
		window.location.reload();
	}
</script>
</body>
</html>
