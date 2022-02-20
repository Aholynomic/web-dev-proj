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
		<link rel="stylesheet" type="text/css" href="styles/adminstyles.css">
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
			<p id="title">Welcome to the Admin Page</p><br><br>
			<table border="1">
				<thead>
					<tr>
						<th> ID </th>
						<th> Firstname </th>
						<th> Surname </th>
						<th> Email </th>
						<th> Gender </th>
						<th> Username </th>
						<th> Password </th>
						<th> Admin </th>
					</tr>
				</thead>
				<tbody>
					<?php
						include ("connect.php");
						$sql = "SELECT * FROM myTable ORDER BY ID ASC";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)){			
					?>
					<tr>
						<td><?php echo $row['ID'] ?></td>
						<td><?php echo $row['Firstname'] ?></td>
						<td><?php echo $row['Surname'] ?></td>
						<td><?php echo $row['EmailAddress'] ?></td>
						<td><?php echo $row['Gender'] ?></td>
						<td><?php echo $row['Username'] ?></td>
						<td><?php echo $row['Password'] ?></td>
						<td><?php echo $row['Admin'] ?></td>
					</tr>
					<?php
							}
						}
						
						mysqli_close($conn);
					?>
				</tbody>
			</table>
			<br><br>
			<button onclick="window.location.href = 'logout.php';">Logout</button>
		</div>
	</body>
</html>