(function($) {
    $(document).ready(function(e) {
	var id = 0;
	var logo1 = logo;
	var main = "crud/penggajian/penggajian.data.php";

	$("#data-penggajian").load(main);
	
	$('.ubah-penggajian, .tambah-penggajian').live("click", function(){
            var url = "crud/penggajian/penggajian.form.php";
            id = this.id;
			
            if(id != 0) {
		$("#myModalLabel").html("<img alt='Brand' src='"+logo1+"' style='width:50px; height:50px;'/>&nbsp;&nbsp;&nbsp;Detail Data Penggajian");
            } else {
		$("#myModalLabel").html("<img alt='Brand' src='"+logo1+"' style='width:50px; height:50px;'/>&nbsp;&nbsp;&nbsp;Tambah Data penggajian");
            }

            $.post(url, {id: id} ,function(data) {
		$(".isiForm").html(data).show();
            });
	});
		
	$('.import').live("click", function(){
            var url = "crud/penggajian/import.form.php";
            $("#myModalLabel").html("<img alt='Brand' src='"+logo1+"' style='width:50px; height:50px;'/>&nbsp;&nbsp;&nbsp;Import Data penggajian");
            $.post(url, "" ,function(data) {
		$(".isiForm").html(data).show();
            });
	});

	$('.hapus-penggajian').live("click", function(){
            var url = "crud/penggajian/penggajian.input.php";
            id = this.id;
            var answer = confirm("Apakah anda ingin mengghapus data ini?");

            if (answer) {
    		$.post(url, {hapus: id} ,function() {
                    $("#data-penggajian").load(main);
		});
            }
	});
		
	$('#dialog-penggajian').on('hidden.bs.modal', function () {
            $("#data-penggajian").load(main);
            $("#myModalLabel").html("<img alt='Brand' src='"+logo1+"' style='width:50px; height:50px;'/>&nbsp;&nbsp;&nbsp;Tambah Data penggajian");
	});
    });
}) (jQuery);
