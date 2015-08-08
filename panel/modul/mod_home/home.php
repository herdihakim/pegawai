<?php
    include_once "../../include/koneksi.php";
	$profil=mysql_fetch_object(mysql_query("SELECT * FROM profil_perusahaan"));
?>
<ol class="breadcrumb">
  <li class="active">Beranda</li>
</ol>

<div class="jumbotron">
<center>
<img src="banner.png" style="width:900px;height:250px">
<center>
</div>