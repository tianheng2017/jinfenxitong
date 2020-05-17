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
		border-top: 1px solid #ffffff42;
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
		width:97%;text-align:right;color:#fff;font-size:.7rem;
	}
	
	.coininfotxt12{
		color:#fff;
		font-size: .7rem;
		margin-top: 0.2rem;
	}
	.coininfotxtsondiv12 {
		width: 49%;
		color: #8cdfff;
		padding: 3px 0 3px 3%;
		border: 1px solid rgba(190, 244, 255, 0.1);
		display: inline-block;
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
</style>
	
<body style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
            <ul class="menu-footer clearfix">
				
				<li>
					<a href="<{WSURLSHOW('apphome','index')}>" class="external">
						<i class="i1"></i>
						<span>首页</span>
					</a>
				</li>
				<li >
					<a href="<{WSURLSHOW('apphome','tradeorderon')}>" class="external">
						<i class="i2"></i>
						<span>接单</span>
					</a>
				</li>
				<li class="active">
					<a href="<{WSURLSHOW('apphome','itemlist')}>" class="external">
						<i class="i2"></i>
						<span>项目</span>
					</a>
				</li>
				<li>
					<a href="<{WSURLSHOW('appuser','index')}>" class="external">
						<i class="i3"></i>
						<span>我的</span>
					</a>
				</li>
			</ul>
            <div class="page-content" style="padding-bottom: 100px;">
				<{foreach from=$tradeorders item=$tradeorder}>
				<div class="coininfodivlay" style="margin: .1em 0 0 0;">
					<div style="width:100%;">
							<div class="coininfoicodiv">
								<img style="width:100%;" src="<{VIEW_ROOTPATH}>/assets/wap/images/b02.png" />
							</div>
							<div class="coininfotxtdiv">
								<div class="coininfotxt1">
									项目名称：<{$tradeorder.item_name}>
								</div>
								<div class="coininfotxt2">
									<div class="cpck_address" style="width:77%;display:inline-block;overflow: hidden;color: #d5d5d5;">
										项目简称：<{$tradeorder.name}>
									</div>
								</div>
							</div>
					</div>
					<div>
						<span style="font-size:12px;text-align:center;border: 1px solid rgba(255, 255, 255, 0.25);border-radius: 1px;background: rgba(255, 255, 255, 0.23);min-width:7rem;padding:1px 3px;display:inline-block;position:absolute;right:.7rem;top:.6rem;">
							接单USDT：<{$tradeorder['money']}>
						</span>
					</div>
					<div style="width:100%;margin-top:.1rem;">
						<div class="coininfotxt3">
							<i style="font-size:.7em;">
								<img style="height:1em;vertical-align: text-top;" class="xuanzhuns1" src="<{VIEW_ROOTPATH}>/assets/wap/images/loading003.png" />&nbsp;当前收益：
							</i>
							<span style="font-size:1em;" class="profit_p profit_<{$tradeorder['id']}>">
								<img style="height:1em;vertical-align: sub;" class="xuanzhuns1" src="<{VIEW_ROOTPATH}>/assets/wap/images/loading01.png" />
							</span>
						</div>
						<div class="coininfotxt4" style="text-align:right;width:97%;margin-left:0;color: #fae4c5;">
							收益利率：<span class="mymoney2"><{$myuserinfo["proportion"]}> %</span>
						</div>
					</div>
					
				</div>
				<{/foreach}>
            </div>
        </div>
    </div>
</div>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/framework7.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/app.js"></script>


<script src="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/js/bscroll.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/js/scrollmenu.js"></script>



<script src='<{VIEW_ROOTPATH}>/assets/alert/js/alert.js'></script>

<script type="text/javascript">
	$(document).ready(function () {

		
		
		
		
		
		function gettraorderonallData(){
			$.get("<{WSURLSHOW($WsCtrlClass,'gettraorderonallData')}>?" + Math.random(), function(json) {
				var data=JSON.parse(json);
				if(data.state == "success"){
					
					
					$('.profit_p').html('<img style="height:1em;vertical-align: sub;" class="xuanzhuns1" src="<{VIEW_ROOTPATH}>/assets/wap/images/stop01.png" />已完成');
					
					
					
					//console.log(data);
					for(var index in data.data){
						var datai = data.data[index];
						
						//console.log(datai);
						
						if(datai.state==1){
							$('.profit_'+datai.id).html('<span style="color:#f0982d;">'+datai.profit+'</span>');
						}
						
					}
				
				}
			});
		}
		
		gettraorderonallData();
		setInterval(gettraorderonallData,1000);
	});
</script>


</body>
</html>
