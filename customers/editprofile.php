<?php

	$cusEmail = $_SESSION['cusEmail'];
	$getCustomerInfoSql = "SELECT * FROM customer WHERE cusEmail='$cusEmail'";
	$getCustomerInfo = mysqli_query($conn,$getCustomerInfoSql);
	$getCustomerInfoRow = mysqli_fetch_array($getCustomerInfo);


	$customerName = $getCustomerInfoRow['cusName'];
	$customerEmail = $getCustomerInfoRow['cusEmail'];
	$customerPno = $getCustomerInfoRow['cusPNum'];
	$customerAddress = $getCustomerInfoRow['cusAddress'];
	$customerCity = $getCustomerInfoRow['cusCity'];
	$customerProfilePic = $getCustomerInfoRow['cusImage'];
	
?>




<center>
	<h3 style="text-transform: uppercase; font-weight: 700;">Edit Your Profile</h3>
	<p class="text-info">Edit your account details</p>
	<hr>
</center>
<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" name="cus_name" value="<?php echo $customerName;?>" required>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" class="form-control" name="cus_email" value="<?php echo $customerEmail;?>" required>
			</div>
			<div class="form-group">
				<label for="">Phone Number</label>
				<input type="text" class="form-control" name="cus_pno" value="<?php echo $customerPno;?>" required>
			</div>
			<div class="form-group">
				<label for="">Address</label>
				<input type="text" class="form-control" name="cus_address" value="<?php echo $customerAddress?>" required>
			</div>
			<div class="form-group">
				<label for="">City</label>
				<input type="text" class="form-control" name="cus_city" value="<?php echo $customerCity?>" required>
			</div>
			<div class="form-group">
				<label for="">Profile Picture</label>
				<input type="file" class="form-control" name="cus_dp" value="<?php echo $customerProfilePic?>">
			</div>
			<div class="text-center">
				<button type="submit" name="editprofile" class="btn btn-success">
					<i class="fa fa-edit"></i> Save
				</button>
			</div>
</form>


<?php
	editProfile();
?>