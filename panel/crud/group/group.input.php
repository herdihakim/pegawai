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
	} else {
            mysql_query("UPDATE rights_group SET GROUP_NAME = '$GROUP_NAME',AKSES = '$DATAAKSES' WHERE ID = '$ID' ");
	}
    }
?>
