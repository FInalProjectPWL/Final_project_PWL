<?php
require_once ("koneksi.php");

 	if($_GET['id_dataorgtua'] != "");
 	{
 	mysqli_query($connection,"DELETE FROM tb_dataorgtua where id_dataorgtua='".$_GET['id_dataorgtua']."'");
 	
 }
 ?>
  <script>alert("data telah dihapus");
window.location='dataorgtua.php';</script>