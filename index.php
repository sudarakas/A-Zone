<?php
	session_start();
	include("include/dbcon.php");
	include("include/function.php");
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
					Cart Total Price : Rs<?php priceCart();?>, No of items : <?php countCart();?>
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
			
			<div class="navbar-collapse navbar-default collapse" id="navigation">
				<div class="padding-nav">
					 	<ul class="nav navbar-nav navbar-left">
					 		<li class="active">
					 			<a href="index.php">Home</a>
					 		</li>
					 		<li>
					 			<a href="store.php">Store</a>
					 		</li>
					 		<li>
					 			<a href="cart.php">Cart</a>
					 		</li>
					 		<li>
					 			<a href="customers/myaccount.php?myorders">My Account</a>
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
		
<!--		SliderShow Start-->
	<div class="container" id="slider">
		<div class="col-md-12">
			<div id="slideshow1" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slideshow1" data-slide-to="0" class="active"></li>
					<li data-target="#slideshow1" data-slide-to="1"></li>
					<li data-target="#slideshow1" data-slide-to="2"></li>
					<li data-target="#slideshow1" data-slide-to="3"></li>
					<li data-target="#slideshow1" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner">
					<?php
					
						$sql = "SELECT * FROM slider LIMIT 0,1";
						$getImg = mysqli_query($conn,$sql);
						while($rowImg = mysqli_fetch_array($getImg)){
							$imgLink = $rowImg['sImage'];
						
						echo "
							<div class='item active'>
								<img src='admin/resources/img/slideshow/$imgLink'>
							</div>
						";
						}
					?>
					<?php
					
						$sql = "SELECT * FROM slider LIMIT 1,4";
						$getImg = mysqli_query($conn,$sql);
						while($rowImg = mysqli_fetch_array($getImg)){
							$imgLink = $rowImg['sImage'];
						
						echo "
							<div class='item'>
								<img src='admin/resources/img/slideshow/$imgLink'>
							</div>
						";
						}
					?>
				</div>
				<a class="left carousel-control" href="#slideshow1" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only"> Previous </span> 
				</a>
				<a class="right carousel-control" href="#slideshow1" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only"> Next </span> 
				</a>
			</div>
		</div>
	</div>
	
<!--	Ads Section-->
	<div id="adbox">
		<div class="container">
			<div class="same-height-row">
				<div class="col-sm-4">
					<div class="box same-height">
						<h3><a href="#">Summer Discounts</a></h3>
						<p>Upto 10% Discounts for Summer 2018</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box same-height">
						<h3><a href="#">Lifetime Tech Support</a></h3>
						<p>Free lifetime tech support only from us</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box same-height">
						<h3><a href="#">Original Products</a></h3>
						<p>We are offering 7 days checking warrenty</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--Trending Section-->
<div class="trending">
	<div class="box boxlk">
		<div class="container">
			<div class="col-md-12">
				<h2>New Arraivals</h2>
			</div>
		</div>
	</div>
</div>


<!--Contents Start-->
<div id="content" class="container">
	<div class="row">
		<?php
			getProducts();
		?>
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