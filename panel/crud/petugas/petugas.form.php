<?php
    include_once "../../include/koneksi.php";
    session_start();

    $id = $_POST['id'];

    $data = mysql_fetch_array(mysql_query("
        SELECT * FROM petugas WHERE KODE_PETUGAS=".$id
    ));
		
    if($id> 0) { 
    $KODE_PETUGAS = $data['KODE_PETUGAS'];
	$NAMA_PETUGAS = $data['NAMA_PETUGAS'];
	$EMAIL = $data['EMAIL'];
	$USERNAME_LOGIN = $data['USERNAME_LOGIN'];
	$PASSWORD_LOGIN = $data['PASSWORD_LOGIN'];
    } else {
	$KODE_PETUGAS = "";
	$NAMA_PETUGAS = "";
	$EMAIL = "";
	$USERNAME_LOGIN = "";
	$PASSWORD_LOGIN = "";
	
    }
?>
	
<form class="form-horizontal petugasForm" id="petugasForm" action="crud/petugas/petugas.input.php" type="POST">
    <div class="modal-body">
		<div class="form-group">
				<label class="col-sm-3 control-label"></label>
				<div class="col-sm-9">
				<span><i class="glyphicon glyphicon-asterisk"></i> <strong style="color:red;">Wajib Di Isi</strong></span>
				</div>
		</div>
        <div class="form-group">
            <label for="NAMA_PETUGAS" class="col-sm-3 control-label"> Nama Petugas</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" value="<?php echo $NAMA_PETUGAS; ?>" id="NAMA_PETUGAS" name="NAMA_PETUGAS"  \>
			<input type="hidden" class="form-control" value="<?php echo $KODE_PETUGAS; ?>" id="KODE_PETUGAS" name="KODE_PETUGAS"  \>
            </div>
	</div> 
	<div class="form-group">
            <label for="EMAIL" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
			<input type="email" class="form-control" value="<?php echo $EMAIL; ?>" id="EMAIL" name="EMAIL"  \>
		
		</div>
	</div>
	<div class="form-group">
            <label for="USERNAME_LOGIN" class="col-sm-3 control-label">Username Login</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" value="<?php echo $USERNAME_LOGIN; ?>" id="USERNAME_LOGIN" name="USERNAME_LOGIN"  \>
		
		</div>
	</div>
	<div class="form-group">
            <label for="PASSWORD_LOGIN" class="col-sm-3 control-label">Password Login</label>
            <div class="col-sm-9">
			<input type="password" class="form-control" value="<?php echo $PASSWORD_LOGIN; ?>" id="PASSWORD_LOGIN" name="PASSWORD_LOGIN"  \>
		
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
                    $('#dialog-petugas').modal('hide');
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
		USERNAME_LOGIN: {
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
				PASSWORD_LOGIN: {
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
				NAMA_PETUGAS: {
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
