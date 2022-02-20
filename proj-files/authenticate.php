<?php
	session_start();
	
	// REPLACE ME
	$db_servername = "";
	$db_username = "";
	$db_password = "";
	$db_name = "";
		
	$conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
	if (mysqli_connect_errno()){
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if (!isset($_POST['username'], $_POST['password'])){
		die ("Username and password have not been filled.");
	}
	
	if ($stmt = $conn->prepare('SELECT ID, Password, Admin FROM myTable WHERE Username = ?')){
		$stmt->bind_param('s', $_POST['username']);
		$stmt->execute();
		$stmt->store_result();
	}
	
	if ($stmt->num_rows > 0) {
		$stmt->bind_result($ID, $Password, $Admin);
		$stmt->fetch();
		if (password_verify($_POST['password'],$Password)){
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $ID;
			if ($Admin > 0){
				$_SESSION['priv'] = TRUE;
				header('location: admin.php');
			} else {
				$_SESSION['priv'] = FALSE;
				header('location: home.php');
			}
			
		}
		else {
			header('location: Coldplay-Login.php');
		}
	}
	else {
		header('location: Coldplay-Login.php');
	}
	
	$stmt->close();
?>