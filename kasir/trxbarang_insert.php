<?php
include("sess_check.php");

$id = $sess_admid;
$spl=$_POST['spl'];
$brg=$_POST['brg'];
$jml=$_POST['jml'];
$tgl=$_POST['tgl'];
$keterangan=$_POST['keterangan'];
$stok = "0";
$no = date('HisdmY');

	$sql="INSERT INTO trxbarang(id_trxbrg,tgl_trxbrg,id_brg,id_spl,jml_brg,ket_trxbrg)
		  VALUES('$no','$tgl','$brg','$spl','$jml','$keterangan')";
	$ress = mysqli_query($conn, $sql);
	if($ress){
		$sql_brg = "SELECT * FROM barangjasa WHERE id_brg='$brg'";
		$ress_brg = mysqli_query($conn, $sql_brg);
		$db = mysqli_fetch_array($ress_brg);
		$stok = $db['stok'];
		$st=$stok+$jml;
		
		$sqlbrg = "UPDATE barangjasa SET
				stok='". $st ."'
				WHERE id_brg='". $brg ."'";
		$ressbrg = mysqli_query($conn, $sqlbrg);
		
		echo "<script>alert('Tambah Barang Berhasil!');</script>";
		echo "<script type='text/javascript'> document.location = 'barang.php'; </script>";
	}else{
		echo("Error description: " . mysqli_error($conn));
		echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
		echo "<script type='text/javascript'> document.location = 'barang_tambah.php'; </script>";
	}
?>