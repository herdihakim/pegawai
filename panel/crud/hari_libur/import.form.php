<?php
// panggil file koneksi.php
	include_once "../../../include/koneksi.php";
	session_start();
?>
	
 <form class="form-horizontal importForm" id="importForm" action="crud/petugas/import.input.php" type="POST">
	<div class="modal-body">
		<div class="form-group">
			<label for="file" class="col-sm-3 control-label">File Import</label>
			<div class="col-sm-9">
				<input type="file" class="form-control" id="file" name="file" placeholder="File Import" \>
			</div>
		</div>
		<div class="form-group">
			<label for="cek" class="col-sm-3 control-label"></label>
			<div class="col-sm-9">
				* file yang bisa di import adalah .xls (Excel 2003-2007).
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
	$('#importForm')
	
	.on('success.form.fv', function(e) {
             // Prevent form submission
            e.preventDefault();
			var $form = $(e.target),
                 formData = new FormData(),
                params   = $form.serializeArray(),
                files    = $form.find('[name="file"]')[0].files;

			 $.each(files, function(i, file) {
                // Prefix the name of uploaded files with "uploadedFiles-"
                // Of course, you can change it to any string
                formData.append('file[]', file);
            });

            $.each(params, function(i, val) {
                formData.append(val.name, val.value);
            });

			//alert($form);
            // Use Ajax to submit form data
            $.ajax({
                url: $form.attr('action'),
				data: formData,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                //data: $form.serialize(),
                success: function(result) {
                    // ... Process the result ...
					$('#dialog-petugas').modal('hide');
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
			file: {
                validators: {
                    notEmpty: {
                        message: 'The is required'
                    },
					file: {
                        extension: 'xls',
                        type: 'file/xls',   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                }
			}
        }
    });
});
</script>
