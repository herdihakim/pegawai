<?php
    include_once "../../include/koneksi.php";
    session_start();
?>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "sDom": '<"top"Cflt<"clear">>rt<"bottom"ip<"clear">>',
        });
    });
</script>

<ol class="breadcrumb">
  <li><a href="#" id="beranda" class="beranda"><span class="glyphicon glyphicon-home"> Beranda</a></li>
  <li class="active"><span class="glyphicon glyphicon-user">Laporan Penggajian</li>
</ol>

<div class="page-header" style="margin-top:5px;">
    <h3>Laporan Penggajian</h3><hr/>
</div>

<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">Pencarian</h3>
    </div>
    <div class="panel-body">
	<div class="well">
            <form class="form-horizontal laporan_gajiForm" id="laporan_gajiForm" action="modul/mod_laporan_gaji/laporan_gaji.php" type="POST">
                <div class="form-group">
                    <label for="BULAN" class="col-sm-1 control-label">Bulan</label>
                    <div class="col-sm-3">
                        <div class="input-group date" id="datePicker1">
                            <input type="text" class="form-control" id="BULAN" name="BULAN" placeholder="Bulan"  required><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                    </div>
                    <label for="TAHUN" class="col-sm-1 control-label">Tahun</label>
                    <div class="col-sm-3">
                        <div class="input-group date" id="datePicker">
                            <input type="text" class="form-control" id="TAHUN" name="TAHUN" placeholder="Tahun"  required><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                    </div>
					 <div class="col-sm-3">
             
				<?php
                    $result = mysql_query("select * from departemen");  
						echo '<select id="DEPT" name="KODE_DEPARTEMEN" class="form-control">';  
                        echo'	<option value="">Pilih Departemen</option>
								<option value="all">&bull;Semua Departemen</option>';
						while ($row = mysql_fetch_array($result)) {  
                            echo '<option value="' . $row['KODE_DEPARTEMEN'] . '">&bull;' . $row['NAMA_DEPARTEMEN']. '</option>';  
			}  
                    echo '</select>';
				
		?>
				
                    </div>
                    <button type="submit"  class="btn btn-info">Tampil</button>
                </div>
            </form>
			
	
<script type="text/javascript">
    $(document).ready(function() {
		   $('#datePicker').datepicker({
            format: "yyyy",
            startView: 2,
			minViewMode: 2,
			autoclose: true
            });
            $('#datePicker1').datepicker({
            format: "mm",
			minViewMode: 1,
			autoclose: true
                    });
	$('#laporan_gajiForm')
	
	.on('success.form.fv', function(e) {
            e.preventDefault();

            var $form = $(e.target),
                fv    = $form.data('formValidation');

            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: $form.serialize(),
                success: function(data) {
				var BULAN = document.getElementById('BULAN').value;
				var TAHUN = document.getElementById('TAHUN').value;
				var DEPT = document.getElementById('DEPT').value;
				$.get("modul/mod_laporan_gaji/laporan.php?BULAN="+BULAN+"&TAHUN="+TAHUN+"&DEPT="+DEPT, function(data){
				$('#laporan').html(data);
				});
					
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
		BULAN: {
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
		TAHUN: {
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
  
	</div>
    </div>
</div>

<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">Data Penggajian</h3>
    </div>
    <div class="panel-body">

            <div id="data-laporan_gaji">
			<span id="laporan"></span>
			</div>
	
    </div>
</div>

           