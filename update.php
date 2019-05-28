<?php
//koneksi database
include 'config.php';

//menangkap data yang di kirim dari form
$id=$_POST['id_user'];
$nama=$_POST['nama'];
$password=$_POST['password'];
$jabatan=$_POST['jabatan'];
$lahir=$_POST['lahir'];

//update data ke database
mysqli_query($dbconnect, "update user set nama='$nama', password='$password', jabatan='$jabatan', lahir='$lahir' where id_user='$id'");

//mengalihkan halaman kembali ke tambah.php
header("location:tambah.php");

?>