<?php
	session_start();
	
	if(session_destroy()){
		header("location: Coldplay-Login.php");
	}
	
	ini_set("display_errors", 1);
	ini_set("display_startup_errors", 1);
	error_reporting(E_ALL);
?>