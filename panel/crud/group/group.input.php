<?php
    session_start();
	include_once "../../include/koneksi.php";
	$state_session=$_SESSION['STATE_ID'];
    if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM rights_group WHERE ID=".$_POST['hapus']);
    } else {
	$ID = $_POST['ID'];
	$GROUP_NAME = $_POST['GROUP_NAME'];
	$AKSES = $_POST['AKSES'];
	$DATAAKSES=implode(",",$AKSES);
	if($ID == 0) {
            mysql_query("INSERT INTO rights_group VALUES(NULL,'$GROUP_NAME','$DATAAKSES')");
			$GROUP_ID=mysql_insert_id();
			foreach($_POST["AKSES"] as $key=>$value){
			$kontrol = $_POST[$value.'_kontrol'];
			$DATAkontrol=implode(",",$kontrol);
			mysql_query("insert into rights_control values(NULL,'$GROUP_ID','$value','$DATAkontrol')") or die (mysql_error());
			
			
			}
	} else {
            mysql_query("UPDATE rights_group SET GROUP_NAME = '$GROUP_NAME',AKSES = '$DATAAKSES' WHERE ID = '$ID' ");
			$qcek=mysql_query("SELECT * FROM rights_control WHERE GROUP_ID='$ID'");
			$cek=mysql_num_rows($qcek);
			if($cek<0){
				mysql_query("DELETE rights_control WHERE GROUP_ID = '$ID' ")or die (mysql_error());
			}
			
			foreach($_POST["AKSES"] as $key=>$value){
			$kontrol = $_POST[$value.'_kontrol'];
			$DATAkontrol=implode(",",$kontrol);
			mysql_query("insert into rights_control values(NULL,'$ID','$value','$DATAkontrol')") or die (mysql_error());
			
			
			}
	}
    }
?>
