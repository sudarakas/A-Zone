<?php
	
	if(isset($_POST['submit'])){
		
		$con = new mysqli('127.0.0.1','root',"",'reg');
		
		if(!$con){
			echo "fail";
		}
		else{
			echo "success";
		}
		
		$name = $con->real_escape_string($_POST['name']);
		$email = $con->real_escape_string($_POST['email']);
		$password = $con->real_escape_string($_POST['password']);
		$cpassword = $con->real_escape_string($_POST['cpassword']);
		
		
		if($name=="" || $email == "" || $password == ""){
			$msg = "Plaes fill";
		}
		else{
			$sql = $con->query("SELECT id FROM users WHERE email='$email'");
			if($sql->num_rows > 0){
				echo "rip";
			}else{
			$con->query("INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");

			}
		}
	}
?>


<!DOCTYPE html>
<html>

<head>
	
	<title> REG</title>
	
	
	<!--Add CSS Files-->
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet"  type="text/css" href="resources/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700,900" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="resources/css/styles.css">
	
	
</head>
	
<body>
	<div class="container" style="margin-top: 100px">
		<div class="col-md-66 col-md-offset-3" align="center">
			
			<form method="post" action="reg.php">
				<input class="form-control" name="name" placeholder="Name">
				<input class="form-control" name="email" type="email">
				<input class="form-control" name="password" type="password">
				<input class="form-control" name="cpassword" type="password">
				<input class="btn btn-danger" type="submit" name="submit" value="Reg">
			</form>
		</div>
		
	</div>
		
		
		
		
		
<!--Add JavaScript Files-->
	<script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="resources/js/jquery-3.3.1.min.js"></script>			
</body>
	
	
</html>