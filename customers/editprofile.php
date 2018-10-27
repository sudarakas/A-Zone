<?php

	$cusEmail = $_SESSION['cusEmail'];
	$getCustomerInfoSql = "SELECT * FROM customer WHERE cusEmail='$cusEmail'";
	$getCustomerInfo = mysqli_query($conn,$getCustomerInfoSql);
	

?>




<center>
	<h3 style="text-transform: uppercase; font-weight: 700;">Edit Your Profile</h3>
	<p class="text-info">Edit your account details</p>
	<hr>
</center>
<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" name="cus_name" required>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" class="form-control" name="cus_email" required>
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" name="cus_pass" required>
			</div>
			<div class="form-group">
				<label for="">Confirm Password</label>
				<input type="password" class="form-control" name="cus_cpass" required>
			</div>
			<div class="form-group">
				<label for="">Phone Number</label>
				<input type="password" class="form-control" name="cus_pno" required>
			</div>
			<div class="form-group">
				<label for="">Address</label>
				<input type="password" class="form-control" name="cus_address" required>
			</div>
			<div class="form-group">
				<label for="">City</label>
				<input type="password" class="form-control" name="cus_city" required>
			</div>
			<div class="form-group">
				<label for="">Profile Picture</label>
				<input type="file" class="form-control" name="cus_dp" required>
			</div>
			<div class="text-center">
				<button type="submit" name="editprofile" class="btn btn-success">
					<i class="fa fa-edit"></i> Save
				</button>
			</div>
		</form>