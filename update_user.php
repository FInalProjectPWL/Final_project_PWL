<?php
	include "koneksi.php";
	$id_user = $_POST['id_user'];
	$nama = $_POST['nama'];
	$no_hp = $_POST['telepon'];
	$email = $_POST['email'];
	
	$query = mysqli_query($connection,"UPDATE user SET nama='$nama', telepon='$telepon', email='$email' WHERE id_user='$id_user'");

	header("location:view_user.php");
?>