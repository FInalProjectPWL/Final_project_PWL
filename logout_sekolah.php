<?php
session_start();
error_reporting(0);
$id_usersekolah = $_SESSION['id_usersekolah'];


	unset($_SESSION["password"]);
	unset($_SESSION["email"]);
	unset($_SESSION["id_usersekolah"]);
	unset($_SESSION["id_sekolah"]);
	session_destroy();
	  echo "<script> alert('Anda Berhasil Logout'); location.href='index.php' </script>";
        exit;


?>