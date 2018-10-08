<?php

	$server = "localhost";
	$user	= "root";
	$password = "";
	$database	= "azone";
	$connF = null;

	$connF = mysqli_connect($server,$user,$password,$database);



	function getProducts(){
		
		global $connF;
		$sql = "SELECT * FROM product ORDER BY 1 DESC LIMIT 0,6";
		$getProduct = mysqli_query($connF,$sql);
		
		while($rowProduct = mysqli_fetch_array($getProduct)){
			
			$productId = $rowProduct['productId'];
			$productName = $rowProduct['productName'];
			$productPrice = $rowProduct['productPrice'];
			$productImg1 = $rowProduct['image1'];
			
			echo"
			
			<!--	One Product Code Start-->
			<div class='col-sm-4 col-sm-6 single'>
				<div class='product' >
					<a href='details.php?productId=$productId'>
						<img src='admin/resources/img/product_img/$productImg1' class='img-responsive' alt=''>
					</a>
					<div class='text'>
						<h4><a href='details.php?productId=$productId'>$productName</a></h4>
						<p class='price'>Rs $productPrice</p>
						<p class='buttons'>
							<a href='details.php?productId=$productId' class='btn btn-warning'>More</a>
							<a href='details.php?productId=$productId' class='btn btn-info'>
								<i class='fa fa-shopping-cart'> Add to Cart</i>
							</a>
						</p>
					</div>
				</div>
			</div>
<!--	One Product Code End-->
			";
		}
	}
	
?>