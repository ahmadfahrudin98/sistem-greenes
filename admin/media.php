<?php
session_start();
error_reporting(0);
include "../config/session_admin.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: GRENNES (Grenn Unnes)::.</title>
<link href="../page/admin.css" rel="stylesheet" type="text/css" />
<script src="../page/js/calendar/datetimepicker.js" type="text/javascript"></script>
<script src="tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script src="tiny_mce/tiny_gugun.js" type="text/javascript"></script>
</head>
<body>

<div id="container_wrapper">
	<div id="container">
  <div id="header">
      <div id="inner_header">
			<img style='width:100%' src='../page/images/k.jpg'>
      </div>
  </div>
    <div id="top"> 
		<span class="cpojer-links"> 
					<a href=?module=home>Manage Home</a>
					<a href=?module=hubungi>Manajemen Hubungi </a> 	
					<a href=?module=pesanan>Kelola Menu Indikator</a> 	
					<a href=?module=user>Manage Members</a>
					<a href=../logout.php>Logout</a>
		</span>
	</div>
  
		<div id="left_column">
			<div class="text_area" align="justify">	
	<?php echo "<br/>"; include "content.php"; ?>
			</div>
		</div>
    
    	<div id="right_column">
		  <ul class="menu">
                <?php echo "<br/><br/><div style='width:239px;' class='subtitle'></b> MENU ADMINISTRATOR</div>"; ?><br/>
				<a class='shiny-button' href=?module=about>Kelola About</a>
        </ul>
		</div>

	<div id="footer">

    </div>
        
</div>
<div class="spacer"></div>
</div>
</body>
</html>
