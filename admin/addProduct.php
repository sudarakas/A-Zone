<?php
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Add Product - Azone Kurunegala</title>
		
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
						<i class="fa fa-dashboard"></i> Dashboard / Add Product
					</li>
				</ol>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">
							<i class="fa fa-plus"></i> Add Products
						</div>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Name</label>
								<div class="col-md-6">
									<input type="text" name="productName" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Custom Url</label>
								<div class="col-md-6">
									<input type="text" name="productUrl" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Image</label>
								<div class="col-md-6">
									<input type="file" name="productimg1" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Image</label>
								<div class="col-md-6">
									<input type="file" name="productimg2" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Image</label>
								<div class="col-md-6">
									<input type="file" name="productimg3" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Image</label>
								<div class="col-md-6">
									<input type="file" name="productimg4" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Price</label>
								<div class="col-md-6">
									<input type="text" name="productPrice" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Details</label>
								<div class="col-md-6">
									<textarea name="productDet" class="form-control" cols="19" rows="6"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Manufacture</label>
								<div class="col-md-6">
									<select name="productManuf"  class="form-control" id="">
										<option>Choose Manufacture</option>
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
										<option>Choose Category</option>
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
									<input type="text" name="productKeyword" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Features</label>
								<div class="col-md-6">
									<textarea name="productFea" class="form-control" cols="19" rows="6"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Product Availability</label>
								<div class="col-md-6">
									<select name="productAva" class="form-control" id="">
										<option> Choose Availability</option>
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
										<option>Choose Warrenty</option>
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
									<input type="submit" name="addnewproduct" value="Add Product" class="btn btn-success form-control">
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
<?php
		addNewProducts();
?>
<?php } ?>