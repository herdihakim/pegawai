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
  <li class="active"><span class="glyphicon glyphicon-user"> Penghargaan</li>
</ol>

<div class="page-header" style="margin-top:5px;">
    <h3>Kelola Data Penghargaan</h3>
</div>

<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">Pencarian</h3>
    </div>
    <div class="panel-body">
	<div class="well">
            <form class="form-horizontal penghargaanForm" id="penghargaanForm" action="modul/mod_penghargaan/tampilpenghargaan.php" type="POST">
                <div class="form-group">
                    <label for="BULAN" class="col-sm-1 control-label">Bulan</label>
                    <div class="col-sm-3">
                        <div class="input-group date" id="datePicker1">
                            <input type="text" class="form-control" id="BULAN" name="BULAN" placeholder="Bulan" readonly required><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                    </div>
                    <label for="TAHUN" class="col-sm-1 control-label">Tahun</label>
                    <div class="col-sm-3">
                        <div class="input-group date" id="datePicker">
                            <input type="text" class="form-control" id="TAHUN" name="TAHUN" placeholder="Tahun" readonly required><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Tampil</button>
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
                        format: "MM",
			minViewMode: 1,
			autoclose: true
                    });
                    $('#pinjamanForm')
                        .on('success.form.fv', function(e) {
                            e.preventDefault();

                            var $form = $(e.target),
                                fv    = $form.data('formValidation');

                            $.ajax({
                                url: $form.attr('action'),
                                type: 'POST',
                                data: $form.serialize(),
                                success: function() {
                                    $('#dialog-pinjaman').modal('hide');
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
                                BULAN: {
                                    validators: {
                                        notEmpty: {
                                            message: 'The is required'
                                        }
                                    }
                                },
                                TAHUN: {
                                    validators: {
                                        notEmpty: {
                                            message: 'The is required'
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
        <h3 class="panel-title">Data Pegawai</h3>
    </div>
    <div class="panel-body">
	<div class="well">
            <div id="data-penghargaan"></div>
	</div>
    </div>
</div>

           