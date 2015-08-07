<?php 
session_start();
$state_session=$_SESSION['STATE_ID'];
error_reporting(0);
include_once "../../include/koneksi.php";
$BULAN=$_GET["BULAN"];
$TAHUN=$_GET["TAHUN"];
$DEPT=$_GET["DEPT"];

?>
<h3>Bulan:<?php echo $BULAN;?>,Tahun:<?php echo $TAHUN;?></h3>
<div class="panel panel-warning">
	<div class="panel-heading">
		<h3 class="panel-title">Laporan pengeluaran gaji</h3>
    </div>
    <div class="panel-body">	


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
		<td>Rp.'.$objectdata->total_gaji.',-</td>
		<td>Rp.'.$objectdata->total_pinjaman.',-</td>
		<td>Rp.'.$objectdata->total_kasbon.',-</td>
		</tr>';
           
	?>
	</tbody>
    </table>
</div>
</div>
</div>

<div class="panel panel-warning">
	<div class="panel-heading">
		<h3 class="panel-title">Detail laporan data gaji</h3>
    </div>
    <div class="panel-body">	


<div class="table-responsive">
 
 <table id="example" class="table table-bordered" border="1">

        <tr>
		<th width="10%" style="background-color:grey">No</th>
		<th style="background-color:grey">Pegawai</th>
		<th style="background-color:grey">Departemen</th>
		<th style="background-color:grey">Gaji Pokok</th>
		<th style="background-color:grey">UMT</th>
		<th style="background-color:grey"> tunjangan</th>
		<th style="background-color:grey">Penghargaan</th>
		<th style="background-color:grey">Kasbon</th>
		<th style="background-color:grey">Pinjaman</th>
		<th style="background-color:grey">Potongan</th>
		<th style="background-color:grey"> masuk</th>
		<th style="background-color:grey">Mangkir</th>
		<th style="background-color:grey">Cuti</th>
		<th style="background-color:grey"> penerimaan</th>
		<th style="background-color:grey">THP</th>
		</tr>
	<?php
	 $no = 0;
	if($DEPT=="all"){
	$query=mysql_query("SELECT * FROM head_penggajian where MONTH(tanggal_gaji)='$BULAN' and YEAR(tanggal_gaji)='$TAHUN'") or die (mysql_error());
       
        
	}
	else{
	$query=mysql_query("SELECT * FROM head_penggajian where MONTH(tanggal_gaji)='$BULAN' and YEAR(tanggal_gaji)='$TAHUN' and departemen='$DEPT'") or die (mysql_error());
  	
		
	}
	while($objectdata=mysql_fetch_object($query)){
	$no++;
		echo'
        <tr>
		<td width="10%">'.$no.'</td>
		';
		$pegawaidata=mysql_query("SELECT * FROM pegawai where KODE_PEGAWAI='$objectdata->kode_pegawai'") or die (mysql_error());
		$getnamapegawaidata=mysql_fetch_object($pegawaidata);
		echo'
		<td>'.$getnamapegawaidata->NAMA_PEGAWAI.'</td>
		';
		$penggajiannama=mysql_query("SELECT * FROM departemen where KODE_DEPARTEMEN='$objectdata->departemen'") or die (mysql_error());
		$getnamapenggajian=mysql_fetch_object($penggajiannama);
		echo'
		<td>'.$getnamapenggajian->NAMA_DEPARTEMEN.'</td>
		';
		echo'
		<td>Rp.'.number_format($objectdata->gaji_pokok).'</td>
		
		<td>Rp.'.number_format($objectdata->uang_makan_transport).'</td>
		
		';
		$tunjangandata=mysql_query("SELECT SUM(nominal_tunjangan) as nomtun from detail_tunjangan_penggajian where kode_penggajian='$objectdata->kode_penggajian'") or die (mysql_error());
		$gettunjangandata=mysql_fetch_object($tunjangandata);
		echo'
		<td>Rp.'.number_format($gettunjangandata->nomtun).'</td>
		<td>Rp.'.number_format($objectdata->penghargaan).'</td>
		<td>Rp.'.$objectdata->kasbon.'</td>
		<td>Rp.'.$objectdata->pinjaman.'</td>
		<td>Rp.'.$objectdata->total_potongan.'</td>
		<td>'.$objectdata->total_masuk.' Hari</td>
		<td>'.$objectdata->mangkir.' Hari</td>
		<td>'.$objectdata->jumlah_cuti.' Hari</td>
		<td>Rp.'.$objectdata->total_penerimaan.'</td>
		<td>Rp.'.number_format($objectdata->thp).'</td>
		</tr>
		';
	
	}

	?>
    </table>
 
 
 
 </div>
</div>
</div>

<div class="panel panel-warning">
	<div class="panel-heading">
		<h3 class="panel-title">Bar Grafik Penggajian</h3>
    </div>
    <div class="panel-body">	
<script src="modul/mod_laporan_gaji/highcharts.js" type="text/javascript"></script>
<script src="modul/mod_laporan_gaji/exporting.js" type="text/javascript"></script>
	<script type="text/javascript">
	var chart1; // globally available
	$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'containera',
            type: 'column'
         },   
         title: {
            text: 'Grafik Pengeluaran Penggajian'
         },
         xAxis: {
            categories: ['Laporan Grafik Penggajian']
         },
         yAxis: {
            title: {
               text: 'Nominal Penggajian'
            }
         },
              series:             
            [
            <?php 
			$sqla = "SELECT distinct(kode_penggajian)  FROM head_penggajian  limit 1";
            $query1 = mysql_query($sqla) or die(mysql_error()); 
            while( $ret = mysql_fetch_array( $query1) ){
            	$merek=$ret['kode_penggajian'];
				$seri=$ret['kode_penggajian'];                     
				$tipe=$ret['kode_penggajian'];  
				
                 $sql_jumlah   = "SELECT count(kode_penggajian) FROM head_penggajian where kode_penggajian='$merek' limit 1";        
				 
				 $query_jumlah = mysql_query($sql_jumlah)  or die(mysql_error()); 
                 while( $data = mysql_fetch_array($query_jumlah ) ){
                    $jumlah = $data[0];   
				if($DEPT=="all"){
        $querypetugas=mysql_query("SELECT sum(thp) as total_gaji,sum(kasbon) as total_kasbon,sum(pinjaman) as total_pinjaman from head_penggajian where YEAR(tanggal_gaji)='$TAHUN' and MONTH(tanggal_gaji)='$BULAN'") or die (mysql_error());
		}
		else{
		$querypetugas=mysql_query("SELECT sum(thp) as total_gaji,sum(kasbon) as total_kasbon,sum(pinjaman) as total_pinjaman from head_penggajian where YEAR(tanggal_gaji)='$TAHUN' and MONTH(tanggal_gaji)='$BULAN' and departemen='$DEPT'") or die (mysql_error());
			
			
		}
		$objectdata=mysql_fetch_object($querypetugas);
                  }             
                  ?>
                  {
                     name: '<?php echo "Total Penggajian".''.$objectdata->total_gaji.''; ?>',
                      data: [<?php echo $objectdata->total_gaji; ?>]
                  }, 
				  {
                      name: '<?php echo "Total Kabon".''.$objectdata->total_kasbon.''; ?>',
                      data: [<?php echo $objectdata->total_kasbon; ?>]
                  },
				  {
                      name: '<?php echo "Total Pinjaman".''.$objectdata->total_pinjaman.''; ?>',
                      data: [<?php echo $objectdata->total_pinjaman; ?>]
                  },
                  <?php } ?>
            ]
      });
   });	
</script>
<div id="containera"></div>

    </div>
</div>

<div class="panel panel-warning">
	<div class="panel-heading">
		<h3 class="panel-title">Pie Chart Penggajian</h3>
    </div>
    <div class="panel-body">
		<script type="text/javascript">
var chart1; // globally available
	$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
           renderTo: 'container1',
           plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
         },   
        
        title: {
            text: 'Presentase Pengeluaran data gaji karyawan'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Data',
            data: [
                <?php 
			$sqla = "SELECT distinct(kode_penggajian)  FROM head_penggajian  limit 1";
            $query1 = mysql_query($sqla) or die(mysql_error()); 
            while( $ret = mysql_fetch_array( $query1) ){
            	$merek=$ret['kode_penggajian'];
				$seri=$ret['kode_penggajian'];                     
				$tipe=$ret['kode_penggajian'];  
				
                 $sql_jumlah   = "SELECT count(kode_penggajian) FROM head_penggajian where kode_penggajian='$merek' limit 1";        
				 
				 $query_jumlah = mysql_query($sql_jumlah)  or die(mysql_error()); 
                 while( $data = mysql_fetch_array($query_jumlah ) ){
                    $jumlah = $data[0];   
				if($DEPT=="all"){
        $querypetugas=mysql_query("SELECT sum(thp) as total_gaji,sum(kasbon) as total_kasbon,sum(pinjaman) as total_pinjaman from head_penggajian where YEAR(tanggal_gaji)='$TAHUN' and MONTH(tanggal_gaji)='$BULAN'") or die (mysql_error());
		}
		else{
		$querypetugas=mysql_query("SELECT sum(thp) as total_gaji,sum(kasbon) as total_kasbon,sum(pinjaman) as total_pinjaman from head_penggajian where YEAR(tanggal_gaji)='$TAHUN' and MONTH(tanggal_gaji)='$BULAN' and departemen='$DEPT'") or die (mysql_error());
			
			
		}
		$objectdata=mysql_fetch_object($querypetugas);
                  }             
                  ?>
                    ['Total Penggajian',<?php echo $objectdata->total_gaji; ?>],
                    ['Total Kasbon Pegawai',<?php echo $objectdata->total_kasbon; ?>],
                    ['Total Pinjaman',<?php echo $objectdata->total_pinjaman; ?>],
              
                    <?php } ?>
            ]
        }]
    });
});


		</script>

<div id="container1" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>


    </div>
</div>