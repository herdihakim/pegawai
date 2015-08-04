<?php
    include_once "../../include/koneksi.php";
	$profil=mysql_fetch_object(mysql_query("SELECT * FROM profil_perusahaan"));
?>
<ol class="breadcrumb">
  <li class="active">Beranda</li>
</ol>

<div class="jumbotron">
<img src="banner.png" style="width:1000px;height:250px">
</div>