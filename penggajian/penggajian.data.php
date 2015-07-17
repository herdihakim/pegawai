<?php
include("../panel/include/function_hitunggaji.php");
$NIP2=$_POST['NIP'];

$getNIP=mysql_query("select * from pegawai where NIP_PEGAWAI='$NIP2'");
$dataNIP=mysql_fetch_object($getNIP);
$cekNIP=mysql_num_rows($getNIP);
if($cekNIP>0){
$NIP=$dataNIP->NIP_PEGAWAI;
$data=pegawai($NIP);
$jabatan=jabatan($data->KODE_JABATAN);
$departemen=departemen($data->KODE_DEPARTEMEN);
$hutang=gethutang($NIP);


	
?>
	<table class="table table-bordered">
	<thead>
  <tr>
    <th colspan="4">
	<table width="100%">
      <tr>
          <td width="12%">No Slip </td>
          <td width="1%">:</td>
		  <td width="27%">P<?php echo date('Ymd')?>001</td>
		  
		  <td width="12%">NIP / NAMA</td>
          <td width="1%">:</td>
		  <td width="27%"><?php echo $data->NIP_PEGAWAI;?> - <?php echo $data->NAMA_PEGAWAI;?></td>
		 
        </tr>
		 <tr>
		  <td width="12%">DEPARTEMEN</td>
          <td width="1%">:</td>
		  <td width="37%"><?php echo $departemen->NAMA_DEPARTEMEN;?></td>
          <td width="12%">JABATAN</td>
          <td width="1%">:</td>
		  <td width="37%"><?php echo $jabatan->NAMA_JABATAN;?></td>
		 
        </tr>
      </table>
	</th>

  </tr>
  </thead>
  
  <tbody>
  <tr>
    <td width="50%" colspan="2">PENERIMAAN</td>
    <td width="50%" colspan="2">POTONGAN</td>
  </tr>
  <tr>
    <td colspan="2">
		<table width="100%">
      <tr>
          <td width="50%">Gaji Pokok</td>
          <td width="50%">Rp.<?php echo number_format($data->GAJI_POKOK);?>,-</td>
        </tr>
		<?php
			$tmptunjanganlain=explode(",",$jabatan->TUNJANGAN_LAIN);
			foreach($tmptunjanganlain as $tmptunjanganlains){
			$pendapatanlain=pendapatan($tmptunjanganlains);
		?>
		<tr>
          <td width="50%"><?php echo $pendapatanlain->NAMA_TUNJANGAN;?></td>
          <td width="50%">Rp.<?php echo number_format($pendapatanlain->NOMINAL);?>,-</td>
        </tr>
		<?php } ?>
		<tr>
          <td width="50%">Uang Makan & Transport</td>
          <td width="50%">Rp.<?php echo number_format(nominalumt($jabatan->NOMINAL_UMT));?>,-</td>
        </tr>
		<tr>
          <td width="50%">Lembur(<?php echo jmlembur($NIP);?> Jam)</td>
          <td width="50%">Rp.<?php echo number_format(nominalumt(gajilembur($NIP)));?>,-</td>
        </tr>
		
      </table>
	</td>
	<td colspan="2">
		<table width="100%">
      <tr>
          <td width="50%"></td>
          <td width="50%"></td>
        </tr>
	  <tr>
          <td width="50%">Terlambat(<?php echo gettelat($NIP);?> Jam / <?php echo getjumlahtelat($NIP);?> Hari)</td>
          <td width="50%"> Rp.<?php echo number_format(potogan_terlambat($NIP));?></td>
      </tr> 
	  <tr>
          <td width="50%">Total Hutang</td>
          <td width="50%">Rp.<?php echo number_format($hutang->hutangnya);?>,-</td>
      </tr> 
	  <tr>
          <td width="50%">Tabungan</td>
          <td width="50%">Rp.<?php echo number_format($jabatan->NOMINAL_TABUNGAN);?>,-</td>
      </tr>
		</table>
	</td>
  </tr>
  </tbody>
  
  <tfoot>
  <tr>
    <th colspan="4">
	<table width="100%">
      <tr>
          <td width="25%">TOTAL PENERIMAAN</td>
		  <td width="25%">Rp.<?php echo number_format(getthp($NIP));?>,-</td>
		  <td width="25%">TOTAL POTONGAN</td>
		  <td width="25%">Rp.<?php echo number_format(potogan_terlambat($NIP)+$hutang->hutangnya+$jabatan->NOMINAL_TABUNGAN);?></td>
        </tr>
		
      </table>
	
	</th>
	 
  </tr>
  <tr>
  <th colspan="2">
		<table width="100%">
			  <tr>
				  <td width="15%">TAKE HOME PAY</td>
				   <td width="1%">:</td>
				  <td width="37%">Rp.<?php echo number_format(getthp($NIP) - (potogan_terlambat($NIP)+$hutang->hutangnya+$jabatan->NOMINAL_TABUNGAN));?>,-</td>
				</tr>
				</table>
	 </th>
	 <th colspan="2">
	
	 </th>
  </tr>
  </tfoot>
</table>


	<?php 
	} else{
		echo 'false';
	}
	?>