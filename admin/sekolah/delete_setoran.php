<?php

 	if($_GET['id_datasetoran'] != "");
 	{
 	mysqli_query($connection,"DELETE FROM tb_datasetoran where id_datasetoran ='".$_GET['id_datasetoran']."'");
 	
 }
 ?>
  <script>alert("data telah dihapus ");
window.location='index.php?hal=setoran';</script>