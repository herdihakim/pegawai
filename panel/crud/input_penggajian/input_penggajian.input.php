<?php
	error_reporting(0);
	include_once "../../include/koneksi.php";
	include("../../include/function_hitunggaji.php");
	$KODE_DEPARTEMEN=$_POST["KODE_DEPARTEMEN"];
	if($KODE_DEPARTEMEN=="all"){
	$getpegawai=mysql_query("select * from pegawai");
	}
	if($KODE_DEPARTEMEN!="all"){
	$getpegawai=mysql_query("select * from pegawai where  KODE_DEPARTEMEN='$KODE_DEPARTEMEN'");
	}
	while($datapegawai=mysql_fetch_object($getpegawai)){
	$NIP=$datapegawai->NIP_PEGAWAI;
	$data=pegawai($NIP);
	$kp=$data->KODE_PEGAWAI;
	$jabatan=jabatan($data->KODE_JABATAN);
	$departemen=departemen($data->KODE_DEPARTEMEN);
	if($KODE_DEPARTEMEN=="all"){
	$KODE_DEPARTEMEN=$datapegawai->KODE_DEPARTEMEN;
	}
	if($KODE_DEPARTEMEN!="all"){
	$KODE_DEPARTEMEN=$datapegawai->KODE_DEPARTEMEN;
	}
	$hutang=gethutang($NIP);	
	$gaji_pokok=$data->GAJI_POKOK;
	$uang_makan_transport=$jabatan->NOMINAL_UMT;
	$lembur=number_format(nominalumt(gajilembur($NIP)));
	$terlambat=potogan_terlambat($NIP);
	$tabungan=$jabatan->NOMINAL_TABUNGAN;
	$total_potongan=number_format(potogan_terlambat($NIP)+$hutang->hutangnya+$jabatan->NOMINAL_TABUNGAN);
	$total_penerimaan=number_format(getthp($NIP));
	$tanggal_gaji=date("Y-m-d");
	$query = "SELECT max(kode_penggajian) as idMaks FROM head_penggajian";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$nim = $data['idMaks'];
	$noUrut = (int) substr($nim, 3, 3);
	$noUrut++;
	$inisial="P";
	$w = $inisial.date('m');
	$IDbaru = $char . sprintf("%03s", $noUrut);
	$getkode=$w.$IDbaru;
	$tipe=$_POST["tipe"];
	if($datapegawai->STATUS_PEGAWAI=="Tetap"){
	$takehomepay=number_format(getthp($NIP) - ($hutang->hutangnya+$jabatan->NOMINAL_TABUNGAN));
	}
	if($datapegawai->STATUS_PEGAWAI=="Kontrak"){
	$takehomepay=number_format(getthp($NIP) - (potogan_terlambat($NIP)+$hutang->hutangnya+$jabatan->NOMINAL_TABUNGAN));
	}
	if($tipe=="SIMPAN"){
	mysql_query("insert into head_penggajian values('$getkode','$kp','$gaji_pokok','$uang_makan_transport','$lembur','$terlambat','$tabungan','0','$total_potongan','$total_penerimaan','$tanggal_gaji','$KODE_DEPARTEMEN','$takehomepay')");
	$tmptunjanganlain=explode(",",$jabatan->TUNJANGAN_LAIN);
	foreach($tmptunjanganlain as $tmptunjanganlains){
	$pendapatanlain=pendapatan($tmptunjanganlains);
	$nama_tunjangan=$pendapatanlain->NAMA_TUNJANGAN;
	$nominal_tunjangan=$pendapatanlain->NOMINAL;
	mysql_query("insert into detail_tunjangan_penggajian values(NULL,'$getkode','$nama_tunjangan','$nominal_tunjangan')");
	}
	header('Content-Type: application/json');
	echo json_encode(array('tipe' => 'SIMPAN'));
	}
	}
	
	if($tipe=="CETAK"){
	$KODE_DEPARTEMEN=$_POST["KODE_DEPARTEMEN"];
	header('Content-Type: application/json');
	if($KODE_DEPARTEMEN=="all"){
	echo json_encode(array('tipe' => 'CETAK','departemen'=>"all"));
	}
	if($KODE_DEPARTEMEN!="all"){
	echo json_encode(array('tipe' => 'CETAK','departemen'=>$KODE_DEPARTEMEN));
	}
	}
	if($tipe=="CETAKSIMPAN"){
	$KODE_DEPARTEMEN=$_POST["KODE_DEPARTEMEN"];
	header('Content-Type: application/json');
	if($KODE_DEPARTEMEN=="all"){
	echo json_encode(array('tipe' => 'CETAKSIMPAN','departemen'=>"all"));
	}
	if($KODE_DEPARTEMEN!="all"){
	echo json_encode(array('tipe' => 'CETAKSIMPAN','departemen'=>$KODE_DEPARTEMEN));
	}
	}

?>
