<?php
	include("sess_check.php");
	
	// deskripsi halaman
	$pagedesc = "Transaksi Baru";
	include("layout_top.php");
	include("dist/function/format_tanggal.php");
	include("dist/function/format_rupiah.php");
	$adm = $sess_admid;
	$tgl = date('Y-m-d');

if(isset($_POST['simpan'])){
$adm = $sess_admid;
$grand=0;
$tg=$_POST['tgl'];
$kon=$_POST['kon'];
$stt ="Done";
$stts ="On Process";
$no = date('dmYHis');
$sql = "SELECT tmp_trx.*, barangjasa.* FROM tmp_trx, barangjasa WHERE tmp_trx.id_brg=barangjasa.id_brg 
		AND tmp_trx.id_adm='$adm' AND tmp_trx.status='On Process'";
$query = mysqli_query($conn,$sql);
	while($res = mysqli_fetch_array($query)){
		$ttl = $res['jml']*$res['harga'];
		$st = $res['stok'];
		$jml = $res['jml'];
		$newst = $st-$jml;
		$br = $res['id_brg'];
		$jns = $res['jenis'];
		if($jns=='barang'){
			$sqlbr = "UPDATE barangjasa SET
					stok='". $newst ."'
					WHERE id_brg='". $br ."'";
			$ressbr = mysqli_query($conn, $sqlbr);	
		}else{
		}
		$grand+=$ttl;
	}
	$sqltmp = "UPDATE tmp_trx SET
			id_trx='". $no ."',
			status='". $stt ."'
			WHERE id_adm='". $adm ."' AND status='". $stts ."'";
	$resstmp = mysqli_query($conn, $sqltmp);	

	$sqltrx="INSERT INTO trx(id_trx,id_kon,tgl_trx,total)
		  VALUES('$no','$kon','$tg','$grand')";
	$resstrx = mysqli_query($conn, $sqltrx);

	if($resstrx){
		echo "<script type='text/javascript'> document.location = 'trx.php'; </script>";
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
						<div class="panel panel-default">
							<div class="panel-heading">
								<a href="tmp_tambah.php" class="btn btn-warning">Tambah</a>
							</div>
						<form class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-sm-3">Konsumen</label>
										<div class="col-sm-4">
											<select name="kon" id="kon" class="form-control" required>
												<option value="">==== Pilih Konsumen ====</option>
												<option value="0">Umum</option>
												<?php
													$sql_brg = "SELECT * FROM konsumen WHERE id_kon!='0' ORDER BY nama_kon ASC";
													$ress_brg = mysqli_query($conn, $sql_brg);
													while($li = mysqli_fetch_array($ress_brg)) {
														echo '<option value="'. $li['id_kon'] .'">'. $li['nama_kon'].'</option>';
													}
												?>
											</select>
										</div>
									</div>
								<table class="table table-striped table-bordered table-hover" id="tabel-data">
									<thead>
										<tr>
											<th width="1%">No</th>
											<th width="10%">Nama</th>
											<th width="10%">Jumlah</th>
											<th width="10%">Harga Satuan</th>
											<th width="10%">Total Harga</th>
											<th width="2%">Opsi</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$i = 1;
											$grand=0;
											$sql = "SELECT tmp_trx.*, barangjasa.*, admin.* FROM tmp_trx, barangjasa, admin WHERE
													tmp_trx.id_brg=barangjasa.id_brg AND tmp_trx.id_adm=admin.id_adm
													AND tmp_trx.status='On Process' AND tmp_trx.id_adm='$adm' ORDER BY barangjasa.nama ASC";
											$ress = mysqli_query($conn, $sql);
											while($data = mysqli_fetch_array($ress)) {
												$ttl = $data['jml']*$data['harga'];
												echo '<tr>';
												echo '<td class="text-center">'. $i .'</td>';
												echo '<td class="text-center">'. $data['nama'] .'</td>';
												echo '<td class="text-center">'. $data['jml'] .'</td>';
												echo '<td class="text-center">'. format_rupiah($data['harga']) .'</td>';
												echo '<td class="text-center">'. format_rupiah($ttl) .'</td>';
												echo '<td class="text-center">';?>
													  <a href="trxtmp_hapus.php?id=<?php echo $data['id_tmp'];?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['nama'];?>?');" class="btn btn-danger btn-xs">Hapus</a></td>
												<?php
												echo '</td>';
												echo '</tr>';												
												$i++;
												$grand+=$ttl;
											}
										?>
									</tbody>
									<tfoot>
										<tr>
											<th colspan="4" class="text-center">Total </th>
											<th class="text-right"><?php echo format_rupiah($grand);?></th>
											<th class="text-center"> </th>
										</tr>
									</tfoot>
								</table>
							</div>
								<div class="panel-body">
											<input type="hidden" name="tgl" class="form-control" value="<?php echo $tgl;?>">
								</div>
								<div class="panel-footer">
									<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
								</div>
						</form>
			<!-- Large modal -->
			<div class="modal fade bs-example-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-body">
							<p>Sedang Memproses..</p>
						</div>
					</div>
				</div>
			</div>    
						</div><!-- /.panel -->
					</div><!-- /.col-lg-12 -->
				</div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
<!-- bottom of file -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#tabel-data').DataTable({
			"responsive": true,
			"processing": true,
			"columnDefs": [
				{ "orderable": false, "targets": [5] }
			]
		});
		
		$('#tabel-data').parent().addClass("table-responsive");
	});
</script>
	<script>
		var app = {
			code: '0'
		};
		
		$('[data-load-code]').on('click',function(e) {
					e.preventDefault();
					var $this = $(this);
					var code = $this.data('load-code');
					if(code) {
						$($this.data('remote-target')).load('tmp_tambah.php?code='+code);
						app.code = code;
						
					}
		});		
    </script>
<?php
	include("layout_bottom.php");
?>