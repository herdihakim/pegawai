<?php
    include_once "../../include/koneksi.php";
    session_start();
?>

<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "sDom": 'C<"top"flt>rt<"bottom"ip><"clear">',
        });
    });
</script>

<div class="table-responsive">
    <table id="example" class="table table-bordered">
	<thead>
            <tr>
		<th>No</th>
		<th>TAHUN</th>
		<th>TANGGAL</th>

            </tr>
	</thead>
	<tbody>
	<?php
            $querypetugas=mysql_query("SELECT * FROM hari_libur") or die (mysql_error());
            $no = 0;
            while($objectdata=mysql_fetch_object($querypetugas)){
			$no++;
			echo'
         <tr>
		<td>'.$no.'</td>
		<td>'.$objectdata->TAHUN.'</td>
		<td>'.$objectdata->TANGGAL.'</td>
		
		
		';
            }
	?>
	</tbody>
    </table>
</div>

