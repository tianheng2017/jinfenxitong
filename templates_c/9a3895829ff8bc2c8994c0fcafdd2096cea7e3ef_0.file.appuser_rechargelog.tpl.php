<?php
/* Smarty version 3.1.30, created on 2020-05-17 20:14:10
  from "/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/appuser_rechargelog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec12a92823672_37969758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a3895829ff8bc2c8994c0fcafdd2096cea7e3ef' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/app_cn_v1/appuser_rechargelog.tpl',
      1 => 1588603624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec12a92823672_37969758 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#2196f3">
    <title><?php echo $_smarty_tpl->tpl_vars['webconfig']->value['webtitle']['val'];?>
</title>
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/css/framework7.ios.min.css">
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/css/framework7-icons.css">
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/css/style.css">


    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap2/css/style.css">

    <!--vue_alert_start-->
    <link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/wu-ui.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/js/vue.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/js/wu-ui.js"><?php echo '</script'; ?>
>
    <!--vue_alert_end-->

    <style>
        img {
            display: initial;
            width: initial;
            border: 0;
        }

        .ios .navbar {
            background-color: rgba(255, 255, 255, 0.11);
            height: 60px;
            line-height: 60px;
        }

        .ios .theme-dark .navbar, .navbar.ios .theme-dark {
            background: rgb(81, 87, 129);
        }

        .ios .theme-dark .list ul, .list.ios .theme-dark ul, .ios .list ul {
            background: rgba(255, 255, 255, 0.05);
        }

        .list .item-title {
            font-size: 13px;
            line-height: 2em;
			color: #fff!important;
        }
		.ios .theme-dark .navbar, .navbar.ios .theme-dark, .ios .navbar{
			background: #232323!important;
		}
		.page-content{
			background: #282828!important;
		}
		.ios .list .item-inner{
			border-bottom: 2px solid #2c2c2c;
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
                    <div class="title text-color-white">充币记录</div>
                    <div class="right">
                    </div>
                </div>
            </div>
            <div class="page-content infinite-scroll-content ptr-content" style="padding-top: 60px !important;">
                <div class="ptr-preloader">
                    <div class="preloader"></div>
                    <div class="ptr-arrow"></div>
                </div>
                <div class="list no-margin">
                    <div class="list-group">
                        <ul class="datadiv"></ul>
                    </div>
                </div>
                <div class="dataloading preloader infinite-scroll-preloader"></div>
                <div style="display:none;" class="datanone infinite-scroll-preloader">已无更多数据！</div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/framework7.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/app.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
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

        function seldata() {

            if (!selfalg) {
                return;
            }
            selfalg = false;
            wu.showLoadingBg();
            setTimeout(() => {
                //隐藏loading
                wu.hideToast();
            }, 3000);

            var options = {
                url: "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'rechargelogdo');?>
/page/" + page,
                type: 'post',
                dataType: 'json',
                data: "",
                success: function (res) {
                    selfalg = true;

                    $('.path').fadeOut();
                    $('.path2').fadeOut();

                    if (res["code"] == "1001") {
                        //alert(res["data"].length);
                        for (var i = 0; i < res["data"].length; i++) {

                            var mtypev = "其他";
                            if (res["data"][i]["state"] == "-1") {
                                mtypev = "充值失败";
                            }
                            if (res["data"][i]["state"] == "1") {
                                mtypev = "审核中";
                            }
                            if (res["data"][i]["state"] == "2") {
                                mtypev = "充值成功";
                            }

                            var datahtml = '<li class="item-content">' +
                                '<div class="item-media"><i class="f7-icons">money_yen_fill</i></div>' +
                                '<div class="item-inner">' +
                                '<div class="item-title">' +
                                '' + mtypev +
                                '<div class="item-footer">' + res["data"][i]["time"] + '</div>' +
                                '<div class="item-footer">Phone:' + res["data"][i]["phone"] + '</div>' +
                                //'<div style="word-wrap: break-word;" class="item-footer">Address:'+res["data"][i]["address"]+'</div>'+

                                '</div>' +
                                '<div class="item-after">' + res["data"][i]["money"] + ' <?php echo PFCOINNAME;?>
</div>' +
                                '</div>' +
                                '</li>';
                            $(".datadiv").append(datahtml);
                        }


                        if (page == 1 && res["data"].length <<?php echo SelPageApiDataNumber;?>
) {
                            selfalg = false;
                            $(".dataloading").fadeOut();
                            $(".datanone").fadeIn();
                        }


                        page = page + 1;
                        wu.hideToast();
                    }
                    if (res["code"] == "1005") {
                        selfalg = false;
                        $(".dataloading").fadeOut();
                        $(".datanone").fadeIn();
                        wu.hideToast();
                        // wu.showMessage({
                        //     title: "已无更多数据！",
                        //     backgroundColor: 'red',
                        //     duration: 3000
                        // });
                    }
                    if (res["code"] != "1001" && res["code"] != "1005") {
                        wu.showMessage({
                            title: "网络异常！",
                            backgroundColor: 'red',
                            duration: 3000
                        });
                    }
                },
                complete: function (XMLHttpRequest, textStatus) {
                },
                error: function () {
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
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
