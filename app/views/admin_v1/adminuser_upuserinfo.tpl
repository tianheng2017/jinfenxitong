
<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 1.0
	Author: GeeksLabs
	
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title><{$pagesigntitle}>-<{$webconfig.webtitle.val}></title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="<{VIEW_ROOTPATH}>/assets/exquisiteui/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<{VIEW_ROOTPATH}>/assets/exquisiteui/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->    
    <link href="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<{VIEW_ROOTPATH}>/assets/exquisiteui/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <style>
        .cyan {
            background-color: #2C2C2E !important;
        }
        .side-nav li{
            background: #2c2c2e;
        }
        .cyan.darken-2{
            background-color: #2c2c2e!important;
        }
        ul.side-nav.fixed{
            background: #2c2c2e;
        }
        ul.side-nav.fixed li:hover, ul.side-nav.fixed li.active{
            background-color: #454850;
        }
    </style>
</head>

<body>
            <!-- Start Page Loading --><!-- START HEADER --><!-- START LEFT SIDEBAR NAV-->
            <{include file="h_l_nav_useradmin.tpl"}>
            <!-- End Page Loading --><!-- END HEADER --><!-- END LEFT SIDEBAR NAV-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">



                <!--start container-->
                <div class="container" style="min-height: 800px;">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    
                    <div class="section">


                        <!--Basic Form-->
                        <div id="basic-form" class="section">
                            <div class="row">
								<div class="col s12">
									<a class="btn-floating waves-effect waves-light left" href="javascript:history.go(-1);"><i class="mdi-content-reply"></i></a>
                                </div>
								
                            </div>
                            
                            <div class="row">

                                <div class="col s12">
                                    <div class="card-panel">
										<h4 class="header2"><{$pagesigntitle}></h4>
                                        <div class="row">
                                            <form class="col s12" id="subinfoform">
                                                <div class="row">
                                                
													
													<div class="input-field col s6" style="display:;">
														<input id="password" value="<{$user['password']}>" name="password" type="password">
														<label for="password">密码</label>
													</div>
													
													
													<div class="input-field col s6" style="display:;">
														<input id="passwordtwo" value="<{$user['passwordtwo']}>" name="passwordtwo" type="password">
														<label for="passwordtwo">安全密码</label>
													</div>
													
													
													<div class="input-field col s6">
														<input id="remarks" name="remarks" type="text" value="<{$user['remarks']}>">
														<label for="remarks">备注</label>
													</div>
													
													
                                                </div>

                                                <div class="row" style="margin-top: 30px;">
                                                    <div class="input-field col s12">
                                                        <div class="btn waves-effect waves-light right btnsubinfo2">刷新
                                                            <i class="mdi-av-loop right"></i>
                                                        </div>
														<div class="btn cyan waves-effect waves-light right btnsubinfo1">保存
                                                            <i class="mdi-navigation-check right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>
					
					
                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <{include file="r_nav_useradmin.tpl"}>
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->












    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <{include file="footer.tpl"}>
    <!-- END FOOTER -->

    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/jquery-1.10.2.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
       

    <!-- chartist -->
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins/chartist-js/chartist.min.js"></script>

    <!-- chartjs -->
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins/sparkline/sparkline-script.js"></script>
    
    <!--jvectormap-->
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins/jvectormap/vectormap-script.js"></script>
    
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/plugins.js"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
        
		
		$(".btnsubinfo1").click(function () {

			var options = {
				url: "<{WSURLSHOW($WsCtrlClass,'upuserinfodo')}>/id/<{$user['id']}>/",
				type: 'post',
				dataType: 'text',
				data: $("#subinfoform").serialize(),
				success: function (data) {
					if (data.length > 0) {
						if (data == '成功') {
							Materialize.toast('<span style="color: #0fef72">保存成功!</span>', 3000);
							//history.go(-1);
						}
						if (data == '失败') {
							Materialize.toast('<span style="color: #ef192c">保存失败!</span>', 3000);
						}
						if (data == '相同') {
							Materialize.toast('<span style="color: #ef192c">数据相同，无需修改!</span>', 3000);
						}
						if (data == 'none') {
							Materialize.toast('<span style="color: #ef192c">参数有误!</span>', 3000);
						}
						
						if (data == '团队抽成比例不正确！（0-100）') {
							Materialize.toast('<span style="color: #ef192c">团队抽成比例不正确！（0-100）</span>', 3000);
						}
						if (data == '团队抽成比例不能小于上次设置值！') {
							Materialize.toast('<span style="color: #ef192c">团队抽成比例不能小于上次设置值！</span>', 3000);
						}
					}
				}
			};
			$.ajax(options);
			return false;
		});
		
		$(".btnsubinfo2").click(function () {
			location.reload();
		});
		
		
		
    </script>
	
	
    <!--prism-->
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/prism.js"></script>
</body>

</html>
