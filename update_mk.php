<?php
// koneksi database
include 'koneksi_mk.php';

// menangkap data yang di kirim dari form

$kode_mk = $_POST['kode_mk'];
$nama_mk = $_POST['nama_mk'];
$semester = $_POST['semester'];
$jumlah_sks = $_POST['jumlah_sks'];

// update data ke database

mysqli_query($koneksi_mk, "update mata_kuliah set kode_mk='$kode_mk',nama_mk='$nama_mk',semester='$semester',jumlah_sks='$jumlah_sks' where kode_mk='$kode_mk'");

// mengalihkan halaman kembali ke index.php
header("location:mata_kuliah.php");

?>