<?php 
	if (isset($_POST['submitedit'])) {
		if($_POST[PASSWORDPETUGAS]!=""){ 
			foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
			$sql = "UPDATE `petugas` SET    `NAMAPETUGAS` =  '{$_POST['NAMAPETUGAS']}' ,  `JKPETUGAS` =  '{$_POST['JKPETUGAS']}' , 
				`ALAMATPETUGAS` =  '{$_POST['ALAMATPETUGAS']}' ,  `EMAILPETUGAS` =  '{$_POST['EMAILPETUGAS']}'
				,`TELPONPETUGAS` =  '{$_POST['TELPONPETUGAS']}' ,  `PASSWORDPETUGAS` =  '{$_POST['PASSWORDPETUGAS']}' 
				WHERE `IDPETUGAS` = '$_POST[IDPETUGAS]' "; 
			mysql_query($sql) or die(mysql_error());
		}
		else{
			foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
			$sql = "UPDATE `petugas` SET    `NAMAPETUGAS` =  '{$_POST['NAMAPETUGAS']}' ,  `JKPETUGAS` =  '{$_POST['JKPETUGAS']}' ,
					`ALAMATPETUGAS` =  '{$_POST['ALAMATPETUGAS']}' ,  `EMAILPETUGAS` =  '{$_POST['EMAILPETUGAS']}' ,
					`TELPONPETUGAS` =  '{$_POST['TELPONPETUGAS']}'   WHERE `IDPETUGAS` = '$_POST[IDPETUGAS]' "; 
			mysql_query($sql) or die(mysql_error());

		} 
	echo "<script>alert('Sukses');window.location='?module=petugas'</script>";
	}

	$data=mysql_query("select * from pegawai where NIP_PEGAWAI='$_GET[actionedit]'") or die (mysql_error());
	$tampiledit=mysql_fetch_object($data);
?>
<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="?module=beranda" class="glyphicons dashboard"><i></i> Beranda</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li><a href="?module=petugas" class="glyphicons user"><i></i> Petugas</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Ubah Data</li>
</ul>

<h1>Ubah Data Petugas</h1>
<div class="innerLR">
	<div class="widget widget-heading-simple widget-body-gray">
		<div class="widget-body">
            <form id="validate_field_types" action="" method="POST">
                <div class="row-fluid">
                    <label class="req">NAMA </label>
                    <input  class="span10" type="hidden" name="NIP_PEGAWAI" id="NIP_PEGAWAI" value="<?php echo $tampiledit->NIP_PEGAWAI;?>" />
                    <input  class="span12" type="text" name="NAMA_PEGAWAI" id="NAMA_PEGAWAI" value="<?php echo $tampiledit->NAMA_PEGAWAI;?>" />
                </div>
                <div class="row-fluid">
                    <label class="req">ALAMATPETUGAS</label>
                    <textarea class="span12" rows="2" cols="20" name="ALAMATPETUGAS" id="ALAMATPETUGAS" ><?php echo $tampiledit->ALAMATPETUGAS;?></textarea>
                </div>
                <div class="row-fluid">
                    <label class="req">Jenis Kelamin</label>
                    <select name="JKPETUGAS" id="JKPETUGAS" class="span12">
                        <option value="laki-laki" <?php if($tampiledit->JKPETUGAS=="laki-laki"){echo "selected='selected'";}?>>laki-laki</option>
                        <option value="Perempuan" <?php if($tampiledit->JKPETUGAS=="Perempuan"){echo "selected='selected'";}?>>Perempuan</option>
                     </select>
                </div>	
				<div class="row-fluid">
                    <label class="req">Email </label>
                    <input value="<?php echo $tampiledit->EMAILPETUGAS;?>" class="span12" type="Email" name="EMAILPETUGAS" id="Email" />
                </div> 
				<div class="row-fluid">
                    <label class="req">Telepon </label>
                    <input value="<?php echo $tampiledit->TELPONPETUGAS;?>" class="span12" type="text" name="TELPONPETUGAS" id="TELPONPETUGAS" />
                </div>
				<div class="row-fluid">
                    <label class="req">Kata Sandi </label>
                    <input value="" class="span12" type="password" name="PASSWORDPETUGAS" id="PASSWORDPETUGAS" /><br/>*kosongkan field Kata Sandi jika tidak ada perubahan
                </div>
                <div class="row-fluid" align="right">
					<button type="submit" name="submitedit" class="btn btn-info">Ubah Data</button>
					<a href="?module=petugas" class="btn btn-danger">Batal Ubah</a>
                </div>
            </form>
			<div class="ribbon-wrapper"><div class="ribbon primary">Petugas</div></div>
        </div>
    </div>
</div>