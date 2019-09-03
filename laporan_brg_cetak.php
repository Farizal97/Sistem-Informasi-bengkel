<?php
	include("sess_check.php");

	include("dist/function/format_tanggal.php");
	include("dist/function/format_rupiah.php");
	$mulai 	 = $_GET['awal'];
	$selesai = $_GET['akhir'];
	$sql = "SELECT trxbarang.*, supplier.*, barangjasa.* FROM trxbarang, supplier, barangjasa WHERE
			trxbarang.id_spl=supplier.id_spl AND trxbarang.id_brg=barangjasa.id_brg AND 
			trxbarang.tgl_trxbrg BETWEEN '$mulai' AND '$selesai' ORDER BY trxbarang.id_trxbrg DESC";
	$ress = mysqli_query($conn, $sql);
	// deskripsi halaman
	$pagedesc = "Laporan Data Barang Masuk - Periode " . IndonesiaTgl($mulai) ." - ". IndonesiaTgl($selesai);
	$pagetitle = str_replace(" ", "_", $pagedesc)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">

	<title><?php echo $pagetitle ?></title>

	<link href="foto/logo.png" rel="icon" type="images/x-icon">


	<!-- Bootstrap Core CSS -->
	<link href="libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="dist/css/offline-font.css" rel="stylesheet">
	<link href="dist/css/custom-report.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery -->
	<script src="libs/jquery/dist/jquery.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<section id="header-kop">
		<div class="container-fluid">
			<table class="table table-borderless">
				<tbody>
					<tr>
						<td class="text-left" width="20%">
							<img src="foto/logo.png" alt="logo-dkm" width="70" />
						</td>
						<td class="text-center" width="60%">
						<b>Bengkel Mantap Jiwa</b> <br>
						Bekasi<br>
						Telp: (021) 192819189<br>
						<td class="text-right" width="20%">
						</td>
					</tr>
				</tbody>
			</table>
			<hr class="line-top" />
		</div>
	</section>

	<section id="body-of-report">
		<div class="container-fluid">
			<h4 class="text-center">Laporan Data Barang Masuk Periode Tanggal <?php echo format_tanggal($mulai);?> s/d <?php echo format_tanggal($selesai);?></h4>
			<br />
								<table class="table table-striped table-bordered table-hover" id="tabel-data">
									<thead>
										<tr>
											<th width="1%">No</th>
											<th width="10%">ID Trx</th>
											<th width="10%">Tgl Trx</th>
											<th width="10%">Supplier</th>
											<th width="10%">Barang</th>
											<th width="5%">Jumlah</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$i = 1;
											while($data = mysqli_fetch_array($ress)) {
												echo '<tr>';
												echo '<td class="text-center">'. $i .'</td>';
												echo '<td class="text-center">'. $data['id_trxbrg'] .'</td>';
												echo '<td class="text-center">'. format_tanggal($data['tgl_trxbrg']) .'</td>';
												echo '<td class="text-center">'. $data['nama_spl'] .'</td>';
												echo '<td class="text-center">'. $data['nama'] .'</td>';
												echo '<td class="text-center">'. $data['jml_brg'] .'</td>';
												echo '</tr>';												
												$i++;
											}
										?>
									</tbody>
								</table>
			<br />
		</div><!-- /.container -->
	</section>

	<script type="text/javascript">
		$(document).ready(function() {
			window.print();
		});
	</script>

	<!-- Bootstrap Core JavaScript -->
	<script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- jTebilang JavaScript -->
	<script src="libs/jTerbilang/jTerbilang.js"></script>

</body>
</html>