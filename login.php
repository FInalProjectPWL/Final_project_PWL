<?php 
session_start();
require_once 'koneksi.php';
error_reporting(0);

$id_usersekolah = $_SESSION['id_usersekolah'];
if (isset($id_usersekolah))
{

	echo "<script>alert('anda sudah login');
					location.href='admin/index.php';
					</script>";
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login - Tabungan Anak Pintar</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/dist/css/Simpel.min.css">
	<link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-box-body">
			<div class="login-logo">
				<a><b>T</b>abungan Anak Pintar</a>
				<!-- <a href=""><img src="assets/dist/img/logo3.jpg"></a> -->
			</div>
			<a href=""><img src="assets/dist/img/logo3.jpg" style="width: 100%; height: 100%"></a>
			<br>
			<br>
			<p class="login-box-msg">Masukkan email dan password anda</p>
			<form method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat" name="submit" value="submit" style="width: 100%">Masuk</button>
					</div>
				</div>
			</form>
			<div class="social-auth-links text-center">
				<!-- <p>- OR -</p> -->
				<a href="http://www.facebook.com" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Masuk dengan
				Facebook</a>
				<a href="https://accounts.google.com/ServiceLogin/signinchooser?elo=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Masuk dengan
				Google+</a>
			</div>
			<a href="login_orgtua.php">Login Orangtua</a>
			<br>
			<a href="#">Lupa password? </a>
			<br> 
			<a href="register.php" class="text-center">Daftar</a>
		<?php
		if (isset($_POST["submit"]))
			{
				$email=$_POST["email"];
				$password=md5($_POST["password"]);
				$loginuser=mysqli_query($connection, "SELECT * FROM sekolah WHERE email='$email' AND password='$password'");
				$validakun=$loginuser->num_rows;
				if ($validakun==1)
				{
					$akun=$loginuser->fetch_assoc();
					$_SESSION["email"]=$akun['email'];
					$_SESSION["password"]=$akun['password'];
					$_SESSION["id_usersekolah"]=$akun['id_usersekolah'];
					$_SESSION["id_sekolah"]=$akun['id_sekolah'];

					echo "<script>alert('anda berhasil login');
					location.href='admin/index.php';
					</script>";
				}
				else
				{
				echo "<script>alert('Anda gagal login, periksa akun anda!');</script>";
				echo "<script>location='dashboard.php';</script>";
				}
			}
		?>
		</div>
	</div>
	<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/plugins/iCheck/icheck.min.js"></script>
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
      			increaseArea: '20%' // optional
      		});
		});
	</script>
</body>
</html>
<?php
}
?>