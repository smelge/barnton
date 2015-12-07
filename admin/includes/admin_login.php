<?php
	$admin_username = "";
	$admin_password = "";
	
	$input_username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
	$input_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
	
	$cookie_name = "barnton_login_verification";
	$cookie_value = "Logged in for 1hr";
	
	if (md5($input_username) == $admin_username && md5($input_password) == $admin_password){
		//password and username correct, set cookie and return to admin panel
		setcookie($cookie_name, $cookie_value, time() + (86400 / 24), "/"); // 86400 = 1 day
		header('Location: ../admin-panel.php');
	} else {
		//incorrect details, send to homepage with error
		header('Location: ../../index.php?Error=Nope');
	}
?>
