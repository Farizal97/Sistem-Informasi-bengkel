<?php
	include("sess_check.php");
	
	// query database memperbarui data pada database
	if(isset($_POST['perbarui'])) {
		$id=$_POST['spl'];
		$nama=$_POST['nama'];
		$telp=$_POST['telp'];
		$alamat=$_POST['alamat'];
		$sql = "UPDATE supplier SET
				nama_spl='". $nama ."',
				telp_spl='". $telp ."',
				alamat_spl='". $alamat ."'
				WHERE id_spl='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: supplier.php?act=update&msg=success");
	}
?>