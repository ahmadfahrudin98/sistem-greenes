<?php
//koneksi database
include 'config.php';

//menangkap data id yang di kirim dari url
$id = $_GET['id_user'];

//menghapus data dari database
mysqli_query($dbconnect, "delete from user where id_user='$id'");

//mengalihkan halaman kembali ke tambah.php
header("location:tambah.php")

?>