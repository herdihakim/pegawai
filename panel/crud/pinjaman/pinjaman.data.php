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
		<th>Kode Pinjaman</th>
		<th>Nip Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Tanggal</th>
		<th>Nominal</th>
                <th>Keterangan</th>
                <th>Status</th>
		<th>Aksi</th>
            </tr>
	</thead>
	<tbody>
	<?php
            $querykasbon=mysql_query("SELECT * FROM kasbon_pegawai") or die (mysql_error());
            $no = 1;
            while($objectdata=mysql_fetch_object($querykasbon)){
                $querypegawai=mysql_query("SELECT * FROM pegawai WHERE NIP_PEGAWAI=".$objectdata->NIP_PEGAWAI) or die (mysql_error());
				$tampilpegawai=mysql_fetch_object($querypegawai);
                echo'
            <tr>
		<td>'.$no.'</td>
		<td>'.$objectdata->KODE_KASBON.'</td>
		<td>'.$objectdata->NIP_PEGAWAI.'</td>
                <td>'.$tampilpegawai->NAMA_PEGAWAI.'</td>
                <td>'.$objectdata->TANGGAL.'</td>
                <td>Rp. '.number_format($objectdata->NOMINAL).',-</td>
                <td>'.$objectdata->KETERANGAN.'</td>
                <td>'.$objectdata->STATUS.'</td>
		<td>
                    <a href="#dialog-pinjaman" id="'.$objectdata->KODE_KASBON.'" alt="Ubah" title="Ubah" class="glyphicon ubah-pinjaman glyphicon-edit" data-toggle="modal"></a>&nbsp; 
                    <a href="#" id="'.$objectdata->KODE_KASBON.'" alt="Hapus" title="Hapus" class="glyphicon hapus-pinjaman glyphicon-trash"></a>
		</td>
            </tr>';
                $no++;
            }
	?>
	</tbody>
    </table>
</div>