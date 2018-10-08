<?php
	
	session_start();
	include("include/dbcon.php");
	include("include/md5salt.php");
	$wrongpass = "";
?>

<?php

	if(isset($_POST['adminLogin'])){
		
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$pass = encNanoSec(mysqli_real_escape_string($conn,$_POST['password']));
		$sqlQuery = "SELECT * FROM admin WHERE adminEmail='$email' AND adminPassword='$pass'";
		$valid = mysqli_num_rows(mysqli_query($conn,$sqlQuery));
		
		
		if($valid==1){
			
			$_SESSION['email'] = $email;
			echo "<script>window.open('index.php?dashboard','_self')</script>";
			
		}else{
			$wrongpass = "Invalid Email/Password!<br>Something wrong? Contact Root Administrator";
		}
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Login into Azone - Administrator Panel</title>
    
    <!-- Start - CSS Files Link -->
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700,900" rel="stylesheet">
    <!-- End - CSS Files Link -->
    
    <!-- Start - JavaScript Files Link -->
    <script type="text/javascript" src="resources/js/jquery.min.js"></script>
    <!-- End - JavaScript Files Link -->
    
</head>
<body>
<!-- Start - Signup Box-->
<div class="signup-box">    
    <!-- Start Side-->
    <div class="rightside">
       <div class="form-box">
           <form method="POST" action="">
              <div class="inputbox">
              	<h1 class="form-head" style="border-bottom: none; font-size: 50px;">AZONE</h1>
              	<h2 class="form-head">Administrator Login</h2>
              </div>
              <div class="form-warn"><?php if($wrongpass != "") echo $wrongpass . "<br><br>" ?></div>
               <div class="inputbox">
                   <input type="email" name="email" class="control" placeholder="Enter Your Email Address">
               </div>
               <div class="inputbox">
                   <input type="password" name="password" class="control" placeholder="Password">
               </div>
               <div class="inputbox">
                   <input type="submit" name="adminLogin" class="btn signup-btn " value="Enter">
               </div>
           </form>
       </div>
        
    </div>
    <!-- End - Right Side-->
</div>
<!-- End - Signup Box-->
</body>
</html>