<?php
	error_reporting(0);
    include_once "../../include/koneksi.php";
    session_start();
 
	$state_session=$_SESSION['STATE_ID'];
    $id = $_POST['id'];
	
    $data = mysql_fetch_array(mysql_query("
        SELECT * FROM penyesuaian_absensi WHERE ID=".$id
    ));
		
    if($id> 0) { 
    $ID = $data['ID'];
    $KODE_PEGAWAI = $data['KODE_PEGAWAI'];
	$JUMLAH_PENYESUAIAN_ABSEN = $data['JUMLAH_PENYESUAIAN_ABSEN'];
	$JUMLAH_PENYESUAIAN_ABSEN = $data['JUMLAH_PENYESUAIAN_ABSEN'];
	$KODE_PETUGAS = $data['KODE_PETUGAS'];

	
    } else {
	$ID = "";
	$KODE_PEGAWAI = "";
	$JUMLAH_PENYESUAIAN_ABSEN = "";
	$TANGGAL_AKSES = "";
	$KODE_PETUGAS = "";
	
	}
?>
		<script>

	$(function(){ // sama dengan $(document).ready(function(){

		$('#JUMLAH_PENYESUAIAN_ABSEN').change(function(){

			$('#detail').html("<img src='crud/penyesuaian_absen/ajax-loader.gif'>"); //Menampilkan loading selama proses pengambilan data kota

			var id = $(this).val();//Mengambil id provinsi

			$.get("crud/penyesuaian_absen/detail.php", {id:id}, function(data){
				$('#detail').html(data);
			});
		});
		
		

	});

	</script>
<form class="form-horizontal penyesuaian_absenForm" id="penyesuaian_absenForm" action="crud/penyesuaian_absen/penyesuaian_absen.input.php" type="POST">
    <div class="modal-body">
		<div class="form-group">
				<label class="col-sm-3 control-label"></label>
				<div class="col-sm-9">
				<span><i class="glyphicon glyphicon-asterisk"></i> <strong style="color:red;">Wajib Di Isi</strong></span>
				</div>
		</div>
		 <div class="form-group">
            <label for="KODE_PEGAWAI" class="col-sm-3 control-label">Pegawai</label>
            <div class="col-sm-9">
			<?php
                    $result = mysql_query("select * from pegawai  where STATE_ID='$state_session'");  
                    echo '<select id="KODE_PEGAWAI" name="KODE_PEGAWAI" style="width: 100%;" class="KODE_PEGAWAI form-control ">';  
                        echo '<option value="">Silahkan Pilih Pegawai</option>';  
			while ($row = mysql_fetch_array($result)) {  
                            echo '<option value="' . $row['KODE_PEGAWAI'] . '"';if($KODE_PEGAWAI==$row['KODE_PEGAWAI']){echo "selected='selected'";} echo'>'.$row['NIP_PEGAWAI'].' - '.$row['NAMA_PEGAWAI']. '</option>';  
			}  
                    echo '</select>';
		?>
            </div>
		</div>
		
        <div class="form-group">
            <label for="JUMLAH_PENYESUAIAN_ABSEN" class="col-sm-3 control-label">Jumlah penyesuaian</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" value="<?php echo $JUMLAH_PENYESUAIAN_ABSEN; ?>" id="JUMLAH_PENYESUAIAN_ABSEN" name="JUMLAH_PENYESUAIAN_ABSEN" placeholder="Masukan jumlah hari" \>
			<input type="hidden" class="form-control" value="<?php echo $ID; ?>" id="ID" name="ID"  \>
			
            </div>
		</div>
		<div class="form-group">
		<div style="margin-left:2%"><span id="detail"></span></div>
		</div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal Simpan</button>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function() {
		 $(document).ready(function() {
            $(".KODE_PEGAWAI").select2();
        });
	 $('#datePicker').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
	});
	$('#penyesuaian_absenForm')
	
	.on('success.form.fv', function(e) {
            e.preventDefault();

            var $form = $(e.target),
                fv    = $form.data('formValidation');

            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: $form.serialize(),
                success: function() {
                    $('#dialog-penyesuaian_absen').modal('hide');
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
		NAMA_penyesuaian_absen: {
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
