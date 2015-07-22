<?php
    include_once "../../include/koneksi.php";

    if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM petugas WHERE KODE_PETUGAS=".$_POST['hapus']);
    } else {
	$KODE_PETUGAS = $_POST['KODE_PETUGAS'];
	$NAMA_PETUGAS = $_POST['NAMA_PETUGAS'];
	$EMAIL = $_POST['EMAIL'];
	$USERNAME_LOGIN = $_POST['USERNAME_LOGIN'];
	$PASSWORD_LOGIN = $_POST['PASSWORD_LOGIN'];
	
	if($KODE_PETUGAS == 0) {
            mysql_query("INSERT INTO petugas VALUES(NULL,'$NAMA_PETUGAS','$EMAIL','$USERNAME_LOGIN','$PASSWORD_LOGIN')");
	} else {
            mysql_query("UPDATE petugas SET NAMA_PETUGAS = '$NAMA_PETUGAS',EMAIL = '$EMAIL',USERNAME_LOGIN = '$USERNAME_LOGIN',PASSWORD_LOGIN = '$PASSWORD_LOGIN'  WHERE KODE_PETUGAS = '$KODE_PETUGAS' ");
	}
    }
?>
