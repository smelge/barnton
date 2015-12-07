<?php
	$admin_username = "1a6ff07ec8680a37cb0757d2af8adf4d";
	$admin_password = "5ec293ac4711f9f03f71d9862d56e3ca";
	
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