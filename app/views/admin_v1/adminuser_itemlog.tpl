
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
                                    <div class="collection-item">第<{$page}>页</div>
									
									<!-- <div class="input-field col s10">
										<input class="querykeywords" id="querykeywords" name="querykeywords" value="<{$querykeywords}>" placeholder="请输入用户ID或用户名" type="text">
										<label for="first_name">搜索</label>
									</div>
									<div class="input-field col s2">
										<div class="btn cyan waves-effect waves-light right seabtna">查询
											<i class="mdi-content-send right"></i>
										</div>
									</div> -->
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
                                        <th data-field="">投资人</th>
										<th data-field="">项目名称</th>
										<th data-field="">项目天数</th>
										<th data-field="">年化利率</th>
										<th data-field="">投资金额</th>
										<th data-field="">购买份数</th>
										<th data-field="">已返利</th>
										<th data-field="">投资时间</th>
                                      	<th data-field="">到期时间</th>
										<th data-field="">存单状态</th>

										
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <{foreach from=$data item=$datai}>
                                    <tr class="usertr<{$datai['id']}>">
										<td class="tdtcenter"><{$datai['id']}></td>
										<td class="tdtcenter"><{$datai['uid_username']}></td>
										<td class="tdtcenter"><{$datai['item_name']}></td>
										<td class="tdtcenter"><{$datai['day_num']}></td>
										<td class="tdtcenter"><{floatval($datai['arate'])}></td>
										<td class="tdtcenter"><{floatval($datai['money'])}></td>
										<td class="tdtcenter"><{$datai['num']}></td>
										<td class="tdtcenter"><{floatval($datai['sy'])}></td>
										<td class="tdtcenter"><{$datai['time']}></td>
										<td class="tdtcenter"><{$datai['stime']}></td>
										<td class="tdtcenter"><{if $datai['status']==0}>
											<span style="background: #87dde6;color:#fff;padding: 4px 10px;border-radius: 2px;">正常</span>
											<{/if}>
											<{if $datai['status']==1}>
											<span style="background: #00bcd4;color:#fff;padding: 4px 10px;border-radius: 2px;">已退出</span>
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
							<div class="input-field col s12">
							  <input placeholder="请输入密码" id="pasinp" type="password" class="pasinp">
							  <label for="pasinp" class="active">修改密码</label>
							</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button class="waves-effect waves-red btn-flat modal-action modal-close">取消</button>
						<button onclick="uppasM()" class="waves-effect waves-red btn-flat modal-action modal-close">确定</button>
					  </div>
					</div>
					
					
					<div id="modal3" class="modal">
					  <div class="modal-content">
						<div class="row">
							<div class="input-field col s12">
							  <input placeholder="请输入充值金额（可填负数）" id="moneyinp" type="text" class="moneyinp">
							  <label for="moneyinp" class="active">后台充值</label>
							</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button class="waves-effect waves-red btn-flat modal-action modal-close">取消</button>
						<button onclick="sendmoneyM()" class="waves-effect waves-red btn-flat modal-action modal-close">确定</button>
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
        function upstopM(val) {
			
			var confirmis=confirm("确定该操作吗？");
			if (confirmis==true)
			{
				
			}else{
				return;
			}
			
            var trobj="usertr"+val;
            var options = {
                url: "<{WSURLSHOW($WsCtrlClass,'upuserstate')}>",
                type: 'post',
                dataType: 'text',
                data: 'id='+val,
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
		
		
		
		
		
		
		
		
		var useridc = 0;
		
		function uppasidM(val) {
			useridc = val;
		}
        function uppasM() {
			
			var useridcc = useridc;
			useridc = 0;
			
			
			var passwordv = $(".pasinp").val();
			$(".pasinp").val("");
			
            var options = {
                url: "<{WSURLSHOW($WsCtrlClass,'upuserpas')}>/id/"+useridcc,
                type: 'post',
                dataType: 'text',
                data: 'password='+passwordv,
                success: function (data) {
                    if (data.length > 0) {
                        if (data == '成功') {
							Materialize.toast('<span style="color: #0fef72">修改成功!</span>', 3000);
						}
						if (data == '失败') {
							Materialize.toast('<span style="color: #ef192c">修改失败!</span>', 3000);
						}
						if (data == '相同') {
							Materialize.toast('<span style="color: #ef192c">数据相同，无需修改!</span>', 3000);
						}
						if (data == 'none') {
							Materialize.toast('<span style="color: #ef192c">不可为空哟!</span>', 3000);
						}
                    }
                }
            };
            $.ajax(options);
            return false;
        }
		
		
		
		
		function sendmoneyidM(val) {
			useridc = val;
		}
		
		function sendmoneyM() {
			
			var useridcc = useridc;
			useridc = 0;
			
			
			var moneyv = $(".moneyinp").val();
			$(".moneyinp").val("");
			
            var options = {
                url: "<{WSURLSHOW($WsCtrlClass,'sendmoneydo')}>/id/"+useridcc,
                type: 'post',
                dataType: 'text',
                data: 'money='+moneyv,
                success: function (data) {
                    if (data.length > 0) {
                        if (data == '成功') {
							Materialize.toast('<span style="color: #0fef72">充值成功!</span>', 3000);
							
							setTimeout(function(){
								location.reload();
							}, 500);
						}
						if (data == '失败') {
							Materialize.toast('<span style="color: #ef192c">充值失败!</span>', 3000);
						}

						if (data == 'moneye') {
							Materialize.toast('<span style="color: #ef192c">金额有误!</span>', 3000);
						}
						
						
                    }
                }
            };
     		$.ajax(options);
            return false;
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
