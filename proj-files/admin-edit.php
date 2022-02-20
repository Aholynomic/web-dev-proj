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
	$sql = "SELECT * FROM myTable ORDER BY ID DESC";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)){ 
?>
<form action="edit.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $ID; ?>" />
	<p>First name: </p><br>
	<input type="text" name="firstname" value="<?php echo $row['Firstname']; ?>" />
	<p>Surname: </p><br>
	<input type="text" name="surname" value="<?php echo $row['Surname']; ?>" />
	<p>Email: </p><br>
	<input type="text" name="email" value="<?php echo $row['EmailAddress']; ?>" />
	<p>Gender: </p><br>
	<input type="text" name="gender" value="<?php echo $row['Gender']; ?>" />
	<p>Username: </p><br>
	<input type="text" name="username" value="<?php echo $row['Username']; ?>" />
	<p>Password: </p><br>
	<input type="text" name="password" value="<?php echo $row['Password']; ?>" />
	<p>Admin: </p><br>
	<input type="text" name="admin" value="<?php echo $row['Admin']; ?>" /><br><br>
	<input type="submit" value="Save" />
</form>
<?php 
		}
	}
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
?>