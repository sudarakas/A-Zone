<?php

	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
?>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle Navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		
		<a href="index.php?dashboard" class="navbar-brand">AZone - Adminstrator</a>	
	</div>
	<ul class="nav navbar-right top-nav">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				NanoLabsb <b class="caret"></b>
			</a>
			<ul class="dropdown-menu"> 
				<li>
					<a href="index.php?profile">
					<i class="fa fa-fw fa-user"></i> Profile
					</a>
				</li>
				<li>
					<a href="index.php?editprofile">
					<i class="fa fa-fw fa-wrench"></i> Edit Profile
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="index.php?viewoders">
					<i class="fa fa-fw fa-shopping-basket"></i> Orders
					<span class="badge">12</span>
					</a>
				</li>
				<li>
					<a href="index.php?viewproducts">
					<i class="fa fa-list-alt"></i> Products
					<span class="badge">32</span>
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="index.php?logout">
					<i class="fa fa-sign-out"></i> Logout
					</a>
				</li>
			</ul>
		</li>
	</ul>
	
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">

<!--			Menu Item Start-->
			<li>
				<a href="index.php?dashboard">
					<i class="fa fa-dashboard"></i> Dashboard
				</a>
			</li>
<!--			Menu Item End-->
			
<!--			Menu Item Start-->
			<li>
				<a href="#" data-toggle="collapse" data-target="#productlist">
					<i class="fa fa-navicon"></i> Products <i class="fa fa-angle-double-down"></i> 
				</a>
<!--				sub menu start-->
				<ul id="productlist" class="collapse">
					<li>
						<a href="index.php?addproducts"> Add Product</a>
					</li>
					<li>
						<a href="index.php?viewproducts"> View Products</a>
					</li>
				</ul>
			</li>	
<!--			Menu Item End-->

<!--			Menu Item Start-->
			<li>
				<a href="index.php?orderlist">
					<i class="fa fa-shopping-basket"></i> Orders
				</a>
			</li>	
<!--			Menu Item End-->

<!--			Menu Item Start-->
			<li>
				<a href="index.php?payments">
					<i class="fa fa-dollar"></i> Payments
				</a>
			</li>	
<!--			Menu Item End-->
	
<!--			Menu Item Start-->
			<li>
				<a href="index.php?customers">
					<i class="fa fa-users"></i> Customer
				</a>
			</li>	
<!--			Menu Item End-->

<!--			Menu Item Start-->
			<li>
				<a href="#" data-toggle="collapse" data-target="#categorylist">
					<i class="fa fa-plus-square"></i> Category <i class="fa fa-angle-double-down"></i> 
				</a>
<!--				sub menu start-->
				<ul id="categorylist" class="collapse">
					<li>
						<a href="index.php?addcategory"> Add Category</a>
					</li>
					<li>
						<a href="index.php?viewcategory"> View Category</a>
					</li>
				</ul>
			</li>	
<!--			Menu Item End-->

<!--			Menu Item Start-->
			<li>
				<a href="#" data-toggle="collapse" data-target="#manufacturelist">
					<i class="fa fa-university"></i> Manufacture <i class="fa fa-angle-double-down"></i> 
				</a>
<!--				sub menu start-->
				<ul id="manufacturelist" class="collapse">
					<li>
						<a href="index.php?addmanufacture"> Add Manufacture</a>
					</li>
					<li>
						<a href="index.php?viewmanufacture"> View Manufacture</a>
					</li>
				</ul>
			</li>	
<!--			Menu Item End-->

<!--			Menu Item Start-->
			<li>
				<a href="#" data-toggle="collapse" data-target="#coupons">
					<i class="fa fa-diamond"></i> Coupons <i class="fa fa-angle-double-down"></i> 
				</a>
<!--				sub menu start-->
				<ul id="coupons" class="collapse">
					<li>
						<a href="index.php?addcoupons"> Add Coupons</a>
					</li>
					<li>
						<a href="index.php?viewcoupons"> View Coupons</a>
					</li>
				</ul>
			</li>	
<!--			Menu Item End-->
	
<!--			Menu Item Start-->
			<li>
				<a href="#" data-toggle="collapse" data-target="#ads">
					<i class="fa fa-audio-description"></i> Ads <i class="fa fa-angle-double-down"></i> 
				</a>
<!--				sub menu start-->
				<ul id="ads" class="collapse">
					<li>
						<a href="index.php?addads"> Add Ad</a>
					</li>
					<li>
						<a href="index.php?viewads"> View Ads</a>
					</li>
				</ul>
			</li>	
<!--			Menu Item End-->

<!--			Menu Item Start-->
			<li>
				<a href="#" data-toggle="collapse" data-target="#slideshowbox">
					<i class="fa fa-image"></i> SlideShow <i class="fa fa-angle-double-down"></i> 
				</a>
<!--				sub menu start-->
				<ul id="slideshowbox" class="collapse">
					<li>
						<a href="index.php?addslideshow"> Add SlideShow</a>
					</li>
					<li>
						<a href="index.php?viewslideshow"> View SlideShow</a>
					</li>
				</ul>
			</li>	
<!--			Menu Item End-->
	
<!--			Menu Item Start-->
			<li>
				<a href="#" data-toggle="collapse" data-target="#adminmgt">
					<i class="fa fa-fire"></i> Admin Manager <i class="fa fa-angle-double-down"></i> 
				</a>
<!--				sub menu start-->
				<ul id="adminmgt" class="collapse">
					<li>
						<a href="index.php?addadmin"> Add Adminstrator</a>
					</li>
					<li>
						<a href="index.php?viewadmins"> View Adminstrator</a>
					</li>
				</ul>
			</li>	
<!--			Menu Item End-->

<!--			Menu Item Start-->
			<li>
				<a href="index.php?logout">
					<i class="fa fa-sign-out"></i> Logout
				</a>
			</li>	
<!--			Menu Item End-->
		</ul>
		
	</div>
</nav>
<?php } ?>