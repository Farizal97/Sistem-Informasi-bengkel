<?php
	include("sess_check.php");
		$id = $_GET['spl'];	
		$sql = "DELETE FROM supplier WHERE id_spl='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: supplier.php?act=delete&msg=success");
?>