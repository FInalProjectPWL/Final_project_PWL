<?php 
$id = $_GET['id'];
$query = mysqli_query($connection,"SELECT * FROM tb_datapegawai where id_datapegawai=$id");
while($record = mysqli_fetch_array($query)){
?>

<div class="content-wrapper">
<section class="content-header">
	<h1>
		Edit Data pegawai
	</h1>
	
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header"></div>
				<div class="box-body">
				<form action="" method="post">
					<table id="example1" class="table table-striped table-bordered">
						<tr>
							<td>ID</td>
							<td><input name="id_pegawai" type="text" readonly value="<?php echo $record['id_datapegawai']?>"></td>
						</tr>
						<tr>
							<td>Nama pegawai</td>
							<td><input name="nama_pegawai" type="text" value="<?php echo $record['nama_pegawai']?>"></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td><input name="tgl_lahir" type="date" value="<?php echo $record['tgl_lahir']?>"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input name="alamat" type="text" value="<?php echo $record['alamat']?>"></td>
						</tr>
						<tr>
							<td>No. HP</td>
							<td><input type="number" name="no_hp" value="<?php echo $record['no_hp']?>"></td>
						</tr>
					</table>

				<?php } ?>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</div>
				</form>
					
				</div>
			</div>
		</div>
	</div>
</section>
</div>
<?php
if(isset($_POST['submit'])){
$query="UPDATE `tb_datapegawai` SET `nama_pegawai` =
'".$_POST['nama_pegawai']."', `tgl_lahir` = '".$_POST['tgl_lahir']."', `alamat` = '".$_POST['alamat']."', `no_hp` = '".$_POST['no_hp']."' WHERE `tb_datapegawai`.`id_datapegawai` ='".$_POST['id_pegawai']."';";

 //eksekusi query
$hasil=mysqli_query($connection, $query) or die
(mysqli_error());
 ?>

 <script>
alert("data sukses Diupdate");
window.location='index.php?hal=pegawai/pegawai';</script>
<?php
}
?>

</div>

