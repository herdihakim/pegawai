<?php
    include_once "../../include/koneksi.php";
    session_start();
    
    if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM jam_kerja WHERE KODE_JAM_KERJA=".$_POST['hapus']);
    } else {
	$KODE_JAM_KERJA = $_POST['KODE_JAM_KERJA'];
        $KETERANGAN = $_POST['KETERANGAN'];
	$JAM_DATANG = $_POST['JAM_DATANG'];
	$JAM_PULANG = $_POST['JAM_PULANG'];
        $KODE_MASUK = $_POST['KODE_MASUK'];
        $KODE_KELUAR = $_POST['KODE_KELUAR'];

	
	if($KODE_JAM_KERJA == 0) {
            mysql_query("INSERT INTO jam_kerja 
		VALUES(NULL,'$KETERANGAN','$JAM_DATANG','$JAM_PULANG','$KODE_MASUK','$KODE_KELUAR')");
	} else {
            mysql_query("UPDATE jam_kerja SET KETERANGAN = '$KETERANGAN',JAM_DATANG = '$JAM_DATANG',JAM_PULANG = '$JAM_PULANG',"
                    . "KODE_MASUK = '$KODE_MASUK',KODE_KELUAR = '$KODE_KELUAR' "
                    . "WHERE KODE_JAM_KERJA = '$KODE_JAM_KERJA' ");
	}
    }
?>