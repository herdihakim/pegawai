<?php
    include_once "../../include/koneksi.php";
    session_start();

    $id = $_POST['id'];

    $data = mysql_fetch_array(mysql_query("
        SELECT * FROM rights_group WHERE ID=".$id
    ));
		
    if($id> 0) { 
    $ID = $data['ID'];
	$GROUP_NAME = $data['GROUP_NAME'];
	$AKSES = $data['AKSES'];

    } else {
	$ID = "";
	$GROUP_NAME = "";
	$AKSES = "";
	
	
    }
?>
	
<form class="form-horizontal groupForm" id="groupForm" action="crud/group/group.input.php" type="POST">
    <div class="modal-body">
		<div class="form-group">
				<label class="col-sm-3 control-label"></label>
				<div class="col-sm-9">
				<span><i class="glyphicon glyphicon-asterisk"></i> <strong style="color:red;">Wajib Di Isi</strong></span>
				</div>
		</div>
        <div class="form-group">
            <label for="GROUP_NAME" class="col-sm-3 control-label">Group Name</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" value="<?php echo $GROUP_NAME; ?>" id="GROUP_NAME" name="GROUP_NAME"  \>
			<input type="hidden" class="form-control" value="<?php echo $ID; ?>" id="ID" name="ID"  \>
            </div>
	</div> 

	<script>
$(document).ready(function(){
    $('.class1').on('change', function(){        
        if($('.class1:checked').length){
            $('.class3').prop('checked', true);
            $('.class1').prop('checked', false);
            return;
        }
        
        $('.class3').prop('disabled', false);
		 $('.class3').prop('checked', false);
    });
    
  
})
</script>
	<div class="form-group">
            <label for="AKSES" class="col-sm-3 control-label">Hak Akses</label>
            <div class="col-sm-9">
			<input type="checkbox"  value="" id="class1" class="class1" name="">Pilih Semua<br/>
				    <?php
					$rights_group=mysql_query("select * from rights_group where ID='$ID'");
					$rights_groupdata=mysql_fetch_array($rights_group);
					$data12=$rights_groupdata["AKSES"];
					$tmptrights_group=array();
					$tmptrights_group=explode(",",$data12);
					$mastermenu=mysql_query("select * from rights_menu");
					while($datamastermenu=mysql_fetch_object($mastermenu)){
					$ok=0;	
					foreach($tmptrights_group as $datarights){
					if($datamastermenu->ID==$datarights){	
					$ok=1;
					}
					}	
					?>
					<input type="checkbox" <?php if($ok==1){echo 'checked';}?> value="<?php echo $datamastermenu->ID; ?>" id="AKSES"  class="class3" name="AKSES[]"><?php echo $datamastermenu->MENU_NAME;?><br/>
					<?php
					}
					?>
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
	$('#groupForm')
	
	.on('success.form.fv', function(e) {
            e.preventDefault();

            var $form = $(e.target),
                fv    = $form.data('formValidation');

            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: $form.serialize(),
                success: function() {
                    $('#dialog-group').modal('hide');
					var menugroup = "crud/menu/menu.data.php";
					$("#data-menu").load(menugroup);
	
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
				NAMA_group: {
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
