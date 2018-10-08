<div id="foot">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<h4>Menu</h4>
				<hr>
				<ul>
					<li><a href="store.php">Store</a></li>
					<li><a href="cart.php">Cart</a></li>
					<li><a href="checkout.php">My Account</a></li>
					<li><a href="contact.php">Contatct</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6">
				<h4>Manufactures</h4>
				<hr>
				<ul>
					<?php
						$sql = "SELECT * FROM manufacture LIMIT 0,5";
						$getManufacture = mysqli_query($conn,$sql);
						while($rowManufacture = mysqli_fetch_array($getManufacture)){
							$manufactureId = $rowManufacture['manufactureId'];
							$manufactureName = $rowManufacture['manName'];
							echo "<li><a href='shop.php?manufacture=$manufactureId'>$manufactureName</a></li>";
						}
					?>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6">
				<h4>Location</h4>
				<hr>
				<address>
					Kurunegala,
					New.
				</address>
				<a href="contact.php">Questions?</a>
				<hr class="hidden-md hidden-lg">
			</div>
			<div class="col-md-3 col-sm-6">
				<h4>Newssettle</h4>
				<hr>
				<p>Get latest offers and discounts</p>
				<form method="post" action="">
					<div class="input-group">
						<input type="text" class="form-control" name="email">
						<span class="input-group-btn">
							<input type="submit" value="Subscribe" class="btn btn-info ">
						</span>
					</div>
				</form>
				<hr>
				<h4>Social Media</h4>
				<p class="social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</p>
			</div>
		</div>
	</div>
</div>


<div id="cright">
	<div class="container">
		<div class="col-md-6">
			<p class="pull-left">Designed by Team No 4</p>
		</div>
		<div class="col-md-6">
			<p class="pull-right"><a href="#">A Zone - Kurunegala</a></p>
		</div>
	</div>
</div>