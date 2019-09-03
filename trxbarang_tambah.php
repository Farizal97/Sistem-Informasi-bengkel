<?php
	include("sess_check.php");
	
	// deskripsi halaman
	$pagedesc = "Barang Masuk";
	$menuparent = "barang";
	include("layout_top.php");
	$tgl = date('Y-m-d');
?>
<!-- top of file -->
		<!-- Page Content -->
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Transaksi Barang Masuk</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->

				<div class="row">
					<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal" action="trxbarang_insert.php" method="POST" enctype="multipart/form-data">
							<div class="panel panel-default">
								<div class="panel-heading"><h3>Tambah Data Barang Masuk</h3></div>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-sm-3">Barang</label>
										<div class="col-sm-4">
											<select name="brg" id="brg" class="form-control" required>
												<option value="">==== Pilih Barang ====</option>
												<?php
													$sql_brg = "SELECT * FROM barangjasa WHERE jenis='barang' ORDER BY nama ASC";
													$ress_brg = mysqli_query($conn, $sql_brg);
													while($li = mysqli_fetch_array($ress_brg)) {
														echo '<option value="'. $li['id_brg'] .'">'. $li['nama'].'</option>';
													}
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Supplier</label>
										<div class="col-sm-4">
											<select name="spl" id="spl" class="form-control" required>
												<option value="">==== Pilih Supplier ====</option>
												<?php
													$sql_don = "SELECT * FROM supplier ORDER BY nama_spl ASC";
													$ress_don = mysqli_query($conn, $sql_don);
													while($li = mysqli_fetch_array($ress_don)) {
														echo '<option value="'. $li['id_spl'] .'">'. $li['nama_spl'].'</option>';
													}
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Tanggal</label>
										<div class="col-sm-4">
											<input type="date" name="tgl" class="form-control" placeholder="Tanggal" value="<?php echo $tgl;?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Jumlah</label>
										<div class="col-sm-4">
											<input type="number" name="jml" min="0" class="form-control" placeholder="Jumlah" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Keterangan</label>
										<div class="col-sm-4">
											<textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="3" required></textarea>
										</div>
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