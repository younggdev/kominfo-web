<?php
include '../../config/config.php';

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$bidang = $_POST['bidang'];

// Nama Foto
$nama_file = $_FILES['foto']['name'];

// Lokasi Foto
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, '../foto/' . $nama_file);
$query = mysqli_query($koneksi, "INSERT INTO profil_pegawai VALUES ('', '$nama', '$jabatan', '$bidang', '$nama_file')");
header('location: ../index.php?page=data-pegawai');
