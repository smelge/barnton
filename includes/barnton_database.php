<?php
	$hostname = "";
	$username = "";
	$password = "";

	$barnton = mysqli_connect($hostname, $username, $password);
	mysqli_select_db($barnton, "allerein_barnton") or die ("Could not connect to Images Server");
?>
