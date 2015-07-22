<?php 
include_once "../../include/koneksi.php";
session_start();

$BULAN=$_GET["BULAN"];
$TAHUN=$_GET["TAHUN"];
$DEPT=$_GET["DEPT"];

?>
<h3>Data Laporan Gaji </h3>
<p>Bulan:<?php echo $BULAN;?> </p>
<p>Tahun:<?php echo $TAHUN;?> </p>
<div class="table-responsive">
    <table id="example" class="table table-bordered">
	<thead>
            <tr>
		
		<th>Total Penggajian</th>
		<th>Total Pinjaman</th>
		<th>Total Kasbon</th>
        </tr>
	</thead>
	<tbody>
	<?php
		if($DEPT=="all"){
        $querypetugas=mysql_query("SELECT sum(thp) as total_gaji,sum(kasbon) as total_kasbon,sum(pinjaman) as total_pinjaman from head_penggajian where YEAR(tanggal_gaji)='$TAHUN' and MONTH(tanggal_gaji)='$BULAN'") or die (mysql_error());
		}
		else{
		$querypetugas=mysql_query("SELECT sum(thp) as total_gaji,sum(kasbon) as total_kasbon,sum(pinjaman) as total_pinjaman from head_penggajian where YEAR(tanggal_gaji)='$TAHUN' and MONTH(tanggal_gaji)='$BULAN' and departemen='$DEPT'") or die (mysql_error());
			
			
		}
		$objectdata=mysql_fetch_object($querypetugas);
		echo'
        <tr>
		<td>Rp.'.number_format($objectdata->total_gaji).',-</td>
		<td>Rp.'.number_format($objectdata->total_pinjaman).',-</td>
		<td>Rp.'.number_format($objectdata->total_kasbon).',-</td>
		</tr>';
           
	?>
	</tbody>
    </table>
</div>
