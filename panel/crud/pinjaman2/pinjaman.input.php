<?php
    include_once "../../include/koneksi.php";
    session_start();
    
    if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM pinjaman WHERE KODE_PINJAMAN=".$_POST['hapus']);
    } else {
	$KODE_PINJAMAN = $_POST['KODE_PINJAMAN'];
	$NIP_PEGAWAI = $_POST['NIP_PEGAWAI'];
	$TANGGAL = $_POST['TANGGAL'];
        $NOMINAL = $_POST['NOMINAL'];
        $JUMLAH_BLN = $_POST['JUMLAH_BLN'];
        $KETERANGAN = $_POST['KETERANGAN'];
        $STATUS = $_POST['STATUS'];
        $PTG = $_SESSION['KODE_PETUGAS'];
	
	if($KODE_PINJAMAN == 0) {
            mysql_query("INSERT INTO pinjaman 
		VALUES(NULL,'$NIP_PEGAWAI','$TANGGAL','$NOMINAL','$JUMLAH_BLN','$KETERANGAN','Hutang','$PTG')");
	} else {
            mysql_query("UPDATE pinjaman SET KODE_PEGAWAI = '$NIP_PEGAWAI',TANGGAL = '$TANGGAL',"
                    . "NOMINAL = '$NOMINAL',JUMLAH_BLN = '$JUMLAH_BLN',KETERANGAN = '$KETERANGAN',STATUS = '$STATUS',KODE_PETUGAS = '$PTG' "
                    . "WHERE KODE_PINJAMAN = '$KODE_PINJAMAN' ");
	}
    }
?>