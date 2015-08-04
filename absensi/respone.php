<?php
	include_once "../panel/include/koneksi.php";
	include("../panel/include/zklib/zklib.php");
	error_reporting(0);
	$getmachine=mysql_query("select * from mesin_absensi");
	$datamachine=mysql_fetch_object($getmachine);
	$ip=$datamachine->IP_ADDRESS;
	$port=$datamachine->PORT_COM;
    $zk = new ZKLib("$ip", $port);
	
    $ret = $zk->connect();
	$attendance = $zk->getAttendance();
					
	$now=date('Y-m-d');
	
					if($zk !=""){

					while(list($idx, $attendancedata) = each($attendance) ) {
					
					
					$NIP=$attendancedata[1];
					$state=$attendancedata[2];
					$DATE=$attendancedata[3];
					$TIME=date("H:i:s", strtotime($attendancedata[3]));
					
					if($NIP!=""){
					
					
					$queryjam=mysql_query("SELECT * FROM jam_kerja WHERE KODE_MASUK='$state'");
					$tampiljam = mysql_fetch_object($queryjam);
					if($tampiljam->JAM_DATANG<=$tampiljam->JAM_PULANG){
						$KODE_JAM_KERJA = $tampiljam->KODE_JAM_KERJA;
						$tmptanggal=date("Y-m-d", strtotime($DATE));
					}else{
						$KODE_JAM_KERJA = $tampiljam->KODE_JAM_KERJA;
						$ckdate1=date("Y-m-d");
						$ckdate2=date("Y-m-d", strtotime($DATE));
						if($ckdate1>$ckdate2){
							$date1 = str_replace('-', '/', $DATE);
							$tmptanggal = date('Y-m-d',strtotime($date1 . "-1 days"));
						}else{
							$tmptanggal=date("Y-m-d", strtotime($DATE));
						}
					}
					
					$tahan=mysql_query("select NIP_PEGAWAI from absensi where TANGGAL='$tmptanggal' and NIP_PEGAWAI='$NIP'");
					$get=mysql_fetch_object($tahan);
					$hasil=$get->NIP_PEGAWAI;
					
					if($hasil=="" && $state==$tampiljam->KODE_MASUK){
						$qmenit=mysql_query("select VALUE from pengaturan_penggajian where ID='2'");
						$tmenit=mysql_fetch_object($qmenit);
						$ckmenit1=date('i', strtotime($DATE));
						$ckmenit2=date('i', strtotime($tmenit->VALUE));
						if($ckmenit1<=$ckmenit2){
							$smenit=date('H:i:s', strtotime($tampiljam->JAM_DATANG));
						}else{
							$smenit=date('H:i:s', strtotime($DATE));
						}
						
					mysql_query("INSERT INTO absensi VALUES(NULL,'$KODE_JAM_KERJA','$NIP','$tmptanggal','$smenit','00:00:00')");
					header('Content-Type: application/json');
					echo json_encode(array('cek' => 'true','nip'=>$NIP));
					}
					
					if($hasil!=""){
						$tahansemua1=mysql_query("select NIP_PEGAWAI from absensi where TANGGAL='$tmptanggal' and NIP_PEGAWAI='$NIP' and JAM_KELUAR ='00:00:00'");
						$getsemua1=mysql_fetch_object($tahansemua1);
						$hasilgetsemua1=$getsemua1->NIP_PEGAWAI;
						if($hasilgetsemua1!="" ){
						//$jamkeluar=date('H:i:s');
						mysql_query("UPDATE `absensi` SET `JAM_KELUAR` = '$TIME' WHERE `NIP_PEGAWAI` ='$NIP' and TANGGAL='$tmptanggal' ");	
							
						}
					}
					
					}
					
					}
					$zk->clearattendance();				
					$zk->getTime();
					$zk->enableDevice();
					$zk->disconnect();
					 }
					 ?>
		<?php
		$getmachine=mysql_query("select * from mesin_absensi");
		$datamachine=mysql_fetch_object($getmachine);
		$ip=$datamachine->IP_ADDRESS;
		$port=$datamachine->PORT_COM;
		if(!fsockopen($ip, $port)){?>
		<div class="alert alert-danger" style="width: 760px;"" role="alert">Peringatan Koneksi Mesin Finger Print Tidak Terhubung !!!</div>
		<?php } ?>	