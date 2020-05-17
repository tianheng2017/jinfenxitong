<?php
/* Smarty version 3.1.30, created on 2020-05-17 20:14:40
  from "/www/wwwroot/jinfenxitong.com/app/views/admin_v1/admin_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec12ab05072f7_30959234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0da402ecb22e256df465166f8b2c103acfb55e2a' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/admin_v1/admin_login.tpl',
      1 => 1588603622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec12ab05072f7_30959234 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>登录-<?php echo $_smarty_tpl->tpl_vars['webconfig']->value['webtitle']['val'];?>
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/login_reg/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/login_reg/css/animate.css">
	<link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/login_reg/css/style.css">
	<link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/css/jquery.toast.css">
	<!-- Modernizr JS -->
	<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/login_reg/js/modernizr-2.6.2.min.js"><?php echo '</script'; ?>
>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/login_reg/js/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
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
		body.style-2 {
			background-color: #2c2c2e;
			background-image: unset;
		}
	</style>
</head>
<body class="style-2">

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h3><?php echo $_smarty_tpl->tpl_vars['webconfig']->value['webtitle']['val'];?>
</h3>
			<ul class="menu">
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">


			<!-- Start Sign In Form -->
			<form action="<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'loginform');?>
" method="post" id="form_login" class="fh5co-form animate-box" data-animate-effect="fadeInLeft" style="box-shadow: 0 11px 15px 0px;">
				<h2>登录/Log in</h2>
				<div class="form-group">
					<label for="username" class="sr-only">Username</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="用户名/Username" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="password" class="sr-only">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="密码/Password" autocomplete="off">
				</div>
				<!--
				<div class="form-group">
					<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
				</div>
				<div class="form-group">
					<p>Not registered? <a href="sign-up2.html">Sign Up</a> | <a href="forgot2.html">Forgot Password?</a></p>
				</div>
				-->
				<div class="form-group">
					<input id="btn_login" type="submit" value="登录/Log in" class="btn btn-primary">
				</div>
			</form>
			<!-- END Sign In Form -->

		</div>
	</div>
	<div class="row" style="padding-top: 60px; clear: both;">
		<div class="col-md-12 text-center"><p><small>&copy;  <a href="javascript:(0)" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['webconfig']->value['webtitle']['val'];?>
"><?php echo $_smarty_tpl->tpl_vars['webconfig']->value['webtitle']['val'];?>
</a></small></p></div>
	</div>
</div>

<!-- jQuery -->
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/login_reg/js/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap -->
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/login_reg/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Placeholder -->
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/login_reg/js/jquery.placeholder.min.js"><?php echo '</script'; ?>
>
<!-- Waypoints -->
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/login_reg/js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
<!-- Main JS -->
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/login_reg/js/main.js"><?php echo '</script'; ?>
>

<!-- jquery.toast JS -->
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/public/js/jquery.toast.js"><?php echo '</script'; ?>
>

<!--<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/public/js/jquery.form.js"><?php echo '</script'; ?>
> -->




<?php echo '<script'; ?>
>
$(document).ready(function () {
	$("#btn_login").click(function () {
		var options = {
			url: "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'loginform');?>
/token/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
",
			type: 'post',
			dataType: 'text',
			data: $("#form_login").serialize(),
			success: function (data) {
				if (data.length > 0) {
					if (data == 'true') {
						$.toast({
							heading: 'Success',
							text: '登录成功！',
							showHideTransition: 'slide',
							icon: 'success',
							afterHidden: function () {
								self.location = "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'home');?>
";
							}
						});
						
					}
					if (data == 'false') {
						$.toast({
							heading: 'Error',
							text: '密码错误',
							showHideTransition: 'fade',
							icon: 'error'
						});
					}
				}
			}
		};
		$.ajax(options);
		return false;
	});
});



<?php echo '</script'; ?>
>

</body>
</html>

<?php }
}
