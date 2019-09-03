<?php
include("sess_check.php");

$nama=$_POST['nama'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];

	$sql="INSERT INTO konsumen(nama_kon,telp_kon,alamat_kon)VALUES('$nama','$telp','$alamat')";
	$ress = mysqli_query($conn, $sql);
	if($ress){
		echo "<script>alert('Tambah Konsumen Berhasil!');</script>";
		echo "<script type='text/javascript'> document.location = 'konsumen.php'; </script>";
	}else{
		echo("Error description: " . mysqli_error($conn));
		echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
		echo "<script type='text/javascript'> document.location = 'konsumen_tambah.php'; </script>";
	}
?>