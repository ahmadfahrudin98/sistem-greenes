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
    <div id="top" align="center"> 
		<span class="cpojer-links"> 
			<a href="http://localhost/contoh/page/index.php">Home</a> 
			<a href="jadwal.html">Hasil Survey</a> 
			<a href="pemesanan.html">Indikator</a>
			<a href="lihat-detail-1.html">About us</a>
			<a href="hubungi-kami.html">Hubungi Kami</a>
		</span>
	</div>
	<table style='width:100%; padding-bottom:20px;'><tr></tr></table>
  
	<div id="left_column" method="post" action="cek_login.php">
		<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				echo "<div class='alert'>Username dan Password Salah! </div>";
			}
		}
		?>
		
		<a class='shiny-button'>Login User</a>
		<div class="shiny-button">
			<div class="form-group">
				<label for="exampleInputEmail1">Username</label>
				<input type="text" class="form-control" placeholder="Enter Username" name="username">
		  	</div>

			<div class="form-group">
		    	<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" placeholder="Password" name="password">
		  	</div>
			<input type="submit" class="tombol" value="LOGIN">
		</div>
		<a class='shiny-button'>Alamat</a>
		<div class='bawah'>
		Unniversitas Negeri Semarang
		Kampus Pusat: Kampus Sekaran Gunungpati
		Semarang
		</div>
	</div>

	<div id="right_column">
		<div class="kotak">	
			<a class='malu-button' href=?module=about>Wellcome to GREEN UNNES </a>
			<img style='width:97.5%' src='../page/images/unnes.jpg'>
			<a></a>
			Greennes atau Green UNNES adalah suatu sistem informasi kampus hijau yang dibuat untuk memberikan peringkat terhadap fakultas-fakultas di lingkungan Univeritas Negeri Semarang (UNNES) dalam rangka menindak lanjuti penghijauan dan keberlanjutan lingkungan serta mendukung visi misi UNNES sebagai kampus konservasi.
		</div>
	</div>

	<div style='color:#fff;' id="footer">
		Copyright (c) 2019 - GRENNES (Green Unnes)
    </div>
        
</div>
<div class="spacer"></div>
</div>
</body>
</html>
