<?php 
if (isset($_GET['hapus'])) {
    $queryHapus = mysqli_query($connection,"DELETE * FROM tb_datapegawai where id_datapegawai = '" . $_GET['hapus'] . "'");
    if ($queryHapus) {
        echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=pegawai/pegawai' </script>";
        exit;
    }
}
$query = mysqli_query($connection,"SELECT * FROM tb_datapegawai ORDER BY id_datapegawai DESC");
$id_datapegawai = $_SESSION['id_datapegawai'];
?>

<div class="content-wrapper">
<section class="content-header">
  <h1>
   Data Pegawai
    <a href="" data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Data Pegawai</li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header"></div>
				<div class="box-body">
					<table id="example1" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Pegawai</th>
								<th>Tanggal Lahir</th>
								<th>Alamat</th>
								<th>No. HP</th>
								<th>Aksi</th>

							</tr>
						</thead>
						<tbody>
				
							<tr>

							</tr>
						</tbody>
						<?php

						$no=1;
						$query = mysqli_query($connection," SELECT * FROM tb_datapegawai");
						while($record= mysqli_fetch_array($query)) {
							?>

							<tr class="active">
								<td> <?php echo $no; ?></td>
								<td> <?php echo $record ['nama_pegawai']; ?></td>
								<td> <?php echo $record ['tgl_lahir']; ?></td>
								<td> <?php echo $record ['alamat'] ?></td>
								<td> <?php echo $record ['no_hp'] ?></td>
								<td><a href="update_pegawai.php?id_datapegawai=<?php echo $record ['id_datapegawai']?>" class = "fa fa-pencil"></a> |
									<a href="delete_pegawai.php?id_datapegawai=<?php echo $record ['id_datapegawai']?>" class = "fa fa-trash"></a> 
								</td>
							</tr>
						

						<?php $no++; } ?>
					</table>

				</div>
			</div>
		</div>
	</div>
</section>
</div>
<form method="post">
	<div class="modal fade" id="tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Data</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label> Nama Pegawai</label>
					<input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai" required= "">
				</div>
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required= "">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" class="form-control" placeholder="Alamat" required= "">
				</div>
				<div class="form-group">
					<label>No. HP</label>
					<input type="number" name="no_hp" class="form-control" placeholder="No. HP" required= "">
				</div>
			</div>

			<div class="modal-footer">
				 <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			</div>
		</div>

	</div>
</form>
<?php 
      if (isset($_POST['submit'])) {

        $con=mysqli_query($connection, "INSERT INTO tb_datapegawai (nama_pegawai, tgl_lahir, alamat, no_hp) VALUES ('$_POST[nama_pegawai]','$_POST[tgl_lahir]','$_POST[alamat]','$_POST[no_hp]')");
        echo "<script>alert('Daftar sukses!');</script>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?hal=pegawai'>";
      }
  ?>

</div>

