<?php
	function format_tanggal($tgl) {
		$blns = array("", "Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des");
		$hrs = array("Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab");
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $hrs[$tgls['wday']] .", ". $hr ."-". $blns[$tgls['mon']] ."-". $tgls['year'];
		
		return $tanggal;
	}
	function format_tanggal_lahir($tpt, $tgl) {
		$blns = array("", "Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des");
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $tpt .", ". $hr ."-". $blns[$tgls['mon']] ."-". $tgls['year'];
		
		return $tanggal;
	}
	function format_tanggal_laporan($tpt, $tgl) {
		$blns = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $tpt .", ". $hr ." ". $blns[$tgls['mon']] ." ". $tgls['year'];
		
		return $tanggal;
	}
	function format_tanggal_strip($tgl) {
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $hr ."-". $tgls['mon'] ."-". $tgls['year'];
		
		return $tanggal;
	}
?>