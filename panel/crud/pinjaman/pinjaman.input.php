<?php
    include_once "../../include/koneksi.php";
    session_start();
    
    if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM kasbon_pegawai WHERE KODE_KASBON=".$_POST['hapus']);
    } else {
	$KODE_KASBON = $_POST['KODE_KASBON'];
	$NIP_PEGAWAI = $_POST['NIP_PEGAWAI'];
	$TANGGAL = $_POST['TANGGAL'];
        $NOMINAL = $_POST['NOMINAL'];
        $KETERANGAN = $_POST['KETERANGAN'];
        $STATUS = $_POST['STATUS'];
        $PTG = $_SESSION['KODE_PETUGAS'];
	
	if($KODE_KASBON == 0) {
            mysql_query("INSERT INTO kasbon_pegawai 
		VALUES(NULL,'$NIP_PEGAWAI','$TANGGAL','$NOMINAL','$KETERANGAN','Hutang','$PTG')");
	} else {
            mysql_query("UPDATE kasbon_pegawai SET NIP_PEGAWAI = '$NIP_PEGAWAI',TANGGAL = '$TANGGAL',"
                    . "NOMINAL = '$NOMINAL',KETERANGAN = '$KETERANGAN',STATUS = '$STATUS',KODE_PETUGAS = '$PTG' "
                    . "WHERE KODE_KASBON = '$KODE_KASBON' ");
	}
    }
?>