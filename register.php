<?php
	
	session_start();
	include("include/dbcon.php");
	include("include/function.php");
	include("include/md5salt.php");
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
					<li><a href="register.php">Register</a></li>
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
							<input type="text" class="form-control" name="cus_pno" required>
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
	if(isset($_POST['register'])){
		
		$cusName = $_POST['cus_name'];
		$cusEmail = $_POST['cus_email'];
		$cusPass = $_POST['cus_pass'];
		$cusCPass = $_POST['cus_cpass'];
		$cusPNo = $_POST['cus_pno'];
		$cusAddress = $_POST['cus_address'];
		$cusCity = $_POST['cus_city'];
		$cusProfilePic = $_FILES['cus_dp']['name'];
		$cusProfilePicTemp = $_FILES['cus_dp']['tmp_name'];
		$cusConfimCode = rand();
		$cusPassEncrpt = encNanoSec($cusPass);
		
		//Google Recaptcha
		$sKey = "6LdScHYUAAAAAL6_FSP4Jgmv_Vd4-2sYytWiBt0K";
		$gResponse = $_POST['g-recaptcha-response'];
		$remoteIP = $_SERVER['REMOTE_ADDR'];
		$guRL = "https://www.google.com/recaptcha/api/siteverify?secret=$sKey&response=$gResponse&remoteip=$remoteIP";
		$retuenResponse = file_get_contents($guRL);
		$jsonResponse = json_decode($retuenResponse);
		
		if($cusPass == $cusCPass && $jsonResponse->success){
			move_uploaded_file($cusProfilePicTemp,"customers/resources/img/userpics/$cusProfilePic");
			
			$registerCustomerSql = "INSERT INTO customer(cusName, cusEmail, cusPassword, cusAddress, cusCity, cusImage, cConfirmCode, cusPNum) VALUES ('$cusName','$cusEmail','$cusPassEncrpt','$cusAddress','$cusCity','$cusProfilePic','$cusConfimCode','$cusPNo')";
			
			$registerCustomer = mysqli_query($conn,$registerCustomerSql);
		
			//Check register customer have items on cart
			$registerCusIP = setGetCookie();
			$checkCartSql = "SELECT * FROM cart WHERE cartCookie='$registerCusIP'";
			$checkCart = mysqli_query($conn,$checkCartSql);
			$countCheckCart = mysqli_num_rows($checkCart);
		
			if($countCheckCart>0){
				$_SESSION['cusEmail'] = $cusEmail;
				echo "<script>alert('Registered Success')</script>";
				echo "<script>window.open('cart.php','_self')</script>";
			}else{
				echo "<script>alert('Registered Success')</script>";
				echo "<script>window.open('store.php','_self')</script>";
			}
		}else if($jsonResponse->success){
			echo "<script>alert('Password and Confirm Password are not matched')</script>";
		}else if($cusPass == $cusCPass){
			echo "<script>alert('Please complete recaptcha!')</script>";
		}else{
			echo "<script>alert('Please check your inputs')</script>";
		}
		
		
		
	}
?>