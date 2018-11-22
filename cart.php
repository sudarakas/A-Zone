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
					 		<li class="active">
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
	
	
	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="cart.php">Cart</a>
					</li>
				</ul>
			</div>
<!--	Cart.php Codes Start-->
			<div class="col-md-9" id="cart">
				<div class="box">
					<form action="cart.php" method="post" enctype="multipart/form-data">
						<h1>Cart</h1>
						<?php
							$userCookie = setGetCookie();
							$grabCartItemsSql = "SELECT * FROM cart WHERE cartCookie='$userCookie'";
							$grabCartItems = mysqli_query($conn,$grabCartItemsSql);
							$rowGrab = mysqli_num_rows($grabCartItems);
						?>
						<p class="text-muted">
							<?php echo $rowGrab;?> item(s) in your cart!
						</p>
						<div class="tabel-responsive">
							<table class="table">
								<thead>
									<tr>
										<th colspan="2"> Product</th>
										<th>Quantity</th>
										<th>Unit Price</th>
										<th>Color</th>
										<th>Warrenty</th>
										<th colspan="1">Delete</th>
										<th colspan="2">Sub Total</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$subTotal = 0;
									while($rowGrabCart = mysqli_fetch_array($grabCartItems)){
										$productId = $rowGrabCart['productId'];
										$productQty = $rowGrabCart['cartQty'];
										$productColor = $rowGrabCart['cartColour'];
										$productWarr= $rowGrabCart['cartWarranty'];
										
										$productPriceSql = "SELECT * FROM product WHERE productId='$productId'";
										$getProductPrice = mysqli_query($conn,$productPriceSql);
										$rowPrice = mysqli_fetch_array($getProductPrice);
										$unitPrice = $rowPrice['productPrice'];
										$productName = $rowPrice['productName'];
										$productImg = $rowPrice['image1'];
										
										if($productWarr != "Software"){
												$unitPrice += 3800; 
										}
										
										$subTotal = $unitPrice * $productQty;
										echo "
<!--								One Cart Raw-->
									<tr>
										<td>
											<img src='admin/resources/img/product_img/$productImg' alt=''>
										</td>
										<td>
											<a href='#'>$productName</a>
										</td>
										<td>
											$productQty
										</td>
										<td>
											$unitPrice
										</td>
										<td>
											$productColor
										</td>
										<td>
											$productWarr
										</td>
										<td>
											<input type='checkbox' name='remove[]' value='$productId'>
										</td>
										<td>
											$subTotal
										</td>
									</tr>
<!--								One Cart Raw End-->
										
										";
								
									}	
								?>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="5">Total</th>
										<th colspan="2">Rs <?php echo returnPriceCart();?></th>
									</tr>
								</tfoot>
							</table><br>
							<div class="form-inline pull-right">
								<div class="form-group">
									<label>Coupon</label>
									<input type="text" name="couponcode" class="form-control">
								</div>
								<input type="submit" name="coupon" value="Apply" class="btn btn-success">
							</div><br>
						</div>
						<div class="box-footer">
							<div class="pull-left">
								<a href="index.php" class="btn btn-default">
									<i class="fa fa-chevron-left"></i> Continue Shopping
								</a>
							</div>
							<div class="pull-right">
								<button class="btn btn-default" type="submit" name="update" value="Update">
									<i class="fa fa-refresh"></i> Update
								</button>
								<a href="checkout.php" class="btn btn-info">
									Checkout <i class="fa fa-chevron-right"></i>
								</a>
							</div>
						</div>
						<?php cartUpdate();?>
					</form>
				</div>
								<div id="row same-height-row">
					<div class="col-md-3 col-sm-6">
						<div class="box same-height headline">
							<h3 class="text-center">Check this products out</h3>
						</div>
					</div>
					<?php
						suggestProducts();
					?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box" id="order-details">
					<div class="box-header">
						<h3>Summary</h3>
					</div>
					<p class=""> 
						Your all costs are calculated here
					</p>
					<div class="tabel-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										SubTotal
									</td>
									<th> Rs <?php echo returnPriceCart()?></th>
								</tr>
								<tr>
									<td>
										Delivery Cost
									</td>
									<td> Free</td>
								</tr>
								<tr class="total">
									<td>Total</td>
									<th>Rs <?php echo returnPriceCart()?></th>
								</tr>
							</tbody>
						</table>
					</div>
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


<?php
	applyCoupon();
?>