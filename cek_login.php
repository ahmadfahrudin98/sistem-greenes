<?php
error_reporting(0);
include "config/koneksi.php";
$pass=md5($_POST[password]);
$level=$_POST[level];
if ($level=='Admin')
{
$login=mysql_query("SELECT * FROM users
			WHERE username='$_POST[id_user]' AND password='$pass' AND level='$level'");
$cocok=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($cocok > 0){
	session_start();
	$_SESSION[namauser]     = $r[username];
  	$_SESSION[fakultas]     = $r[fakultas];
  	$_SESSION[passuser]     = $r[password];
  	$_SESSION[leveluser]    = $r[level];

	header('location:admin/media.php?module=home');
	}
else {
echo "<script>window.alert('Username atau Password anda salah.');
        window.location=('http://localhost/green/')</script>";
}
}

elseif ($level=='members'){
$login=mysql_query("SELECT * FROM users
			WHERE username='$_POST[id_user]' AND password='$pass' AND level='$level'");
$cocok=mysql_num_rows($login);
$r=mysql_fetch_array($login);

	if ($cocok > 0){
		session_start();
		$_SESSION[namauser]       = $r[username];
		$_SESSION[passuser]       = $r[password];
	  	$_SESSION[fakultas]       = $r[fakultas];
		$_SESSION[jabatan]    	  = $r[jabatan];
		$_SESSION[tanggallahir]  = $r[tanggal_lahir];
		$_SESSION[alamat]    	= $r[alamat_lengkap];
	  	$_SESSION[leveluser]    = $r[level];

		header('location:http://localhost/green/');
	}else {
		echo "<script>window.alert('Username atau Password anda salah.');
		        window.location=('http://localhost/green/')</script>";
	}
}

?>
