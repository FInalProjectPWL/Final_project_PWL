<?php 
include 'template.php'; 
include 'koneksi.php';

$query = mysqli_query($connection,"SELECT * FROM user_sekolah");

?>



<div class="content-wrapper">
<section class="content-header">
  <h1>
    Profile
  </h1>
  <ol class="breadcrumb">
    <li><a href="dashboard.html"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Profile</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
       <div class="box">
        <div class="box-header"></div>
        <div class="box-body">
          <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
            	 <?php
    $query = mysqli_query($connection, "SELECT * FROM usersekolah where id_sekolah = 6");
    while ($record = mysqli_fetch_array($query)) {
?>
                <div class="card">
                     <div class="card-body">
                        <center class="m-t-30"> <img src="dist/img/SMA3Y.jpg" class="img-circle" width="150">
                            <h4 class="card-title m-t-10"><?php echo $record['nama_sekolah']; ?> </h4>
                               
                        </center>
                     </div>
                <div>
                  <hr> 
                </div>

                <div class="card-body"> 
                	<table>
                		<tr>
                			<td> <small class="text-muted p-t-30 db">Email</small> </td>
                		</tr>
                		<tr>
                			  <td> <?php echo $record['email']; ?> </td>
                		</tr>
                		<tr>
                			<td> <small class="text-muted p-t-30 db">Telepon</small> </td>
                		</tr>
                		<tr>
                			<td> <?php echo $record['telepon']; ?> </td>
                		</tr>
                		<tr>
                			<td> <small class="text-muted p-t-30 db">Alamat</small> </td>
                		</tr>
                		<tr>
                			<td> <?php echo $record['alamat']; ?> </td> </br>
                		</tr> 
                				</tr>
                		<tr>
                			<td> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                     		 </td>
                		</tr>
                		<tr>
                			<td> <small class="text-muted p-t-30 db">Social Profile</small>
                      <br>
                      <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                      <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                      <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                			</td>
                			<tr>

                			</tr>
                			<br>
                	
                	</table>            
                </div>
                </div>      
            </div>

            <div class="col-lg-8 col-xlg-9 col-md-7">
              <div class="card">
                <div class="card-body"> 
                	<table>
               		  <td><a href="pengaturan.php?id_sekolah=<?php echo $record ['id_sekolah']?>" class = "fa fa-pencil"></a> EDIT </td>

                		<tr>
                			<td><small class="text-muted p-t-30 db">Kode pos</small></td>
                		</tr>
                		<tr>
                			<td> <?php echo $record['kodepos']; ?> </td> </td>
                		</tr>
                		<tr>
                			<td><small class="text-muted p-t-30 db">Nama Kepala Sekolah</small></td>
                		</tr>
                		<tr>
                			<td><?php echo $record['nama_kepsek']; ?></td>
                		</tr>
                		<tr>
                			<td><small class="text-muted p-t-30 db">Situs</small></td>
                		</tr>
                		<tr>
                			<td><?php echo $record['situs']; ?></td>
                		</tr>


                	</table>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>Rp. 33.500.000</h3>
                  <p>Total Saldo</p>
                </div>
                <div class="icon">
                  <i class="fa fa-credit-card"></i>
                </div>
                <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-46 col-xs-6">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Rp. 3.500.000</h3>
                  <p>Saldo Hari Ini</p>
                </div>
                <div class="icon">
                  <i class="fa fa-credit-card"></i>
                </div>
                <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-6 col-xs-6">
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>Rp. 25.000.000</h3>
                  <p>Saldo Bulan Ini</p>
                </div>
                <div class="icon">
                  <i class="fa fa-credit-card"></i>
                </div>
                <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            
                    
              

          </div>
        </div>
      </div>
    </div>
</section>
<?php } ?>
</div>


<?php include 'footer.php'; ?>