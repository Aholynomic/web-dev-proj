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
	$sql = "SELECT * FROM myTable ORDER BY ID ASC";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)){ 
?>
<form action="<?php echo htmlspecialchars("https://mayar.abertay.ac.uk/~1801853/coursework/edit.php");?>" method="POST">
	<p>ID: </p><br>
	<input type="text" name="id" value="<?php echo $row['ID']; ?>" />
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