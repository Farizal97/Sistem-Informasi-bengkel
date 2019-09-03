<?php
	include("sess_check.php");
		$id = $_GET['trx'];	

	$sql = "SELECT tmp_trx.*, barangjasa.* FROM tmp_trx, barangjasa WHERE tmp_trx.id_brg=barangjasa.id_brg 
		AND tmp_trx.id_trx='$id'";
	$query = mysqli_query($conn,$sql);
	while($res = mysqli_fetch_array($query)){
		$st = $res['stok'];
		$jml = $res['jml'];
		$newst = $st+$jml;
		$br = $res['id_brg'];
		$jns = $res['jenis'];
		if($jns=='barang'){
			$sqlbr = "UPDATE barangjasa SET
					stok='". $newst ."'
					WHERE id_brg='". $br ."'";
			$ressbr = mysqli_query($conn, $sqlbr);	
		}else{
		}
	}

	$sqltrx = "DELETE FROM trx WHERE id_trx='". $id ."'";
	$resstrx = mysqli_query($conn, $sqltrx);

	$sqltmp = "DELETE FROM tmp_trx WHERE id_trx='". $id ."'";
	$resstmp = mysqli_query($conn, $sqltmp);

	header("location: trx.php?act=delete&msg=success");
?>