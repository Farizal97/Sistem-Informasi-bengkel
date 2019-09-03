<?php
include("sess_check.php");

$id = $sess_admid;
$user=$_POST['user'];
$nama=$_POST['nama'];
$telp=$_POST['telp'];
$foto=substr($_FILES["foto"]["name"],-5);
$fotoname = date('mdYHis');
$newfoto = $fotoname.$foto;
$pass = "password";

$sqlcek = "SELECT * FROM kasir WHERE user_kasir='$user'";
$resscek = mysqli_query($conn, $sqlcek);
$rowscek = mysqli_num_rows($resscek);
if($rowscek<1){
	$sql="INSERT INTO kasir(nama_kasir,telp_kasir,user_kasir,pass_kasir,foto_kasir,id_adm)
		  VALUES('$nama','$telp','$user','$pass','$newfoto','$id')";
	$ress = mysqli_query($conn, $sql);
	if($ress){
		move_uploaded_file($_FILES["foto"]["tmp_name"],"foto/".$newfoto);
		echo "<script>alert('Tambah Kasir Berhasil!');</script>";
		echo "<script type='text/javascript'> document.location = 'kasir.php'; </script>";
	}else{
	//	echo("Error description: " . mysqli_error($conn));
		echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
		echo "<script type='text/javascript'> document.location = 'kasir_tambah.php'; </script>";
	}
}else{
	header("location: kasir_tambah.php?act=add&msg=double");	
}
?>