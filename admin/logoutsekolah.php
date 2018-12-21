<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
unset($_SESSION["id_usersekolah"]);
session_destroy();
echo "<script>alert('logut berhasil login');
					location.href='../index.php';
					</script>";
?>