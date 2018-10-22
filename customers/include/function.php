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


	function getManufactures(){
		
		global $connF;
		$sql = "SELECT * FROM manufacture ORDER BY 1 LIMIT 0,10";
		$getManufacture = mysqli_query($connF,$sql);
		
		while($rowManufacture = mysqli_fetch_array($getManufacture)){
			
			$manufactureId = $rowManufacture['manufactureId'];
			$manName = $rowManufacture['manName'];
			$manImage = $rowManufacture['manImage'];
				
			echo"
			
				<li><a href='store.php?manufacture=$manufactureId'>$manName</a></li>
			";
			
		}
		
		
	}

	function getCategory(){
		
		global $connF;
		$sql = "SELECT * FROM category";
		$getCategory = mysqli_query($connF,$sql);
		
		while($rowCategory = mysqli_fetch_array($getCategory)){
			
			$categoryId = $rowCategory['categoryId'];
			$categoryName = $rowCategory['catName'];
			$categoryImage = $rowCategory['catImage'];
				
			echo"
			
				<li><a href='store.php?category=$categoryId'>$categoryName</a></li>
			";
			
		}
		
		
	}

function sortManufacture(){
	
	global $connF;
	if(isset($_GET['manufacture'])){
		$manuId = $_GET['manufacture'];
		$sql = "SELECT * FROM product WHERE manufactureId='$manuId'";
		$sortManufacture = mysqli_query($connF,$sql);
		
		while($rowManufactureSort = mysqli_fetch_array($sortManufacture)){
			$productId = $rowManufactureSort['productId'];
			$productName = $rowManufactureSort['productName'];
			$productPrice = $rowManufactureSort['productPrice'];
			$productImg1 = $rowManufactureSort['image1'];
			
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
}

function sortCategory(){
	
	global $connF;
	if(isset($_GET['category'])){
		$categoryId = $_GET['category'];
		$sql = "SELECT * FROM product WHERE categoryId='$categoryId'";
		$sortCategory = mysqli_query($connF,$sql);
		
		while($rowCategory = mysqli_fetch_array($sortCategory)){
			$productId = $rowCategory['productId'];
			$productName = $rowCategory['productName'];
			$productPrice = $rowCategory['productPrice'];
			$productImg1 = $rowCategory['image1'];
			
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
}

function sortPrice(){
	if(isset($_POST['priceSort'])){
		global $connF;
		$minPrice = $_POST['minPrice'];
		$maxPrice = $_POST['maxPrice'];
		$sql = "SELECT * FROM product WHERE productPrice BETWEEN $minPrice AND $maxPrice ORDER BY productPrice ASC";
		$sortPrice = mysqli_query($connF,$sql);
		
		while($rowSortPrice = mysqli_fetch_array($sortPrice)){
			$productId = $rowSortPrice['productId'];
			$productName = $rowSortPrice['productName'];
			$productPrice = $rowSortPrice['productPrice'];
			$productImg1 = $rowSortPrice['image1'];
						
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
}


function getUserIP(){
	switch(true){
			case(!empty($_SERVER['HTTP_X_REAL_IP'])):
				return $_SERVER['HTTP_X_REAL_IP'];
			case(!empty($_SERVER['HTTP_CLIENT_IP'])):
				return $_SERVER['HTTP_CLIENT_IP'];
			case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
				return $_SERVER['HTTP_X_FORWARDED_FOR'];
			default:
				return $_SERVER['REMOTE_ADDR'];
	}
}

function addCart(){
	
	global $connF;
	if(isset($_GET['addCart'])){
		$userIP = getUserIP();
		$productIdCart = $_GET['addCart'];
		$productQty = $_POST['qty'];
		$productColor = $_POST['color'];
		$productWarrenty = $_POST['warrenty'];
		
		$cartProductsSql = "SELECT * FROM cart WHERE cartIpAddress='$userIP' AND productId ='$productIdCart'";
		
		$checkCart = mysqli_query($connF,$cartProductsSql);
		
		if(mysqli_num_rows($checkCart)>0){
			echo"<script>alert('Product already added to cart')</script>";
			echo "<script>window.open('details.php?productId=$productIdCart','_self')</script>";
				
		}else{
			$addCartSql = "INSERT INTO cart(productId,cartQty,cartColour,cartWarranty, cartIpAddress) VALUES ('$productIdCart','$productQty','$productColor','$productWarrenty','$userIP')";
			
			$addProdutCart = mysqli_query($connF,$addCartSql);
			echo "<script>window.open('details.php?productId=$productIdCart','_self')</script>";
			
		}
	}
	 
}

function countCart(){
	global $connF;
	$userIP = getUserIP();
	$countItemsSql = "SELECT * FROM cart WHERE cartIpAddress='$userIP'";
	$countItems = mysqli_query($connF,$countItemsSql);
	$count = mysqli_num_rows($countItems);
	
	echo $count;
}

function priceCart(){
	
	global $connF;
	
	$totalPrice = 0;
	$userIP = getUserIP();
	$cartItemsSql = "SELECT * FROM cart WHERE cartIpAddress='$userIP'";
	$cartItems = mysqli_query($connF,$cartItemsSql);
	
	while($row = mysqli_fetch_array($cartItems)){
		$productId = $row['productId'];
		$productQty = $row['cartQty'];
		$productWarrenty = $row['cartWarranty'];
		
		$productPriceSql = "SELECT * FROM product WHERE productId='$productId'";
		$getProductPrice = mysqli_query($connF,$productPriceSql);
		
		while($rowPrice = mysqli_fetch_array($getProductPrice)){
			$Price = $rowPrice['productPrice'] * $productQty;
			if($productWarrenty != "Software"){
				$Price += 3800; 
			}
			$totalPrice += $Price;
		}
		
	}
	
	echo " " . $totalPrice . " ";
}


function returnPriceCart(){
	
	global $connF;
	
	$totalPrice = 0;
	$userIP = getUserIP();
	$cartItemsSql = "SELECT * FROM cart WHERE cartIpAddress='$userIP'";
	$cartItems = mysqli_query($connF,$cartItemsSql);
	
	while($row = mysqli_fetch_array($cartItems)){
		$productId = $row['productId'];
		$productQty = $row['cartQty'];
		$productWarrenty = $row['cartWarranty'];
		
		$productPriceSql = "SELECT * FROM product WHERE productId='$productId'";
		$getProductPrice = mysqli_query($connF,$productPriceSql);
		
		while($rowPrice = mysqli_fetch_array($getProductPrice)){
			$Price = $rowPrice['productPrice'] * $productQty;
			if($productWarrenty != "Software"){
				$Price += 3800; 
			}
			$totalPrice += $Price;
		}
		
	}
	
	return round($totalPrice,2);
}
?>