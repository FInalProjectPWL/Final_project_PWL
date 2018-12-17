<?php include 'template.php'; ?>
<div class="content-wrapper">
<section class="content-header">
	<h1>
		Laporan Transaksi
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
		<li class="active">Laporan Transaksi</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header"></div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" id="datepicker1" value="<?php echo date('d/m/Y'); ?>" name="dari" class="form-control" placeholder="Periode">
							</div>
						</div>
						<div class="col-md-2 text-center">
							<div class="form-group">
								<label>Sampai</label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" id="datepicker2" value="<?php echo date('d/m/Y'); ?>" name="dari" class="form-control" placeholder="Periode">
							</div>
						</div>
						<div class="col-md-2">
							<button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
						</div>
					</div>
					<a href="" class="btn btn-info"><i class="fa fa-print"></i> Cetak Laporan</a>
					<hr>
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
<?php include 'footer.php'; ?>