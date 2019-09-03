<?php 
require_once("dist/config/koneksi.php");
// code user username availablity
if(!empty($_POST["user"])) {
	$user = $_POST["user"];
	$sql = "SELECT * FROM kasir WHERE user_kasir='$user'";
	$query = mysqli_query($conn,$sql);
	if(mysqli_num_rows($query)>0){
		echo "<span style='color:red'> Username sudah terdaftar.</span>";
		echo "<script>$('#submit').prop('disabled',true);</script>";
	}else{
		echo "<span style='color:green'> Username bisa digunakan.</span>";
		echo "<script>$('#submit').prop('disabled',false);</script>";
	}
}

?>
