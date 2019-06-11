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
			<a>Soal</a>
			<a href="jadwal.html">Hasil Survey</a> 
			<a href="pemesanan.html">Indikator</a>
			<a href="http://localhost/contoh/page/user.php">User</a>
			<a>validasi</a>
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
		<br/>
		<a href="http://localhost/contoh/page/tambah.php">+ TAMBAH MAHASISWA</a>
		<br/>
		<br/>
		<table border="1">
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>PW</th>
				<th>Jabatan</th>
				<th>Tanagga lahrir</th>
				<th>Opsi</th>
			</tr>
			<?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from user");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['username']; ?></td>
					<td><?php echo $d['password']; ?></td>
					<td><?php echo $d['jabatan']; ?></td>
					<td><?php echo $d['tanggal_lahir']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
						<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
					</td>
				</tr>
				<?php 
			}
			?>
		</table>
	</div>

	<div style='color:#fff;' id="footer">
		Copyright (c) 2019 - GRENNES (Green Unnes)
    </div>
        
</div>
<div class="spacer"></div>
</div>
</body>
</html>
