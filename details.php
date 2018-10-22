<?php

	include("include/dbcon.php");
	include("include/function.php");
?>
<?php
	if(isset($_GET['productId'])){
		
		$productId = $_GET['productId'];
		
		$sqlDet = "SELECT * FROM product WHERE productId = '$productId'";
		
		$getDetail = mysqli_query($conn,$sqlDet);
		$rowDetails = mysqli_fetch_array($getDetail);
		
		$productId = $rowDetails['productId'];
		$productName = $rowDetails['productName'];
		$productPrice = $rowDetails['productPrice'];
		$productImg1 = $rowDetails['image1'];
		$productImg2 = $rowDetails['image2'];
		$productImg3 = $rowDetails['image3'];
		$productImg4 = $rowDetails['image4'];
		$productPrice = $rowDetails['productPrice'];
		$productDetails = $rowDetails['productDetails'];
		$productManu = $rowDetails['manufactureId'];
		$productCate = $rowDetails['categoryId'];
		$productKeyword = $rowDetails['productKeywords'];
		$productFeat = $rowDetails['features'];
		$productAvailability = $rowDetails['availability'];
		$productWarranty = $rowDetails['Warranty'];
		
		$getManufacureSql = "SELECT * FROM manufacture WHERE  manufactureId='$productManu'";
		$getManufacureDetails = mysqli_query($conn,$getManufacureSql);
		$rowGetManufacureDetails = mysqli_fetch_array($getManufacureDetails);
		
		$getCategorySql ="SELECT * FROM category WHERE categoryId ='$productCate'";
		$getCategoryDetails = mysqli_query($conn,$getCategorySql);
		$rowGetCategoryDetails = mysqli_fetch_array($getCategoryDetails);
		
		$manName = $rowGetManufacureDetails['manName'];
		$cateName = $rowGetCategoryDetails['catName'];
		
	}
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
					Cart Total Price : Rs<?php priceCart();?>, No of items : <?php countCart(); ?>
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
					<li>
						<a href="store.php?category=<?php echo $productCate;?>"><?php echo $cateName;?></a>
					</li>
					<li>
						<a href="store.php?manufacture=<?php echo $productManu;?>"><?php echo $manName;?></a>
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<?php
					include("include/side.php");
				?>
			</div>
			<div class="col-md-9">
				<div class="row" id="productarea">
					<div class="col-sm-6">
						<div id="imgMain">
							<div id="productSlideShow" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#productSlideShow" data-slide-to="0" class="active"></li>
									<li data-target="#productSlideShow" data-slide-to="1"></li>
									<li data-target="#productSlideShow" data-slide-to="2"></li>
									<li data-target="#productSlideShow" data-slide-to="3"></li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
										<center>
											<img src="admin/resources/img/product_img/<?php echo $productImg1;?>" alt="" class="img-responsive">
										</center>
									</div>
									<div class="item">
										<center>
											<img src="admin/resources/img/product_img/<?php echo $productImg2;?>" alt="" class="img-responsive">
										</center>
									</div>
									<div class="item">
										<center>
											<img src="admin/resources/img/product_img/<?php echo $productImg3;?>" alt="" class="img-responsive">
										</center>
									</div>
									<div class="item">
										<center>
											<img src="admin/resources/img/product_img/<?php echo $productImg4;?>" alt="" class="img-responsive">
										</center>
									</div>
								</div>
								<a href="#productSlideShow" class="left carousel-control" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a href="#productSlideShow" class="right carousel-control" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="box">
							<h2 class="text-center"><?php echo $productName;?></h2>
							<?php
								addCart();
							?>
							<hr>
							<form action="details.php?addCart=<?php echo $productId;?>" method="post" class="form-horizontal">
								<div class="form-group">
									<label for="" class="col-md-5 control-label">
										Quantity
									</label>
									<div class="col-md-7">
										<select name="qty" id="" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-5 control-label">Color</label>
									<div class="col-md-7">
										<select name="color" id="" class="form-control">
											<option> Black </option>
											<option> Red </option>
											<option> Gold </option>
											<option> Blue </option>
											<option> Silver </option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-5 control-label">Warrenty</label>
									<div class="col-md-7">
										<select name="warrenty" id="" class="form-control">
											<option> Software </option>
											<option> Hardware </option>
										</select>
									</div>
								</div>
								<p class="price">Rs <?php echo $productPrice;?></p>
								<p class="text-center buttons">
									<button class="btn btn-info" type="submit">
										<i class="fa fa-shopping-cart"></i> Add to Cart
									</button>
								</p>
							</form>
						</div>
						<div class="row" id="thumbs">
<!--						One Image Side-->
							<div class="col-xs-3">
								<a href="#" class="thumb">
									<img src="admin/resources/img/product_img/<?php echo $productImg1?>" alt="" class="img-responsive">
								</a>
							</div>
<!--							One Image Side End-->
<!--						One Image Side-->
							<div class="col-xs-3">
								<a href="#" class="thumb">
									<img src="admin/resources/img/product_img/<?php echo $productImg2?>" alt="" class="img-responsive">
								</a>
							</div>
<!--							One Image Side End-->
<!--						One Image Side-->
							<div class="col-xs-3">
								<a href="#" class="thumb">
									<img src="admin/resources/img/product_img/<?php echo $productImg3?>" alt="" class="img-responsive">
								</a>
							</div>
<!--							One Image Side End-->
<!--						One Image Side-->
							<div class="col-xs-3">
								<a href="#" class="thumb">
									<img src="admin/resources/img/product_img/<?php echo $productImg4?>" alt="" class="img-responsive">
								</a>
							</div>
<!--							One Image Side End-->
						</div>
					</div>
				</div>
				<div class="box" id="details">
					<h4>Description</h4>
					<p><?php echo $productDetails;?></p>
					<hr>
				</div>
				<div id="row same-height-row">
					<div class="col-md-3 col-sm-6">
						<div class="box same-height headline">
							<h3 class="text-center">Check this products out</h3>
						</div>
					</div>
 					<?php
						$getRandomProductsSql = "SELECT * FROM product ORDER BY RAND() LIMIT 0,3";
						$getRandomProducts = mysqli_query($conn,$getRandomProductsSql);
						while($rowGetRandomProducts = mysqli_fetch_array($getRandomProducts)){
							$productId = $rowGetRandomProducts['productId'];
							$productName = $rowGetRandomProducts['productName'];
							$productPrice = $rowGetRandomProducts['productPrice'];
							$productImg1Mini = $rowGetRandomProducts['image1'];
							
							echo "
		<!-- 						One Sub Product Start-->
								<div class='center-responsive col-md-3 col-sm-6'>
									<div class='product same-height'>
										<a href='details.php?productId=$productId'>
											<img src='admin/resources/img/product_img/$productImg1Mini' alt='' class='img-responsive'>
										</a>
									<div class='text'>
										<h4>
											<a href='details.php?productId=$productId'>$productName</a>
										</h4>
										<p class='price'> Rs $productPrice</p>
									</div>
									</div>
								</div>
		<!--						One Sub Product Start-->
							
							
							
							";
						}
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