<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
<link href="<?php echo INSTALL_DIR; ?>/core/view/infopage/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo INSTALL_DIR; ?>/core/view/infopage/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
</head>
<style>
.error_content span.fa.fa-smile-o {
    font-size: 100px;
    color: #ffb310;
}
</style>
<body>
<div class="error_main">
	<div class="content">
		<h1><small style="font-size:1.6rem;"></small><?php echo $code; ?></h1>
			<div class="error_content">
				<span class="fa fa-smile-o"></span>
				<h2><?php echo $name; ?></h2>
				<p><?php echo $content; ?></p>
				<a class="b-home" href="javascript:history.go(-1);">Call Back</a>
			</div>
		<div class="footer">
		 <p><?php echo date('Y-m-d H:i:s',time()); ?></p>
		</div>
	</div>
	
</div>

</body>
</html>