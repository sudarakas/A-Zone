<?php

	session_start();
	include("include/dbcon.php");
	include("include/function.php");
	include("include/md5salt.php");
	require("include/phpmailer/PHPMailerAutoload.php"); 
	setGetCookie();

	$wrongpass = "";
	recoverPassword();
?>



<!DOCTYPE html>
<html>

<head>
	
	<title>AZONE - Kurunegala</title>
	
	
	<!--Add CSS Files-->
	<link rel="stylesheet" type="text/css" href="resources/css/styles.css">
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet"  type="text/css" href="resources/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700,900" rel="stylesheet">
	
	
</head>
	
<body>
	
<!--	Start Top-->
	<div class="top">
<!--		Start Container-->
		<div class="container">
			
			<div class="col-md-6 offer">
				<a href="#" class="btn btn-primary btn-sm">
					<?php
						welcomeUser();
					?>
				</a>
				<a href="#">
					Cart Total Price : Rs<?php priceCart();?>, No of items : <?php countCart(); ?>
				</a>
			</div>
			
			<div class="col-md-6">
<!--				Start Menu-->
				<ul class="menu">
					<?php
						switchLoginLogout();
					?>
				</ul>
				
			</div>
				
		</div>
		
	</div>
	
<!--	Navigation Bar Start-->
	
	<div class="navbar navbar-default" id="navbar">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand home" href="index.php">
					<img src="resources/img/logo.jpg" alt="logo" class="logo">
				</a>
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-align-justify"></i>
				</button>
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
					<span class="sr-only">Toggle Search</span>
					<i class="fa fa-search"></i>
				</button>
			</div>
			
			<div class="navbar-collapse collapse" id="navigation">
				<div class="padding-nav">
					 	<ul class="nav navbar-nav navbar-left">
					 		<li>
					 			<a href="index.php">Home</a>
					 		</li>
					 		<li>
					 			<a href="store.php">Store</a>
					 		</li>
					 		<li>
					 			<a href="cart.php">Cart</a>
					 		</li>
					 		<li>
					 			<a href="checkout.php">My Account</a>
					 		</li>
					 		<li>
					 			<a href="contact.php">Contact Us</a>
					 		</li>
					 	</ul>
				</div>
				
				<a class="btn btn-info navbar-btn right" href="cart.php">
					<i class="fa fa-shopping-cart"></i>
					<span><?php countCart(); ?> items in cart</span>
				</a>
				
				<div class="navbar-collapse collapse right">
					<button type="button" class="btn btn-info navbar-btn" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle Search</span>
						<i class="fa fa-search"></i>
					</button>
				</div>
				
				<div class="collapse clearfix" id="search">
					<form class="navbar-form" method="get" action="result.php">
						<div class="input-group">
							<input class="form-control" type="text" placeholder="Search" name="user_query" required>
							<span class="input-group-btn">
								<button type="submit" value="Search" name="search" class="btn btn-info">
								<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="register.php">Register</a>
					</li>
				</ul>
			</div>
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<center>
							<img src="resources/img/logo.jpg" alt="" class="logo">
							<h2>Recover Password</h2>
							<p class="text-muted">Recover your password</p>
						</center>
					</div>
					<form action="forgetpassword.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" class="form-control" name="cus_email" required>
						</div>
						<center>
							<div class="form-warn" style="font-size: 12px !important;font-weight: 600 !important;letter-spacing: 2px !important;color: red;	">
								<?php if($wrongpass != "") echo $wrongpass?>
							</div>
							<br>
							<div class="g-recaptcha" data-sitekey="6LdScHYUAAAAAE9U_bKNKWJacA5WvGEIetd3lhbV"></div>
						</center>
						<br>
						<div class="text-center">
							<button type="submit" name="recoverpass" class="btn btn-success">
								<i class="fa fa-envelope"></i> Recover Password
							</button>
							<br>
							<br>
							<p>Cannot login to your account? contact <a href="contact.php" target="_blank">Support Center</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
	
<!--Footer Start-->
	<?php
		include("include/foot.php");
	?>

	
<!--Add JavaScript Files-->
	<script src="resources/js/jquery.min.js"></script>	
	<script src="resources/js/bootstrap.min.js"></script>
	
<!--	Google Recaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>


