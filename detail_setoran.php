<?php include 'template.php'; ?>
<div class="content-wrapper">
<section class="content-header">
	<h1>
		Setoran
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
		<li class="active">Setoran</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header"></div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>ID Transaksi</label>
								<input type="text" name="ID Transaksi" value="TR-0001" class="form-control" placeholder="ID Transaksi" readonly>
							</div>
							<div class="form-group">
								<label>No Rekening</label>
								<input type="text" name="No Rekening" value="20170501" class="form-control" readonly>
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="Nama" value="Ridho Aryo Bimo" class="form-control" readonly>
							</div>
							<div class="form-group">
								<label>Tempat, Tanggal Lahir</label>
								<input type="text" name="Tempat, Tanggal Lahir" value="Yogyakarta, 16-09-1998" class="form-control" readonly>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input name="tentang" value="Jalan Jangkar Bumi Yogyakarta" class="form-control" readonly>
							</div>
							<div class="form-group">
								<label>Orang Tua</label>
								<input type="text" name="Orang Tua" value="Martutik" class="form-control" readonly>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Saldo</label>
								<input type="text" name="Saldo" value="Rp. 0" class="form-control" readonly>
							</div>
								<div class="form-group">
								<label>Saldo Bulan ini</label>
								<input type="text" name="Saldo Bulan ini" value="Rp. 0" class="form-control" readonly>
							</div>
							<div class="form-group">
								<label>Jumlah Setoran</label>
								<input type="text" name="Jumlah Setoran" value="Rp. 0" class="form-control">
							</div>
								<div class="form-group">
								<label>Keterangan</label>
								<textarea type="text" name="Keterangan" class="form-control">
								</textarea>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
<?php include 'footer.php'; ?>