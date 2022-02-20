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
	
	if (mysqli_connect_errno()) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$stmt = $conn->prepare('SELECT Username, EmailAddress, Firstname, Surname, Gender FROM myTable WHERE ID = ?');
	$stmt->bind_param('i', $_SESSION['id']);
	$stmt->execute();
	$stmt->bind_result($Username, $EmailAddress, $Firstname, $Surname, $Gender);
	$stmt->fetch();
	$_SESSION['email'] = $EmailAddress;
	$_SESSION['username'] = $Username;
	$_SESSION['gender'] = $Gender;
	$stmt->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap 3 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- CSS file -->
		<link rel="stylesheet" type="text/css" href="styles/profile.css">
		<!-- icons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<nav class="navbar">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/index.php">Home</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-About.php">About</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Tours.php">Tours</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Music.php">Music</a></li>
					<li><a target="_blank" href="https://shop.coldplay.com/uk?ref=https%3A%2F%2Fwww.coldplay.com%2Fhomepage%2F">Store</a></li>
					<li><a target="_blank" href="https://www.coldplay.com/news/">News</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Gallery.php">Gallery</a></li>
					<li><a class="active" href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>
		
		<div class="container-fluid">
			<h1 id="title">Account details </h1>
			<br><br>
			<div class="info">
				<table>
					<tr>
						<td>First Name: </td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Last Name: </td>
						<td><?=$_SESSION['surname']?></td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td><?=$_SESSION['gender']?></td>
					</tr>
					<tr>
						<td>Email Address: </td>
						<td><?=$_SESSION['email']?></td>
					</tr>
					<tr>
						<td>Username: </td>
						<td><?=$_SESSION['username']?></td>
					</tr>
				</table>
			</div>
			<br><br>
			<div class="logout">
				<button onclick="window.location.href = 'logout.php';">Logout</button>
			</div>
		</div>
	</body>
</html>