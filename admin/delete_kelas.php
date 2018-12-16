<?php
require_once ("koneksi.php");

 	if($_GET['id_datakelas'] != "");
 	{
 	mysqli_query($connection,"DELETE FROM tb_datakelas where id_datakelas='".$_GET['id_datakelas']."'");
 	
 }
 ?>
  <script>alert("data telah dihapus ");
window.location='kelas.php';</script>