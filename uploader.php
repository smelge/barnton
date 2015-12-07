<!DOCTYPE html>
<html lang="en">
	<?php include_once ('./includes/headsection.html');?>

	<body>
		<?php include_once ('./includes/header.php');?>
		
		<!-- ==================================================================================================== -->
		<form role="form" name="content" enctype="multipart/form-data" action="./includes/upload_script.php" method="post">
			<div class="form-group">
				<p class="help-block">Access Password</p>
				<input type="password" placeholder="password" name="password">
			</div>
			<div class="form-group">
				<select name="destination">
					<option value="root">Root Directory</option>
					<option value="css">CSS Folder</option>
					<option value="assets">Assets Folder</option>
					<option value="js">Javascript Folder</option>
					<option value="includes">Includes Folder</option>
				</select>
			</div>
			<div class="form-group">
				<input type="file" required name="file-upload">
			</div>
			<div class="form-group">
				<button type="reset" class="btn btn-danger">Reset</button>
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</form>
		<!-- ==================================================================================================== -->
		
		<?php include_once ('./includes/footer.php');?>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="./js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>