<?php
    include_once "../../include/koneksi.php";
    session_start();

    $id = $_POST['id'];

    $data = mysql_fetch_array(mysql_query("
        SELECT * FROM profil_perusahaan WHERE id=".$id
    ));
		
    if($id> 0) { 
    $id = $data['id'];
    $NAMA_PERUSAHAAN = $data['NAMA_PERUSAHAAN'];
	$EMAIL = $data['EMAIL'];
	$PHONE_1 = $data['PHONE_1'];
	$PHONE_2 = $data['PHONE_2'];
	$KOTA = $data['KOTA'];
	$FAXIMILI = $data['FAXIMILI'];
	$ALAMAT = $data['ALAMAT'];
	$NEGARA = $data['NEGARA'];
    } else {
	$NAMA_PERUSAHAAN ="";
	$EMAIL = "";
	$PHONE_1 = "";
	$PHONE_2 = "";
	$KOTA = "";
	$FAXIMILI = "";
	$ALAMAT ="";
	$NEGARA ="";
	
    }
?>
	
<form class="form-horizontal petugasForm" id="petugasForm" action="crud/info/info.input.php" type="POST">
    <div class="modal-body">
        <div class="form-group">
            <label for="NAMA_PERUSAHAAN" class="col-sm-3 control-label">  Perusahaan</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" value="<?php echo $NAMA_PERUSAHAAN; ?>" id="NAMA_PERUSAHAAN" name="NAMA_PERUSAHAAN"  \>
			<input type="hidden" class="form-control" value="<?php echo $id; ?>" id="id" name="id"  \>
			 </div>
	</div>
	<div class="form-group">
            <label for="EMAIL" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" value="<?php echo $EMAIL; ?>" id="EMAIL" name="EMAIL"  \>
            </div>
	</div>
	<div class="form-group">
            <label for="PORT_COM" class="col-sm-3 control-label">Phone 1</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" value="<?php echo $PHONE_1; ?>" id="PHONE_1" name="PHONE_1"  \>
            </div>
	</div>
	
	<div class="form-group">
            <label for="PORT_COM" class="col-sm-3 control-label">Phone 2</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" value="<?php echo $PHONE_2; ?>" id="PHONE_2" name="PHONE_2"  \>
            </div>
	</div>
	<div class="form-group">
            <label for="PORT_COM" class="col-sm-3 control-label">Kota</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" value="<?php echo $KOTA; ?>" id="KOTA" name="KOTA"  \>
            </div>
	</div>
	<div class="form-group">
            <label for="PORT_COM" class="col-sm-3 control-label">Faximili</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" value="<?php echo $FAXIMILI; ?>" id="FAXIMILI" name="FAXIMILI"  \>
            </div>
	</div>
	<div class="form-group">
            <label for="PORT_COM" class="col-sm-3 control-label">Negara</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" value="<?php echo $NEGARA; ?>" id="NEGARA" name="NEGARA"  \>
            </div>
	</div>	
	<div class="form-group">
            <label for="PORT_COM" class="col-sm-3 control-label">Alamat</label>
            <div class="col-sm-9">
			<textarea class="form-control" id="ALAMAT" name="ALAMAT"  \><?php echo $ALAMAT; ?></textarea>
            </div>
	</div>
	
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal Simpan</button>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>
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
                    $('#dialog-info').modal('hide');
                }
            });
        })
	.formValidation({
            message: 'This value is not valid',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
		NAMA_info: {
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
