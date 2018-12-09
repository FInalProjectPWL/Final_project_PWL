<?php  
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "16110344";

	$connection = mysqli_connect($host, $username, $password, $dbname);
	if (!$connection){
		die("Connection Failed:".mysqli_connect_error());
	}
?>