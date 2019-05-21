<?php 
require 'config.php';

if (isset($_POST['username'])){ //jika ada akses
	$error = array();

	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$jabatan = $_POST['jabatan'];
	$lahir = $_POST['tanggal'];

	if (empty($username)) {
		$error[] = "Username Tidak boleh kosong";
	}

	if (empty($password)) {
		$error[] = "Password Tidak boleh kosong";
	}

	if (empty($jabatan)) {
		$error[] = "Jabatan Tidak boleh kosong";
	}

	if (empty($lahir)) {
		$error[] = "Tanggal Lahir Tidak boleh kosong";
	}

	if (count($error) == 0 ) { //tidak ada error
		$sql = "Insert into user(username, password, jabatan, tanggal_lahir) values ($nama, $user , $jabatan, $lahir) ";
		$Insert = $dbconnect->querry($sql);

		if ($Insert) {
			echo "registrasi Berhasil"; 
		}else{
			echo "oops error";
			}
		}
	}
 ?>
