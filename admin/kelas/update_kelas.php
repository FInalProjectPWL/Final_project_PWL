<?php 
$id = $_GET['id'];
$query = mysqli_query($connection,"SELECT * FROM tb_datakelas where id_datakelas=$id");
while($record = mysqli_fetch_array($query)){
?>

<div class="content-wrapper">
<section class="content-header">
	<h1>
		Edit Data Kelas
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
							<td><input name="id_kelas" type="text" value="<?php echo $record['id_datakelas']?>"></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td><input name="kelas" type="text" value="<?php echo $record['kelas']?>"></td>
						</tr>
						<tr>
							<td>Jurusan</td>
							<td><input name="jurusan" type="text" value="<?php echo $record['jurusan']?>"></td>
						</tr>
						<tr>
							<td>Jumlah Siswa</td>
							<td><input name="jml_siswa" type="text" value="<?php echo $record['jml_siswa']?>"></td>
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
$query="UPDATE `tb_datakelas` SET `kelas` =
'".$_POST['kelas']."', `jurusan` = '".$_POST['jurusan']."', `jml_siswa` = '".$_POST['jml_siswa']."' WHERE `tb_datakelas`.`id_datakelas` ='".$_POST['id_kelas']."';";

 //eksekusi query
$hasil=mysqli_query($connection, $query) or die
(mysqli_error());
 ?>

 <script>
alert("data sukses Diupdate");
window.location='index.php?hal=kelas/kelas';</script>
<?php
}
?>

</div>

