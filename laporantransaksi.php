<?php
 include 'template.php'; 
include 'koneksi.php';
session_start();


$query = mysqli_query($connection,"SELECT * FROM tb_laporantrans ORDER BY id_laporan_trans DESC");
?>
<div class="content-wrapper">
<section class="content-header">
	<h1>
		Data Siswa
		<a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
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
								<th>No Rekening</th>
								<th>Nama Siswa</th>
								<th>Kelas</th>
								<th> Nama Orang Tua</th>
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
						$query = mysqli_query($connection," SELECT * FROM tb_datasiswa s join tb_dataorgtua o on s.id_dataorgtua = o.id_dataorgtua");
						while($record= mysqli_fetch_array($query)) {
							?>

							<tr class="active">
								<td> <?php echo $no; ?></td>
								<td> <?php echo $record ['no_rek']; ?></td>
								<td> <?php echo $record ['nama_siswa']; ?></td>
								<td> <?php echo $record ['id_datakelas']; ?></td>
								<td> <?php echo $record ['nama_orgtua']; ?></td>
								<td> <?php echo $record ['saldo']; ?></td>
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
					<label>No Rekening</label>
					<input type="text" name="no_rek" class="form-control" placeholder="No Rekening" required= "">
				</div>
				<div class="form-group">
					<label>ID Siswa</label>
					<input type="text" name="id_siswa" class="form-control" placeholder="Nama" >
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea name="alamat" class="form-control" placeholder="Alamat" required= ""></textarea>
				</div>
				<div class="form-group">
					<label>Kelas</label>
					<select name="kelas" class="form-control">
						<option value="">Pilih</option>
						<option value="VII">VII</option>
						<option value="VIII">VIII</option>
						<option value="IX">IX</option>
					</select>
				</div>
					<div class="form-group">
					<label>ID Orang Tua</label>
					<input type="text" name="id_orgtua" class="form-control" placeholder="Nama Orang Tua" required= "">
				</div>
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input type="text" name="ttl" class="form-control" placeholder="Tempat Lahir" required= "">
				</div>
				<div class="form-group">
					<label>Saldo</label>
					<input type="text" name="saldo" class="form-control" placeholder="Rp." required= "">
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

        $con=mysqli_query($connection, "INSERT INTO tb_datasiswa.tb_datasiswa (no_rek, id_siswa, id_datakelas, id_orgtua, saldo) select id_dataorgtua from tb_dataorgtua.id_dataorgtua VALUES ('$_POST[no_rek]','$_POST[id_siswa]','$_POST[id_datakelas]','$_POST[id_orgtua]','$_POST[saldo]')");
        echo "<script>alert('Daftar sukses!');</script>";
        echo "<meta http-equiv='refresh' content='1;url=siswa.php'>";
      }
  ?>
</div>
<?php include 'footer.php'; ?>