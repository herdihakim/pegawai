 <table id="example" class="table table-bordered" border="1">

        <tr>
		<th width="10%" style="background-color:grey">No</th>
		<th style="background-color:grey">Departemen</th>
		<th width="30%" style="background-color:grey">No Rekening</th>
		<th style="background-color:grey">Nama</th>
		<th style="background-color:grey">Jumlah Transfer</th>
		</tr>

<?php
	error_reporting(0);
	include_once "../../include/koneksi.php";
	include("../../include/function_hitunggaji.php");
	$KODE_DEPARTEMEN=$_GET["dept"];
	if($KODE_DEPARTEMEN=="all"){
	$getpegawai=mysql_query("select * from pegawai");
	}
	if($KODE_DEPARTEMEN!="all"){
	$getpegawai=mysql_query("select * from pegawai where  KODE_DEPARTEMEN='$KODE_DEPARTEMEN'");
	}
	$no = 1;
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
	$pinjaman=mysql_query("select * from pinjaman where KODE_PEGAWAI='$kp' and SISA_CICILAN!='0'");
	$getpinjaman=mysql_fetch_object($pinjaman);
	$nominalpinjaman=$getpinjaman->CICILAN_PERBULAN;
	$sisa_cicilan=$getpinjaman->SISA_CICILAN;
	$hutang=gethutang($kp);	
	$gaji_pokok=$data->GAJI_POKOK;
	$uang_makan_transport=$jabatan->NOMINAL_UMT;
	$lembur=number_format(nominalumt(gajilembur($NIP)));
	$terlambat=potogan_terlambat($NIP);
	$tabungan=$jabatan->NOMINAL_TABUNGAN;
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
	$kasbon=$hutang->hutangnya;
	if($datapegawai->STATUS_PEGAWAI=="Tetap"){
	$takehomepay=getthp($NIP) - ($hutang->hutangnya+$nominalpinjaman+$jabatan->NOMINAL_TABUNGAN);
	$total_potongan=number_format($hutang->hutangnya+$jabatan->NOMINAL_TABUNGAN+$nominalpinjaman);
	
	}
	if($datapegawai->STATUS_PEGAWAI=="Kontrak"){
	$takehomepay=getthp($NIP) - (potogan_terlambat($NIP)+$nominalpinjaman+$hutang->hutangnya+$jabatan->NOMINAL_TABUNGAN);
	$total_potongan=number_format(potogan_terlambat($NIP)+$hutang->hutangnya+$jabatan->NOMINAL_TABUNGAN+$nominalpinjaman);
	
	}
	$bulanini=date('m');
	$cek=mysql_query("select MONTH(tanggal_gaji) from head_penggajian where MONTH(tanggal_gaji)='$bulanini' and kode_pegawai='$kp'");
	$getcek=mysql_fetch_object($cek);
	if($getcek==""){
	mysql_query("insert into head_penggajian values('$getkode','$kp','$gaji_pokok','$uang_makan_transport','$lembur','$terlambat','$tabungan','0','$total_potongan','$total_penerimaan','$tanggal_gaji','$KODE_DEPARTEMEN','$takehomepay','$kasbon','$nominalpinjaman')");
	mysql_query("UPDATE `pinjaman` SET `SISA_CICILAN` = '$sisa_cicilan'-1 WHERE KODE_PEGAWAI='$kp'");
	
	$tmptunjanganlain=explode(",",$jabatan->TUNJANGAN_LAIN);
	foreach($tmptunjanganlain as $tmptunjanganlains){
	$pendapatanlain=pendapatan($tmptunjanganlains);
	$nama_tunjangan=$pendapatanlain->NAMA_TUNJANGAN;
	$nominal_tunjangan=$pendapatanlain->NOMINAL;
	mysql_query("insert into detail_tunjangan_penggajian values(NULL,'$getkode','$nama_tunjangan','$nominal_tunjangan')");
	}
	}
	
		echo'
        <tr>
		<td width="10%">'.$no.'</td>
		';
		$penggajiannama=mysql_query("SELECT * FROM departemen where KODE_DEPARTEMEN='$datapegawai->KODE_DEPARTEMEN'") or die (mysql_error());
		$getnamapenggajian=mysql_fetch_object($penggajiannama);
		echo'
		<td>'.$getnamapenggajian->NAMA_DEPARTEMEN.'</td>
		';
		echo'
		<td width="30%">'.$datapegawai->NO_REKENING.'</td>
		<td>'.$datapegawai->NAMA_PEGAWAI.'</td>
		<td>'.number_format($takehomepay).'</td>
		</tr>
		';
		
	
	
	$no++;
	}
	if($getcek!=""){
	echo '<center><p>*Maaf Penggajian sudah dilakukan bulan ini</p></center>';
	}

?>
    </table>