<?php

	session_start();
	include("include/dbcon.php");
	include("include/function.php");
	include("include/md5salt.php");

	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
//	else if(isset($_SESSION['email'])){
//		echo "<script>window.open('index.php?dashboard','_self')</script>";
//	}
	else{
?>

<!DOCTYPE html>
<html>
<head>

	<title>AZone - Adminstrator</title>
	
	<!--Add CSS Files-->
	<link rel="stylesheet" type="text/css" href="resources/css/adminstyle.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet"  type="text/css" href="resources/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700,900" rel="stylesheet">
	
</head>
<body>
	<div id="wrapper">
		<?php
			include("include/sidepanel.php");
		?>
		<div id="page-wrapper">
			<div class="container-fluid">
				<?php
					if(isset($_GET['dashboard'])){
						include("dashboard.php");
					}
				?>
				<?php
					if(isset($_GET['addproducts'])){
						include("addProduct.php");
					}
				?>
				<?php
					if(isset($_GET['viewproducts'])){
						include("viewProducts.php");
					}
				?>
				<?php
					if(isset($_GET['deleteProduct'])){
						deleteProduct();
					}
				?>
				<?php
					if(isset($_GET['editProduct'])){
						include("editProduct.php");
					}
				?>
				<?php
					if(isset($_GET['orderlist'])){
						include("orderlist.php");
					}
				?>
				<?php
					if(isset($_GET['shipConfirm'])){
						confirmShip();
					}
				?>
				<?php
					if(isset($_GET['payments'])){
						include("payments.php");
					}
				?>
				<?php
					if(isset($_GET['payConfirm'])){
						confirmPayment();
					}
				?>
				<?php
					if(isset($_GET['customers'])){
						include("customers.php");
					}
				?>
				<?php
					if(isset($_GET['deleteCustomer'])){
						deleteCustomer();
					}
				?>
				<?php
					if(isset($_GET['addcategory'])){
						include("addcategory.php");
					}
				?>
				<?php
					if(isset($_GET['viewcategory'])){
						include("viewcategory.php");
					}
				?>
				<?php
					if(isset($_GET['deleteCategory'])){
						deleteCategory();
					}
				?>
				<?php
					if(isset($_GET['addmanufacture'])){
						include("addManufacture.php");
					}
				?>
				<?php
					if(isset($_GET['viewmanufacture'])){
						include("viewManufacture.php");
					}
				?>
				<?php
					if(isset($_GET['deleteManufacture'])){
						deleteManufacture();
					}
				?>
				<?php
					if(isset($_GET['addads'])){
						include('addAds.php');
					}
				?>
				<?php
					if(isset($_GET['viewads'])){
						include('viewAds.php');
					}
				?>
				<?php
					if(isset($_GET['deleteAd'])){
						deleteAds();
					}
				?>
				<?php
					if(isset($_GET['logout'])){
						include("logout.php");
					}
				?>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	<!--Add JavaScript Files-->
	<script src="resources/js/jquery.min.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	
	
	
</body>
</html>
<?php } ?>