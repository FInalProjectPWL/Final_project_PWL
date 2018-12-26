<?php 


/*$query = mysqli_query($connection,"SELECT * FROM tb_datakelas ORDER BY id_datakelas DESC");*/
$id_sekolah = $_SESSION['id_sekolah'];

?>

<div class="content-wrapper">
<section class="content-header">
  <h1>
    Data Kelas
    <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Data Kelas</li>
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
								<th>Kelas</th>
								<th>Jurusan</th>
								<th>Jumlah Siswa</th>
								
							</tr>
						</thead>
						<tbody>
				
							<tr>

							</tr>
						</tbody>
						<?php

						$no=1;
						$query = mysqli_query($connection," SELECT * FROM tb_datakelas");
						while($record= mysqli_fetch_array($query)) {
							?>

							<tr class="active">
								<td> <?php echo $no; ?></td>
								<td> <?php echo $record ['kelas']; ?></td>
								<td> <?php echo $record ['jurusan']; ?></td>
								<td> <?php echo $record ['jml_siswa'] ?></td>
								<td>

									<a href="index.php?hal=kelas/update_kelas&id=<?php echo $record ['id_datakelas'];?>" class = "fa fa-pencil"></a> |
									<a href="index.php?hal=kelas/delete_kelas&id=<?php echo $record ['id_datakelas'];?>" class = "fa fa-trash"></a> 
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
					<label>Kelas</label>
					<input type="text" name="kelas" class="form-control" placeholder="Kelas" required= "">
				</div>
				<div class="form-group">
					<label>Jurusan</label>
					<input type="text" name="jurusan" class="form-control" placeholder="Jurusan" required= "">

				</div>
				<div class="form-group">
					<label>Jumlah Siswa</label>
					<input type="number" name="jml_siswa" class="form-control" placeholder="Jumlah Siswa" required= "">
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

        $con=mysqli_query($connection, "INSERT INTO tb_datakelas (kelas, jurusan, jml_siswa,id_sekolah) VALUES ('$_POST[kelas]','$_POST[jurusan]','$_POST[jml_siswa]',$id_sekolah)");

    

        echo "<script>alert('Daftar sukses!');</script>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?hal=kelas/kelas'>";
      }
  ?>

</div>

