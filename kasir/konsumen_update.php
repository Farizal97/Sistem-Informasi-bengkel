<?php
	include("sess_check.php");
	
	// query database memperbarui data pada database
	if(isset($_POST['perbarui'])) {
		$id=$_POST['kon'];
		$nama=$_POST['nama'];
		$telp=$_POST['telp'];
		$alamat=$_POST['alamat'];
		$sql = "UPDATE konsumen SET
				nama_kon='". $nama ."',
				telp_kon='". $telp ."',
				alamat_kon='". $alamat ."'
				WHERE id_kon='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: konsumen.php?act=update&msg=success");
	}
?>