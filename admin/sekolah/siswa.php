<?php 


/*$query = mysqli_query($connection,"SELECT * FROM tb_datakelas ORDER BY id_datakelas DESC");*/

?>

<div class="content-wrapper">
<section class="content-header">
  <h1>
   Data Siswa
    <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Data Siswa</li>
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
								<th>Nama Siswa</th>
								<th>No. Induk</th>
								<th>NISN</th>
								<th>TTL</th>
								<th>No. Rek</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
				
							<tr>

							</tr>
						</tbody>
						<?php

						$no=1;
						$query = mysqli_query($connection," SELECT * FROM tb_datasiswa");
						while($record= mysqli_fetch_array($query)) {
							?>

							<tr class="active">
								<td> <?php echo $no; ?></td>
								<td> <?php echo $record ['nama_siswa']; ?></td>
								<td> <?php echo $record ['no_induk']; ?></td>
								<td> <?php echo $record ['nisn']; ?></td>
								<td> <?php echo $record ['ttl']; ?></td>
								<td> <?php echo $record ['no_rek'] ?></td>
								<td><a href="update_siswa.php?id_datasiswa=<?php echo $record ['id_datasiswa']?>" class = "fa fa-pencil"></a> |
									<a href="delete_siswa.php?id_datasiswa=<?php echo $record ['id_datasiswa']?>" class = "fa fa-trash"></a> 
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
					<label> Nama Siswa</label>
					<input type="text" name="nama_siswa" class="form-control" placeholder="Nama siswa" required= "">
				</div>
				<div class="form-group">
					<label> No. Induk</label>
					<input type="text" name="no_induk" class="form-control" placeholder="No Induk" required= "">
				</div>
				<div class="form-group">
					<label> NISN</label>
					<input type="text" name="nisn" class="form-control" placeholder="NISN" required= "">
				</div>
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required= "">
				</div>
				<div class="form-group">
					<label>No. Rekening</label>
					<input type="number" name="no_rek" class="form-control" placeholder="No. Rek" required= "">
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

        $con=mysqli_query($connection, "INSERT INTO tb_datasiswa (nama_siswa, no_induk, nisn, ttl, no_rek) VALUES ('$_POST[nama_siswa]','$_POST[no_induk]','$_POST[nisn]','$_POST[ttl]','$_POST'$_POST[no_rek]')");
        echo "<script>alert('Daftar sukses!');</script>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?hal=siswa/siswa'>";
      }
  ?>

</div>

