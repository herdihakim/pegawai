<?php
    include_once "../../include/koneksi.php";

    if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM state WHERE STATE_ID=".$_POST['hapus']);
    } else {
	$STATE_ID = $_POST['STATE_ID'];
	$STATE_NAME = $_POST['STATE_NAME'];
	
	if($STATE_ID == 0) {
            mysql_query("INSERT INTO state VALUES(NULL,'$STATE_NAME')");
	} else {
            mysql_query("UPDATE state SET STATE_NAME = '$STATE_NAME'  WHERE STATE_ID = '$STATE_ID' ");
	}
    }
?>
