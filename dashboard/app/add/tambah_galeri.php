<?php
include '../../config/config.php';

$caption = $_POST['caption'];
$tanggal = date("Y-m-d H:i:s");

// Nama Foto
$nama_file = $_FILES['foto']['name'];

// Lokasi Foto
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, '../foto/galeri/' . $nama_file);
$query = mysqli_query($koneksi, "INSERT INTO galeri VALUES ('', '$caption', '$nama_file', '$tanggal')");
header('location: ../index.php?page=data-galeri');
