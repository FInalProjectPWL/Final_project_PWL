<?php 


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
                <th>Saldo Anak</th>
                <th>Aksi</th>

              </tr>
            </thead>
            <tbody>
        
              <tr>

              </tr>
            </tbody>
            <?php

            $no=1;
            $query = mysqli_query($connection," SELECT * FROM tb_datasiswa 
              join dataorgtua on dataorgtua.id_siswa = tb_datasiswa.id_siswa
              join tb_datakelas on tb_datakelas.id_datakelas = tb_datasiswa.id_datakelas 
              join saldo on saldo.id_saldo = tb_datasiswa.id_saldo
              where tb_datasiswa.id_sekolah=$id_usersekolah");
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
                <td> <?php echo $record ['saldo'] ?></td>
                <td><a href="index.php?hal=orgtua/update_orgtua&id_dataorgtua=<?php echo $record ['id_dataorgtua']?>" class = "fa fa-pencil"></a> |
                  <a href="index.php?hal=orgtua/delete_orgtua&id_dataorgtua=<?php echo $record ['id_dataorgtua']?>" class = "fa fa-trash"></a> 
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
          <label>Nama Orang Tua</label>
          <input type="text" name="nama_orgtua" class="form-control" placeholder="Nama Orang Tua" required="">
        </div>
        <div class="form-group">
          <label>Nama Anak</label>
           <select name="siswa" class="form-control ">
                            <option value="">--pilih anak--</option>
                            <?php
                            $no = 0;
                            $query = mysqli_query($connection," SELECT * FROM tb_datasiswa where tb_datasiswa.id_sekolah=$id_usersekolah");
  
                            while ($row = mysqli_fetch_array($query)) {
                           
                            ?>
                            <option value="<?php echo $row['id_siswa']; ?>"><?php echo $row['nama_siswa'] ?></option>
                            <?php } ?>
                        </select>
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
          <input type="password" name="password" class="form-control" placeholder="Password" required="">
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
          $md5=md5($_POST['password']);
        $con=mysqli_query($connection, "INSERT INTO dataorgtua (id_siswa,nama_orgtua, alamat, telepon, username, password) VALUES ('$_POST[siswa]','$_POST[nama_orgtua]','$_POST[alamat]','$_POST[telepon]','$_POST[username]','$md5')");
        echo "<script>alert('Daftar sukses!');</script>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?hal=orgtua/dataorgtua'>";
      }
  ?>



  
</div>

