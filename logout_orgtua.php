<?php
session_start();
error_reporting(0);

$id_dataorgtua = $_SESSION['id_dataorgtua'];

					
	unset($_SESSION["id_dataorgtua"]);
	unset($_SESSION["nama_orgtua"]);
	session_destroy();
	echo "<script> alert('Anda Berhasil Logout'); location.href='index.php' </script>";
        exit;

?>