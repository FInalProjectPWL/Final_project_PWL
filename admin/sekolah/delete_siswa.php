<?php


 	if($_GET['id_datapegawai'] != "");
 	{
 	mysqli_query($connection,"DELETE FROM tb_datapegawai where id_datapegawai='".$_GET['id_datapegawai']."'");
 	
 }
 ?>
  <script>alert("data telah dihapus ");
window.location='index.php?hal=pegawai';</script>