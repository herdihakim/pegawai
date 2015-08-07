<style>
.chart-wrapper {
 position: relative;
    padding-bottom: 40%;
}

.chart-inner {
position: absolute;
    width: 100%; height: 100%;
}

		.blink_me {
    -webkit-animation-name: blinker;
    -webkit-animation-duration: 1s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;

    -moz-animation-name: blinker;
    -moz-animation-duration: 1s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;

    animation-name: blinker;
    animation-duration: 1s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}

@-moz-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@-webkit-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}
	</style>
	
	<?php
						include("../panel/include/function_hitunggaji.php");
						$NIP1=$_GET["NIP"];
						$get=mysql_query("select * from pegawai where KODE_PEGAWAI='$NIP1'");
						$view=mysql_fetch_object($get);
						
						$NIP=$view->NIP_PEGAWAI;
						$data=pegawai($NIP);
						$jabatan=jabatan($data->KODE_JABATAN);
						$departemen=departemen($data->KODE_DEPARTEMEN);
						$hutang=gethutang($NIP);
						
						 $taggal=date("Y-m-d");
						 $queryabsensi_data=mysql_query("SELECT * FROM absensi where TANGGAL='$taggal' and NIP_PEGAWAI='$NIP1'") or die (mysql_error());
						 $objectdata=mysql_fetch_object($queryabsensi_data);
						 $queryjam=mysql_query("SELECT * FROM jam_kerja WHERE KODE_JAM_KERJA=".$objectdata->KODE_JAM_KERJA) or die (mysql_error());
							$tampiljam=mysql_fetch_object($queryjam);
							$jammasukkantor=new DateTime($tampiljam->JAM_DATANG);
							$jammasukpegawai=new DateTime($objectdata->JAM_MASUK);
							$cek=$jammasukpegawai->diff($jammasukkantor)->format('%i');
							$terlambat=$jammasukpegawai->diff($jammasukkantor)->format('%h jam %i menit ');
						?>

<script>
					$(function () {
    $('#container2').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Grafik Kehadiran'
        },
        subtitle: {
            text: 'Source: Wikipedia.org'
        },
        xAxis: {
            categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Absensi',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: '<?php echo $view->NAMA_PEGAWAI; ?>',
            data: [107, 31, 65, 80, 2]
        }, ]
    });
	var chart = $('#container2').highcharts();
    $('#dialog-info').on('show.bs.modal', function() {
        $('#container2').css('visibility', 'hidden');
    });
    $('#dialog-info').on('shown.bs.modal', function() {
        $('#container2').css('visibility', 'initial');
        chart.reflow();
    });   
});
					</script>
					

					
						  <div class="modal-body">
						  <div class="row">
								  <div class="col-md-6">
								  	<div class="panel price panel-blue">
						
						
						<div class="panel-heading  text-center">
						<div style="font-size:15pt"><img width="70" 
						src="
						<?php
						if($view->FOTO_PEGAWAI!=""){
						echo '../panel/foto/pegawai/'.$view->FOTO_PEGAWAI.'';
						 }
						 else{
						echo '../User-Profile.png';
							 
							 
						 }
						 ?>
						">&nbsp;<?php echo $view->NAMA_PEGAWAI;?></div>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><ul><li>Terlambat Bulan Ini : <span style="color:blue;"><?php echo gettelat($NIP);?> Jam dari <?php echo getjumlahtelat($NIP);?> Hari</span></li></ul></li>
							<li class="list-group-item"><ul><li>Lembur Bulan Ini : <span style="color:blue;"><?php echo jmlembur($NIP);?> Jam</span></li></ul></li>
							<li class="list-group-item"><ul><li>Pendapatan Bulan Ini : <span style="color:blue;">Rp.<?php echo number_format(getthp($NIP));?>,-</span></li></ul></li>
							
						</ul>
					
					</div>
								  
								  </div>
								  <div class="col-md-6">
									
											<div class="well">
												<div id="container2" style="height:300px;"></div>
											</div>
										
									</div>
								  
									

								 
						<div class="col-md-12">		  
						<?php if($cek>15){ ?>
							<div class="alert alert-danger"  style="width: 100%;"" role="alert"><center>
							<h5><b><span class="blink_me">Harap Tingkatkan Ketepatan Waktu Anda!!! (<span style="color:blue;">TerLlambar : <?php echo $terlambat; ?></span>)</span></b></h5>
							</center></div>
						<?php } ?>
						</div>
						</div>
						</div>