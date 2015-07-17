(function($) {
    $(document).ready(function(e) {

        var main = "crud/menu/menu.data.php";
	var utama = "modul/mod_home/home.php";
		
	$("#data-menu").load(main);
	$("#data-utama").load(utama);
	
        $('.logout').live("click", function(){
	    var url = "logout.php";
            $.post(url, {hapus: ''} ,function() {
		window.location="index.php";
            });

	});
		
		////-------------menu utama
	$('.pegawai').live("click", function(){
            var url = "modul/mod_pegawai/pegawai.php";
            $("#data-utama").load(url);
        });
		
	$('.departemen').live("click", function(){
            var url = "modul/mod_departemen/departemen.php";
            $("#data-utama").load(url);
	});

        $('.jabatan').live("click", function(){
            var url = "modul/mod_jabatan/jabatan.php";
            $("#data-utama").load(url);
        });
		
	$('.beranda').live("click", function(){
            $("#data-utama").load(utama);
        });
		
	$('.cek').live("click", function(){
            var url = "modul/mod_status/cekstatus.php";
            $("#data-utama").load(url);
	});
        
        $('.tunjangan').live("click", function(){
            var url = "modul/mod_tunjangan/tunjangan.php";
            $("#data-utama").load(url);
	});
        
        $('.cuti').live("click", function(){
            var url = "modul/mod_cuti/cuti.php";
            $("#data-utama").load(url);
	});
        
        $('.kasbon').live("click", function(){
            var url = "modul/mod_pinjaman/pinjaman.php";
            $("#data-utama").load(url);
	});
        
        $('.waktu').live("click", function(){
            var url = "modul/mod_jam_kerja/jam.php";
            $("#data-utama").load(url);
	});
        
        $('.absensi').live("click", function(){
            var url = "modul/mod_absensi/absensi.php";
            $("#data-utama").load(url);
	});
        
        $('.penggajian').live("click", function(){
            var url = "modul/mod_penggajian/penggajian.php";
            $("#data-utama").load(url);
	});
        
        $('.penghargaan').live("click", function(){
            var url = "modul/mod_penghargaan/penghargaan.php";
            $("#data-utama").load(url);
	});
	  $('.backup').live("click", function(){
            var url = "modul/mod_backup/backup.php";
            $("#data-utama").load(url);
	}); 

	$('.restore').live("click", function(){
            var url = "modul/mod_restore/restore.php";
            $("#data-utama").load(url);
	});
	$('.mesin').live("click", function(){
            var url = "modul/mod_mesin/mesin.php";
            $("#data-utama").load(url);
	});
	$('.info').live("click", function(){
            var url = "modul/mod_info/info.php";
            $("#data-utama").load(url);
	});	
	$('.monitoring').live("click", function(){
            var url = "modul/mod_monitoring/monitoring.php";
            $("#data-utama").load(url);
	});
	$('.conf_penggajian').live("click", function(){
            var url = "modul/mod_conf_penggajian/conf_penggajian.php";
            $("#data-utama").load(url);
	});
	
	$('.absensi_data').live("click", function(){
            var url = "modul/mod_absensi_data/absensi_data.php";
            $("#data-utama").load(url);
	});
	$('.hari_libur').live("click", function(){
            var url = "modul/mod_hari_libur/hari_libur.php";
            $("#data-utama").load(url);
	});
	$('.input_penggajian').live("click", function(){
            var url = "modul/mod_input_penggajian/input_penggajian.php";
            $("#data-utama").load(url);
	});
    });
}) (jQuery);
