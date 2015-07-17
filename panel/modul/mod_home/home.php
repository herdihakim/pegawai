<?php
    include_once "../../include/koneksi.php";
	$profil=mysql_fetch_object(mysql_query("SELECT * FROM profil_perusahaan"));
?>
<ol class="breadcrumb">
  <li class="active">Beranda</li>
</ol>

<div class="jumbotron">
    <h1><?php echo $profil->NAMA_PERUSAHAAN; ?></h1>
    <p>Payroll And Attendance Software</p>
</div>