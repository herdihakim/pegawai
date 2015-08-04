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
					<?php
					$rights_group=mysql_query("select * from rights_group where ID='$_SESSION[AKSES]'");
					$rights_groupdata=mysql_fetch_array($rights_group);
					$data=$rights_groupdata["AKSES"];
					$tmptrights_group=array();
					$tmptrights_group=explode(",",$data);
					$mastermenu=mysql_query("select * from rights_menu where ID < '11'");
					while($datamastermenu=mysql_fetch_object($mastermenu)){
					foreach($tmptrights_group as $datarights){	
				
					?>
					<li style="letter-spacing:2px;word-spacing:-0.8em;"><a href="#" <?php  if($datarights!=$datamastermenu->ID){echo 'style="display:none"'; }?>  id="<?php echo $datamastermenu->MENU_LINK;?>" class="<?php echo $datamastermenu->MENU_LINK;?>"><span class="glyphicon glyphicon-user"><?php echo $datamastermenu->MENU_NAME;?></a></li>
					<?php  } ?>
					<?php  } ?>
				   </ul>
                </li>
			<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-tasks"></span> Data Master Penggajian<span class="caret"></span></a>
            <ul class="dropdown-menu " role="menu">
					<?php
					$mastermenu=mysql_query("select * from rights_menu where ID = '11' or ID='12'");
					while($datamastermenu=mysql_fetch_object($mastermenu)){
					foreach($tmptrights_group as $datarights){
					?>
					<li style="letter-spacing:2px;word-spacing:-0.8em;"><a href="#" <?php  if($datarights!=$datamastermenu->ID){echo 'style="display:none"'; }?>  id="<?php echo $datamastermenu->MENU_LINK;?>" class="<?php echo $datamastermenu->MENU_LINK;?>"><span class="glyphicon glyphicon-user"><?php echo $datamastermenu->MENU_NAME;?></a></li>
					<?php } ?>
					<?php } ?>
            </ul>
            </li>
			<li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-tasks"></span>Data Laporan<span class="caret"></span></a>
            <ul class="dropdown-menu " role="menu">
					<?php
					$mastermenu=mysql_query("select * from rights_menu where ID = '13'");
					while($datamastermenu=mysql_fetch_object($mastermenu)){
					foreach($tmptrights_group as $datarights){
					?>
					<li style="letter-spacing:2px;word-spacing:-0.8em;"><a href="#" <?php  if($datarights!=$datamastermenu->ID){echo 'style="display:none"'; }?> id="<?php echo $datamastermenu->MENU_LINK;?>" class="<?php echo $datamastermenu->MENU_LINK;?>"><span class="glyphicon glyphicon-user"><?php echo $datamastermenu->MENU_NAME;?></a></li>
					<?php } ?>
					<?php } ?>
				</ul>
                </li>
					<?php
					$mastermenu=mysql_query("select * from rights_menu where ID = '14'");
					while($datamastermenu=mysql_fetch_object($mastermenu)){
					foreach($tmptrights_group as $datarights){
					?>
					<li  style="word-spacing:-0.8em;"><a href="#" <?php  if($datarights!=$datamastermenu->ID){echo 'style="display:none"'; }?> id="<?php echo $datamastermenu->MENU_LINK;?>" class="<?php echo $datamastermenu->MENU_LINK;?>"><span class="glyphicon glyphicon-user"><?php echo $datamastermenu->MENU_NAME;?></a></li>
					<?php } ?>
					<?php } ?>
					<?php
					$mastermenu=mysql_query("select * from rights_menu where ID = '15'");
					while($datamastermenu=mysql_fetch_object($mastermenu)){
					foreach($tmptrights_group as $datarights){
					?>
					<li ><a href="#" <?php  if($datarights!=$datamastermenu->ID){echo 'style="display:none"'; }?> id="<?php echo $datamastermenu->MENU_LINK;?>" class="<?php echo $datamastermenu->MENU_LINK;?>"><span class="glyphicon glyphicon-user"><?php echo $datamastermenu->MENU_NAME;?></a></li>
					<?php } ?>
					<?php } ?>
		    </ul>
            <ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
                    <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Pengaturan<span class="caret"></span></a>
            <ul class="dropdown-menu " role="menu">
					<?php
					$mastermenu=mysql_query("select * from rights_menu where ID >'15' and ID < 25");
					while($datamastermenu=mysql_fetch_object($mastermenu)){
					foreach($tmptrights_group as $datarights){
					?>
					<li style="letter-spacing:2px;word-spacing:-0.8em;"><a  href="#"  <?php  if($datarights!=$datamastermenu->ID){echo 'style="display:none"'; }?> id="<?php echo $datamastermenu->MENU_LINK;?>" class="<?php echo $datamastermenu->MENU_LINK;?>"><span class="glyphicon glyphicon-cog"><?php echo $datamastermenu->MENU_NAME;?></a></li>
					<?php } ?>
					<?php } ?>

			</ul>
                </li>
		<li><a href="#" id="logout" class="logout"><span class="glyphicon glyphicon-log-out"></span> LogOut [<?php echo $_SESSION['NAMA_PETUGAS']; ?>]</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
