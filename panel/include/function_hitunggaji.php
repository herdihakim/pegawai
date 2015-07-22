<?php
include("koneksi.php");

function pegawai($NIP){
	
$querypegawai=mysql_query("select * from pegawai where NIP_PEGAWAI='$NIP'");	
$getpegawai=mysql_fetch_object($querypegawai);
return $getpegawai; 	 
}


function jabatan($KODE_JABATAN){

$queryumt=mysql_query("select * from jabatan where KODE_JABATAN='$KODE_JABATAN'");	
$getumt=mysql_fetch_object($queryumt);

return $getumt;	
	
}
function departemen($KODE_DEPARTEMEN){

$querydep=mysql_query("select * from departemen where KODE_DEPARTEMEN='$KODE_DEPARTEMEN'");	
$getdep=mysql_fetch_object($querydep);

return $getdep;	
	
}

function pendapatan($KODE_MASTER_TUNJANGAN){

$querypen=mysql_query("select * from master_tunjangan where KODE_MASTER_TUNJANGAN='$KODE_MASTER_TUNJANGAN'");	
$getpen=mysql_fetch_object($querypen);

return $getpen;	
	
}
function nominalumt($NOMINAL_UMT){

$totalumt=$NOMINAL_UMT;

return $totalumt;	
	
}
function pengaturangaji($ID){

$querypengaturangaji=mysql_query("select * from pengaturan_penggajian where ID='$ID'");	
$getpengaturangaji=mysql_fetch_object($querypengaturangaji);

return $getpengaturangaji;	
	
}
function absensi($KODE_PEGAWAI){
$queryabsensi_data=mysql_query("SELECT * FROM absensi where NIP_PEGAWAI='$KODE_PEGAWAI'") or die (mysql_error());
$getabsensi=mysql_fetch_array($queryabsensi_data);	
	
return $getabsensi;	
}

function gethutang($NIP_PEGAWAI){
$bulansekarang=date('m');
$queryhutang=mysql_query("select sum(NOMINAL) as hutangnya from kasbon_pegawai where NIP_PEGAWAI='$NIP_PEGAWAI' and MONTH(TANGGAL)='$bulansekarang'");	
$gethutang=mysql_fetch_object($queryhutang);

return $gethutang;	
	
}
function gettelat($NIP){
$telat2=0;
$pegawai=pegawai($NIP);
$pengaturangaji=pengaturangaji(2);
$waktukerjalembur=waktukerjalembur(1);
$batastelat2=$waktukerjalembur->JAM_DATANG;
$bulansekarang=date('m');
$queryabsensi_data=mysql_query("SELECT * FROM absensi where JAM_MASUK > '$batastelat2' and NIP_PEGAWAI='$pegawai->KODE_PEGAWAI' and MONTH(TANGGAL)='$bulansekarang'") or die (mysql_error());
while($absensi=mysql_fetch_array($queryabsensi_data)){
$waktukerja=waktukerjalembur($absensi["KODE_JAM_KERJA"]);
$jamkantormasuk=new DateTime($waktukerja->JAM_DATANG);
$jammasukpegawai=new DateTime($absensi["JAM_MASUK"]);
$jammasukpegawai1=$absensi["JAM_MASUK"];
$batastelat=$pengaturangaji->VALUE;
$time = $jamkantormasuk->diff($jammasukpegawai);
$menit=$time->format('%i');
//if($menit > 15){
	$jam=strtotime($jammasukpegawai1)+60*60*1;
	$param1=date('H:i:s',$jam);
	$param2=New DateTime($param1);
	$param3=$param2->diff($jamkantormasuk);
	$a=$param3->format('%H');
	$telat2=$a+$telat2;
	
//}	
}
	
return $telat2;
}


function getjumlahtelat($NIP){

$pegawai=pegawai($NIP);
$waktukerjalembur=waktukerjalembur(1);
$bulansekarang=date('m');
$batastelat=$waktukerjalembur->JAM_DATANG;
$getjumlahtelat=mysql_query("SELECT count(JAM_MASUK) from absensi where JAM_MASUK > '$batastelat' and MONTH(TANGGAL)='$bulansekarang' and NIP_PEGAWAI='$pegawai->KODE_PEGAWAI' ");	
$hasilget=mysql_fetch_array($getjumlahtelat);
$data=$hasilget[0];

	

	
return $data;
}

function potogan_terlambat($NIP){

$pegawai=pegawai($NIP);
$waktukerjalembur=waktukerjalembur(1);
$bulansekarang=date('m');
$batastelat=$waktukerjalembur->JAM_DATANG;


$pengaturangaji=pengaturangaji(2);
$nominaltelat=$pengaturangaji->VALUE;
$tmptunjanganlain=array();
$tmptunjanganlain=explode(",",$nominaltelat);
$getnominal=$tmptunjanganlain[1];

$getjumlahtelat=mysql_query("SELECT count(JAM_MASUK) from absensi where JAM_MASUK > '$batastelat' and MONTH(TANGGAL)='$bulansekarang' and NIP_PEGAWAI='$pegawai->KODE_PEGAWAI'");	
$hasilget=mysql_fetch_array($getjumlahtelat);
$data=$hasilget[0];

$akumulasi=$data * $getnominal;

	

	
return $akumulasi;
}



function jmlembur($NIP){
$pegawai=pegawai($NIP);
$ttlembur=0;
$a=0;
//$absensi=absensi($pegawai->KODE_PEGAWAI);

$queryabsensi_data=mysql_query("SELECT * FROM absensi where NIP_PEGAWAI='$pegawai->KODE_PEGAWAI'") or die (mysql_error());
while($absensi=mysql_fetch_array($queryabsensi_data)){
$waktukerja=waktukerjalembur($absensi["KODE_JAM_KERJA"]);
$start=new DateTime($waktukerja->JAM_PULANG);
$end=new DateTime($absensi["JAM_KELUAR"]);
$lembur = $end->diff($start)->format('%h'); 
$a=$lembur+$a;
$ttlembur=$a;

}

return $ttlembur;	
	
}

function waktukerjalembur($KODE_JAM_KERJA){

$querywaktukerja=mysql_query("select * from jam_kerja where KODE_JAM_KERJA='$KODE_JAM_KERJA'");	
$getwaktukerja=mysql_fetch_object($querywaktukerja);

return $getwaktukerja;	
	
}
function waktukerja($KODE_JAM_KERJA){

$querywaktukerja=mysql_query("select * from jam_kerja where KODE_JAM_KERJA='$KODE_JAM_KERJA'");	
$getwaktukerja=mysql_fetch_object($querywaktukerja);
$start = new DateTime($getwaktukerja->JAM_DATANG);
$end = new DateTime($getwaktukerja->JAM_PULANG);
$ttljam=$end->diff($start)->format("%h") != 0 ? $end->diff($start)->format("%h") : 24;
return $ttljam;	
	
}
function gajilembur($NIP){

$tampilpengaturangaji=pengaturangaji(3);
$harisebulan=pengaturangaji(1);
$ttlwaktukerja=waktukerja(1);
$ttharisebln=($harisebulan->VALUE*4)*$ttlwaktukerja;

$jmllembur=jmlembur($NIP);
if($tampilpengaturangaji->VALUE=="THP"){
	$valthp=getthp($NIP);
	$vlembur=((1/$ttharisebln)*$valthp)*$jmllembur;
}
if($tampilpengaturangaji->VALUE=="GAJI POKOK"){
	$datapeg=pegawai($NIP);
	$vlembur=((1/$ttharisebln)*$datapeg->GAJI_POKOK)*$jmllembur;
}

return $vlembur;	
	
}


function getthp($NIP){

$datapeg=pegawai($NIP);	
$gajipokok=$datapeg->GAJI_POKOK;

$dataumt=jabatan($datapeg->KODE_JABATAN);
$umt=$dataumt->NOMINAL_UMT;
$TUNJANGAN_LAIN=$dataumt->TUNJANGAN_LAIN;

$gjlembur=gajilembur($NIP);

$tmptunjanganlain=array();
$tmptunjanganlain=explode(",",$TUNJANGAN_LAIN);

$querytunjangan=mysql_query("select sum(NOMINAL) as tunjangan from master_tunjangan where KODE_MASTER_TUNJANGAN IN($TUNJANGAN_LAIN)");
$gettunjangan=mysql_fetch_object($querytunjangan);
$tunjangan=$gettunjangan->tunjangan;

$thp=$gajipokok+$umt+$tunjangan+$gjlembur;
	
return  $thp;
}


?>