<?php
	include_once "../../include/koneksi.php";
	session_start();
?>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
		"sDom": '<"top"Cflt<"clear">>rt<"bottom"ip<"clear">>',
        //responsive: true
    } );
} );
</script>

<ol class="breadcrumb">
  <li><a href="#" id="beranda" class="beranda"><span class="glyphicon glyphicon-home"> Beranda</a></li>
  <li class="active"><span class="glyphicon glyphicon-user"> absensi</li>
</ol>


<div class="panel panel-warning">
	<div class="panel-heading">
		<h3 class="panel-title">Absensi Pegawai</h3>
    </div>
    <div class="panel-body">

		<div class="well">
			<div id="data-absensi"></div>
		</div>
	</div>
</div>

<div class="modal fade" id="dialog-absensi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 id="myModalLabel">Tambah Data absensi</h3>
      </div>
      <div id="isiForm" class="isiForm"></div>
    </div>
  </div>
  
</div>

<script src="crud/absensi/aplikasi.js"></script>

           