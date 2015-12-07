<?php
	//Image Upload Script	
	require_once ('../../includes/barnton_database.php'); //$barnton	
	
	$img_cat = filter_input(INPUT_POST, 'img_category', FILTER_SANITIZE_SPECIAL_CHARS);
	$img_alt = filter_input(INPUT_POST, 'imgalt', FILTER_SANITIZE_SPECIAL_CHARS);
	$img_desc = filter_input(INPUT_POST, 'imgdesc', FILTER_SANITIZE_SPECIAL_CHARS);
	
	$img_state = 0;
	
	$currentupload = ($_FILES['newimage'] ['name']);
	if ($currentupload == ''){
		echo "No valid file";
	}
	else {
		move_uploaded_file($_FILES['newimage'] ['tmp_name'], "../../assets/gallery/{$_FILES['newimage']['name']}");
		
		$modal_name_set = explode(".",$currentupload);
		$modalpath = $modal_name_set[0];
		
		$sqlpath = "INSERT INTO barnton_images (path,modal,state,location,alt_text,description) VALUES ('$currentupload','$modalpath','$img_state','$img_cat','$img_alt','$img_desc')";
		if (!mysqli_query($barnton,$sqlpath)) {
			die('Error: ' . mysqli_error($barnton));
		}
		header('Location: ../upload-image.php');
	}
?>