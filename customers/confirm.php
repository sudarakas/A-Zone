<?php
	session_start();
	include("include/dbcon.php");
	include("include/function.php");
?>
<?php
	if(!isset($_SESSION['cusEmail'])){
		echo "<script>window.open('../login.php','_self')</script>";
	}

	if(isset($_GET['orderId'])){
		
		$orderId = $_GET['orderId'];
		$getOrderDetilsSql = "SELECT * FROM orders WHERE orderId ='$orderId'";
		$getOrderDetils = mysqli_query($conn,$getOrderDetilsSql);
		$getOrderDetilsRow = mysqli_fetch_array($getOrderDetils);
		
		$invoiceNumber = $getOrderDetilsRow['invoiceNumber'];
		
		$getOrderAmountSql = "SELECT * FROM orders WHERE invoiceNumber ='$invoiceNumber'";
		$getOrderAmount = mysqli_query($conn,$getOrderAmountSql);
		$orderAmountFull = 0;
		while($getOrderAmountRow = mysqli_fetch_array($getOrderAmount)){
			$orderAmountFull += $getOrderAmountRow['orderAmount'];
		}
	}

	offlinePayment();
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
					Welcome : Guest
				</a>
				<a href="#">
					Cart Total Price : $100, No of items : 2
				</a>
			</div>
			
			<div class="col-md-6">
<!--				Start Menu-->
				<ul class="menu">
					<li><a href="../register.php">Register</a></li>
					<li><a href="../login.php">Login</a></li>
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
					 			<a href="../index.php">Home</a>
					 		</li>
					 		<li>
					 			<a href="../store.php">Store</a>
					 		</li>
					 		<li>
					 			<a href="../cart.php">Cart</a>
					 		</li>
					 		<li  class="active">
					 			<a href="myaccount.php">My Account</a>
					 		</li>
					 		<li>
					 			<a href="../contact.php">Contact Us</a>
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
						<a href="shop.php">My Account</a>
					</li>
				</ul>
			</div>
<!--			Profile Panel Start	-->
			<div class="col-md-3">
				<?php
					include("include/sideprofile.php");
				?>
			</div>
<!--			Page Content Start Here-->
			<div class="col-md-9">
				<div class="box">
					<h3 style="text-align: center;">Complete Your Payment</h3>
					<hr>
					<form action="confirm.php?offlinePayment=<?php echo $orderId;?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Invoice No</label>
							<input type="text" class="form-control" name="invoiceno" value="<?php echo $invoiceNumber;?>" required>
						</div>
						<div class="form-group">
							<label for="">Payment Date</label>
							<input type="date" class="form-control" name="paydat" required>
						</div>
						<div class="form-group">
							<label for="">Payment Method</label>
							<select name="paymode" class="form-control" id="">
								<option>Select Payment Method</option>
								<option>Bank Deposite</option>
								<option>CDM Deposite</option>
								<option>Money Orders</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Bank / Agent</label>
							<input type="text" class="form-control" name="paybank" required>
						</div>
						<div class="form-group">
							<label for="">Branch</label>
							<input type="text" class="form-control" name="paybranch" required>
						</div>
						<div class="form-group">
							<label for="">Transaction Id</label>
							<input type="text" class="form-control" name="payid" required>
						</div>
						<div class="form-group">
							<label for="">Amount</label>
							<input type="text" class="form-control" name="payamount" value="<?php echo $orderAmountFull;?>" required>
						</div>
						<div class="form-group">
							<label for="">Attach Slip</label>
							<input type="file" class="form-control" name="attachslip">
						</div>
						<div class="text-center">
							<button class="btn btn-success btn-md" type="submit" name="payconfirm">
								<i class="fa fa-pay">Confirm Payment</i>
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