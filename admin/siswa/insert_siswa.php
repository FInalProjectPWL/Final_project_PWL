<?php
	
	$id = $_POST['id_siswa'];
	$nama = $_POST['nama_siswa'];
	$alamat = $_POST['no_induk'];
	$telephone = $_POST['nisn'];
	$username = $_POST['ttl'];
	$password = md5($_POST['id_bank']);
	$lavel= 'siswa';
	
	$query = mysqli_query($connection,"INSERT INTO user (id, nama, alamat, telephone, username, password, level) VALUES ('$id','$nama', '$alamat', '$telephone','$username','$password', '$level')");

	header("index.php?hal=location:siswa");
?>