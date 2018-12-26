<?php
$id = $_GET['id'];
if (isset($_GET['id'])) {
	$query=mysqli_query($connection,"DELETE FROM tb_datakelas where id_datakelas=$id");

	if ($query) {
	    echo "<script> alert('Data Berhasil dihapus'); location.href='index.php?hal=kelas/kelas' </script>";
	    exit;
	}	
}
 ?>
