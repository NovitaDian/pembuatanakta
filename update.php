<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form


$npm = $_POST['npm'];
$alamat = $_POST['alamat'];
$program_studi = $_POST['program_studi'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$foto = $_POST['foto'];

// update data ke database
mysqli_query($koneksi, "update mahasiswa set npm='$npm',nama='$nama', alamat='$alamat',program_studi ='$program_studi',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin',agama='$agama',alamat='$alamat',foto='$foto' where npm='$npm'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>