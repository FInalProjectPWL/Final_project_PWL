
<div class="content-wrapper">
<section class="content-header">
  <h1>
    Data Rencana Kegiatan Sekolah
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
                <th>Nama Kegiatan</th>
                <th>Tempat</th>
                <th>Biaya</th>
                
              </tr>
            </thead>
            <tbody>
        
              <tr>

              </tr>
            </tbody>
            <?php

            $no=1;
            $query = mysqli_query($connection," SELECT * FROM rks where id_sekolah=$id_sekolah");
            while($record= mysqli_fetch_array($query)) {
              ?>

              <tr class="active">
                <td> <?php echo $no; ?></td>
                <td> <?php echo $record ['nama_rks']; ?></td>
                <td> <?php echo $record ['tempat']; ?></td>
                <td> <?php echo $record ['biaya'] ?></td>
                <td>

                  <a href="index.php?hal=kelas/update_kelas&id=<?php echo $record ['id_datakelas'];?>" class = "fa fa-pencil"></a> |
                  <a href="index.php?hal=kelas/delete_kelas&id=<?php echo $record ['id_datakelas'];?>" class = "fa fa-trash"></a> |
                  <a href="#" data-toggle="modal" data-target="#Bayar" class="btn btn-primary"><i class="fa fa-money"></i> Bayar</a>
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
        <h4 class="modal-title">Tambah Data Rencana Kegiatan Sekolah</h4>
      </div>
      <div class="modal-body">
      
        <div class="form-group">
          <label>Nama Kegiatan</label>
          <input type="text" name="nama_rks" class="form-control">
        </div>
        <div class="form-group">
          <label>Tempat</label>
          <input type="text" name="tempat" class="form-control" >
        </div>
        <div class="form-group">
          <label>Anggaran</label>
          <input type="text" name="biaya" class="form-control" placeholder="Rp. ">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" name="tambahrks" class="btn btn-primary pull-left">Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
</form>

<form method="post">
<div class="modal fade" id="Bayar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
          <label>No Transaksi</label>
           <?php
              $no_transaksi = (rand(2,1000));
          ?>
          <input type="text" name="no_transaksi" value="TR-<?php echo $no_transaksi; ?>" class="form-control" placeholder="No Transaksi" readonly>
        </div>
        <div class="form-group">
          <label>Nama Siswa</label>
           <select name="id_siswa" class="form-control ">
                            <option value="">--pilih siswa--</option>
                            <?php
                            $no = 0;
                            $query = mysqli_query($connection,"SELECT * FROM tb_datasiswa 
                              join sekolah on sekolah.id_sekolah = tb_datasiswa.id_sekolah 
                              join saldo on saldo.id_siswa = tb_datasiswa.id_siswa
                              where tb_datasiswa.id_sekolah = $id_sekolah
                                ORDER BY nama_siswa DESC");
  
                            while ($row = mysqli_fetch_array($query)) {
                        
                            ?>
                            <option value="<?php echo $row['id_siswa']; ?>"><?php echo $row['nama_siswa'] ?></option>
                            <?php } ?>
                        </select>
        </div>
        <div class="form-group">
          <label>Bayar</label>


          <input type="text" name="uangbayar" class="form-control" placeholder="Rp. ">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="bayar" class="btn btn-primary pull-left">Bayar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- ID Bayar -->
<?php 

  $id_rks = (rand(2,1000));

      if (isset($_POST['tambahrks'])) {

        $con=mysqli_query($connection, "INSERT INTO rks ($id_rks,nama_rks, tempat, biaya,id_sekolah) VALUES ($id_rks,'$_POST[nama_rks]','$_POST[tempat]','$_POST[biaya]',$id_sekolah)");

    

        echo "<script>alert('Daftar sukses!');</script>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?hal=sekolah/rks/rks'>";
      }
      if (isset($_POST['bayar'])) {
        $saldo=mysqli_query($connection, "SELECT * FROM saldo WHERE id_siswa=$_POST[id_siswa] ");
        $saldonum=$saldo->num_rows;
        $lihatsaldo=$saldo->fetch_assoc();

        $jumlahsaldo =  $lihatsaldo['saldo'] - $_POST[uangbayar] ;

        $queryupdatesaldo=mysqli_query($connection,"UPDATE saldo set saldo = $jumlahsaldo where id_siswa = $_POST[id_siswa] ");

        $con=mysqli_query($connection, "INSERT INTO rks_status (id_rks,id_siswa,no_transaksi,status_rks) VALUES ($id_rks,'$_POST[id_siswa]','$_POST[no_transaksi]','Sudah bayar')");
    
   
    

        echo "<script>alert('Daftar sukses!');</script>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?hal=sekolah/rks/rks'>";
      }
  ?>
