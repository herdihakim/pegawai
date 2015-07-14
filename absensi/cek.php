<?php
		 error_reporting(0);
		include_once "../panel/include/koneksi.php";
		$getmachine=mysql_query("select * from mesin_absensi");
		$datamachine=mysql_fetch_object($getmachine);
		$ip=$datamachine->IP_ADDRESS;
		$port=$datamachine->PORT_COM;
		if(!fsockopen($ip, $port)){?>
		<div class="alert alert-danger" style="width: 760px;"" role="alert">Peringatan Koneksi Mesin Finger Print Tidak Terhubung !!!</div>
		<?php } ?>	