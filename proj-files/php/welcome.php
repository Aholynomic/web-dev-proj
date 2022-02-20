<?php
	include("session.php");
	ini_set("display_errors", 1);
	ini_set("display_startup_errors", 1);
	error_reporting(E_ALL);
?>
<html>
	<head>
		<title>Welcome page</title>
	</head>
	<body>
		<h1>Welcome <?php echo $login_session; ?></h1>
		<h2><a href="logout.php">Log out</a></h2>
	</body>
</html>