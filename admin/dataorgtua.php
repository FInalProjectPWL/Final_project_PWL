<?php 
include '../template.php'; 
include '../koneksi.php';
// session_start();

$query = mysqli_query($connection,"SELECT * FROM tb_dataorgtua ORDER BY id_dataorgtua ASC");

?>

<div class="content-wrapper">
<section class="content-header">
  <h1>
    Data Orang Tua
    <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Data Orang Tua</li>
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
                <th>Nama Orang Tua</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>

              </tr>
            </thead>
            <tbody>
        
              <tr>

              </tr>
            </tbody>
            <?php

            $no=1;
            $query = mysqli_query($connection," SELECT * FROM tb_dataorgtua");
            while($record= mysqli_fetch_array($query)) {
              ?>

              <tr class="active">
                <td> <?php echo $no; ?></td>
                <td> <?php echo $record ['nama_siswa']; ?></td>
                <td> <?php echo $record ['nama_orgtua']; ?></td>
                <td> <?php echo $record ['alamat'] ?></td>
                <td> <?php echo $record ['telepon'] ?></td>
                <td> <?php echo $record ['username'] ?></td>
                <td> <?php echo $record ['password'] ?></td>
                <td><a href="update_orgtua.php?id_dataorgtua=<?php echo $record ['id_dataorgtua']?>" class = "fa fa-pencil"></a> |
                  <a href="delete_orgtua.php?id_dataorgtua=<?php echo $record ['id_dataorgtua']?>" class = "fa fa-trash"></a> 
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
        <h4 class="modal-title">Tambah Data Orang Tua</h4>
      </div>
   <div class="modal-body">

        <div class="form-group">
          <label>Nama Siswa</label>
          <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" required="">
        </div>
        
        <div class="form-group">
          <label>Nama Orang Tua</label>
          <input type="text" name="nama_orgtua" class="form-control" placeholder="Nama Orang Tua" required="">
        </div>
          <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" class="form-control" placeholder="Alamat" required=""></textarea>
        </div>

        <div class="form-group">
          <label>No. HP</label>
          <input type="text" name="telepon" class="form-control" placeholder="No. HP" required="">
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control" placeholder="Username" required="">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" class="form-control" placeholder="Password" required="">
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

        $con=mysqli_query($connection, "INSERT INTO tb_dataorgtua ( nama_siswa, nama_orgtua, alamat, telepon, username, password) VALUES ('$_POST[nama_siswa]','$_POST[nama_orgtua]','$_POST[alamat]','$_POST[telepon]','$_POST[username]','$_POST[password]')");
        echo "<script>alert('Daftar sukses!');</script>";
        echo "<meta http-equiv='refresh' content='1;url=dataorgtua.php'>";
      }
  ?>



  
</div>

<?php include 'footer.php'; ?>