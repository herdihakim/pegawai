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
  <li class="active"><span class="glyphicon glyphicon-user"> Penggajian</li>
</ol>

<div class="page-header" style="margin-top:5px;">
    <h3>Kelola Data Penggajian</h3>
</div>

<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">Data Gaji</h3>
    </div>
    <div class="panel-body">
	<div class="well">
    <div class="table-responsive">
    <table id="example" class="table table-bordered">
	<thead>
            <tr>
		<th>No</th>
		<th>NIP</th>
		<th>Nama</th>
		<th>Departemen</th>
		<th>Jabatan</th>
		<th>Bulan</th>
		<th>Total Penerimaan Gaji Bulan Ini</th>
		
            </tr>
	</thead>
	<tbody>
	
            <tr>
		<td>1</td>
		<td>6311239</td>
		<td>Fajar</td>
		<td>Keuangan</td>
		<td>FRONT ACCOUNTING</td>
		<td>Juli</td>
		<td>Rp.3.520.500</td>
		
            </tr>
			<tr>
		<td>2</td>
		<td>3311187</td>
		<td>Indra</td>
		<td>Keuangan</td>
		<td>FRONT ACCOUNTING</td>
		<td>Juli</td>
		<td>Rp.4.140.300</td>
		
            </tr>
          
	</tbody>
	<tfoot>
	<tr>
		<td colspan="6">TOTAL</td>
		<td>Rp.7.660.800</td>
	</tr>
	</tfoot>
    </table>
	<br/>
	
</div>

	 <div class="table-responsive">
	 <p>Breakdown Data Pecahan Uang </p>
    <table  class="table table-bordered">
	<thead>
            <tr>
		<th>Pecahan Rupiah</th>
		<th>Jumlah</th>
		
		
            </tr>
	</thead>
	<tbody>
		<tr>
		<td>Rp.100.000,-</td>
		<td>76 Lembar</td>
		</tr>
		<tr>
		<td>Rp.50.000,-</td>
		<td>0 Lembar</td>
		</tr>
		<tr>
		<td>Rp.20.000,-</td>
		<td>3 Lembar</td>
		</tr>
		<tr>
		<td>Rp.10.000,-</td>
		<td>0 Lembar</td>
		</tr>
		<tr>
		<td>Rp.5.000,-</td>
		<td>0 Lembar</td>
		</tr>
		<tr>
		<td>Rp.2.000,-</td>
		<td>0 Lembar</td>
		</tr>
		<tr>
		<td>Rp.1.000,-</td>
		<td>0 Lembar</td>
		</tr>
		<tr>
		<td>Rp.500,-</td>
		<td>1 Koin</td>
		</tr>
		<tr>
		<td>Rp.200,-</td>
		<td>1 Koin</td>
		</tr>
		<tr>
		<td>Rp.100,-</td>
		<td>1 Koin</td>
		</tr>
		
          
	</tbody>
	
    </table>
	<br/>
	
</div>

	</div>
    </div>
</div>

           