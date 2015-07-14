<?php
    include_once "../../include/koneksi.php";

    $id = $_POST['id'];
    $NAMA_PERUSAHAAN = $_POST['NAMA_PERUSAHAAN'];
	$EMAIL = $_POST['EMAIL'];
	$PHONE_1 = $_POST['PHONE_1'];
	$PHONE_2 = $_POST['PHONE_2'];
	$KOTA = $_POST['KOTA'];
	$FAXIMILI = $_POST['FAXIMILI'];
	$ALAMAT = $_POST['ALAMAT'];
	$NEGARA = $_POST['NEGARA'];
	
	mysql_query("UPDATE profil_perusahaan SET NAMA_PERUSAHAAN = '$NAMA_PERUSAHAAN',EMAIL = '$EMAIL',PHONE_1 = '$PHONE_1' 
	,PHONE_2 = '$PHONE_2',KOTA = '$KOTA',PHONE_2 = '$PHONE_2',FAXIMILI = '$FAXIMILI',ALAMAT = '$ALAMAT',NEGARA = '$NEGARA' 

	WHERE id = '$id' ");
	
   
?>
