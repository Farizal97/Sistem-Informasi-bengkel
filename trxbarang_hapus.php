<?php
	include("sess_check.php");
		$id = $_GET['trx'];	
		$newstok=0;

		$sql_trx = "SELECT * FROM trxbarang WHERE id_trxbrg='$id'";
		$ress_trx = mysqli_query($conn, $sql_trx);
		$trx = mysqli_fetch_array($ress_trx);
		$jumlah = $trx['jml_brg'];
		$br		= $trx['id_brg'];

		$sql_brg = "SELECT * FROM barangjasa WHERE id_brg='$br'";
		$ress_brg = mysqli_query($conn, $sql_brg);
		$db = mysqli_fetch_array($ress_brg);
		$stok = $db['stok'];
		
		if($stok>=$jumlah){
			$newstok = $stok-$jumlah;
		}else{
			$newstok =0;			
		}
		
		$sqlbr = "UPDATE barangjasa SET
				stok='". $newstok ."'
				WHERE id_brg='". $br ."'";
		$ressbr = mysqli_query($conn, $sqlbr);		

		$sql = "DELETE FROM trxbarang WHERE id_trxbrg='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: trxbarang.php?act=delete&msg=success");
?>