<?php
	include("config.php");
		
	session_start();
		
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
			
		$myusername = mysqli_real_escape_string($conn, $_POST['username']);
		$mypassword = mysqli_real_escape_string($conn, $_POST['password']);
			
		$sql = "SELECT ID FROM myTable WHERE Username = '$myusername' AND
		Password = '$mypassword'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$active = $row['active'];
			
		$count = mysqli_num_rows($result);
			
		if($count == 1) {
			session_register("myusername");
			$_SESSION['login_user'] = $myusername;
			header("location: welcome.php");	
		}
		else
		{
			alert("failed");
		}
	}
	
	ini_set("display_errors", 1);
	ini_set("display_startup_errors", 1);
	error_reporting(E_ALL);
?>