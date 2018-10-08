<?php

	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header dashHead">Dashboard</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard
			</li>
		</ol>
	</div>
</div>


<div class="row">
	<div class="col-lg-4 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				 <div class="row">
				 	<div class="col-xs-3">
				 		<i class="fa fa-shopping-basket fa-3x"></i>
				 	</div>
				 	<div class="col-xs-9 text-right">
				 		<div class="txt-big">
				 			20
				 		</div>
				 		<div class="txt-sub">
				 			Orders
				 		</div>	
				 	</div>
				 </div>
			</div>
			<a href="index.php?orderlist">
				<div class="panel-footer">
					<span class="pull-left">More</span>
					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>	
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="panel panel-purple">
			<div class="panel-heading">
				 <div class="row">
				 	<div class="col-xs-3">
				 		<i class="fa fa-navicon fa-3x"></i>
				 	</div>
				 	<div class="col-xs-9 text-right">
				 		<div class="txt-big">
				 			20
				 		</div>
				 		<div class="txt-sub">
				 			Products
				 		</div>	
				 	</div>
				 </div>
			</div>
			<a href="index.php?viewproducts">
				<div class="panel-footer">
					<span class="pull-left"> More</span>
					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>	
	</div>	
	<div class="col-lg-4 col-md-6">
		<div class="panel panel-red">
			<div class="panel-heading">
				 <div class="row">
				 	<div class="col-xs-3">
				 		<i class="fa fa-dollar fa-3x"></i>
				 	</div>
				 	<div class="col-xs-9 text-right">
				 		<div class="txt-big">
				 			20
				 		</div>
				 		<div class="txt-sub">
				 			Payments
				 		</div>	
				 	</div>
				 </div>
			</div>
			<a href="index.php?payments">
				<div class="panel-footer">
					<span class="pull-left"> More</span>
					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>	
	</div>		
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-truck"></i> New Orders
				</h3>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Order No</th>
								<th>Invoice No</th>
								<th>Product ID</th>
								<th>Product Name</th>
								<th>QTY</th>
								<th>Color</th>
								<th>Warrenty</th>
								<th>Customer Email</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>656424</td>
								<td>52</td>
								<td>OnePlus 6t 64GB</td>
								<td>1</td>
								<td>Red</td>
								<td>Hardware</td>
								<td>iraj@uok.ac.lk</td>
								<td>Complete</td>
							</tr>
							<tr>
								<td>1</td>
								<td>656424</td>
								<td>52</td>
								<td>OnePlus 6t 64GB</td>
								<td>1</td>
								<td>Red</td>
								<td>Hardware</td>
								<td>iraj@uok.ac.lk</td>
								<td>Complete</td>
							</tr>
							<tr>
								<td>1</td>
								<td>656424</td>
								<td>52</td>
								<td>OnePlus 6t 64GB</td>
								<td>1</td>
								<td>Red</td>
								<td>Hardware</td>
								<td>iraj@uok.ac.lk</td>
								<td>Complete</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="text-right">
					<a href="index.php?orderlist" style="color: #000000;">
						All Orders <i class="fa fa-arrow-circle-o-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>