
<!--Products Menu Start-->
<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
		<h4 class="panel-title">Manufactures</h4>
	</div>
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked category-menu">
			<?php
				getManufactures();
			?>
		</ul>
	</div>
</div>

<!--Manufactures Menu Start-->
<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
		<h4 class="panel-title">Products</h4>
	</div>
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked category-menu">
			<?php
				getCategory();
			?>
		</ul>
	</div>
</div>