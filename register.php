<?php
	
	session_start();
	include("include/dbcon.php");
	include("include/function.php");
	include("include/md5salt.php");
	setGetCookie();
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
					 			<a href="myaccount.php?myorders">My Account</a>
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
							<input type="password" min="8" max="32" class="form-control" name="cus_pass"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,32}"  onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 8 characters including capital and simple letters and numbers without symbols' : ''); if(this.checkValidity()) form.cus_cpass.pattern = this.value;" required>
						</div>
						<div class="form-group">
							<label for="">Confirm Password</label>
							<input type="password" class="form-control" name="cus_cpass" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" required>
						</div>
						<div class="form-group">
							<label for="">Phone Number</label>
							<input type="text" pattern="[0]{1}[0-9]{9}" length="10" class="form-control" name="cus_pno"  onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Phone is not valid, Please enter a valid phone number' : ''); if(this.checkValidity()) form.cus_cpass.pattern = this.value;" required>
						</div>
						<div class="form-group">
							<label for="">Address</label>
							<input type="text" class="form-control" name="cus_address" required>
						</div>
						<div class="form-group">
							<label for="">City</label>
							<input type="text" class="form-control" name="cus_city" required>
						</div>
						<div class="form-group">
							<label for="">Profile Picture</label>
							<input type="file" class="form-control" name="cus_dp" required>
						</div>
						<center>
							<div class="g-recaptcha" data-sitekey="6LdScHYUAAAAAE9U_bKNKWJacA5WvGEIetd3lhbV"></div>
						</center>
						<br>
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
<!--	Google Recaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
	
	
</html>


<?php
	customerRegister();
?>