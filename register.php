<?php

	include("include/dbcon.php");
	include("include/function.php");
?>
<!DOCTYPE html>
<html>

<head>
	
	<title>EBuy Store</title>
	
	
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
					Welcome : Guest
				</a>
				<a href="#">
					Cart Total Price : $100, No of items : 2
				</a>
			</div>
			
			<div class="col-md-6">
<!--				Start Menu-->
				<ul class="menu">
					<li><a href="register.php">Register</a></li>
					<li><a href="login.php">Login</a></li>
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
					<span>3 items in cart</span>
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
							<h2>Register</h2>
							<p class="text-muted">Create a new account for enjoy our services</p>
						</center>
					</div>
					<form action="register.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" name="cus_name" required>
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" class="form-control" name="cus_email" required>
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" class="form-control" name="cus_pass" required>
						</div>
						<div class="form-group">
							<label for="">Confirm Password</label>
							<input type="password" class="form-control" name="cus_cpass" required>
						</div>
						<div class="form-group">
							<label for="">Phone Number</label>
							<input type="password" class="form-control" name="cus_pno" required>
						</div>
						<div class="form-group">
							<label for="">Address</label>
							<input type="password" class="form-control" name="cus_address" required>
						</div>
						<div class="form-group">
							<label for="">City</label>
							<input type="password" class="form-control" name="cus_city" required>
						</div>
						<div class="form-group">
							<label for="">Profile Picture</label>
							<input type="file" class="form-control" name="cus_dp" required>
						</div>
						<div class="text-center">
							<button type="submit" name="register" class="btn btn-success">
								<i class="fa fa-envelope"></i> Register
							</button>
							<button type="reset" name="clear" class="btn btn-danger">
								<i class="fa fa-trash"></i> Clear
							</button>
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
</body>
	
	
</html>