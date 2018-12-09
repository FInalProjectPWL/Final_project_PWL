<?php include 'template.php'; ?>
<div class="content-wrapper">
<section class="content-header">
	<h1>
		Data Siswa
		<a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
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
								<th>Aksi</th>
								<th>No</th>
								<th>ID</th>
								<th>No Rekening</th>
								<th>Nama</th>
								<th>Kelas</th>
								<th>Orang Tua</th>
								<th>Saldo</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a href="" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
									<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
								</td>
								<td>1</td>
								<td>ID-0001</td>
								<td>20180501</td>
								<td>Ridho</td>
								<td>VII</td>
								<td>Martutik</td>
								<td>Rp. 20.0000.000</td>
							</tr>
							<tr>
								<td>
									<a href="" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
									<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
								</td>
								<td>2</td>
								<td>ID-0002</td>
								<td>20180502</td>
								<td>Aryo</td>
								<td>VIII</td>
								<td>Agus</td>
								<td>Rp. 10.0000.000</td>
							</tr>
							<tr>
								<td>
									<a href="" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
									<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
								</td>
								<td>3</td>
								<td>ID-0003</td>
								<td>20180503</td>
								<td>Bimo</td>
								<td>IV</td>
								<td>Budiono</td>
								<td>Rp. 20.0000.000</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
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
					<label>ID Siswa</label>
					<input type="text" name="id" value="ID-004" class="form-control" placeholder="ID Siswa" readonly>
				</div>
				<div class="form-group">
					<label>No Rekening</label>
					<input type="text" name="No Rekening" value="20180501" class="form-control" placeholder="No Rekening" readonly>
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" class="form-control" placeholder="Nama">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
				</div>
				<div class="form-group">
					<label>Kelas</label>
					<select name="kelas" class="form-control">
						<option value="">Pilih</option>
						<option value="VII">VII</option>
						<option value="VIII">VIII</option>
						<option value="IX">IX</option>
					</select>
				</div>
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input type="text" name="telephone" class="form-control" placeholder="Yogyakarta">
				</div>
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input id="datepicker1" type="text" name="Tanggal Lahir" class="form-control" placeholder="16-09-1998">
				</div>
				<div class="form-group">
					<label>Nama Orang Tua</label>
					<input type="text" name="Password" class="form-control" placeholder="Martutik">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary pull-left">Simpan</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>