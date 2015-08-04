<?php
    include_once "../../include/koneksi.php";
	session_start();
	$state_session=$_SESSION['STATE_ID'];
    if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM jabatan WHERE KODE_JABATAN=".$_POST['hapus']);
    } else {
	$NAMA_JABATAN = $_POST['NAMA_JABATAN'];
	$KODE_JABATAN = $_POST['KODE_JABATAN'];
	$TUNJANGAN_JABATAN = $_POST['TUNJANGAN_JABATAN'];
    $tmptunjanganlain = $_POST['TUNJANGAN_LAIN'];
	$tmptunjanganlain2=implode(",",$tmptunjanganlain);
	$NOMINAL_TABUNGAN = $_POST['NOMINAL_TABUNGAN'];
	$NOMINAL_UMT = $_POST['NOMINAL_UMT'];
	
	if($KODE_JABATAN == 0) {
            mysql_query("INSERT INTO jabatan 
		VALUES(NULL,'$NAMA_JABATAN','$TUNJANGAN_JABATAN','$tmptunjanganlain2','$NOMINAL_TABUNGAN','$NOMINAL_UMT','$state_session')");
	} else {
            mysql_query("UPDATE jabatan SET NAMA_JABATAN = '$NAMA_JABATAN',TUNJANGAN_JABATAN = '$TUNJANGAN_JABATAN',TUNJANGAN_LAIN = '$tmptunjanganlain2',NOMINAL_TABUNGAN = '$NOMINAL_TABUNGAN',NOMINAL_UMT = '$NOMINAL_UMT' WHERE KODE_JABATAN = '$KODE_JABATAN' ");
	}
    }
?>