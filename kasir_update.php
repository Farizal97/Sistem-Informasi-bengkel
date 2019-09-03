<?php
	include("sess_check.php");
	
	// query database memperbarui data pada database
	if(isset($_POST['perbarui'])) {
		$id=$_POST['kas'];
		$nama=$_POST['nama'];
		$user=$_POST['user'];
		$userlama=$_POST['userlama'];
		$telp=$_POST['telp'];
		$pass=$_POST['password'];
		$cekfoto=$_FILES["foto"]["name"];
		$pass=$_POST['password'];
		$namafoto = date('mdYHis');
		
	if($user!=$userlama){
		$sqlcek = "SELECT * FROM kasir WHERE user_kasir='$user'";
		$ress = mysqli_query($conn, $sqlcek);
		$rows = mysqli_num_rows($ress);
		if($rows<1){
			if($cekfoto!=""){
				$foto=substr($_FILES["foto"]["name"],-5);
				$newfoto = $namafoto.$foto;				
				move_uploaded_file($_FILES["foto"]["tmp_name"],"foto/".$newfoto);
				$sql = "UPDATE kasir SET
					nama_kasir='". $nama ."',
					telp_kasir='". $telp ."',
					user_kasir='". $user ."',
					pass_kasir='". $pass ."',
					foto_kasir='". $newfoto ."'
					WHERE id_kasir='". $id ."'";
				$ress = mysqli_query($conn, $sql);
				header("location: kasir.php?act=update&msg=success");
			}else{
				$sql = "UPDATE kasir SET
					nama_kasir='". $nama ."',
					telp_kasir='". $telp ."',
					user_kasir='". $user ."',
					pass_kasir='". $pass ."'
					WHERE id_kasir='". $id ."'";
				$ress = mysqli_query($conn, $sql);
				header("location: kasir.php?act=update&msg=success");
			}
		}else{
			header("location: kasir_edit.php?kas=$id&act=add&msg=double");			
		}
	}else{
		if($cekfoto!=""){
			$foto=substr($_FILES["foto"]["name"],-5);
			$newfoto = $namafoto.$foto;				
			move_uploaded_file($_FILES["foto"]["tmp_name"],"foto/".$newfoto);
			$sql = "UPDATE kasir SET
				nama_kasir='". $nama ."',
				telp_kasir='". $telp ."',
				pass_kasir='". $pass ."',
				foto_kasir='". $newfoto ."'
				WHERE id_kasir='". $id ."'";
			$ress = mysqli_query($conn, $sql);
			header("location: kasir.php?act=update&msg=success");
		}else{
			$sql = "UPDATE kasir SET
				nama_kasir='". $nama ."',
				telp_kasir='". $telp ."',
				pass_kasir='". $pass ."'
				WHERE id_kasir='". $id ."'";
			$ress = mysqli_query($conn, $sql);
			header("location: kasir.php?act=update&msg=success");
		}
	}
}
?>