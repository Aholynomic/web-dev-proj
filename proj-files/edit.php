<?php
	session_start();
	
	if (!isset($_SESSION['loggedin'])) {
		header('Location: Coldplay-Login.php');
		exit();
	}
	else if ($_SESSION['priv'] == FALSE){
		header('location: home.php');
		exit();
	}
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	// REPLACE ME
	$db_servername = "";
	$db_username = "";
	$db_password = "";
	$db_name = "";
		
	$conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$Firstname = $_POST['firstname'];
	$Surname = $_POST['surname'];
	$EmailAddress = $_POST['email'];
	$Gender = $_POST['gender'];
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	$Admin = $_POST['admin'];
	
	$ID = $_POST['id'];
	
	$sql = "UPDATE myTable SET Firstname=?, Surname=?, EmailAdrress=?, Gender=?, Username=?, Password=?, Admin=? WHERE ID=?";
?>