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
		<th>Nip</th>
		<th>Jumlah penyesuaian hari</th>
		<th>Tanggal & Jam</th>
		<th>Tanggal akses</th>
		<th>Petugas</th>
		<th>Aksi</th>
            </tr>
	</thead>
	<tbody>
	<?php
            $query=mysql_query("SELECT * FROM penyesuaian_absensi") or die (mysql_error());
            $no = 1;
            while($objectdata=mysql_fetch_object($query)){
		echo'
            <tr>
		<td>'.$no.'</td>
		';
		 $query1=mysql_query("SELECT * FROM pegawai where KODE_PEGAWAI='$objectdata->KODE_PEGAWAI'") or die (mysql_error());
		 $objectdata1=mysql_fetch_object($query1);
		echo'
		<td>'.$objectdata1->NAMA_PEGAWAI.'</td>
		<td>'.$objectdata->JUMLAH_PENYESUAIAN_ABSEN.' Hari</td>
		<td>
		';
		 $penyesuaian=mysql_query("SELECT * FROM detail_penyesuaian_absensi where HEAD_ID_PENYESUAIAN='$objectdata->ID'") or die (mysql_error());
		 while($objectdatapenyesuaian=mysql_fetch_object($penyesuaian)){
			echo '&bull;'.$objectdatapenyesuaian->TANGGAL.'<br/>('.$objectdatapenyesuaian->JAM_MASUK.'-'.$objectdatapenyesuaian->JAM_KELUAR.')<hr/>'; 
		 }
		echo'
		</td>
		<td>'.$objectdata->TANGGAL_AKSES.'</td>
		';
		 $query12=mysql_query("SELECT * FROM petugas where KODE_PETUGAS='$objectdata->KODE_PETUGAS'") or die (mysql_error());
		 $objectdata12=mysql_fetch_object($query12);
		echo'
		<td>'.$objectdata12->NAMA_PETUGAS.'</td>
		<td>
                    <a href="#dialog-penyesuaian_absen" id="'.$objectdata->ID.'" alt="Ubah" title="Ubah" class="glyphicon ubah-penyesuaian_absen glyphicon-edit" data-toggle="modal"></a>&nbsp; 
                    <a href="#" id="'.$objectdata->ID.'" alt="Hapus" title="Hapus" class="glyphicon hapus-penyesuaian_absen glyphicon-trash"></a>
		</td>
            </tr>';
            $no++;
            }
	?>
	</tbody>
    </table>
</div>

