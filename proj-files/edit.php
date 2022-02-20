<?php
	session_start();
	
	if (!isset($_SESSION['loggedin'])){
		header('location: Coldplay-Login.php');
		exit();
	}
	else if ($_SESSION['priv'] == FALSE){
		header('location: home.php');
		exit();
	}
	
	include("connect.php");
	
	//new data
	$Firstname = $_POST['firstname'];
	$Surname = $_POST['surname'];
	$EmailAddress = $_POST['email'];
	$Gender = $_POST['gender'];
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	$Admin = $_POST['admin'];
	
	$sql = "UPDATE myTable SET Firstname=$Firstname, Surname=$Surname,
	EmailAddress=$EmailAddress, Gender=$Gender, Username=$Username, Password=$Password, Admin=$Admin WHERE ID=?";
	
	if (mysqli_query($conn, $sql)){
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
?>