<?php
	include("dbConnection.php");
	session_start();

	$loggedin_user = $_SESSION['foodstuff_admin'];
	//DB Query
	$check_logged_in_user="SELECT * FROM admin WHERE email='$loggedin_user'";
	$check_logged_in_user_run_query = $conn->query($check_logged_in_user);
	$logged_in_user = $check_logged_in_user_run_query->fetch_assoc();
	$logged_in_user_mail = $logged_in_user['email'];

	if(!isset($logged_in_user_mail)){
		$conn->close();
		header('Location: ../index.php');
	}
?>