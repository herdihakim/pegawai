<?php
include("../panel/include/function_hitunggaji.php");
include("../panel/include/zklib/zklib.php");
	//error_reporting(0);
	$getmachine=mysql_query("select * from mesin_absensi");
	$datamachine=mysql_fetch_object($getmachine);
	$ip=$datamachine->IP_ADDRESS;
	$port=$datamachine->PORT_COM;
    $zk = new ZKLib("$ip", $port);
	
    $ret = $zk->connect();
	$attendance = $zk->getAttendance();
					
	
					if($zk !=""){

					while(list($idx, $attendancedata) = each($attendance) ) {
					
					
					$NIP=$attendancedata[1];
					
					if($NIP!=""){
						$qpgw=mysql_query("select * from pegawai where KODE_PEGAWAI='$NIP'");
						$tpgw=mysql_fetch_object($qpgw);
						$tmp=$tpgw->NIP_PEGAWAI;
						header('Content-Type: application/json');
						echo json_encode(array('cek' => 'true','nip'=>$tmp));
					}
					
					}
					$zk->clearattendance();						
					$zk->getTime();
					$zk->enableDevice();
					$zk->disconnect();
					 }
					 ?>