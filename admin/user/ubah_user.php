<?php  

	$id_user = $_GET['id_user'];
	// query select
	$query = mysqli_query($connection,"SELECT * FROM user WHERE id_user='$id_user'");
?>
<?php
	while($data = mysqli_fetch_array($query)){
?>
<form method="post" action="update_user.php">
	<input type="hidden" name="id_user" value="<?php echo $data["id_user"]; ?>">
	<input type="text" name="nama" value="<?php echo $data["nama"]; ?>" placeholder="Isikan Nama" required><br>
	<input type="text" name="telepon" value="<?php echo $data["telepon"]; ?>" placeholder="Isikan No Hp" required><br>
	<input type="email" name="email" placeholder="Isikan Email" value="<?php echo $data["email"]; ?>" required><br>
	<button type="submit">Simpan</button>
	<button type="reset">Reset</button>
</form>
<?php } ?>