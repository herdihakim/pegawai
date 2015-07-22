<?php
    include_once "../../include/koneksi.php";
    session_start();
	$profil=mysql_fetch_object(mysql_query("SELECT * FROM profil_perusahaan"));
	
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
  <li class="active"><span class="glyphicon glyphicon-user"> input_penggajian</li>
</ol>



<div class="panel panel-warning">
    <div class="panel-heading">
	<h3 class="panel-title">Input penggajian</h3>
    </div>
    <div class="panel-body">

        <div class="well">
   <form class="form-inline" id="input_penggajianForm" action="crud/input_penggajian/input_penggajian.input.php" type="POST">
  <div class="form-group">
    <label for="exampleInputName2">Bulan</label>
    <input type="text" class="form-control" id="exampleInputName2" readonly value="<?php echo date('F');?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Departemen</label>

	<?php
                    $result = mysql_query("select * from departemen");  
						echo '<select id="KODE_DEPARTEMEN" name="KODE_DEPARTEMEN" class="form-control">';  
                        echo'	<option value="">Silahkan Pilih Departemen</option>
								<option value="all">Semua Departemen</option>';
						while ($row = mysql_fetch_array($result)) {  
                            echo '<option value="' . $row['KODE_DEPARTEMEN'] . '">' . $row['NAMA_DEPARTEMEN']. '</option>';  
			}  
                    echo '</select>';
				
		?>

  </div> 
  <div class="form-group">
    <label for="exampleInputEmail2">Tipe Output</label>

	<select name="tipe" id="tipe"  class="form-control">
	<option value="">Silahkan Pilih</option>
	<option value="CETAK">Hanya Cetak</option>
	<option value="SIMPAN">Hanya Simpan</option>
	<option value="CETAKSIMPAN">Cetak & Simpan</option>
	</select>
  </div>
  <button type="submit" class="btn btn-default">Proses</button>
</form></div>

<p>*Keterangan tipe output:<br/>
-Hanya cetak digunakan untuk hanya melakukan cetak data penggajian dokumen<br/>
-Hanya simpan digunakan untuk melakukan simpan data penggajian kedalam database<br/>
-Cetak & Simpan digunakan untuk melakukan cetak data dalam bentuk pdf serta melakukan simpan data kedalam database

</p>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
	$('#input_penggajianForm')
	
	.on('success.form.fv', function(e) {
            e.preventDefault();

            var $form = $(e.target),
                fv    = $form.data('formValidation');

            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: $form.serialize(),
                success: function(data) {
				var tipe=data["tipe"];
				var departemen=data["departemen"];
				if(tipe=="SIMPAN"){
					
					alert("Input Data Penggajian berhasil");
					
				}
				if(tipe=="false"){
					
					alert("Maaf Penggajian sudah dilakukan bulan ini");
					
				}
				if(tipe=="CETAK"){
						//alert("Hanya Cetak");
						window.open('modul/mod_input_penggajian/cetakpdf.php?dept='+departemen);
					
				}
				if(tipe=="CETAKSIMPAN"){
						//alert("Hanya Cetak");
						window.open('modul/mod_input_penggajian/cetaksimpanpdf.php?dept='+departemen);
					
				}
				
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
		KODE_DEPARTEMEN: {
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
		tipe: {
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
<div class="modal fade" id="dialog-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h3 id="myModalLabel"><img alt='Brand' src='../panel/<?php echo $profil->logo; ?>' style='width:50px; height:50px;'/>&nbsp;&nbsp;&nbsp;Cetak PDF</h3>
						  </div>

						<div id="isi-info" name="isi-info" class="isi-info"></div>
						</div>
						</div>
						</div>
           