<?php
$id = $_GET['id'];
if (isset($_GET['id'])) {
	$query=mysqli_query($connection,"DELETE FROM tb_datapegawai where id_datapegawai=$id");

	if ($query) {
	    echo "<script> alert('Data Berhasil dihapus'); location.href='index.php?hal=pegawai/pegawai' </script>";
	    exit;
	}	
}
 ?>
