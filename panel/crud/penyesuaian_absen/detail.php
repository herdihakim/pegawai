
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
	 $('#timepicker<?php echo $no;?>').timepicker({
				minuteStep: 1,
                secondStep: 5,
                showInputs: false,
                template: 'modal',
                modalBackdrop: true,
                showSeconds: false,
                showMeridian: false
	 });
	 $('#2timepicker<?php echo $no;?>').timepicker({
				minuteStep: 1,
                secondStep: 5,
                showInputs: false,
                template: 'modal',
                modalBackdrop: true,
                showSeconds: false,
                showMeridian: false
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
		
				<div style="margin-left:0px" class="col-sm-11">
					 <label for="jam_masuk" class="col-sm-6">Jam Masuk</label>
					 <label for="jam_keluar" class="col-sm-5">Jam Keluar</label>
				</div>
				
				<div style="margin-left:10px" class="input-group bootstrap-timepicker col-sm-11">
				  <input type="text" class="form-control" name="JAM_MASUK[]" id="timepicker<?php echo $no;?>" required aria-describedby="basic-addon2">
				  <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-time"></i></span>
				  
				  <input type="text" class="form-control" name="JAM_KELUAR[]" id="2timepicker<?php echo $no;?>" required aria-describedby="basic-addon2">
				  <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-time"></i></span>
				</div>

<br/>


<?php
}
?>