
<?php 
$id = $_GET['id'];
$no=0;
for($a=0;$a<$id;$a++){
	$no++;
?>
<script type="text/javascript">
    $(document).ready(function() {
       $('#datePicker<?php echo $no;?>').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
	});  
	

		
          
    });
</script>

<hr/>
<div style="position:absolute;margin-top:5px"><?php echo $no;?>.</div>.

          
            <div  style="margin-left:10px;margin-top:-15px" class="input-group date" id="datePicker<?php echo $no;?>" >
                    <input type="text" id="TANGGAL" name="TANGGAL[]" class="form-control" value="" placeholder="Tanggal" readonly required>
					<span class="input-group-addon"></span>
            </div>
			<br/>
			  <input type="text" style="width:45%;margin-left:10px" id="JAM_MASUK" name="JAM_MASUK[]" value="" placeholder="Jam masuk"  required>
			  <input type="text" style="width:45%;margin-left:10px" id="TANGGAL" name="JAM_KELUAR[]" value="" placeholder="Jam keluar"  required>
		

<br/>


<?php
}
?>