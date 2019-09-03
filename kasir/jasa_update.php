<?php
	include("sess_check.php");
	
	// query database memperbarui data pada database
	if(isset($_POST['perbarui'])) {
		$nama=$_POST['nama'];
		$harga=$_POST['harga'];
		$keterangan=$_POST['keterangan'];
		$brg=$_POST['id'];
		
		$sql = "UPDATE barangjasa SET
				nama='". $nama ."',
				harga='". $harga ."',
				keterangan='". $keterangan ."'
				WHERE id_brg='". $brg ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: jasa.php?act=update&msg=success");
}
?>