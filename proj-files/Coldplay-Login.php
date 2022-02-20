<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap 3 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- CSS file -->
	<link rel="stylesheet" type="text/css" href="">
	<!-- icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- <script>alert('test')</script> -->
<body> 
	<!-- body -->
	<?php 
		ini_set("display_errors", 1);
		ini_set("display_startup_errors", 1);
		error_reporting(E_ALL);
	?>
	<div class="wrap">
		<nav class="navbar">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a class="active" href="https://mayar.abertay.ac.uk/~1801853/coursework/index.php">Home</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-About.php">About</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Tours.php">Tours</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Music.php">Music</a></li>
					<li><a target="_blank" href="https://shop.coldplay.com/uk?ref=https%3A%2F%2Fwww.coldplay.com%2Fhomepage%2F">Store</a></li>
					<li><a target="_blank" href="https://www.coldplay.com/news/">News</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Gallery.php">Gallery</a></li>
					<li class="active"><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>
	</div>
	
	<div class="container-fluid">
		<p>* indicates a required field</p>
		<form name="login" action="<?php echo htmlspecialchars("authenticate.php");?>" method="post" />
			<br><br>
			<p>login: </p>
			<label for="username"><p><b>Username: </b></label>
			<input type="text" placeholder="Enter Username" name="username" required />* </p>
			<br><br>
			<label for="password"><p><b>Password: </b></label>
			<input type="password" placeholder="Enter Password" name="password" required />*</p>
			<br><br>
			<button type="submit">Login</button>
			<br><br>
			<button type="button"><a href="https://mayar.abertay.ac.uk/~1801853/coursework/index.php">Cancel</a></button>
		</form>
	</div>
	
	<!-- scripts -->
	
	
</body>
<footer>
	<!-- footer social media links -->
	<?php
		include "php/footer.php";
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	?>
</footer>
</html>