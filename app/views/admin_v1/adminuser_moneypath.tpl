
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
                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
								
								
								
                            <style>
								[type="checkbox"] + label {
									position: relative;
									padding-left: 20px;
									cursor: pointer;
									display: inline-block;
									height: 16px;
									line-height: 16px;
									font-size: 1rem;
									-webkit-user-select: none;
									-moz-user-select: none;
									-khtml-user-select: none;
									-ms-user-select: none;
								}
								
								.allcheckboxdiv .btn {
									height: 26px;
									line-height: 26px;
									padding: 0 0.5em;
								}
                            </style>
							
							
							
                            <div class="col s12 pagecontenttitle">
                                <ul class="collection">
                                    <div class="collection-item"><{$pagesigntitle}>-第<{$page}>页</div>
									
									<div class="input-field col s10">
										<input class="querykeywords" id="querykeywords" name="querykeywords" value="<{$querykeywords}>" placeholder="请输入用户ID或用户名" type="text">
										<label for="first_name">搜索</label>
									</div>
									<div class="input-field col s2">
										<div class="btn cyan waves-effect waves-light right seabtna">查询
											<i class="mdi-content-send right"></i>
										</div>
									</div>
                                </ul>
                            </div>


							<style>
								.dif_span{
									width:5em;
									overflow: hidden;
									display: inline-block;
									background: rgba(159, 188, 212, 0.39);
									text-align:center;
									border-bottom:1px solid #fff;
								}
								
								.dif_span2{
									min-width:10em;
									width:10em;
									overflow: hidden;
									display: inline-block;
									text-align:left;
								}
							</style>
							
							
                            <div class="col s12">
																								
								<form class="s12" id="pdataform">
							
                                <table class="striped" style="border: 1px solid #bdbdbd;">
                                    <thead>
                                    <tr>
										<th data-field="">ID</th>
                                        <th data-field="">用户ID</th>

										
										<th data-field="">用户名</th>
										
										<th data-field="">金额</th>
                                        
										<th data-field="">类型</th>
										
										<th data-field="">备注</th>
										
										<th data-field="">时间</th>
										
										
										
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <{foreach from=$data item=$datai}>
                                    <tr class="usertr<{$datai['id']}>">
										<td class="tdtcenter"><{$datai['id']}></td>
										<td class="tdtcenter"><{$datai['uid']}></td>
										<td class="tdtcenter"><{$datai['username']}></td>
										<td class="tdtcenter" style="font-weight: bold;font-style: italic;"><{$datai['money']}></td>
										
										
										<{if $datai['mtype']==111}>
										<td class="tdtcenter" style="background: rgba(91, 211, 96, 0.2);color:#000;">	充值</td>
										<{elseif $datai['mtype']==112}>
										<td class="tdtcenter" style="background: rgba(255, 90, 146, 0.2);color:#000;">	提现</td>
										<{elseif $datai['mtype']==113}>
										<td class="tdtcenter" style="background: rgba(91, 211, 96, 0.2);color:#000;">	后台充值</td>
										<{elseif $datai['mtype']==131}>
										<td class="tdtcenter" style="background: rgba(0, 188, 212, 0.2);color:#000;">	余额兑换额度</td>
										<{elseif $datai['mtype']==132}>
										<td class="tdtcenter" style="background: rgba(0, 188, 212, 0.2);color:#000;">	额度兑换余额</td>
										<{elseif $datai['mtype']==151}>
										<td class="tdtcenter" style="background: rgba(33, 150, 243, 0.2);color:#000;">	接单交易 | <a href="<{WSURLSHOW('adminorder','lists')}>/querykeywords/<{$datai['additionalid']}>" target="_blank">ID:<{$datai['additionalid']}>点击查看</a></td>
										<{elseif $datai['mtype']==152}>
										<td class="tdtcenter" style="background: rgba(33, 150, 243, 0.2);color:#000;">	接单收益 | <a href="<{WSURLSHOW('adminorder','lists')}>/querykeywords/<{$datai['additionalid']}>" target="_blank">ID:<{$datai['additionalid']}>点击查看</a></td>
										<{elseif $datai['mtype']==153}>
										<td class="tdtcenter" style="background: rgba(33, 150, 243, 0.2);color:#000;">	团队返利 | <a href="<{WSURLSHOW('adminorder','lists')}>/querykeywords/<{$datai['additionalid']}>" target="_blank">ID:<{$datai['additionalid']}>点击查看</a></td>
										
										<{elseif $datai['mtype']==161}>
										<td class="tdtcenter" style="background: rgba(255, 90, 146, 0.2);color:#000;">	USDT提现</td>
										<{elseif $datai['mtype']==163}>
										<td class="tdtcenter" style="background: rgba(255, 90, 146, 0.2);color:#000;">	佣金提现</td>
										<{elseif $datai['mtype']==167}>
										<td class="tdtcenter" style="background: rgba(255, 90, 146, 0.2);color:#000;">	提现手续费</td>
										<{elseif $datai['mtype']==168}>
										<td class="tdtcenter" style="background: rgba(255, 90, 146, 0.2);color:#000;">	提现手续费</td>
										
										<{else}>
										<td class="tdtcenter" style="background: #fff;color:#000;">	其它</td>
										<{/if}>
										
										
										
										
										<td class="tdtcenter fontweight100"><{$datai['content']}></td>
										
										
										<td class="tdtcenter fontcolorb6b6b6 fontweight100"><{$datai['time']}></td>
										
										
										
                                    </tr>
                                    <{/foreach}>
                                    </tbody>
                                </table>
								
								
								
								</form>
								
								
                                


								<{include file="public/pagination.tpl"}>



                            </div>


                        </div>
                    </div>
                    <!--card stats end-->


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
        
		
		
        $(".seabtna").click(function () {
            self.location = '<{WSURLSHOW($WsCtrlClass,$pagesign)}>/querykeywords/'+$(".querykeywords").val();
        });
		
		
		
		
		
    </script>
	
	<{include file="public/paginationjs.tpl"}>

	
    <!--prism-->
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/prism.js"></script>
</body>

</html>
