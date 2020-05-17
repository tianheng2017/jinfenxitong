<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
<link href="<?php echo INSTALL_DIR; ?>/core/view/errorpage/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo INSTALL_DIR; ?>/core/view/errorpage/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
<div class="error_main">
	<div class="content">
		<h1><small style="font-size:1.6rem;"></small><?php echo $code; ?></h1>
			<div class="error_content">
				<span class="fa fa-frown-o"></span>
				<h2><?php echo $name; ?></h2>
				<p>VIRPHP框架提醒您:<?php echo $content; ?></p>
				<p style="font-size:.7rem;color:#f00;">免责声明：VIRPHP框架为一款轻量级快速开发框架，仅用于合法程序开发与应用，切勿用于非法程序开发与运营，产生其他后果与框架开发人员无关！</p>
				<a class="b-home" href="<?php echo INSTALL_DIR.'/'; ?>">返回首页</a>
			</div>
		<div class="footer">
		 <p>&copy; VIRPHP框架</p>
		</div>
	</div>
	
</div>

</body>
</html>