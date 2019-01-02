
<?php
	 if (!empty($_FILES) && $_FILES['user_foto']['size'] > 0 && $_FILES['user_foto']['error'] == 0) {
        $random = substr(number_format(time() * rand(), 0, '', ''), 0, 10);
        $foto = $random . $_FILES['user_foto']['name'];
        $move = move_uploaded_file($_FILES['user_foto']['tmp_name'], 'assets/images/user/' . $foto);

        $queryInsert = mysql_query(
            $sql = "INSERT INTO user
                (user_foto,
                  user_name,
                  user_username,
                  user_password,
                  user_jk,
                  agama_id,
                  user_alamat,
                  jabatan_id,
                  user_gaji,
                  user_tunjangan,
                  bank_id,
                  rekening,
                  user_tanggal_lahir,
                  user_tanggal_masuk ,
                  user_level_id,
                  golongan_id,
                  user_create_date,
                  user_status,
                  user_menu)
                 VALUES ('" . $foto . "',
                 '" . $_POST['user_name'] . "',
                 '" . $_POST['user_username'] . "',
                 '" . password_hash($_POST['user_password'], PASSWORD_DEFAULT) . "',
                 '" . $_POST['user_jk'] . "',
                 '" . $_POST['agama_id'] . "',
                 '" . $_POST['user_alamat'] . "',
                 '" . $_POST['jabatan_id'] . "',
                 '" . str_replace(".", "",  $_POST['user_gaji']) . "',
                 '" . str_replace(".", "",  $_POST['user_tunjangan']) . "',
                 '" . $_POST['bank_id'] . "',
                 '" . $_POST['rekening'] . "',
                 '" . $tanggallahir . "',
                 '" . $tanggalmasuk . "',
                 '" . $_POST['user_level_id'] . "',
                 '" . $_POST['golongan_id'] . "',
                 NOW(),
                 '" . $_POST['user_status'] . "',
                 '" . $selected_akses ."')") or die(mysql_error());
    } else {
	$id = $_POST['id_siswa'];
	$nama = $_POST['nama_siswa'];
	$alamat = $_POST['no_induk'];
	$telephone = $_POST['nisn'];
	$username = $_POST['ttl'];
	$password = md5($_POST['id_bank']);
	$lavel= 'siswa';

	
	$query = mysqli_query($connection,"INSERT INTO user (id, nama, alamat, telephone, username, password, level) VALUES ('$id','$nama', '$alamat', '$telephone','$username','$password', '$level')");

	header("index.php?hal=location:siswa");
	}
?>