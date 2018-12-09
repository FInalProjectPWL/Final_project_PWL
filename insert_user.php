<?php
	include "koneksi.php";
	$nama = $_POST['nama'];
	$telepon = $_POST['telepon'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	
	$query = mysqli_query($connection,"INSERT INTO user (nama, telepon, email, password) VALUES ('$nama', '$telepon', '$email','$password')");

	header("location:view_user.php");
?>