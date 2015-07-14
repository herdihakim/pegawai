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
  <li class="active"><span class="glyphicon glyphicon-user"> hari_libur</li>
</ol>

<div class="page-header" style="margin-top:5px;">
    <h3>Kelola Data hari_libur</h3>
</div>

<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">Data hari_libur</h3>
    </div>
    <div class="panel-body">
	<div style="padding: 10px 10px 10px;">
            <a href="#dialog-hari_libur" id="0" class="btn tambah-hari_libur btn-info" data-toggle="modal" >Tambah Data</a> 
	</div>
	<div class="well">
            <div id="data-hari_libur"></div>
	</div>
    </div>
</div>

<div class="modal fade" id="dialog-hari_libur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 id="myModalLabel">Tambah Data hari_libur</h3>
      </div>
      <div id="isiForm" class="isiForm"></div>
    </div>
  </div>
</div>

<script src="crud/hari_libur/aplikasi.js"></script>

           