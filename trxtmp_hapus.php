<?php
	include("sess_check.php");
		$id = $_GET['id'];	
		$sql = "DELETE FROM tmp_trx WHERE id_tmp='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: trx_baru.php?act=delete&msg=success");
?>