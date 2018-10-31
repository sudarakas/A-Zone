<center>
	<h3 style="text-transform: uppercase; font-weight: 700;">Change Password</h3>
	<p class="text-info">Change your password, use strong password</p>
	<hr>
</center>
<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Current Password</label>
				<input type="password" class="form-control" name="current_pass" required>
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" name="new_pass" required>
			</div>
			<div class="form-group">
				<label for="">Confirm Password</label>
				<input type="password" class="form-control" name="new_cpass" required>
			</div>
			<div class="text-center">
				<button type="submit" name="changepassword" class="btn btn-success">
					<i class="fa fa-edit"></i> Save
				</button>
			</div>
</form>
<?php
	changePassword();
?>