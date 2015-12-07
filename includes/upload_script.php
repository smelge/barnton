<?php
	include ('./encoded.php');
	
	$location = filter_input(INPUT_POST, 'destination', FILTER_SANITIZE_SPECIAL_CHARS);
	$input_pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
	
	$password = sha1($input_pass);
	
	if ($password != $encoded){
		echo "Wrong password. Get out.";
	} else {
		echo "Location: ".$location."<br><br>";
		
		switch ($location){
			case 'root':
				$target_path = "../";
				break;
			case 'css':
				$target_path = "../css/";
				break;
			case 'assets':
				$target_path = "../assets/";
				break;
			case 'js':
				$target_path = "../js/";
				break;
			case 'includes':
				$target_path = "../includes/";
				break;
		}

		$target_path = $target_path . basename( $_FILES['file-upload']['name']); 

		if(move_uploaded_file($_FILES['file-upload']['tmp_name'], $target_path)) {
			echo "The file ".  basename( $_FILES['file-upload']['name']). 
			" has been uploaded";
		} else{
			echo "There was an error uploading the file, please try again!";
		}
		echo "<br><br><a href='../uploader.php'>Click to go back</a><br><br>";
	}
?>