<?php
	include("sess_check.php");
	
	if(isset($_GET['trx'])) {
		$sql = "SELECT trxbarang.*, barangjasa.*, supplier.* FROM trxbarang, barangjasa, supplier 
				WHERE trxbarang.id_brg=barangjasa.id_brg AND trxbarang.id_spl=supplier.id_spl AND trxbarang.id_trxbrg='". $_GET['trx'] ."'";
		$ress = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($ress);
	}
	// deskripsi halaman
	$pagedesc = "Barang Masuk";
	$menuparent = "barang";
	include("layout_top.php");
?>
<!-- top of file -->
		<!-- Page Content -->
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Barang Masuk</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->

				<div class="row">
					<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal" action="trxbarang_update.php" method="POST" enctype="multipart/form-data">
							<div class="panel panel-default">
								<div class="panel-heading"><h3>Edit Data Barang Masuk</h3></div>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-sm-3">Barang</label>
										<div class="col-sm-4">
											<select class="form-control" name="brg" required>
													<?php
													$mySql = "SELECT * FROM barangjasa WHERE jenis='barang' ORDER BY nama ASC";
													$myQry = mysqli_query($conn, $mySql);
													$dataBrg = $result['id_brg'];
													while ($Brg = mysqli_fetch_array($myQry)) {
														if ($Brg['id_brg']== $dataBrg) {
														$cek = " selected";
														} else { $cek=""; }
														echo "<option value='$Brg[id_brg]' $cek>".$Brg[nama]."</option>";
													}
													?>
											</select>
											<input type="hidden" name="id" class="form-control" placeholder="Nama" value="<?php echo $data['id_trx'] ?>" required>
											<input type="hidden" name="brgold" class="form-control" placeholder="Nama" value="<?php echo $data['id_brg'] ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Supplier</label>
										<div class="col-sm-4">
											<select class="form-control" name="spl" required>
													<?php
													$mySpl = "SELECT * FROM supplier ORDER BY nama_spl ASC";
													$myQrys = mysqli_query($conn, $mySpl);
													$dataSpl = $res['id_spl'];
													while ($Spl = mysqli_fetch_array($myQrys)) {
														if ($Spl['id_spl']== $dataSpl) {
														$cek = " selected";
														} else { $cek=""; }
														echo "<option value='$Spl[id_spl]' $cek>".$Spl[nama_spl]."</option>";
													}
													?>
											</select>
											<input type="hidden" name="id" class="form-control" placeholder="Nama" value="<?php echo $data['id_trx'] ?>" required>
											<input type="hidden" name="brgold" class="form-control" placeholder="Nama" value="<?php echo $data['id_brg'] ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Tanggal</label>
										<div class="col-sm-4">
											<input type="date" name="tgl" class="form-control" placeholder="Tanggal" value="<?php echo $data['tgl_trxbrg'];?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Jumlah</label>
										<div class="col-sm-4">
											<input type="number" name="jml" min="0" class="form-control" placeholder="Jumlah" value="<?php echo $data['jml_brg'] ?>"required>
											<input type="hidden" name="jmlold" min="0" class="form-control" placeholder="Jumlah" value="<?php echo $data['jml_brg'] ?>"required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Keterangan</label>
										<div class="col-sm-4">
											<textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="3" required><?php echo $data['ket_trxbrg'];?></textarea>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<button type="submit" name="perbarui" class="btn btn-success">Update</button>
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