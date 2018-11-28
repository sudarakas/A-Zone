<?php
	$cusEmail = $_SESSION['cusEmail'];

	$getCustomerSql = "SELECT * FROM customer WHERE cusEmail='$cusEmail'";
	$getCustomer = mysqli_query($conn,$getCustomerSql);
	$rowGetCustomer = mysqli_fetch_array($getCustomer);

	$customerPic = $rowGetCustomer['cusImage'];
	$customerName = $rowGetCustomer['cusName'];

?>
<div class="panel panel-primary sidebar-menu">
	<div class="panel-heading">
		<center>
			<img src="resources/img/userpics/<?php echo $customerPic?>" class="img-responsive" alt="profile_pic">
		</center>
		<br>
		<h3 class="panel-title" style="text-align:center;"><?php echo $customerName?></h3>
	</div>
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
			<?php
				forceMailConfirm();
			?>
			<li class="<?php
					   	if(isset($_GET['myorders'])){
							echo "list-group-item-info";
						}
					   ?> ">
				<a href="myaccount.php?myorders"><i class="fa fa-list-alt"></i> Orders Details</a>
			</li>
			<li class="<?php
					   	if(isset($_GET['changepassword'])){
							echo "list-group-item-info";
						}
					   ?>">
				<a href="myaccount.php?changepassword"><i class="fa fa-key"></i> Change Password</a>
			</li>
			<li class="<?php
					   	if(isset($_GET['editprofile'])){
							echo "list-group-item-info";
						}
					   ?>">
				<a href="myaccount.php?editprofile"><i class="fa fa-user"></i> Edit Profile</a>
			</li>
			<li class="<?php
					   	if(isset($_GET['payoffline'])){
							echo "list-group-item-info";
						}
					   ?>">
				<a href="myaccount.php?payoffline"><i class="fa fa-dollar"></i> Offline Payment</a>
			</li>
			<li class="<?php
					   	if(isset($_GET['wishlist'])){
							echo "list-group-item-info";
						}
					   ?>">
				<a href="myaccount.php?wishlist"><i class="fa fa-shopping-basket"></i> Wish-List</a>
			</li>
			<li class="<?php
					   	if(isset($_GET['logout'])){
							echo "list-group-item-info";
						}
					   ?>">
				<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</li>
		</ul>
	</div>
</div>