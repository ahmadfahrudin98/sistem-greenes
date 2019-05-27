<?php
session_start();

include 'config.php';

$username =$_POST['username'];
$password =$_POST['password'];

$data = mysqli_query($dbconnect, "select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);


?>