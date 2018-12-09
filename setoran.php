<?php include 'template.php'; ?>
<div class="content-wrapper">
<section class="content-header">
	<h1>
		Data Setoran
		<a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
		<li class="active">Data Setoran</li>
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
								<th>Tanggal</th>
								<th>No Transaksi</th>
								<th>Siswa</th>
								<th>Debit</th>
								<th>Kredit</th>
								<th>Saldo</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a href="" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
									<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
								</td>
								<td>27-05-2018</td>
								<td>TR-0001</td>
								<td>Ridho</td>
								<td>Rp. 10.000.000</td>
								<td>Rp. 0</td>
								<td>Rp. 20.0000.000</td>
							</tr>
							<tr>
								<td>
									<a href="" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
									<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
								</td>
								<td>28-05-2018</td>
								<td>TR-0002</td>
								<td>Aryo</td>
								<td>Rp. 5.000.000</td>
								<td>Rp. 0</td>
								<td>Rp. 15.0000.000</td>
							</tr>
							<tr>
								<td>
									<a href="" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
									<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
								</td>
								<td>29-05-2018</td>
								<td>TR-0003</td>
								<td>Bimo</td>
								<td>Rp. 5.000.000</td>
								<td>Rp. 0</td>
								<td>Rp. 10.0000.000</td>
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
				<h4 class="modal-title">Masukan No Rekening</h4>
			</div>
			<form method="post" action="detail_setoran.php">
			<div class="modal-body">
				<div class="form-group">
					<label>No Rekening</label>
					<input type="text" name="id" class="form-control" placeholder="20170501">
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary pull-left">Cari</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			</div>
			</form>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>