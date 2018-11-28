<center>
	<h3 style="text-transform: uppercase; font-weight: 700;">Confirm Email</h3>
	<p class="text-info">Please confirm your email, check your inbox to get the confirmation code</p>
	<hr>
</center>
<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Confirmation Code</label>
				<input type="text" class="form-control" name="confirmcode" required>
			</div>
			<div class="text-center">
				<button type="submit" name="confirmEmail" class="btn btn-success">
					<i class="fa fa-correct"></i> Confirm
				</button>
			</div>
</form>
<?php
	confirmEmail();
?>