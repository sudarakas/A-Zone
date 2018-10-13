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
		$sql = "SELECT * FROM manufacture";
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
?>