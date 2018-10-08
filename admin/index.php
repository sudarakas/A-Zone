<?php

	session_start();
	include("include/dbcon.php");

	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
?>

<?php

		$adminSession = $_SESSION['email'];
		$sqlQuery = "SELECT * FROM admin WHERE adminEmail = '$adminSession'";
		
		
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