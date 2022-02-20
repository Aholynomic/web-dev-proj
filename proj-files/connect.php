<?php
	session_start();
	
	if (!isset($_SESSION['loggedin'])) {
		header('Location: Coldplay-Login.php');
		exit();
	}
	
	// REPLACE ME
	$db_servername = "";
	$db_username = "";
	$db_password = "";
	$db_name = "";
		
	$conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
	
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
?>