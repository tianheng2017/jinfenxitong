<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
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
    <link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/wu-ui.css"/>
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

    .coininfodivlay {
        /*
        width:90%;
        background: #5186d6;
        margin:2%;
        border-radius: 7px;
        */
        border-top: 1px solid #ffffff42;
        margin: .6em 0 1em 0;
        background: rgba(255, 255, 255, 0.11);

        padding: 1.1rem 3%;

        position: relative;
    }

    .coininfoicodiv {
        width: 2rem;
        height: 2rem;
        border-radius: 6px;
        background: #fff;
        padding: .2rem;
        display: inline-block;
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

    .coininfotxt3 {
        width: 97%;
        text-align: right;
        color: #fff;
        font-size: 1.2rem;
		position: absolute;
		top: 4.3rem;
		right: 2rem;
    }

    .coininfotxt4 {
        width: 97%;
        text-align: right;
		font-size: .9rem;
		position: absolute;
		top: 6.8rem;
		right: 2rem;
		color: #A8A8A7!important;
    }

    .coininfotxt12 {
        color: #fff;
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

    .user-menu li a img {
        width: 1.7rem;
        height: 1.7rem;
    }

    .user-menu li a:before {
        float: inherit;
    }
	.menu-footer {
		background-color: #242424;
		border-top: 1px solid rgba(62, 62, 62, 0.88);
		color: #D3D3D3;
	}
	.menu-footer li span {
		color: #D3D3D3;
	}
	.page-content{
		background: #2C2C2E;
	}
	.coininfodivlay{
		background: #242426 !important;
		margin-bottom: 5px!important;
		border-top:unset!important;
	}
    .ios .navbar {
        background-color: #2C2C2E!important;
        height: 60px;
        line-height: 60px;
    }
</style>

<body style="padding-top: 0;padding-bottom: 0;">
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
                    <div class="title">我的业绩</div>
                </div>
            </div>
            <div class="page-content" style="padding-bottom: 100px;padding-top: 46px;">
                <{foreach from=$tradeorders item=$tradeorder}>
                <div class="coininfodivlay" style="width: 95%;margin: 0 auto 7px!important;height: 150px;">
                    <div style="width:100%;">
                        <div class="coininfotxtdiv">
                            <div class="coininfotxt1">
                                <div style="font-size: 16px;">下级ID <{$tradeorder.fuid}></div>
                                <span style="color:#727679;font-size: 14px;margin-top: 10px;display: inline-block;">下级提成比例 <span class="mymoney2"><{$tradeorder["bili"]}></span></span>
                            </div>
                            <div class="coininfotxt2">
                                <div class="cpck_address" style="color:#727679!important;font-size:12px;position: absolute;top: 6.5rem;">
                                    存单时间 <{$tradeorder.time}>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
						<span style="font-size:14px;text-align:center;border-radius: 1px;color:#727679;min-width:7rem;padding: 5px;display:inline-block;position:absolute;right:.7rem;top: 0.6rem;">
							数量 <{$tradeorder['money']}>(<{$tradeorder['status']}>)
						</span>
                    </div>
                    <div style="width:100%;margin-top:.1rem;">
                        <div class="coininfotxt3" style="color: #BC9568;width: 100%;top: 2.5rem;right: 1rem;">
                            +<{$tradeorder['smoney']}>
                        </div>
                    </div>
                    <div style="color:#727679;font-size: 12px;position: absolute;right: 0.7rem;top: 6.5rem;">
                        收益时间 <{$tradeorder.stime}>
                    </div>
                    <div style="color:#727679;font-size:12px;width: 94%;border-top:2px solid #28282A;position: absolute;top: 8.3rem;padding-top: 7px;right: .7rem">
                        存单编号 <{$tradeorder.item_no}> </br></br>
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


        function gettraorderonallData() {
            $.get("<{WSURLSHOW($WsCtrlClass,'gettraorderonallData')}>?" + Math.random(), function (json) {
                var data = JSON.parse(json);
                if (data.state == "success") {


                    $('.profit_p').html('<img style="height:1em;vertical-align: sub;" class="xuanzhuns1" src="<{VIEW_ROOTPATH}>/assets/wap/images/stop01.png" />已完成');


                    //console.log(data);
                    for (var index in data.data) {
                        var datai = data.data[index];

                        //console.log(datai);

                        if (datai.state == 1) {
                            $('.profit_' + datai.id).html('<span style="color:#f0982d;">' + datai.profit + '</span>');
                        }

                    }

                }
            });
        }

        gettraorderonallData();
        setInterval(gettraorderonallData, 1000);
    });
</script>
</body>
</html>
