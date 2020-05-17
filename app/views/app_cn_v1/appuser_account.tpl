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
    .ios .navbar{
        background: #232323!important;
    }
    .page-content{
        background: #2C2C2E!important
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
    .ios .button.button-fill, .ios .button.button-fill-ios {
        background-color: #242426 !important;
        border-radius: 5px;
        margin-top: 20px;
    }
    .ios .list .item-content{
        border-bottom: 1px solid #313133;
    }


    .ios .theme-dark .navbar, .navbar.ios .theme-dark, .ios .navbar {
        background-color: #2C2C2E!important;
        height: 55px;
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
	
<body>
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
                    <div class="title">账户安全</div>
                </div>
            </div>
            <div class="page-content" style="padding-top: 40px;">
                <div class="list no-hairlines margin-vertical" style="border-top: 9px solid #242426;">
                    <ul>
                        <li class="item-content">
							<div class="item-inner">
								<div class="item-title">账号</div>
								<div class="item-after" style="color: #727679;"><{$myuserinfo["username"]}></div>
							</div>
                        </li>
						
						<!--li>
                            <a href="<{WSURLSHOW($WsCtrlClass,'upuserinfo')}>" class="item-link item-content external">
                                <div class="item-inner">
                                    <div class="item-title">修改资料</div>
                                </div>
                            </a>
                        </li-->
						
						<li>
                            <span onclick="authenticationM()" class="item-link item-content external">
                                <div class="item-inner">
                                    <div class="item-title">身份认证</div>
									<div style="">
										<{if $myuserinfo['authentication']==0}>
										<span style="background: #acacac;color:#fff;padding: 4px 10px;border-radius: 2px;">	未认证</span>
										<{/if}>
										<{if $myuserinfo['authentication']==1}>
										<span style="background: #87dde6;color:#fff;padding: 4px 10px;border-radius: 2px;">	审核中</span>
										<{/if}>
										<{if $myuserinfo['authentication']==2}>
										<span style="background: #BC9568;color:#fff;padding: 4px 5px;border-radius: 2px;font-size: 12px;">	认证成功</span>
										<{/if}>
										<{if $myuserinfo['authentication']==-1}>
										<span style="background: #ff5a92;color:#fff;padding: 4px 10px;border-radius: 2px;">	认证失败</span>
										<{/if}>
									</div>
                                </div>
                            </span>
                        </li>
                        
                        <li>
                            <a href="<{WSURLSHOW($WsCtrlClass,'upbankinfo')}>" class="item-link item-content external">
                                <div class="item-inner">
                                    <div class="item-title">修改银行卡</div>
                                    <div style="">
										<{if $myuserinfo['authbankinfo']==0}>
										<span style="background: #acacac;color:#fff;padding: 4px 10px;border-radius: 2px;">未绑定</span>
										<{/if}>
										<{if $myuserinfo['authbankinfo']==1}>
										<span style="background: #BC9568;color:#fff;padding: 4px 5px;border-radius: 2px;font-size: 12px;">已绑定</span>
										<{/if}>
									</div>
                                </div>
                            </a>
                        </li>
						
                        <li>
                            <a href="<{WSURLSHOW($WsCtrlClass,'upassword')}>" class="item-link item-content external">
                                <div class="item-inner">
                                    <div class="item-title">修改密码</div>
                                </div>
                            </a>
                        </li>
						
						<!--li>
                            <a href="<{WSURLSHOW($WsCtrlClass,'upasswordtwo')}>" class="item-link item-content external">
                                <div class="item-inner">
                                    <div class="item-title">修改安全密码</div>
                                </div>
                            </a>
                        </li-->
                    </ul>
                </div>
				<div class="block"><button onclick="esclogin()" style="color: #787878!important;" class="button button-big color-red button-fill">退出登录</button></div>
            </div>
        </div>
    </div>
</div>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/framework7.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/app.js"></script>
<script type="text/javascript">
	function esclogin(){
        $.post("<{WSURLSHOW($WsCtrlClass,'esclogin')}>", function (data) {
            if (data == 'true') {
                try{
                    <{if $device_type eq 'ios'}>
                        setvel('token','false');
                    <{/if}>
                    <{if $device_type eq 'android'}>
                        AndroidJs.saveToken('false');
                    <{/if}>
                }catch(err){
                }
                window.location.reload();
            }
        });
	}
	
	authenticationM = function(){
		<{if $myuserinfo['authentication']==0}>
		window.location.href="<{WSURLSHOW($WsCtrlClass,'authentication')}>";
		<{/if}>
		<{if $myuserinfo['authentication']==1}>
		wu.showMessage({
			title: "审核中",
			backgroundColor: '#87dde6',
			duration: 3000
		});
		<{/if}>
		<{if $myuserinfo['authentication']==2}>
		wu.showMessage({
			title: "认证成功",
			backgroundColor: '#BC9568',
			duration: 3000
		});
		<{/if}>
		<{if $myuserinfo['authentication']==-1}>
		window.location.href="<{WSURLSHOW($WsCtrlClass,'authentication')}>";
		<{/if}>
	}
	
</script>

</body>
</html>
