<?php 

require_once '../koneksi.php';
error_reporting(1);
session_start();
$id_usersekolah = $_SESSION['id_sekolah'];


$user=mysqli_query($connection, "SELECT * FROM sekolah WHERE id_sekolah='$id_usersekolah'");
$usernum=$user->num_rows;
$lihatuser_sekolah=$user->fetch_assoc();

if (empty($id_usersekolah))
{

	echo "<script>alert('anda belum login');
					location.href='../login.php';
					</script>";
}
else
{

	
?>			
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>TAP (Tabungan Anak Pintar)</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="../assets/dist/css/Simpel.min.css">
		<link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
		<link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
		<link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
		<link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
		<link rel="stylesheet" href="assests/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		<link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
		<!-- <link rel="stylesheet" type="text/css" href="../assets/bootstrap-fileupload.min.css" /> -->
	</head>
<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper">
		<header class="main-header">
			<a href="dashboard.php" class="logo">
				<span class="logo-mini"><b>TAP</b></span>
				<span class="logo-lg"><b>TAP</b></span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="../assets/dist/img/photo1.png" class="user-image" alt="User Image">
								<span class="hidden-xs"> <?php echo $lihatuser_sekolah['email']; ?></span>
							</a>
							<ul class="dropdown-menu">
			
								<li class="user-header">
									<img src="../../assets/dist/img/photo1.png" class="img-circle" alt="User Image">
									
								</li>
								<li class="user-footer">
									<div class="pull-left">
										<a href="index.php?hal=sekolah/profilesekolah" class="btn btn-primary btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="../logout_sekolah.php" class="btn btn-danger btn-flat">Keluar</a>
									</div>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="../../assets/dist/img/photo1.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p><!-- <?php echo $record['nama_sekolah']; ?> --></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MENU</li>
					<li class="active">
						<a href="index.php"><i class="fa fa-home"></i> <span>Dashbooard</span></a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-pie-chart"></i>
							<span>Data Master</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="index.php?hal=orgtua/dataorgtua"><i class="fa fa-circle-o"></i> Data Orangtua</a></li>
							<li><a href="index.php?hal=pegawai/pegawai"><i class="fa fa-circle-o"></i> Data Pegawai</a></li>
							<li><a href="index.php?hal=kelas/kelas"><i class="fa fa-circle-o"></i> Data Kelas</a></li>
							<li><a href="index.php?hal=siswa/siswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
							<li><a href="index.php?hal=sekolah/rks/rks"><i class="fa fa-line-chart"></i>Rencana Kegiatan Sekolah</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-credit-card"></i>
							<span>Transaksi</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="index.php?hal=sekolah/setoran"><i class="fa fa-circle-o"></i> Setoran Tunai</a></li>
							<li><a href="index.php?hal=sekolah/penarikan"><i class="fa fa-circle-o"></i> Penarikan Tunai</a></li>
						</ul>
					</li>
					<li>
						<a href="index.php?hal=sekolah/laporan"><i class="fa fa-print"></i> <span>Laporan</span></a>
					</li>
					<li>
						<a href="index.php?hal=sekolah/pengaturan"><i class="fa fa-cog"></i> <span>Pengaturan</span></a>
					</li>
					<li>
						<a href="../logout_sekolah.php"><i class="fa fa-sign-out"></i> <span>Keluar</span></a>
					</li>
				</ul>
			</section>
			
		</aside>

		<?php
				if (isset($_GET['hal']) && strlen($_GET['hal']) > 0) {
		    $hal = str_replace(".", "/", $_GET['hal']) . ".php";
		    } else {
		          	$hal = "dashboard.php";
		            }
		    if (file_exists($hal)) {
		            include($hal);
		    } else {
		         include("dashboard.php");
		            }
		?>
	</div>
</body>
</html>
<?php include 'footer.php'; ?>

<?php
}

?>
