<?php
	include("sess_check.php");
	
	// deskripsi halaman
	$pagedesc = "Transaksi Baru";
	$menuparent = "transaksi";
	include("layout_top.php");
if(isset($_POST['simpan'])){
$brg=$_POST['brg'];
$jumlah=$_POST['jumlah'];
$stt ="On Process";
$id = $sess_admid;
$null="";
$sql = "SELECT * FROM barangjasa WHERE id_brg='$brg'";
$query = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($query);
$stok = $res['stok'];
	if($stok<$jumlah){
		echo "<script>alert('Stok kurang dari jumlah yang diinginkan!');</script>";	
		echo "<script type='text/javascript'> document.location = 'tmp_tambah.php'; </script>";
	}else{
		$sqli="INSERT INTO tmp_trx(id_trx,id_brg,jml,id_adm,status)VALUES('$null','$brg','$jumlah','$id','$stt')";
		$ressi = mysqli_query($conn, $sqli);
		echo "<script type='text/javascript'> document.location = 'trx_baru.php'; </script>";
	}
}

?>
<!-- top of file -->
		<!-- Page Content -->
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Transaksi Baru</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->

				<div class="row">
					<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="panel panel-default">
								<div class="panel-heading"><h3>Tambah Barang/Jasa</h3></div>
								<br/>
								<div class="form-group">
									<label class="control-label col-sm-3">Barang</label>
									<div class="col-sm-4">
										<select name="brg" id="brg" class="form-control" required>
											<option value="">==== Pilih Barang/Jasa ====</option>
											<?php
											$sql_brg = "SELECT * FROM barangjasa WHERE stok!=0 AND id_brg NOT IN (SELECT id_brg FROM tmp_trx WHERE status='On Process') ORDER BY nama ASC";
											$ress_brg = mysqli_query($conn, $sql_brg);
											while($li = mysqli_fetch_array($ress_brg)) {
												echo '<option value="'. $li['id_brg'] .'">'. $li['nama'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3">Jumlah</label>
									<div class="col-sm-4">
										<input type="number" name="jumlah" min="0" class="form-control" placeholder="Jumlah" required>
									</div>
								</div>
								<div class="panel-footer">
									<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
								</div>
							</div><!-- /.panel -->
						</form>
					</div><!-- /.col-lg-12 -->
				</div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
<!-- bottom of file -->
<?php
	include("layout_bottom.php");
?>