<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$jabatan = $_POST['jabatan'];
$tanggal_lahir = $_POST['tanggal_lahir'];
 
// update data ke database
mysqli_query($koneksi,"update user set username='$username', password='$password', jabatan='$jabatan', tanggal_lahir='$tanggal_lahir' where id_user='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:edit.php");
 
?>