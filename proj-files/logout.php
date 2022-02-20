<?php 
	session_start();
	session_destroy();
	
	header('location: Coldplay-Login.php');
?>