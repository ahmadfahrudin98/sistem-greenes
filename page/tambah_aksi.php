<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$jabatan = $_POST['jabatan'];
$tanggal_lahir = $_POST['tanggal_lahir'];

//menginput data ke database
mysqli_query($koneksi, "insert into user values('','$username','$password','$jabatan','$tanggal_lahir')");

//mengalihkan halaman kembali ke user.php
header("location:tambah.php");

?>