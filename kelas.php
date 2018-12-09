<?php include 'template.php'; ?>
<div class="content-wrapper">
<section class="content-header">
	<h1>
		Data Kelas
		<a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
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
								<th>Aksi</th>
								<th>No</th>
								<th>ID</th>
								<th>Kelas</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a href="" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
									<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
								</td>
								<td>1</td>
								<td>ID-001</td>
								<td>VII</td>
							</tr>
							<tr>
								<td>
									<a href="" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
									<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
								</td>
								<td>2</td>
								<td>ID-002</td>
								<td>VIII</td>
							</tr>
							<tr>
								<td>
									<a href="" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
									<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
								</td>
								<td>3</td>
								<td>ID-003</td>
								<td>IV</td>
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
					<label>ID Kelas</label>
					<input type="text" name="id" value="ID-004" class="form-control" placeholder="ID Kelas" readonly>
				</div>
				<div class="form-group">
					<label>Kelas</label>
					<input type="text" name="nama" class="form-control" placeholder="Kelas">
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