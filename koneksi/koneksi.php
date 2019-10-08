<?php 

	$servername	= "localhost";
	$username	= "root";
	$password	= "";
	$database	= "komen";

 $koneksi = mysqli_connect($servername,$username,$password,$database);

 if (!$koneksi) {
 	die("Gagal Terkoneksi" . mysqli_connect_error());
 }

 ?>
