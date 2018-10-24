<?php
	session_start();
	include("include/dbcon.php");
	include("include/function.php");
	setGetCookie();
?>
<!DOCTYPE html>
<html>

<head>
	
	<title>Store</title>
	
	
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
					 		<li  class="active">
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
						<a href="store.php">Shop</a>
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<?php
					include("include/side.php");
				?>
			</div>
			<div class="col-md-9">
				<div class="box">
					<form action="store.php?priceSort" class="form-inline" method="post" enctype="multipart/form-data">
						<label for="">Price Range: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
						<div class="form-group">
							<label for="">Min (Rs:)</label>
							<input type="text" class="form-control" name="minPrice" required pattern="[0-9]*">
						</div>
						<div class="form-group">
							<label for="">&nbsp; Max (Rs:)</label>
							<input type="text" class="form-control" name="maxPrice" required pattern="[0-9]*">
						</div>
						<div class="form-group text-center">
							<input type="submit" value="Sort" name="priceSort" class="btn btn-success" onclick="window.location.href='store.php?priceSort'">
						</div>
					</form>
				</div>
				<div class="row">
					<?php
						if(!isset($_POST['priceSort'])){
							if(!isset($_GET['manufacture'])){
								if(!isset($_GET['category'])){
									$itemLimit = 6;
									if(isset($_GET['currentPage'])){
										$currentPage = $_GET['currentPage'];
									}
									else{
										$currentPage = 1;
									}
									$startPage = ($currentPage-1) * $itemLimit;
									$sql = "SELECT * FROM product ORDER BY 1 DESC LIMIT $startPage,$itemLimit";
									$getProductList = mysqli_query($conn,$sql);
									while($rowPageItem = mysqli_fetch_array($getProductList)){

										$productId = $rowPageItem['productId'];
										$productName = $rowPageItem['productName'];
										$productPrice = $rowPageItem['productPrice'];
										$productImg1 = $rowPageItem['image1'];

										echo "

											<!--	One Product Code Start-->
											<div class='col-sm-4 col-sm-6 center-responsive'>
												<div class='product' >
													<a href='details.php?productId=$productId'>
														<img src='admin/resources/img/product_img/$productImg1' class='img-responsive' alt=''>
													</a>
													<div class='text'>
														<h4><a href='details.php?productId=$productId'>$productName</a></h4>
														<p class='price'>Rs $productPrice</p>
														<p class='buttons'>
															<a href='details.php?productId=$productId' class='btn btn-warning'>More</a>
															<a href='details.php?productId=$productId' class='btn btn-info'>
																<i class='fa fa-shopping-cart'> Add to Cart</i>
															</a>
														</p>
													 </div>
												</div>
											</div>
											<!--	One Product Code End-->
											";
									}
						
					?>
				</div>
<!-- 				Page Navigation-->
				<center>
					<ul class="pagination">
						<?php
								
										$sql2 = "SELECT * FROM product";
										$getItems = mysqli_query($conn,$sql2);
										$totalItems = mysqli_num_rows($getItems);
										$noOfPages = ceil($totalItems/$itemLimit);

										echo "
											<li><a href='store.php?currentPage=1'>".'First Page'."</a></li>
										";

										for ($i = 1;$i <= $noOfPages; $i++){
											echo "
												<li><a href='store.php?currentPage=".$i."'>".$i."</a></li>
											";
										}

										echo "
											<li><a href='store.php?currentPage=$noOfPages'>".'Last Page'."</a></li>
										";


									}
								}
							}
						?>
					</ul>
				</center>
				<div class="row">
					<?php
						sortManufacture();
					?>
				</div>
				<div class="row">
					<?php
						sortCategory();
					?>
				</div>
				<div class="row">
					<?php
						sortPrice();
					?>
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