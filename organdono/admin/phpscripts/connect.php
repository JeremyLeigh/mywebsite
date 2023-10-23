<?php
	// Set up connection credentials
	$user = "u645609075_jeremyleigh2";
	$pass = "Defaultjal1";
	$url = "localhost";
	$db = "u645609075_organDonation";

	//$link = mysqli_connect($url, $user, $pass, $db, "8889"); //Mac
	$link = mysqli_connect($url, $user, $pass, $db); //PC

	/* check connection */
	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
