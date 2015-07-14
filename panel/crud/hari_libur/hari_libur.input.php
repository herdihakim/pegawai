<?php
    include_once "../../include/koneksi.php";

    
	$ID = $_POST['ID'];
	$TAHUN = $_POST['TAHUN'];
	$TANGGAL = $_POST['TANGGAL'];
	
	mysql_query("insert into hari_libur values(NULL,'$TAHUN','$TANGGAL')");
	
	
?>
