<?php
require_once ("koneksi.php");

 	if($_GET['id_datapegawai'] != "");
 	{
 	mysqli_query($connection,"DELETE FROM tb_datapegawai where id_datapegawai='".$_GET['id_datapegawai']."'");
 	
 }
 ?>
  <script>alert("data telah dihapus ");
window.location='pegawai.php';</script>