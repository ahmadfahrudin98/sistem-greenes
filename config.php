<?php 


$servername = "localhost";
$database = "grenes";
$username = "root";
$password = "";
/**
	*$dbconnect :koneksi kedatabase
*/

$dbconnect = mysqli_connect($servername, $username, $password, $database);

/**
	*Check Error yang terjadi saat koneksi
	*jika terdapat error maka die() //stop dan tampilkan error
*/

/*if ($dbconnect->connect_error) {
	die('Database Not Connect, Error : '. $dbconnect->connet_error);
}*/


  ?>