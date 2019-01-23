<center>
	<h3 style="text-transform: uppercase; font-weight: 700;">My Orders</h3>
	<p class="text-info">Want to cancel your order or need any help? Please feel free to contact us</p>
	<hr>
	
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				 <tr>
				 	<th>No</th>
				 	<th>Invoice No</th>
				 	<th>Order Date</th>
				 	<th>Product</th>
				 	<th>QTY</th>
				 	<th>Color</th>
				 	<th>Warranty Type</th>
				 	<th>Amount</th>
				 	<th>Status</th>
				 	<th>Action</th>
				 </tr>
			</thead>
			<tbody>
				<?php
					$cusEmail = $_SESSION['cusEmail'];
					$getCustomerSql = "SELECT * FROM customer WHERE cusEmail='$cusEmail'";
					$getCustomer = mysqli_query($conn,$getCustomerSql);
					$rowGetCustomer = mysqli_fetch_array($getCustomer);

					$customerId = $rowGetCustomer['cusId'];
					$no = 1;
					$getOrdersSql = "SELECT * FROM orders WHERE cusId='$customerId'";
					$getOrders = mysqli_query($conn,$getOrdersSql);
					while($getOrdersRow = mysqli_fetch_array($getOrders)){
						
						$orderId = $getOrdersRow['orderId'];
						$orderInvoice = $getOrdersRow['invoiceNumber'];
						$orderDate = $getOrdersRow['date'];
						$orderQty = $getOrdersRow['qty'];
						$orderColor = $getOrdersRow['colour'];
						$orderWarrenty = $getOrdersRow['warranty'];
						$orderStatus= $getOrdersRow['status'];
						$orderAmount = $getOrdersRow['orderAmount'];
						$productId = $getOrdersRow['productId'];
						
						$getProductNameSql = "SELECT * FROM product WHERE productId='$productId'";
						$getProductName = mysqli_query($conn,$getProductNameSql);
						$getProductNameRow = mysqli_fetch_array($getProductName);
						$productName = $getProductNameRow['productName'];
						
						echo "
						<tr>
							<th>$no</th>
							<td>$orderInvoice</td>
							<td>$orderDate</td>
							<td>$productName</td>
							<td>$orderQty</td>
							<td>$orderColor</td>
							<td>$orderWarrenty</td>
							<td>$orderAmount</td>
							<td>$orderStatus</td>";
						if($orderStatus == 'unpaid' ||$orderStatus == 'Unpaid' ){
							echo "
							<td>
								<a href='confirm.php?orderId=$orderId' target='_blank' class='btn btn-success btn-sm'>Confirm</a>
							</td>
							";
						}else{
							echo "
							<td>
								<a href='' class='btn btn-warning btn-sm'>$orderStatus</a>
							</td>
							";
						}
							
						echo "
						</tr>
							
						";
						$no = $no + 1;
					}
				?>
			</tbody>
		</table>
	</div>
</center>
	