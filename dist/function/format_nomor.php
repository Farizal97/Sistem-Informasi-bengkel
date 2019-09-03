<?php
	function format_nomor($previx, $no) {
		$o_limit = 6;
		$no_len = strlen($no);
		$no_mid = "";
		for($i=0; $i<$o_limit-$no_len; $i++) {
			$no_mid .= "0";
		}
		$nomor = $previx ."-". $no_mid . $no;
		
		return $nomor;
	}
?>