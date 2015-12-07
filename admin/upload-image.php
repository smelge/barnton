<!DOCTYPE html>
<?php
	// Check if logged in as admin
	$admin_login = "barnton_login_verification";	
	if(!isset($_COOKIE[$admin_login])) {
		header('Location: ./login.php');
	}
?>
<html lang="en">
	<?php include_once ('./includes/admin-head-stuff.php');?>
	<body>
		<div class="container-fluid">
			<?php include_once ('./includes/admin-nav.php');?>
			<div class="row" style="margin-top:5px;">
				<div class="col-xs-12 content">
					Image Uploader<br><br>
					<form role="form" name="img_upload" enctype="multipart/form-data" action="./includes/img_upload.php" method="post">
						<div class="form-group">
							<input type="file" style="float:left;" name="newimage"><br>
						</div>						
						<div class="form-group">				
							Select a Location:   
							<select name="img_category">
								<option value="0">Uncategorised</option>
								<option value="1">Old</option>
								<option value="2">Refurbishment</option>
								<option value="3">Finished</option>
							</select>
						</div>
						<div class="form-group">	
							<input type="text" class="form-control" maxlength="100" required name="imgalt" placeholder="Alt-text (100 characters max)">
							<textarea class="form-control" name="imgdesc" placeholder="Description for image (Not Required)"></textarea>
						</div>
						<div class="form-group">							
							<button type="submit" class="btn btn-success">Submit</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- ==================================================================================================== -->
		<?php include_once ('../includes/footer.php');?>	
		<!-- Bootstrap core JavaScript
		================================================== -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>