<?php
	include("sess_check.php");
		$id = $_GET['kon'];	
		$sql = "DELETE FROM konsumen WHERE id_kon='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: konsumen.php?act=delete&msg=success");
?>