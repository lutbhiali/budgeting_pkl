<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];



// update data ke database
mysqli_query($koneksi,"UPDATE komentar set nama='$nama', email='$email', komentar='$komentar' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tampill.php");
 
?>