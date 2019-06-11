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
		<a href="http://localhost/contoh/page/user.php">Kembali</a>
		<br/>
		<br/>
		<h3> Edit User</h3>
		<?php
		include 'koneksi.php';
		$id_user = $_GET['id'];
		$data = mysqli_query($koneksi,"select * from user where id='$id_user'");
		while($d = mysqli_fetch_array($data)){
			?>
			<form method="post" action="update.php">
				<table>
					<tr>
						<td>Username</td>
						<td>
						<input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>">
						<input type="text" name="username" value="<?php echo $d['nama']; ?>">
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value="<?php echo $d['password']; ?>"></td>
					</tr>
					<tr>
						<td>jabatan</td>
						<td><select name="jabatan" value="<?php echo $d['jabatan']; ?>">
							<option selected>Pilih Jabatan</option>
							<option value="admin">Admin</option>
							<option value="member">Member</option>
						</select></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td><input type="date" name="tanggal_lahir" value="2018-07-22" min="1999-01-01" max="2018-12-31 value="<?php echo $d['tanggal_lahir']; ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="tombol" value="SIMPAN"></td>
					</tr>		
				</table>
			</form>
			<?php 
		}
		?>
	</div>

	<div style='color:#fff;' id="footer">
		Copyright (c) 2019 - GRENNES (Green Unnes)
    </div>
        
</div>
<div class="spacer"></div>
</div>
</body>
</html>
