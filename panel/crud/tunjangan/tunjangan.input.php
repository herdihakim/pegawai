<?php
    include_once "../../include/koneksi.php";

    if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM master_tunjangan WHERE KODE_MASTER_TUNJANGAN=".$_POST['hapus']);
    } else {
	$KODE_MASTER_TUNJANGAN = $_POST['KODE_MASTER_TUNJANGAN'];
	$NAMA_TUNJANGAN = $_POST['NAMA_TUNJANGAN'];
	$NOMINAL = $_POST['NOMINAL'];

	
	if($KODE_MASTER_TUNJANGAN == 0) {
            mysql_query("INSERT INTO master_tunjangan 
		VALUES(NULL,'$NAMA_TUNJANGAN','$NOMINAL')");
	} else {
            mysql_query("UPDATE master_tunjangan SET NAMA_TUNJANGAN = '$NAMA_TUNJANGAN',NOMINAL = '$NOMINAL'  WHERE KODE_MASTER_TUNJANGAN = '$KODE_MASTER_TUNJANGAN' ");
	}
    }
?>