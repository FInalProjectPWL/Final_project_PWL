<?php 


/*$query = mysqli_query($connection,"SELECT * FROM tb_datakelas ORDER BY id_datakelas DESC");*/
$id_sekolah = $_SESSION['id_sekolah'];

?>

<div class="content-wrapper">
<section class="content-header">
  <h1>
   Data Siswa
    <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
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
								<th>Foto</th>
								<th>No</th>
								<th>Nama Siswa</th>
								<th>No. Induk</th>
								<th>NISN</th>
								<th>TTL</th>
								<th>Kelas</th>
								<th>No. Rek</th>
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
						$query = mysqli_query($connection," SELECT * FROM tb_datasiswa 
							join tb_datakelas on tb_datakelas.id_datakelas = tb_datasiswa.id_datakelas 
							join saldo on saldo.id_saldo = tb_datasiswa.id_saldo
							where tb_datasiswa.id_sekolah=$id_sekolah order by tb_datasiswa.nama_siswa asc
							");
						while($record= mysqli_fetch_array($query)) {
							?>

							<tr class="active">
								<td width="25px">
                                        <img src="../assets/images/user/<?php
                                        if(!empty($record['foto'])) {
                                            echo $record['foto'];
                                        }else{
                                            echo "no-images.png";
                                        }
                                        ?>" width="100px">
                                </td>
								<td> <?php echo $no; ?></td>
								<td> <?php echo $record ['nama_siswa']; ?></td>
								<td> <?php echo $record ['no_induk']; ?></td>
								<td> <?php echo $record ['nisn']; ?></td>
								<td> <?php echo $record ['ttl']; ?></td>
								<td> <?php echo $record ['kelas']; ?></td>
								<td> <?php echo $record ['no_rek'] ?></td>
								<td> <?php echo $record ['saldo'] ?></td>
								<td><a href="index.php?hal=siswa/update_siswa&id_siswa=<?php echo $record ['id_siswa']?>" class = "fa fa-pencil"></a> |
									<a href="index.php?hal=siswa/delete_siswa&id_siswa=<?php echo $record ['id_siswa']?>" class = "fa fa-trash"></a> 
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
<form method="post" enctype="multipart/form-data">
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
                    <label for="cname" class="control-label col-lg-2" >Foto</label>
                    
                        <div class="fileupload fileupload-new" data-provides="fileupload"><input
                                                  type="hidden">
	                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
	                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
	                                                   alt="">
	                        </div>
	                        <div class="fileupload-preview fileupload-exists thumbnail"
	                                               style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
	                        <div>
	                            <span class="btn btn-default btn-file">
		                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
		                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
		                            <input type="file" name="user_foto" accept="image/*" class="default">
	                            </span>
	                            <a href="#" class="btn btn-danger fileupload-exists"
	                                                 data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
	                        </div>
                         </div>
                   
                </div>
              
				<div class="form-group">
					<label> Nama Siswa</label>
					<input type="text" name="nama_siswa" class="form-control" placeholder="Nama siswa" required= "">
				</div>
				<div class="form-group">
					<label> No. Induk</label>
					<input type="text" name="no_induk" class="form-control" placeholder="No Induk" required= "">
				</div>
				<div class="form-group">
					<label> NISN</label>
					<input type="text" name="nisn" class="form-control" placeholder="NISN" required= "">
				</div>
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required= "">
				</div>
				<div class="form-group">
					<label>No. Rekening</label>
					<input type="number" name="no_rek" class="form-control" placeholder="No. Rek" required= "">
				</div>
				<div class="form-group">
					<label>Kelas</label>
					 <select name="kelas" class="form-control ">
                            <option value="">--pilih kelas--</option>
                            <?php
                            $no = 0;
                            $query = mysqli_query($connection," SELECT * FROM tb_datakelas where tb_datakelas.id_sekolah=$id_sekolah");
  
                            while ($row = mysqli_fetch_array($query)) {
                           
                            ?>
                            <option value="<?php echo $row['id_datakelas']; ?>"><?php echo $row['kelas'] ?></option>
                            <?php } ?>
                        </select>
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

	$id_saldo = (rand(2,1000));
	$id_siswa = (rand(2,1000));

      if (isset($_POST['submit'])) {

	    if (!empty($_FILES) && $_FILES['user_foto']['size'] > 0 && $_FILES['user_foto']['error'] == 0) {
	        $random = substr(number_format(time() * rand(), 0, '', ''), 0, 10);
	        $foto = $random . $_FILES['user_foto']['name'];
	        $move = move_uploaded_file($_FILES['user_foto']['tmp_name'], '../assets/images/user/' . $foto);

	        $con = mysqli_query($connection,
	            "INSERT INTO tb_datasiswa
	                (id_siswa,
		        	  nama_siswa,
		        	  no_induk, 
		        	  nisn, ttl,
		        	  no_rek,
		        	  id_datakelas,
		        	  id_saldo,
		        	  id_sekolah,
		        	  foto)
	                 VALUES ($id_siswa,
			        	'$_POST[nama_siswa]',
			        	'$_POST[no_induk]',
			        	'$_POST[nisn]',
			        	'$_POST[tgl_lahir]',
			        	'$_POST[no_rek]',
			        	'$_POST[kelas]',
			        	 $id_saldo,
			        	 $id_sekolah,
	                 	'" . $foto . "')") ;
	        
	        $con2=mysqli_query($connection, "INSERT INTO saldo (id_saldo, saldo, id_siswa) VALUES ($id_saldo,0,$id_siswa)");
	    } else {

	        $con=mysqli_query($connection, 
	        	"INSERT INTO tb_datasiswa 
	        	(id_siswa,
	        	 nama_siswa,
	        	 no_induk, 
	        	 nisn, ttl,
	        	 no_rek,
	        	 id_datakelas,
	        	 id_saldo,
	        	 id_sekolah) 
	        	VALUES ($id_siswa,
		        	'$_POST[nama_siswa]',
		        	'$_POST[no_induk]',
		        	'$_POST[nisn]',
		        	'$_POST[tgl_lahir]',
		        	'$_POST[no_rek]',
		        	'$_POST[kelas]',
		        	 $id_saldo,
		        	 $id_sekolah)");

	        
	        $con2=mysqli_query($connection, "INSERT INTO saldo (id_saldo, saldo, id_siswa) VALUES ($id_saldo,0,$id_siswa)");

    	}
        echo "<script>alert('Daftar sukses!');</script>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?hal=siswa/siswa'>";
      }
  ?>

