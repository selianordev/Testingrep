<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content ="IE=edge" />
	<meta charset='utf-8' />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="shortcut icon" href="images/favicon.png">
	<title>thank-you Message Sent</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<!--[if lt IE9]>
	    <script src="js/respond.min.js"></script>
	    <script src="js/html5shiv.js"></script>
    <![endif] -->
</head>
<body id="home" data-spy="scroll" data-target="#scrollSpy" data-offset="85">
	<!-- Page header - company logo and main navigation menu -->
	<div class="navbar navbar-default navbar-fixed-top" id="scrollSpy">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand tooltips" title=""><span>Selemani</span> <span style="color:#006699; text-decoration: underline;">Online</span></a>
			</div>
			<div class="collapse navbar-collapse bs-js-navbar-scrollspy" id="mainNav">
				<ul class="nav navbar-nav navbar-right">
					<li class="active">
						<a href="index.php"> Go Back to Home Page</a>
					</li>
				</ul>
			</div>
		</div>
	</div><!-- end page header -->
	<div class="msg-sent">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="page-header" style="margin-bottom:0;">
						<h1><span>Message Feedback</span></h1>
					</div>
					<p>Your message has been successfully sent. We will get back to you as soon as possible, usually within the next 24 hours! Should you not hear from us within 48 hours, please consider giving us a call.</p>
					<p class="lead"><strong>Contact Number:</strong> <span class="glyphicon glyphicon-earphone"></span> (+27) (0) 796855739  </p>
				</div>
			</div>
			<div style="height:350px;"></div>
		</div>
	</div>

<!-- Footer Above -->
<div id="footer-above">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center">
				<h3>Location</h3>
				<p>44 Abel Road, Berea<br />
				Johannesburg, 405 Northcrest</p>
			</div>
			<div class="col-md-4 text-center">
				<h3>Connect with Selemani Online</h3>
				<?php require_once './includes/social-media.php';?>
			</div>
			<div class="col-md-4 text-center">
				<h3>Contact Details</h3>
				<p>Contact Number: (+27) (0) 796855739 <br />
				Email: selemani@selianordev.co.za</p>
			</div>
		</div><!--.row-->
	</div><!--.container-->
</div><!--#footer-above -->
<!-- footer Below -->
<div id="footer-below">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php require_once './includes/template_footer.php';?>
			</div>
		</div><!--.row-->
	</div><!--.container-->
</div><!--#footer-below-->	
<!-- include javascript library -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/mainScript.js"></script>
<script src="js/custom_validation.js"></script>
</body>
</html>