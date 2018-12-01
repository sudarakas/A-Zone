<?php
	session_start();
	include("include/dbcon.php");
	include("include/function.php");
	include("include/md5salt.php");
	setGetCookie();
?>
<?php
	if(!isset($_SESSION['cusEmail'])){
		echo "<script>window.open('../login.php','_self')</script>";
	}
?>
<?php
	deleteWishlist();
?>