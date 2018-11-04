<?php
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
		if(isset($_GET['editProduct'])){
			
			$productId = $_GET['editProduct'];
			$getProductsSql = "SELECT * FROM product WHERE productId='$productId'";
			$getProducts = mysqli_query($conn,$getProductsSql);
			$getProductsRow = mysqli_fetch_array($getProducts);

			$productDate = $getProductsRow['productDate'];
			$productName = $getProductsRow['productName'];
			$productCUrl = $getProductsRow['customUrl'];
			$productImage1 = $getProductsRow['image1'];
			$productImage2 = $getProductsRow['image2'];
			$productImage3 = $getProductsRow['image3'];
			$productImage4 = $getProductsRow['image4'];
			$productPrice = $getProductsRow['productPrice'];
			$productDetails = $getProductsRow['productDetails'];
			$productManufa = $getProductsRow['manufactureId'];
			$productCateg = $getProductsRow['categoryId'];
			$productKeyword = $getProductsRow['productKeywords'];
			$productFea = $getProductsRow['features'];
			$productAvail = $getProductsRow['availability'];
			$productWarrenty = $getProductsRow['Warranty'];
			
			if($productAvail==0){
			$productAvailTXT = "Coming Soon";
		}
		else if($productAvail==1){
			$productAvailTXT = "Available";
		}
		else{
			$productAvailTXT = "Out of Stock";
		}

			$getCategoryNameSql = "SELECT * FROM category WHERE categoryId='$productCateg'";
			$getCategoryName = mysqli_query($conn,$getCategoryNameSql);
			$getCategoryNameRow = mysqli_fetch_array($getCategoryName);

			$categoryName = $getCategoryNameRow['catName'];

			$getManufactureNameSql = "SELECT * FROM manufacture WHERE manufactureId='$productManufa'";
			$getManufactureName = mysqli_query($conn,$getManufactureNameSql);
			$getManufactureNameRow = mysqli_fetch_array($getManufactureName);

			$ManufactureName = $getManufactureNameRow['manName'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Edit Product - Azone Kurunegala</title>
		
		<!--Add CSS Files-->
		<link rel="stylesheet" type="text/css" href="resources/css/adminstyle.css">
		<link rel="stylesheet" href="resources/css/bootstrap.min.css">
		<link rel="stylesheet"  type="text/css" href="resources/font-awesome/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700,900" rel="stylesheet">
		<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  		<script>tinymce.init({ selector:'textarea' });</script>
		
	</head>
	<body>
		<div class="row">
			<div class="col-lg-12">
				<br>
				<br>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i> Dashboard / Edit Product
					</li>
				</ol>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">
							<i class="fa fa-plus"></i> Edit Products
						</div>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Name</label>
								<div class="col-md-6">
									<input type="text" name="productName" class="form-control" value="<?php echo $productName;?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Custom Url</label>
								<div class="col-md-6">
									<input type="text" name="productUrl" class="form-control" value="<?php echo $productCUrl;?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Image</label>
								<div class="col-md-6">
									<input type="file" name="productimg1" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Image</label>
								<div class="col-md-6">
									<input type="file" name="productimg2" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Image</label>
								<div class="col-md-6">
									<input type="file" name="productimg3" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Image</label>
								<div class="col-md-6">
									<input type="file" name="productimg4" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Price</label>
								<div class="col-md-6">
									<input type="text" name="productPrice" class="form-control" value="<?php echo $productPrice;?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Details</label>
								<div class="col-md-6">
									<textarea name="productDet" class="form-control" cols="19" rows="6"><?php echo $productDetails;?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Manufacture</label>
								<div class="col-md-6">
									<select name="productManuf"  class="form-control" id="">
										<option value="<?php echo $productManufa;?>"><?php echo $ManufactureName;?></option>
										<?php
											$sql = "SELECT * FROM manufacture";
											$getManufacture = mysqli_query($conn,$sql);
											while($rowManuf=mysqli_fetch_array($getManufacture)){
												$manufactureId = $rowManuf['manufactureId'];
												$manufactureName = $rowManuf['manName'];
												echo "<option value='$manufactureId'>$manufactureName</option>";
											}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Category </label>
								<div class="col-md-6">
									<select name="productCateg"  class="form-control "id="">
										<option value="<?php echo $productCateg;?>"><?php echo $categoryName;?></option>
										<?php
											$sql = "SELECT * FROM category";
											$getCategory = mysqli_query($conn,$sql);
											while($rowCateg=mysqli_fetch_array($getCategory)){
												$categoryId = $rowCateg['categoryId'];
												$categoryName = $rowCateg['catName'];
												echo "<option value='$categoryId'>$categoryName</option>";
											}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Keyword</label>
								<div class="col-md-6">
									<input type="text" name="productKeyword" class="form-control" value="<?php echo $productKeyword;?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Features</label>
								<div class="col-md-6">
									<textarea name="productFea" class="form-control" cols="19" rows="6"><?php echo $productFea;?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Availability</label>
								<div class="col-md-6">
									<select name="productAva" class="form-control" id="">
										<option value="<?php echo $productAvail;?>"> <?php echo $productAvailTXT?></option>
										<option value="0">Comming Soon</option>
										<option value="1">Available</option>
										<option value="2">Out of Stock</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Warrenty</label>
								<div class="col-md-6">
									<select name="productWarrenty" class="form-control" id="">
										<option value="<?php echo $productWarrenty;?>"><?php echo $productWarrenty?></option>
										<option value="0">No Warrenty</option>
										<option value="1">1 Years</option>
										<option value="2">2 Years</option>
										<option value="3">3 Years</option>
										<option value="5">5 Years</option>
										<option value="6">Lifetime Warrenty</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label"></label>
								<div class="col-md-6">
									<input type="submit" name="updateproduct" value="Add Product" class="btn btn-success form-control">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!--Add JavaScript Files-->
		<script src="resources/js/jquery.min.js"></script>
		<script src="resources/js/bootstrap.min.js"></script>
		<script src="resources/js/sweetalert.min.js"></script>
	</body>
</html>
<?php }} ?>
<?php
	updateProduct();
?>