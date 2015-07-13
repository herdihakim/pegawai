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
		<th>Kode Cuti</th>
		<th>Nip Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Keterangan</th>
		<th>Tanggal Awal</th>
                <th>Tanggal Akhir</th>
                <th>Status</th>
		<th>Aksi</th>
            </tr>
	</thead>
	<tbody>
	<?php
            $querycuti=mysql_query("SELECT * FROM cuti") or die (mysql_error());
            $no = 1;
            while($objectdata=mysql_fetch_object($querycuti)){
                $querypegawai=mysql_query("SELECT * FROM pegawai WHERE KODE_PEGAWAI=".$objectdata->NIP_PEGAWAI) or die (mysql_error());
		$tampilpegawai=mysql_fetch_object($querypegawai);
                echo'
            <tr>
		<td>'.$no.'</td>
		<td>'.$objectdata->KODE_CUTI.'</td>
		<td>'.$tampilpegawai->NIP_PEGAWAI.'</td>
                <td>'.$tampilpegawai->NAMA_PEGAWAI.'</td>
                <td>'.$objectdata->KETERANGAN.'</td>
                <td>'.$objectdata->TANGGAL_AWAL.'</td>
                <td>'.$objectdata->TANGGAL_AKHIR.'</td>
                <td>'.$objectdata->STATUS.'</td>
		<td>
                    <a href="#dialog-cuti" id="'.$objectdata->KODE_CUTI.'" alt="Ubah" title="Ubah" class="glyphicon ubah-cuti glyphicon-edit" data-toggle="modal"></a>&nbsp; 
                    <a href="#" id="'.$objectdata->KODE_CUTI.'" alt="Hapus" title="Hapus" class="glyphicon hapus-cuti glyphicon-trash"></a>
		</td>
            </tr>';
                $no++;
            }
	?>
	</tbody>
    </table>
</div>