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
	<style>
		.img-upload img{
			display: initial;
		}
	</style>
</head>

<style>
	img {
		display: initial;
		width: initial;
		border: 0;
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


	.img-upload {
		display: block;
		position: relative;
		background-color: #2c2c2e;
		border: 1px solid #484848;
		border-radius: 5px;
		text-align: center;
		padding-top: 100%;
		height: 0;
		overflow: hidden;
	}

	.img-upload .text i {
		background-color: #09f;
		display: block;
		width: 40px;
		height: 40px;
		line-height: 40px;
		border-radius: 50%;
		box-shadow: 0 0 5px rgba(0,0,0,0.1);
		margin: 0 auto;
		margin-bottom: 10px;
	}
	.ios .list .item-inner {
		min-height: 44px;
		padding-right: 15px;
		border-bottom: 1px solid #d3d3d3  !important;
	}
	.ios .navbar {
		background: #232323!important;
		height: 60px;
	}
	.page-content{
		background: #282828!important;
	}
	.ios .list .item-inner{
		border-bottom: 1px solid #353535 !important;
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
</style>

<body>
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
			<div class="navbar">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="javascript:history.go(-1);" class="link icon-only color-white external">
                            <i class="icon icon-back"></i>
                        </a>
                    </div>
                    <div class="title">身份认证</div>
					<div class="right" onclick="authenticationM()">
						<{if $myuserinfo['authentication']==0}>
						<span style="background: #acacac;color:#fff;padding: 2px 5px;border-radius: 2px;font-size:10px;">	未认证</span>
						<{/if}>
						<{if $myuserinfo['authentication']==1}>
						<span style="background: #87dde6;color:#fff;padding: 2px 5px;border-radius: 2px;font-size:10px;">	审核中</span>
						<{/if}>
						<{if $myuserinfo['authentication']==2}>
						<span style="background: #00bcd4;color:#fff;padding: 2px 5px;border-radius: 2px;font-size:10px;">	认证成功</span>
						<{/if}>
						<{if $myuserinfo['authentication']==-1}>
						<span style="background: #ff5a92;color:#fff;padding: 2px 5px;border-radius: 2px;font-size:10px;">	认证失败</span>
						<{/if}>
					</div>
                </div>
            </div>
            <div class="page-content">
				<form action="#" id="form_post" name="form_post" method="post">
					<div class="list inline-labels no-hairlines">
						<ul>
							<li class="item-content item-input">
								<div class="item-inner">
									<div class="item-title item-label" style="width: 80px;">真实姓名</div>
									<div class="item-input-wrap">
										<input type="text" name="name" id="nameinp" placeholder="请输入真实姓名">
										<span class="input-clear-button"></span>
									</div>
								</div>
							</li>
							<li class="item-content item-input">
								<div class="item-inner">
									<div class="item-title item-label" style="width: 80px;">身份证号</div>
									<div class="item-input-wrap">
										<input type="text" name="idcard" id="idcardinp" placeholder="请输入真实身份证号">
										<span class="input-clear-button"></span>
									</div>
								</div>
							</li>
							
						</ul>
					</div>
					<div class="block">
						<div class="row">
							<div class="col-50">
								<a href="javascript:;" class="img-upload">
									<input type="file" accept="image/png,image/jpeg,image" name="img1" id="sfz1">
									<img src="" alt="" id="sfzimg1">
									<div class="text">
										<i class="f7-icons">+</i>
										<p>身份证正面照片</p>
									</div>
								</a>
							</div>
							<div class="col-50">
								<a href="javascript:;" class="img-upload">
									<input type="file" accept="image/png,image/jpeg,image" name="img2" id="sfz2">
									<img src="" alt="" id="sfzimg2">
									<div class="text">
										<i class="f7-icons">+</i>
										<p>身份证背面照片</p>
									</div>
								</a>
							</div>
						</div>
						
					</div>
				</form>
				<div class="block">
                    <button class="button button-big color-red button-fill postformbtn" style="background-color: #BC9568!important;">提交</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/framework7.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/upload.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/app.js"></script>
<script>

    $('.img-upload').each(function (i) {
        i = i + 1;
        new uploadPreview({
            UpBtn: 'sfz' + i,
            ImgShow: 'sfzimg' + i,
            callback: function (e, file) {
                console.log(e, file);
                $(e).closest('.img-upload').find('.text').hide();
            }
        });
    });
	
	
	authenticationM = function(){
		<{if $myuserinfo['authentication']==0}>
		wu.showMessage({
			title: "未认证",
			backgroundColor: '#acacac',
			duration: 3000
		});
		<{/if}>
		
		<{if $myuserinfo['authentication']==-1}>
		wu.showMessage({
			title: "认证失败",
			backgroundColor: '#ff5a92',
			duration: 3000
		});
		<{/if}>
	}
	
	
	
	$(".postformbtn").click(function () {
		wu.showLoadingBg();
		setTimeout(() => {
			//隐藏loading
			wu.hideToast();
		}, 3000);
		
		
		var formData = new FormData();
		//var formData = $("#form_post").serialize();
		
        formData.append("img1",$("#sfz1")[0].files[0]);
		formData.append("img2",$("#sfz2")[0].files[0]);
        formData.append("name",$("#nameinp").val());
		formData.append("idcard",$("#idcardinp").val());
		
		var options = {
			url: "<{WSURLSHOW($WsCtrlClass,'authenticationform')}>",
			type: 'post',
			dataType: 'json',
			processData : false,
            contentType : false,
			data: formData,
			success: function (res) {
				var restxt = "网络异常！";
				if (res["data"]["state"]=="true") {
					if(res["data"]["msg"]=="1001"){
						restxt = "提交成功！";
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
						restxt = "提交失败！";
					}
					
					if(res["data"]["msg"]=="1003"){
						restxt = "请输入姓名！";
					}
					if(res["data"]["msg"]=="1004"){
						restxt = "请输入身份证号！";
					}
					if(res["data"]["msg"]=="1005"){
						restxt = "请输入手机号码！";
					}
					if(res["data"]["msg"]=="1006"){
						restxt = "请上传手持身份证照片！";
					}
					if(res["data"]["msg"]=="1007"){
						restxt = "请上传身份证背面照片！";
					}
					if(res["data"]["msg"]=="1008"){
						restxt = "请上传身份证正面照片！";
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
</script>
</body>
</html>
