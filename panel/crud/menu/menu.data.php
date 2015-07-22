<?php
    include_once "../../include/koneksi.php";
    session_start();
?>

<nav class="navbar navbar-custom" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
		<li><a href="#" id="beranda" class="beranda"><span class="glyphicon glyphicon-home"> Beranda</a></li>
		<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-tasks"></span> Data Master<span class="caret"></span></a>
                    <ul class="dropdown-menu " role="menu">
			<li><a href="#" id="pegawai" class="pegawai"><span class="glyphicon glyphicon-user"> Pegawai</a></li>
			<li><a href="#" id="petugas" class="petugas"><span class="glyphicon glyphicon-user"> Petugas</a></li>
			<li><a href="#" id="departemen" class="departemen"><span class="glyphicon glyphicon-user"> Departemen</a></li>
			<li><a href="#" id="jabatan" class="jabatan"><span class="glyphicon glyphicon-list"> Jabatan</a></li>
			<li><a href="#" id="tunjangan" class="tunjangan"><span class="glyphicon glyphicon-list"> Tunjangan</a></li>
			<li><a href="#" id="cuti" class="cuti"><span class="glyphicon glyphicon-list"> Cuti</a></li>
                        <li><a href="#" id="kasbon" class="kasbon"><span class="glyphicon glyphicon-list"> Kas Bon</a></li>
                        <li><a href="#" id="pinjaman" class="pinjaman"><span class="glyphicon glyphicon-list"> Pinjaman</a></li>
                        <li><a href="#" id="waktu" class="waktu"><span class="glyphicon glyphicon-list"> Jam Kerja</a></li>
                    </ul>
                </li>
			<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-tasks"></span> Data Master Penggajian<span class="caret"></span></a>
            <ul class="dropdown-menu " role="menu">
			<li><a href="#" id="penggajian" class="penggajian"><span class="glyphicon glyphicon-user"> Data Penggajian</a></li>
			<li><a href="#" id="input_penggajian" class="input_penggajian"><span class="glyphicon glyphicon-user"> Input Penggajian</a></li>
		
            </ul>
            </li>
			<li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-tasks"></span>Data Laporan<span class="caret"></span></a>
            <ul class="dropdown-menu " role="menu">
			<li><a href="#" id="laporan_gaji" class="laporan_gaji"><span class="glyphicon glyphicon-user">Laporan Penggajian</a></li>
			<!--<li><a href="#" id="laporan_absensi" class="laporan_absensi"><span class="glyphicon glyphicon-user">Laporan Absensi</a></li>-->
		
                    </ul>
                </li>
		<!-- <li><a href="../absensi" target="_blank"><span class="glyphicon glyphicon-ok"></span> Absensi</a></li>-->
		<li><a href="#" id="absensi_data" class="absensi_data"><span class="glyphicon glyphicon-ok"></span> Absensi Data</a></li>
        <li><a href="#" id="penghargaan" class="penghargaan"><span class="glyphicon glyphicon-ok"></span> Penghargaan</a></li>
		<!--<li><a href="#" id="beasiswa" class="beasiswa"><span class="glyphicon glyphicon-list-alt"></span> Laporan</a></li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Pengaturan<span class="caret"></span></a>
                    <ul class="dropdown-menu " role="menu">
			<li><a href="#" id="backup" class="backup"><span class="glyphicon glyphicon-export"></span> Backup Database</a></li>
			<li><a href="#" id="restore" class="restore"><span class="glyphicon glyphicon-import"></span> Restore Database</a></li>
			<li><a href="#" id="mesin" class="mesin"><span class="glyphicon glyphicon-import"></span> Konfigurasi Finger Print</a></li>
			<li><a href="#" id="info" class="info"><span class="glyphicon glyphicon-import"></span> Info Perusahaan</a></li>
			<li><a href="#" id="monitoring" class="monitoring"><span class="glyphicon glyphicon-import"></span> Monitoring Aplikasi</a></li>
			<li><a href="#" id="conf_penggajian" class="conf_penggajian"><span class="glyphicon glyphicon-import"></span> Konfigurasi Penggajian</a></li>
			<li><a href="#" id="hari_libur" class="hari_libur"><span class="glyphicon glyphicon-import"></span> Konfigurasi Hari Libur</a></li>
		    </ul>
                </li>
		<li><a href="#" id="logout" class="logout"><span class="glyphicon glyphicon-log-out"></span> LogOut [<?php echo $_SESSION['NAMA_PETUGAS']; ?>]</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
