<?php 
	include 'koneksi.php';

	$nama		= $_POST['nama'];
	$email		= $_POST['email'];
	$komentar	= $_POST['komentar'];

	mysqli_query($koneksi,"INSERT INTO komentar VALUES('','$nama','$email','$komentar')");

	header("location:tampill.php")






 ?>