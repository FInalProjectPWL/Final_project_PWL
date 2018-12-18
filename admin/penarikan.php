<?php 
include 'template.php'; 
include 'koneksi.php';

$query = mysqli_query($connection,"SELECT * FROM tb_datapenarikan ORDER BY id_datapenarikan DESC");

?>

<div class="content-wrapper">
<section class="content-header">
  <h1>
   Data Penarikan
    <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Data Penarikan</li>
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
								<th>ID Transaksi</th>
								<th>Tanggal</th>
								<th>No. Transaksi</th>
								<th>Nama Siswa</th>
								<th>Debit</th>
								<th>Kredit</th>
								<th>Saldo</th>
								<th>Aksi</th>

							</tr>
						</thead>
						<tbody>
				
							<tr>

							</tr>
						</tbody>
						<?php

						$no=1;
						$query = mysqli_query($connection," SELECT * FROM tb_datapenarikan");
						while($record= mysqli_fetch_array($query)) {
							?>
						<!--?php
						$result=mysqli_query('SELECT tb_datasetoran.saldo, tb_datasetoran.debit, tb_datasetoran.kredit FROM tb_datasetoran INNER JOIN tb_datapenarikan ON tb_datapenarikan.id_datapenarikan=tb_datapenarikan.id_datapenarikan ORDER BY tb_datasetoran.id_datasetoran');
						?-->

							<tr class="active">
								<td> <?php echo $no; ?></td>
								<td> <?php echo $record ['id_datapenarikan']; ?></td>
								<td> <?php echo $record ['tanggal']; ?></td>
								<td> <?php echo $record ['no_transaksi']; ?></td>
								<td> <?php echo $record ['nama_siswa'] ?></td>
								<td> <?php echo $record ['debit'] ?></td>
								<td> <?php echo $record ['kredit'] ?></td>
								<td> <?php echo $record ['saldo']=$record ['debit'] - $record ['kredit'] ?></td>
								<td><a href="update_penarikan.php?id_datapenarikan=<?php echo $record ['id_datapenarikan']?>" class = "fa fa-pencil"></a> |
									<a href="delete_penarikan.php?id_datapenarikan=<?php echo $record ['id_datapenarikan']?>" class = "fa fa-trash"></a> 
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
					<label> Tanggal</label>
					<input type="date" name="tanggal" class="form-control" placeholder="Tanggal" required= "">
				</div>
				<div class="form-group">
					<label>No. Transaksi</label>
					<input type="number" name="no_transaksi" class="form-control" placeholder="Nomor Transaksi" required= "">
				</div>
				<div class="form-group">
					<label>Nama Siswa</label>
					<input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" required= "">
				</div>
				<div class="form-group">
					<label>Debit</label>
					<input type="text" name="debit" class="form-control" placeholder="Debit" required= "">
				</div>
				<div class="form-group">
					<label>Kredit</label>
					<input type="text" name="kredit" class="form-control" placeholder="Kredit" required= "">
				</div>
				<div class="form-group">
					<label>Saldo</label>
					<input type="text" name="saldo" class="form-control" placeholder="Saldo">
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

        $con=mysqli_query($connection, "INSERT INTO tb_datapenarikan (tanggal, no_transaksi, nama_siswa, debit, kredit, saldo) VALUES ('$_POST[tanggal]','$_POST[no_transaksi]','$_POST[nama_siswa]','$_POST[debit]','$_POST[kredit]','$_POST[saldo]')");
        echo "<script>alert('Daftar sukses!');</script>";
        echo "<meta http-equiv='refresh' content='1;url=Penarikan.php'>";
      }
  ?>

</div>

<?php include 'footer.php'; ?>