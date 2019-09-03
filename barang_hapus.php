<?php
	include("sess_check.php");
		$id = $_GET['brg'];	
		$sql = "DELETE FROM barangjasa WHERE id_brg='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: barang.php?act=delete&msg=success");
?>