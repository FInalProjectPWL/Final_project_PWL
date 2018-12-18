<?php include 'template_orgtua.php' ?>
<!-- ISI DASHBOARD -->

<div class="content-wrapper">
<section class="content-header">
  <h1>
    Rencana Kegiatan Sekolah
    <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
  </h1>
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Rencana Kegiatan sekolah</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header"></div>
        <div class="box-body">
          <div class="col-sm-6">
            <div class="dataTables_length" id="example1_length">
              <label>
                
                <div>
                  <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select></label>
                </div></div>
                <br>
              </div>
          <table id="example1" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Kegiatan</th>
                <th>Tempat Kegiatan</th>
                <th>Anggaran</th>
                <th>Pembayaran</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>17 Agustus 2018</td>
                <td><a href="Detailpembayaran.html">Lomba 17an</a></p></td>
                <td>Lapangan Sekolah</td>
                <td>Rp. 100.000</td>
                <td><a href="#" data-toggle="modal" data-target="#Bayar" class="btn btn-primary"><i class="fa fa-money"></i> Bayar</a></td>
                
                
            
      
              </tr>
              <tr>

                <td>2</td>
                <td>20 Desember 2018</td>
                <td><a href="Detailpembayaran.html">Study Tour</a></p></td>
                <td>Universitas Amikom</td>
                <td>Rp. 200.000</td>
                <td><a href="#" data-toggle="modal" data-target="#Bayar" class="btn btn-primary"><i class="fa fa-money"></i> Bayar</a></td>


              </tr>
              <tr>
                <td>3</td>
                <td>20 Juni 2019</td>
                <td><a href="Detailpembayaran.html">Perpisahan</a></p></td>
                <td>Grand Pacific Hall</td>
                <td>Rp. 300.000</td>
                <td><a href="#" data-toggle="modal" data-target="#Bayar" class="btn btn-primary"><i class="fa fa-money"></i> Bayar</a></td>
                


              </tr>
              <tr>
            </tbody>
          </table>

          <div class="col-sm-12" align="right">
            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
              <ul class="pagination">
                <li class="paginate_button previous disabled" id="example1_previous">
                  <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
                </li>
                <li class="paginate_button active">
                  <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                </li>
                <li class="paginate_button next disabled" id="example1_next">
                  <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">Next</a>
                </li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<!-- ID tambah -->
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
          <label>Tanggal</label>
          <input type="text" name="nama" class="form-control" placeholder="17/08/2018">
        </div>
        <div class="form-group">
          <label>Nama Kegiatan</label>
          <input type="text" name="nama" class="form-control" placeholder="Study Tour">
        </div>
        <div class="form-group">
          <label>Tempat</label>
          <input type="text" name="nama" class="form-control" placeholder="Gedung">
        </div>
        <div class="form-group">
          <label>Anggaran</label>
          <input type="text" name="nama" class="form-control" placeholder="Rp. ">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary pull-left">Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
<!-- ID Tambah -->

<!-- ID Bayar -->
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
          <label>ID</label>
          <input type="text" name="id" value="ID-011" class="form-control" placeholder="ID" readonly>
        </div>
        <div class="form-group">
          <label>No Transaksi</label>
          <input type="text" name="No Transaksi" value="TR-001" class="form-control" placeholder="No Transaksi" readonly>
        </div>
        <div class="form-group">
          <label>Nama Siswa</label>
          <input type="text" name="nama" class="form-control" placeholder="Nama">
        </div>
        
        <div class="form-group">
          <label>Kelas</label>
          <input type="text" name="Kelas" class="form-control" placeholder="IX">
        </div>
          <div class="form-group">
          <label>Biaya</label>
          <input type="text" name="Biaya" class="form-control" placeholder="Rp. 0"><br>
          <input type="checkbox" name="vehicle" value="Car" checked> Setuju
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary pull-left">Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
<!-- ID Bayar -->

<!-- ISI DASHBOARD -->
<?php include 'footer.php' ?>