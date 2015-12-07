<!DOCTYPE html>
<?php
	// Check if logged in as admin
	$admin_login = "barnton_login_verification";	
	if(!isset($_COOKIE[$admin_login])) {
		header('Location: ./login.php');
	}
?>
<html lang="en">
	<?php 
		include_once ('./includes/admin-head-stuff.php');
		require_once ('../includes/barnton_database.php'); //$barnton
		
		$unassigned_setup = mysqli_query($barnton,"SELECT * FROM barnton_images WHERE location = 0 AND state = 0");
		$old_setup = mysqli_query($barnton,"SELECT * FROM barnton_images WHERE location = 1 AND state = 0");
		$current_setup = mysqli_query($barnton,"SELECT * FROM barnton_images WHERE location = 2 AND state = 0");
		$new_setup = mysqli_query($barnton,"SELECT * FROM barnton_images WHERE location = 3 AND state = 0");
		$trash_setup = mysqli_query($barnton,"SELECT * FROM barnton_images WHERE state = 1");
	?>
	<body>
		<div class="container-fluid">
			<?php include_once ('./includes/admin-nav.php');?>
			<div class="row" style="margin-top:5px;">
				<div class="col-xs-12 content-header">
					Unassigned Images
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 content">
					<?php
						while ($unassigned = mysqli_fetch_array($unassigned_setup)){
							echo '<!-- '.$unassigned['modal'].' Modal -->';
							echo '<div class="modal fade" id="'.$unassigned['modal'].'Modal" tabindex="-1" role="dialog" aria-labelledby="'.$unassigned['modal'].'ModalLabel" aria-hidden="true">';
								echo '<div class="modal-dialog modal-lg">';
									echo '<div class="modal-content">';
										echo '<div class="modal-header">';
											echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
											echo '<h4 class="modal-title" id="'.$unassigned['modal'].'ModalLabel">'.$unassigned['alt_text'].'</h4>';
										echo '</div>';
										echo '<div class="modal-body">';
											echo "<img class='modal-img' src='../assets/gallery/".$unassigned['path']."' alt='".$unassigned['img_alt']."'/>";
											echo "<br>".$unassigned['description']."<br>";
										echo '</div>';
										echo '<div class="modal-footer">';
											echo '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';						
							
							echo '<div class="gallery-item">';
								echo '<a data-toggle="modal" data-target="#'.$unassigned['modal'].'Modal">';
									echo "<img src='../assets/gallery/".$unassigned['path']."' alt='".$unassigned['img_alt']."'/>";
								echo '</a>';
								echo '<div class="dropdown" style="margin:5px;">';
									echo '<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">';
										echo 'Options<span class="caret"></span>';
									echo '</button>';
									echo '<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">';
										echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Move to Old</a></li>';
										echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Move to Restoration</a></li>';
										echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Move to Finished</a></li>';
										echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit Description</a></li>';
										echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit Alt-Text</a></li>';
										echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>';
									echo '</ul>';
								echo '</div>';
							echo '</div>';
						}
					?>
				</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-xs-12 content-header">
					Old Images
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 content">
					Old images gallery code
				</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-xs-12 content-header">
					Restoration Images
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 content">
					Restoration images gallery code
				</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-xs-12 content-header">
					Finished Images
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 content">
					Finished images gallery code
				</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-xs-12 content-header">
					Trash
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 content">
					Stuff awaiting deletion<br>
					<ul>
						<li>options
							<ul>
								<li>Restore</li>
								<li>Delete</li>
							</ul>
						</li>
					</ul>
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