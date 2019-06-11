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

<div id="container_wrapper" method="post" action="cek_login.php">
	<div id="container">
	<div id="header">
		<div id="inner_header">
			<img style='width:100%' src='../page/images/k.jpg'>
		</div>
	</div>
    <div id="top" align="center"> 
		<span class="cpojer-links"> 
			<a href="http://localhost/contoh/page/index.php">Home</a>
			<a>Survey</a>
			<a href="jadwal.html">Hasil Survey</a> 
			<a href="pemesanan.html">Indikator</a>
			<a href="lihat-detail-1.html">About us</a>
			<a href="hubungi-kami.html">Hubungi Kami</a>
		</span>
	</div>
	<table style='width:100%; padding-bottom:20px;'><tr></tr></table>
  
	<div id="left_column">
		<a class='shiny-button'>Login User</a>
		<div class="shiny-button">
			<?php
			session_start();
			
			//cek apakah yang mengakses halaman ini sudah login
			if($_SESSION['jabatan']==""){
				header("location:awal.php?pesan=gagal");
			}
			
			?>
			<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['jabatan']; ?></b>.</p>
			<a href="logout.php">LOGOUT</a>
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
