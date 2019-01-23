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
		<!-- PayPal Intergartion Start Here -->
		<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        	<input type="hidden" name="business" value="azone@gmail.com">
			<input type="hidden" name="cmd" value="_cart">
			<input type="hidden" name="upload" value="1">
			<input type="hidden" name="currency_code" value="USD">
			<input type="hidden" name="return" value="http://localhost/azone/paypal.php?customerId=<?php echo returnCustomerId();?>">
			<input type="hidden" name="cancel_return" value="http://localhost/azone/index.php">
    	
			<?php
			
				$i = 0;
				$userCookie = setGetCookie();
				$checkCartSql = "SELECT * FROM cart WHERE cartCookie='$userCookie'";
				$checkCart = mysqli_query($conn,$checkCartSql);

				while($checkCartRow = mysqli_fetch_array($checkCart)){
					$productId = $checkCartRow['productId'];
					$productQty = $checkCartRow['cartQty'];
					$productWarrenty = $checkCartRow['cartWarranty'];
					$cartPrice = $checkCartRow['cartPrice'];
					$cartColour = $checkCartRow['cartColour'];
					$cartPriceUSD = round($cartPrice / USDToLKR());

					$getProductNameSql = "SELECT * FROM product WHERE productId='$productId'";
					$getProductName = mysqli_query($conn,$getProductNameSql);
					$getProductNameRow = mysqli_fetch_array($getProductName);

					$productName = $getProductNameRow['productName'];
					$i++;
			?>

			<input type="hidden" name="item_name_<?php echo $i;?>" value="<?php echo $productName;?>">
			<input type="hidden" name="item_number_<?php echo $i;?>" value="<?php echo $i;?>">
			<input type="hidden" name="amount_<?php echo $i;?>" value="<?php echo $cartPriceUSD;?>">
			<input type="hidden" name="quantity<?php echo $i;?>" value="<?php echo $productQty;?>">
			<?php	}
			?>
			<input type="submit" name="submit" class="btn btn-primary" value="Pay on PayPal">

		</form>
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
		<a href="order.php?customerId=<?php echo returnCustomerId();?>" class="btn btn-danger">Pay Offline</a>
	</center>
</div>
