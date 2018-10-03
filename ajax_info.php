<!DOCTYPE html>
<html lang="en">


<?php

    $password = $_REQUEST["pwd"];
	    ?>
<div class="form-group">
	<div class="form-label-group">
		<input type="text" id="password" name = "password" class="form-control" value="<?php echo $password ?>">
		<label for="password">Password</label>
	</div>
</div> 
<div class="form-group">
	<div class="form-label-group">
		<input type="text" id="new_pass" name = "new_pass" class="form-control">
		<label for="new_pass">New Password</label>
	</div>
</div>
<button type="button" class="btn btn-success" name = "save">Save changes</button>
<button type="button" class="btn btn-success" name = "back" onclick="location.href='profile.php'"> Back to profile settings </button>