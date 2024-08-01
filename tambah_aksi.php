<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$npm = $_POST['npm'];
$program_studi = $_POST['program_studi'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$foto = $_POST['foto'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO mahasiswa (npm,program_studi,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat,foto) VALUES ('$npm','$program_studi','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin', '$agama','$alamat','$foto')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>