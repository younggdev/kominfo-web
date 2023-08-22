<?php
include '../../config/config.php';

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$bidang = $_POST['bidang'];
$id = $_POST['id'];

// Nama Foto
$nama_file = $_FILES['foto']['name'];

// Lokasi Foto
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, '../foto/' . $nama_file);
$query = mysqli_query($koneksi, "UPDATE profil_pegawai SET nama='$nama', jabatan='$jabatan', bidang='$bidang', foto='$nama_file' WHERE id='$id'");
header('location: ../index.php?page=data-pegawai');
