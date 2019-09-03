<?php
include("sess_check.php");

$nama=$_POST['nama'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];

	$sql="INSERT INTO supplier(nama_spl,telp_spl,alamat_spl)VALUES('$nama','$telp','$alamat')";
	$ress = mysqli_query($conn, $sql);
	if($ress){
		echo "<script>alert('Tambah Supplier Berhasil!');</script>";
		echo "<script type='text/javascript'> document.location = 'supplier.php'; </script>";
	}else{
		echo("Error description: " . mysqli_error($conn));
		echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
		echo "<script type='text/javascript'> document.location = 'supplier_tambah.php'; </script>";
	}
?>