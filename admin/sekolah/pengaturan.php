<?php 
include 'template.php'; 
include 'koneksi.php';

?>

<div class="content-wrapper"> 
<section class="content-header">
	<h1>
		Pengaturan
	</h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-home"></i> Home</a></li>
		<li class="active">Pengaturan</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				        <div class="box-header"></div>

	   <?php
    $query = mysqli_query($connection, "SELECT * FROM usersekolah where id_sekolah = 6");
    while ($record = mysqli_fetch_array($query)) {
?>
				
				<div class="box-body">
					<form method="post">
						<div class="form-group">
						<label>ID </label>
						<input type="text" name="id"  class="form-control" placeholder="Nama Sekolah" value="<?php echo $record['id_sekolah']; ?>">
					</div>
					<div class="form-group">
						<label>Nama Sekolah</label>
						<input type="text" name="nama_sekolah"  class="form-control" placeholder="Nama Sekolah" value="<?php echo $record['nama_sekolah']; ?>">
					</div>
					<div class="form-group">
						<label>Nama Kepala Sekolah</label>
						<input type="text" name="nama_kepsek"  class="form-control" placeholder="Nama Kepala Sekolah" value="<?php echo $record['nama_kepsek']; ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat" class="form-control" placeholder="Alamat Sekolah" > <?php echo $record['alamat']; ?></textarea>
					</div>
					<div class="form-group">
						<label>Kode Pos</label>
						<input type="text" name="kodepos"  class="form-control" placeholder="Kodepos" value="<?php echo $record['kodepos']; ?>">
					</div>
					<div class="form-group">
						<label>Telepon</label>
						<input type="text" name="telepon"  class="form-control" placeholder="Telepon" value="<?php echo $record['telepon']; ?>">
					</div>
					<div class="form-group">
						<label>Situs</label>
						<input type="text" name="situs"  class="form-control" placeholder="Situs" value="<?php echo $record['situs']; ?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email"  class="form-control" placeholder="Situs" value="<?php echo $record['email']; ?>">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="password"  class="form-control" placeholder="Situs" value="<?php echo $record['password']; ?>">
						<?php } ?>

					</div>
					<button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
				</div>
				
			</form>
		</div>
	</div>

</section>
</div>
<?php
if(isset($_POST['submit'])){
$query="UPDATE `usersekolah` SET `nama_sekolah` =
'".$_POST['nama_sekolah']."', `nama_kepsek` = '".$_POST['nama_kepsek']."', `alamat` = '".$_POST['alamat']."', `telepon` = '".$_POST['telepon']."', `situs` = '".$_POST['situs']."',`email` = '".$_POST['email']."', `password` = '".$_POST['password']."' WHERE
`usersekolah`.`id_sekolah` ='".$_POST['id']."';";

 //eksekusi query
$hasil=mysqli_query($connection, $query) or die
(mysqli_error());
 ?>s

 <script>
alert("data sukses Diupdate");
window.location='pengaturan.php';</script>
<?php
}
?>

<?php include 'footer.php'; ?>