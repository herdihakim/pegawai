<?php
    include_once "../../include/koneksi.php";
    session_start();
	$KODE_DEPARTEMEN=$_POST['id'];
	$getdept=mysql_query("select * from departemen where KODE_DEPARTEMEN='$KODE_DEPARTEMEN'");
	$viewdept=mysql_fetch_object($getdept);
?>

	<p>Departemen : <?php echo $viewdept->NAMA_DEPARTEMEN;?><p/>

	 <table id="example" class="table table-bordered" border="1">

        <tr>
		<th width="10%" style="background-color:grey">No</th>
		<th width="30%" style="background-color:grey">No Rekening</th>
		<th style="background-color:grey">Nama</th>
		<th style="background-color:grey">Jumlah Transfer</th>
		</tr>

<?php
	error_reporting(0);
	include_once "../../include/koneksi.php";
	include("../../include/function_hitunggaji.php");

	$getpegawai=mysql_query("select * from pegawai where KODE_DEPARTEMEN='$KODE_DEPARTEMEN'");
	
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
	$tmptunjanganlain=explode(",",$jabatan->TUNJANGAN_LAIN);
	foreach($tmptunjanganlain as $tmptunjanganlains){
	$pendapatanlain=pendapatan($tmptunjanganlains);
	$nama_tunjangan=$pendapatanlain->NAMA_TUNJANGAN;
	$nominal_tunjangan=$pendapatanlain->NOMINAL;
	}
	
		echo'
        <tr>
		<td width="10%">'.$no.'</td>
		';
		$penggajiannama=mysql_query("SELECT * FROM departemen where KODE_DEPARTEMEN='$datapegawai->KODE_DEPARTEMEN'") or die (mysql_error());
		$getnamapenggajian=mysql_fetch_object($penggajiannama);
		
		echo'
		<td width="30%">'.$datapegawai->NO_REKENING.'</td>
		<td>'.$datapegawai->NAMA_PEGAWAI.'</td>
		<td>Rp.'.$takehomepay.'</td>
		</tr>
		';
		
	
	
	$no++;
	}
	

?>
    </table>
<script type="text/javascript">
    $(document).ready(function() {
	$('#petugasForm')
	
	.on('success.form.fv', function(e) {
            e.preventDefault();

            var $form = $(e.target),
                fv    = $form.data('formValidation');

            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: $form.serialize(),
                success: function() {
                    $('#dialog-departemen').modal('hide');
                }
            });
        })
		.on('init.field.fv', function(e, data) {

            var $icon      = data.element.data('fv.icon'),
                options    = data.fv.getOptions(), 
                validators = data.fv.getOptions(data.field).validators; 

            if (validators.notEmpty && options.icon && options.icon.required) {
                $icon.addClass(options.icon.required).show();
            }
        })
	.formValidation({
            message: 'This value is not valid',
            icon: {
				required: 'glyphicon glyphicon-asterisk',
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
		NAMA_DEPARTEMEN: {
                    validators: {
                        notEmpty: {
                            message: 'The is required'
                        },
                        stringLength: {
                            max: 50,
                            message: 'The must be less than 50 characters'
                        }
                    }
                },
            }
        });
    });
</script>
