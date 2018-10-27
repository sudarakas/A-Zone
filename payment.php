<?php

	$currentCustomer = $_SESSION['cusEmail'];
	$getCustomerIdSql = "SELECT * FROM customer WHERE cusEmail='$currentCustomer'";
	$getCustomerId = mysqli_query($conn,$getCustomerIdSql);
	$rowGetCustomer = mysqli_fetch_array($getCustomerId);
	$cusId = $rowGetCustomer['cusId'];
?>


<div class="leftside">
	<center>
		<h1>Pay Online</h1>
		<br>
		<i class="fa fa-cc-paypal fa-5x"></i>
		<i class="fa fa-cc-visa fa-5x" aria-hidden="true"></i>
		<i class="fa fa-cc-mastercard fa-5x" aria-hidden="true"></i>
		<br>
		<br>
		<br>
		<p>We do not store your credit/debit card deatils in our site, all the payment process handle by Paypal.inc. <br> We are not taking any kind of responsibilty for issues that you hae with Paypal.</p>
		<p>If you have problem or need more info plases contact us.</p>
		<a href="online.php" class="btn btn-success">Pay Online</a>
	</center>
</div>

<div class="rightside">
	<center>
		<h1>Pay Offline</h1>
		<br> 
		<i class="fa fa-university fa-5x" aria-hidden="true"></i>
		<br>
		<br>
		<br>
		<p>If you are facing trouble with online paayment method, you can use offline payment method. <br>If you have any kind of problem with offline payment, please be kind enough to contact us.</p>
		<p>You can simply deposit the payment via Sampath Bank, Bank of Cylon or Commercial Bank</p>
		<a href="order.php?customerId=<?php echo $cusId;?>" class="btn btn-danger">Pay Offline</a>
	</center>
</div>