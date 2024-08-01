<?php 
// koneksi database
include 'koneksi_mk.php';
 
// menangkap data id yang di kirim dari url
$kode_mk = $_GET['kode_mk'];
 
 
// menghapus data dari database
mysqli_query($koneksi_mk,"delete from mata_kuliah where kode_mk='$kode_mk'");
 
// mengalihkan halaman kembali ke index.php
header("location:mata_kuliah.php");
 
?>