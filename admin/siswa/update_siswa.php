<?php 

$id=$_GET['id_siswa'];
$query = mysqli_query($connection,"SELECT * FROM tb_datasiswa 
							join tb_datakelas on tb_datakelas.id_datakelas = tb_datasiswa.id_datakelas 
							join saldo on saldo.id_saldo = tb_datasiswa.id_saldo
							where tb_datasiswa.id_siswa = $id ");

	$record = mysqli_fetch_array($query);
?>

<div class="content-wrapper">
<section class="content-header">
	<h1>
		Edit Data Siswa
	</h1>
	
</section>
<section class="content">
	<form method="post" enctype="multipart/form-data">

	<div class="row">
		<div class="col-xs-12">
			<div class="modal-body">
				
                    
                 <div class="form-group ">
                    <label for="cname" class="control-label">Foto</label>
                  
                        <img src="../assets/images/user/<?php echo $record['foto']; ?>" width="20%">
                        <input class=" form-control" id="cname" name="user_foto" type="file"
                               value="<?php echo $record['foto']; ?>"/>
                </div>
             
                   
               
              
				<div class="form-group">
					<label> Nama Siswa</label>
					<input type="text" name="nama_siswa" class="form-control" placeholder="Nama siswa" required= "" value="<?php echo $record['nama_siswa'] ?>"/>
				</div>
				<div class="form-group">
					<label> No. Induk</label>
					<input type="text" name="no_induk" class="form-control" placeholder="No Induk" required= "" value="<?php echo $record['no_induk'] ?>">
				</div>
				<div class="form-group">
					<label> NISN</label>
					<input type="text" name="nisn" class="form-control" placeholder="NISN" required= "" value="<?php echo $record['nisn'] ?>">
				</div>
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required= "" value="<?php echo $record['ttl'] ?>">
				</div>
				<div class="form-group">
					<label>No. Rekening</label>
					<input type="number" name="no_rek" class="form-control" placeholder="No. Rek" required= "" value="<?php echo $record['no_rek'] ?>">
				</div>
				<div class="form-group">
					<label>Kelas</label>
					 <select name="kelas" class="form-control ">
                            <option value="<?php echo $record['id_datakelas'] ?>"><?php echo $record['kelas'] ?></option>
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
</section>
</div>
<?php
if(isset($_POST['submit'])){

	if (!empty($_FILES) && $_FILES['user_foto']['size'] > 0 && $_FILES['user_foto']['error']==0) {
	        $random = substr(number_format(time()*rand(),0,'',''),0, 10);
	        $foto = $random. $_FILES['user_foto']['name'];
	        $move = move_uploaded_file($_FILES['user_foto']['tmp_name'], '../assets/images/user/'.$foto);
	        if ($move) {
	            $queryUpdate = mysqli_query($connection,"UPDATE tb_datasiswa SET 
	            								
                                           		nama_siswa			= '". $_POST['nama_siswa']."',
                                            	no_induk			= '". $_POST['no_induk']."', 
                                            	nisn				= '". $_POST['nisn']."', 
                                            	ttl 				= '". $_POST['tgl_lahir']."',
	                                            no_rek 				= '". $_POST['no_rek']."',
	                                            id_datakelas 		= '". $_POST['kelas']."',
	                                            foto 				= '". $foto."'
	                                            
	                                            

	                                            where id_siswa = '". $id."'
	                                            ") or die(mysql_error());
	            $file = "../assets/images/user" .$record['foto'];
	            unlink($file);
	        }
	    }else{
	        $queryUpdate = mysqli_query($connection,"UPDATE tb_datasiswa SET 
	            								
                                           		nama_siswa			= '". $_POST['nama_siswa']."',
                                            	no_induk			= '". $_POST['no_induk']."', 
                                            	nisn				= '". $_POST['nisn']."', 
                                            	ttl 				= '". $_POST['tgl_lahir']."',
	                                            no_rek 				= '". $_POST['no_rek']."',
	                                            id_datakelas 		= '". $_POST['kelas']."',
	                                     
	                                            
	                                            

	                                            where id_siswa = '". $id."'
	                                            ") or die(mysql_error());
	    }
	    
 ?>

 <script>
alert("data sukses Diupdate");
window.location='index.php?hal=siswa/siswa';</script>
<?php
}
?>

</div>

