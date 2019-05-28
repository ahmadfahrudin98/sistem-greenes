<?php 
//koneksi database
include 'config.php';
	
//menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$jabatan = $_POST['jabatan'];
$lahir = $_POST['tanggal'];

//menginput data ke database
mysqli_query($dbconnect, "INSERT INTO user VALUES('','$username','$password','$jabatan','$lahir')");

//mengalihkan halaman kembali ke tambah.php
header("location:tambah.php");
?>
