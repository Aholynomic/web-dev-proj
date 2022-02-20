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
	else {
		$username = stripslashes($_POST['username']);
		$password = stripslashes($_POST['password']);
		$username = mysqli_real_escape_string($conn, $username);
		$password = mysqli_real_escape_string($conn, $password);
	}
	
	if (!empty($_POST['username']) && !empty($_POST['password'])){
		$username = trim(htmlspecialchars($username));
		$password = trim(htmlspecialchars($password));
	}
	
	if ($stmt = $conn->prepare('SELECT ID, Password, Admin, Firstname, Surname FROM myTable WHERE Username = ?')){
		$stmt->bind_param('s', $username);
		$stmt->execute();
		$stmt->store_result();
	}
	
	if ($stmt->num_rows > 0) {
		$stmt->bind_result($ID, $Password, $Admin, $Firstname, $Surname);
		$stmt->fetch();
		if (password_verify($password,$Password)){
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $Firstname;
			$_SESSION['surname'] = $Surname;
			$_SESSION['id'] = $ID;
			if ($Admin > 0){
				$_SESSION['priv'] = TRUE;
				header('location: admin.php');
			} else {
				$_SESSION['priv'] = FALSE;
				header('location: profile.php');
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