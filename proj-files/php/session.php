<?php
	include("config.php");
	session_start();
	
	$user_check = $_SESSION['login_user'];
	
	$ses_sql = mysqli_query($conn, "SELECT Username FROM myTable WHERE Username = '$user_check' ");
	
	$row = mysqli_fetch_array($ses_sql, MYSQL_ASSOC);
	
	$login_session = $row['username'];
	
	if (!isset($_SESSION[])){
		window.location.href = "Coldplay-Login.php/../";
		die();
	}
	
	ini_set("display_errors", 1);
	ini_set("display_startup_errors", 1);
	error_reporting(E_ALL);
?>