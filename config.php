<?php 


$servername = "localhost";
$database = "grenes";
$username = "root";
$password = "";
/**
	*$dbconnect :koneksi kedatabase
*/

$dbconnect = mysqli_connect($servername, $username, $password, $database);

//check connection
if(mysqli_connect_errno()){
	echo "Koneksi database gagal: ".mysqli_connect_error();
}

  ?>