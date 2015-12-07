<!DOCTYPE html>
<html lang="en">
	<?php include_once ('./includes/admin-head-stuff.php');?>
	<body>
		<!-- ==================================================================================================== -->
		<!-- Create Login / Cookie to verify admin on entering admin section with expiry of 1hr, check on all operations -->
		<!-- ==================================================================================================== -->
		<div class="container-fluid">			
			<div class="row" style="margin-top:5px;">
				<div class="col-xs-12 content" style="text-align:center;">
					<form role="form" name="content" enctype="multipart/form-data" action="./includes/admin_login.php" method="post">
						<div class="form-group">
							<p class="help-block">Username</p>
							<input type="text" placeholder="username" name="username">
							<p class="help-block">Password</p>
							<input type="password" placeholder="password" name="password">
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