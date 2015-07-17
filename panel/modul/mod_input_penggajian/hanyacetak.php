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
	$hutang=gethutang($NIP);	
	$gaji_pokok=$data->GAJI_POKOK;
	$uang_makan_transport=$jabatan->NOMINAL_UMT;
	$lembur=number_format(nominalumt(gajilembur($NIP)));
	$terlambat=potogan_terlambat($NIP);
	$tabungan=$jabatan->NOMINAL_TABUNGAN;
	$total_potongan=number_format(potogan_terlambat($NIP)+$hutang->hutangnya+$jabatan->NOMINAL_TABUNGAN);
	$total_penerimaan=number_format(getthp($NIP));
	$tanggal_gaji=date("Y-m-d");
	if($datapegawai->STATUS_PEGAWAI=="Tetap"){
	$takehomepay=number_format(getthp($NIP) - ($hutang->hutangnya+$jabatan->NOMINAL_TABUNGAN));
	}
	if($datapegawai->STATUS_PEGAWAI=="Kontrak"){
	$takehomepay=number_format(getthp($NIP) - (potogan_terlambat($NIP)+$hutang->hutangnya+$jabatan->NOMINAL_TABUNGAN));
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
		<td>'.$takehomepay.'</td>
		</tr>
		';
		
	
	
	$no++;
	}
	

?>
    </table>