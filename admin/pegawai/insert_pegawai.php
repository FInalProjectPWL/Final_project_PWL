<?php
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telephone = $_POST['telephone'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$lavel= 'pegawai';
	
	$query = mysqli_query($connection,"INSERT INTO user (id, nama, alamat, telephone, username, password, level) VALUES ('$id','$nama', '$alamat', '$telephone','$username','$password', '$level')");

	header("index.php?hal=location:pegawai");
?>