<?php  
	include "koneksi.php";
	// query select
	$query = mysqli_query($connection,"SELECT * FROM user ORDER BY nama DESC");
?>
<a href="tambah_user.php">Tambah</a>
<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Telepon</th>
		<th>Email</th>
		<th>Aksi</th>
	</tr>
	<!-- query menampilkan data -->
	<?php
		$no = 1;
		while($data = mysqli_fetch_array($query)){
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data["nama"]; ?></td>
		<td><?php echo $data["telepon"]; ?></td>
		<td><?php echo $data["email"]; ?></td>
		<td>
			<a href="ubah_user.php?id_user=<?php echo $data["id_user"]; ?>">Ubah</a> |
			<a href="hapus_user.php?id_user=<?php echo $data["id_user"]; ?>">Hapus</a>
		</td>
	</tr>
	<?php $no++; } ?>
	<!-- tutup query menampilkan data -->
</table>