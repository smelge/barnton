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
					Add, edit or remove volunteer profiles
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