<?php
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dataBaseName = "discovery_foodstuff_website";

	$conn = new mysqli($serverName, $userName, $password, $dataBaseName);
	if($conn->connect_error){
		die("Connection Error ".$conn->connect_error);
	}
?>
