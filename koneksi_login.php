<?php
// koneksi ke database
$host = "localhost"; // nama host
$user = "root"; // username database
$pass = ""; // password database
$db = "akademik"; // nama database

// buat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>