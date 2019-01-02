<?php


 	if(isset($_GET['id_siswa']))
 	{
 	mysqli_query($connection,"DELETE FROM tb_datasiswa where id_siswa='".$_GET['id_siswa']."'");
 	
 }
 ?>
  <script>alert("data telah dihapus ");
window.location='index.php?hal=siswa/siswa';</script>