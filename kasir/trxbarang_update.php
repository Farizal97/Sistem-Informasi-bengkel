<?php
	include("sess_check.php");
	
	// query database memperbarui data pada database
	if(isset($_POST['perbarui'])) {
		$brg=$_POST['brg'];
		$brgold=$_POST['brgold'];
		$id=$_POST['id'];
		$spl=$_POST['spl'];
		$tgl=$_POST['tgl'];
		$jml=$_POST['jml'];
		$jmlold=$_POST['jmlold'];
		$ket=$_POST['keterangan'];
		$selisih=0;
		if($brg==$brgold){
			if($jml<$jmlold){
				$selisih=$jmlold-$jml;
				
			}else{
				
			}
		$sql = "UPDATE barangjasa SET
				nama='". $nama ."',
				harga='". $harga ."',
				keterangan='". $keterangan ."'
				WHERE id_brg='". $brg ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: barang.php?act=update&msg=success");
}
?>