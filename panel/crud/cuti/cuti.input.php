<?php
    include_once "../../include/koneksi.php";
    session_start();
    
    if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM cuti WHERE KODE_CUTI=".$_POST['hapus']);
    } else {
	$KODE_CUTI = $_POST['KODE_CUTI'];
	$NIP_PEGAWAI = $_POST['NIP_PEGAWAI'];
	$KETERANGAN = $_POST['KETERANGAN'];
        $TANGGAL_AWAL = $_POST['TANGGAL_AWAL'];
        $TANGGAL_AKHIR = $_POST['TANGGAL_AKHIR'];
        $STATUS = $_POST['STATUS'];
        $PTG = $_SESSION['KODE_PETUGAS'];

	
	if($KODE_CUTI == 0) {
            mysql_query("INSERT INTO cuti 
		VALUES(NULL,'$NIP_PEGAWAI','$KETERANGAN','$TANGGAL_AWAL','$TANGGAL_AKHIR','Menunggu','$PTG')");
	} else {
            mysql_query("UPDATE cuti SET NIP_PEGAWAI = '$NIP_PEGAWAI',KETERANGAN = '$KETERANGAN',"
                    . "TANGGAL_AWAL = '$TANGGAL_AWAL',TANGGAL_AKHIR = '$TANGGAL_AKHIR',STATUS = '$STATUS',KODE_PETUGAS = '$PTG' "
                    . "WHERE KODE_CUTI = '$KODE_CUTI' ");
	}
    }
?>