<?php
include("sess_check.php");

$id = $sess_admid;
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$keterangan=$_POST['keterangan'];
$jns = "barang";
$stok = "0";

	$sql="INSERT INTO barangjasa(nama,jenis,stok,harga,keterangan,id_adm)
		  VALUES('$nama','$jns','$stok','$harga','$keterangan','$id')";
	$ress = mysqli_query($conn, $sql);
	if($ress){
		echo "<script>alert('Tambah Barang Berhasil!');</script>";
		echo "<script type='text/javascript'> document.location = 'barang.php'; </script>";
	}else{
		echo("Error description: " . mysqli_error($conn));
		echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
		echo "<script type='text/javascript'> document.location = 'barang_tambah.php'; </script>";
	}
?>