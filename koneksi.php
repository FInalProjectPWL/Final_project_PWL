<?php  
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tap";

	$connection = mysqli_connect($host, $username, $password, $dbname);
	if (!$connection){
		die("Connection Failed:".mysqli_connect_error());
	}
?>