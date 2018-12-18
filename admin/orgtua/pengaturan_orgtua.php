<?php 
include 'template_orgtua.php';
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
    $query = mysqli_query($connection, "SELECT * FROM userorgtua a join tb_dataorgtua b on a.id_dataorgtua = b.id_dataorgtua where id_userorgtua = 1");
    while ($record = mysqli_fetch_array($query)) {
?>
        <div class="box-body">
          <form method="post">
          <div class="form-group">
                  <label>ID </label>
                   <input type="text" name="id" value="<?php echo $record['id_dataorgtua']; ?>" class="form-control" placeholder="" readonly>
              </div>
              <div class="form-group">
                  <label>Username</label>
                   <input type="text" name="username" value="<?php echo $record['username']; ?>" class="form-control" placeholder="" readonly>
              </div>
              <div class="form-group">
                  <label>No Rekening</label>
                  <input type="text" name="no_rekening" value="<?php echo $record['no_rekening']; ?>" class="form-control" placeholder="No Rekening" readonly>
              </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" value="<?php echo $record['password']; ?>" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" name="nama_siswa" value="<?php echo $record['nama_siswa']; ?>" class="form-control" placeholder="Nama Siswa" readonly>
              </div>
            <div class="form-group">
                <label>Nomer Induk</label>
                <input type="text" name="no_induk" value="<?php echo $record['no_induk']; ?>" class="form-control" placeholder="Nomer Induk" readonly>
            </div>
            <div class="form-group">
                <label>NISN</label>
                <input type="text" name="nisn" value="<?php echo $record['nisn']; ?>" class="form-control" placeholder="NISN" readonly>
            </div>
            <div class="form-group">
                <label>Nama Orang Tua</label>
                <input type="text" name="nama_orgtua" value="<?php echo $record['nama_orgtua']; ?>" class="form-control" placeholder="Nama Orangtua" readonly >
            </div>
            <div class="form-group">
                <label>Tempat dan Tanggal Lahir</label>
                <input type="text" name="ttl" value="<?php echo $record['ttl']; ?>" class="form-control" placeholder="TTL" readonly>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="alamat" ><?php echo $record['alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="telepon" value="<?php echo $record['telepon']; ?>" class="form-control" placeholder="Telephone">
              <?php } ?>
            </div>
          <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
        </div>
</form>
      </div>
    </div>
  </div>
</section>
</div>
<?php
if(isset($_POST['submit'])){
$query="UPDATE `tb_dataorgtua` SET `password` =
'".$_POST['password']."', `alamat` = '".$_POST['alamat']."', `telepon` = '".$_POST['telepon']."' WHERE
`tb_dataorgtua`.`id_dataorgtua` ='".$_POST['id']."';";

 //eksekusi query
$hasil=mysqli_query($connection, $query) or die
(mysqli_error());
 ?>s

 <script>
alert("data sukses Diupdate");
window.location='pengaturan_orgtua.php';</script>
<?php
}
?>
<?php include 'footer.php' ?>