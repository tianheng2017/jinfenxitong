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
	
	
	<link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap2/css/style.css">
	
	<!--vue_alert_start-->
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/wu-ui.css" />
	<script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/public/vuealert/js/vue.min.js"></script>
	<script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/public/vuealert/js/wu-ui.js"></script>
	<!--vue_alert_end-->
	
	<style>
	img {
		display: initial;
		width: initial;
		border: 0;
	}
	.ios .navbar {
		background-color: rgba(255, 255, 255, 0.11);
	}
	.ios .theme-dark .navbar, .navbar.ios .theme-dark {
		background: rgb(81, 87, 129);
	}
	
	.ios .theme-dark .list ul, .list.ios .theme-dark ul, .ios .list ul {
		background: rgba(255, 255, 255, 0.05);
	}
	
	.list .item-title{
		font-size: 12px;
		line-height: 2em;
	}
	
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
		position: absolute;
		top: 3.5rem;
		right: 0.7rem;
	}
	.coininfotxt4{
		width:97%;text-align:right;color:#fff;font-size:.7rem;
		position: absolute;
		top: 5.5rem;
		right: 0.7rem;
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
	.page-content{
		background: #282828;
	}
	.coininfodivlay{
		background: #2C2C2C !important;
		margin-bottom: 5px!important;
		border-top:unset!important;
	}
	.ios .theme-dark .navbar, .navbar.ios .theme-dark, .ios .navbar{
		background: #282828!important;
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
		font-size: 1rem;
	}

	.coininfotxt2 {
		color: #fff;
		font-size: .7rem;
		overflow: hidden;
		margin-top: 0.2rem;
	}
	</style>
</head>
<body class="theme-dark bg1" style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main kcsy">
        <div class="page bg-color-white">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="javascript:history.go(-1);" class="link icon-only external color-white">
                            <i class="icon icon-back"></i>
                        </a>
                    </div>
                    <div class="title text-color-white">已完成存单</div>
                    <div class="right">
                        <!--<a href="" class="link external color-white"></a>-->
                    </div>
                </div>
            </div>
            <div class="page-content infinite-scroll-content ptr-content" style="padding-top: 40px !important;">
			<div class="ptr-preloader">
				<div class="preloader"></div>
				<div class="ptr-arrow"></div>
			</div>
			<div class="list no-margin">
			  <div class="list-group">
				<ul class="datadiv">
					
					
				</ul>
			  </div>
			</div>
			<div class="dataloading preloader infinite-scroll-preloader"></div>
			<div style="display:none;" class="datanone infinite-scroll-preloader">已无更多数据！</div>
        </div>
    </div>
</div>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/framework7.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/app.js"></script>
<script>
$('.path').fadeIn();
$('.path2').fadeIn();



var page = 1;
var selfalg = true;


var $ptrContent = $('.ptr-content');
$ptrContent.on('ptr:refresh', function (e) {
	$('.path').fadeIn();
	$('.path2').fadeIn();
	page = 1;
	selfalg = true;
	$(".datadiv").html("");
	$(".datanone").fadeOut();
	$(".dataloading").fadeIn();
	// 下拉刷新模拟
	setTimeout(function () {
		seldata();
		app.ptr.done();
	}, 2000);
}).on('infinite', function () {
	$('.path').fadeIn();
	$('.path2').fadeIn();
	// 上拉加载
	seldata();
});



seldata();







function seldata(){
	
	if(!selfalg){
		return;
	}
	selfalg = false;
	wu.showLoadingBg();
	setTimeout(() => {
		//隐藏loading
		wu.hideToast();
	}, 3000);
	
	var options = {
		url: "<{WSURLSHOW($WsCtrlClass,'seltradeordereddo')}>/page/"+page,
		type: 'post',
		dataType: 'json',
		data: "",
		success: function (res) {
			selfalg = true;
			
			$('.path').fadeOut();
			$('.path2').fadeOut();
			
			if (res["code"]=="1001") {
				//alert(res["data"].length);
				for(var i=0;i<res["data"].length;i++){
				
					var riseorfall="";
					if(res["data"][i]["riseorfall"]==1){
						riseorfall='<span style="background: #E31;color:#fff;padding: 4px 10px;border-radius: 2px;">	买涨</span>';
					}
					if(res["data"][i]["riseorfall"]==2){
						riseorfall='<span style="background: #5C5;color:#fff;padding: 4px 10px;border-radius: 2px;">	买跌</span>';
					}
					
					var profittxt = "";
					if(Number(res["data"][i]["profit"])>0){
						profittxt = '<span style="color:#ff3b30;">+'+Number(res["data"][i]["profit"])+'</span>';
					}else if(Number(res["data"][i]["profit"])==0){
						profittxt = '<span style="color:#4cd964;">-'+Number(res["data"][i]["profit"])+'.00</span>';
					}else{
						profittxt = '<span style="color:#4cd964;">'+Number(res["data"][i]["profit"])+'</span>';
					}
					
					
					
					var datahtml = '<div class="coininfodivlay" style="margin: .1em 0 0 0;">'+
										'<div style="width:100%;">'+
												'<div class="coininfotxtdiv">'+
													'<div class="coininfotxt1">'+
														'接单编号：'+res["data"][i]["id"]+''+
													'</div>'+
													'<div class="coininfotxt2">'+
														'<div class="cpck_address" style="width:77%;display:inline-block;overflow: hidden;color: #A8A8A7!important;padding-top: 10px;">'+
															'接单时间：'+res["data"][i]["buytime"]+''+
														'</div>'+
													'</div>'+
												'</div>'+
										'</div>'+
										'<div>'+
											'<span style="font-size:12px;text-align:center;border-radius: 1px;background: rgba(255, 255, 255, 0.1);min-width:7rem;padding: 5px;display:inline-block;position:absolute;right:.7rem;top: 1rem;">'+
												'接单USDT：'+res["data"][i]["money"]+''+
											'</span>'+
										'</div>'+
										'<div style="width:100%;margin-top:1rem;">'+
											'<div class="coininfotxt3">'+
												'<i style="font-size:.7em;">'+
													'<img style="height:1em;vertical-align: text-top;" class="" src="<{VIEW_ROOTPATH}>/assets/wap/images/chart1.png" />&nbsp;接单收益：'+
												'</i>'+
												'<span style="font-size:1em;">'+res["data"][i]["profit"]+'</span>'+
											'</div>'+
											'<div class="coininfotxt4" style="text-align:right;width:97%;margin-left:0;color: #fae4c5;">'+
												'收益利率：<span class="mymoney2">'+((res["data"][i]["profit"]/res["data"][i]["money"]-1)*100).toFixed(4)+' %</span>'+
											'</div>'+
										'</div>'+
									'</div>';
					
					
					
					
					
					$(".datadiv").append(datahtml);
				}
				
				
				if(page==1&&res["data"].length<<{SelPageApiDataNumber}>){
					selfalg = false;
					$(".dataloading").fadeOut();
					$(".datanone").fadeIn();
				}
				
				
				page = page+1;
				wu.hideToast();
			}
			if (res["code"]=="1005") {
				selfalg = false;
				$(".dataloading").fadeOut();
				$(".datanone").fadeIn();
				//wu.hideToast();
				wu.showMessage({
					title: "已无更多数据！",
					backgroundColor: 'red',
					duration: 3000
				});
			}
			if(res["code"]!="1001"&&res["code"]!="1005"){
				wu.showMessage({
					title: "网络异常！",
					backgroundColor: 'red',
					duration: 3000
				});
			}
		},
		complete: function(XMLHttpRequest, textStatus){
		},
		error: function(){
			selfalg = true;
			wu.showMessage({
				title: "网络异常！",
				backgroundColor: 'red',
				duration: 3000
			});
		} 
	};
	$.ajax(options);
	return false;
}




</script>

</body>
</html>
