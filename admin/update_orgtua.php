<?php 
include 'template.php'; 
include 'koneksi.php';
session_start();

$query = mysqli_query($connection,"SELECT * FROM tb_dataorgtua where id_dataorgtua='".$_GET['id_dataorgtua']."' ");
while($record = mysqli_fetch_array($query)){
?>

<div class="content-wrapper">
<section class="content-header">
	<h1>
		Edit Data Orang Tua
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
							<td><input name="id" type="text" value="<?php echo $record['id_dataorgtua']?>"></td>
						</tr>
						<tr>
							<td>Nama Siswa</td>
							<td><input name="nama_siswa" type="text" value="<?php echo $record['nama_siswa']?>"></td>
						</tr>
						<tr>
							<td>Nama Orang Tua</td>
							<td><input name="nama_orgtua" type="text" value="<?php echo $record['nama_orgtua']?>"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input name="alamat" type="text" value="<?php echo $record['alamat']?>"></td>
						</tr>
						<tr>
							<td>No. HP</td>
							<td><input name="telepon" type="text" value="<?php echo $record['telepon']?>"></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input name="username" type="text" value="<?php echo $record['username']?>"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input name="password" type="text" value="<?php echo $record['password']?>"></td>
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
$query="UPDATE `tb_dataorgtua` SET `nama_siswa` =
'".$_POST['nama_siswa']."', `nama_orgtua` = '".$_POST['nama_orgtua']."', `alamat` = '".$_POST['alamat']."', `telepon` = '".$_POST['telepon']."', `username` = '".$_POST['username']."', `password` = '".$_POST['password']."' WHERE
`tb_dataorgtua`.`id_dataorgtua` ='".$_POST['id']."';";

 //eksekusi query
$hasil=mysqli_query($connection, $query) or die
(mysqli_error());
 ?>

 <script>
alert("data sukses Diupdate");
window.location='dataorgtua.php';</script>
<?php
}
?>
	
</div>

<?php include 'footer.php'; ?>