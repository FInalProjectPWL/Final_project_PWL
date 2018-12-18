<?php

	$id_user = $_GET['id_user'];
	
	$query = mysqli_query($connection,"DELETE FROM user WHERE id_user='$id_user'");

	header("location:view_user.php");
?>