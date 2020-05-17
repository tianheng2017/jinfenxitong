
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
                                        <th data-field="">用户名</th>
										<th data-field="">金额</th>
										<!--th data-field="">转款地址</th-->
										<th data-field="">手机号</th>
										<th data-field="">充值转账凭证</th>
										
										<th data-field="">充值状态</th>
										
										<th data-field="">操作</th>
										
										
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <{foreach from=$data item=$datai}>
                                    <tr class="usertr<{$datai['id']}>">
										<td class="tdtcenter"><{$datai['id']}></td>
										<td class="tdtcenter"><{$datai['username']}></td>
										<td class="tdtcenter"><{number_format($datai['money'],'2','.','')}></td>
										
										<!--td class="tdtcenter"><{$datai['address']}></td-->
										<td class="tdtcenter"><{$datai['phone']}></td>
										
										<td class="tdtcenter"><img class="waves-effect waves-light modal-trigger" href="#modal1" style="height:5em;max-width:16em;" onclick="showimgM('<{INSTALL_DIR}>/upload/user/recharge/<{$datai['img1']}>')" src="<{INSTALL_DIR}>/upload/user/recharge/<{$datai['img1']}>"></td>
										
										
										
										<{if $datai['state']==1}>
										<td class="tdtcenter" style="background: rgba(91, 211, 96, 0.2);color:#000;">	审核中</td>
										<{elseif $datai['state']==-1}>
										<td class="tdtcenter" style="background: rgba(255, 90, 146, 0.2);color:#000;">	失败</td>
										<{elseif $datai['state']==2}>
										<td class="tdtcenter" style="background: rgba(0, 188, 212, 0.2);color:#000;">	成功</td>
										<{else}>
										<td class="tdtcenter" style="background: #fff;color:#000;">	其它</td>
										<{/if}>
										
										
                                        <td class="tdtcenter">
											
											
											<{if $datai['state']==1}>
											<div onclick="upauthenticationM('<{$datai['id']}>',-1)" class="btn">驳回</div>
											<div onclick="upauthenticationM('<{$datai['id']}>',2)" class="btn cyan">通过</div>
											<{/if}>
											
											<{if $datai['state']!=1}>
											无需操作
											<{/if}>
										</td>
										
										
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
					
					
					
					
					
					<div id="modal1" class="modal">
					  <div class="modal-content">
						<div class="row">
							<div class="input-field col s12" style="text-align:center;">
							  <img src="max-height:400px;" class="showimgv">
							</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button class="waves-effect waves-red btn-flat modal-action modal-close">关闭</button>
					  </div>
					</div>
					
					
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
        function upauthenticationM(id,state) {
			
			var confirmis=confirm("确定该操作吗？");
			if (confirmis==true)
			{
				
			}else{
				return;
			}
			
            var trobj="usertr"+id;
            var options = {
                url: "<{WSURLSHOW($WsCtrlClass,'rechargedo')}>",
                type: 'post',
                dataType: 'text',
                data: 'id='+id+'&state='+state,
                success: function (data) {
                    if (data.length > 0) {
                        if (data == '成功') {
                            //$("."+trobj).remove();
							
                            Materialize.toast('<span style="color: #0fef72">操作成功!</span>', 3000);
							setTimeout(function(){
								location.reload();
							}, 500);
                        }
                        if (data == '失败') {
                            Materialize.toast('<span style="color: #ef192c">操作失败!</span>', 3000);
                        }
                    }
                }
            };
            $.ajax(options);
            return false;
        }
		
		
		
		
		
		
		function showimgM(val) {
			$(".showimgv").attr('src',val); 
		}
		
		
		
        $(".seabtna").click(function () {
            self.location = '<{WSURLSHOW($WsCtrlClass,$pagesign)}>/querykeywords/'+$(".querykeywords").val();
        });
		
		
		
		
		
    </script>
	
	<{include file="public/paginationjs.tpl"}>

	
    <!--prism-->
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/exquisiteui/js/prism.js"></script>
</body>

</html>
