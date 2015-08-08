<?php
    include_once "../../include/koneksi.php";
	session_start();
	$state_session=$_SESSION['STATE_ID'];
    if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM penyesuaian_absensi WHERE ID=".$_POST['hapus']);
    } 
	else {
	$ID = $_POST['ID'];
	$KODE_PEGAWAI = $_POST['KODE_PEGAWAI'];
	$JUMLAH_PENYESUAIAN_ABSEN = $_POST['JUMLAH_PENYESUAIAN_ABSEN'];
	$TANGGAL_AKSES = date('Y-m-d H:i:s');
	$KODE_PETUGAS = $_SESSION['KODE_PETUGAS'];

	
	
	if($ID == 0) {
            mysql_query("INSERT INTO penyesuaian_absensi VALUES(NULL,'$KODE_PEGAWAI','$JUMLAH_PENYESUAIAN_ABSEN','$TANGGAL_AKSES','$KODE_PETUGAS')");
			$HEAD_ID_PENYESUAIAN=mysql_insert_id();
			foreach($_POST["TANGGAL"] as $key=>$value){
			$JAM_MASUK=$_POST["JAM_MASUK"][$key];	
			$JAM_KELUAR=$_POST["JAM_KELUAR"][$key];	
			mysql_query("insert into detail_penyesuaian_absensi values(NULL,'$HEAD_ID_PENYESUAIAN','$JAM_MASUK','$JAM_KELUAR','$value')");
				
			}
	} else {
            mysql_query("UPDATE penyesuaian_absensi SET JUMLAH_PENYESUAIAN_ABSEN = '$JUMLAH_PENYESUAIAN_ABSEN'  WHERE ID = '$ID' ");
	}
    }
?>
