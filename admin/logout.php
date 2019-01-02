<?php
session_start();

if (isset($id_usersekolah))
{
	unset($_SESSION["password"]);
	unset($_SESSION["email"]);
	unset($_SESSION["id_usersekolah"]);
	unset($_SESSION["id_sekolah"]);
	session_destroy();
}
if (isset($id_dataorgtua))
{						
	unset($_SESSION["id_dataorgtua"]);
	unset($_SESSION["nama_orgtua"]);
	session_destroy();
}
echo "<script>alert('logut berhasil login');
					location.href='../index.php';
					</script>";
?>