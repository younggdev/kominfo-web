<?php
include '../../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $bidang = $_POST['bidang'];

    // Nama Foto
    $nama_file = $_FILES['foto']['name'];

    // Ekstensi berkas
    $ekstensi = pathinfo($nama_file, PATHINFO_EXTENSION);

    // Nama berkas acak
    $nama_berkas_acak = uniqid() . '.' . $ekstensi;

    // Lokasi Foto
    $file_tmp = $_FILES['foto']['tmp_name'];
    $lokasi_berkas = '../foto/pegawai/' . $nama_berkas_acak;

    // Jika berkas dengan nama yang sama sudah ada, tambahkan angka di belakang
    $counter = 1;
    while (file_exists($lokasi_berkas)) {
        $nama_berkas_acak = uniqid() . '_' . $counter . '.' . $ekstensi;
        $lokasi_berkas = '../foto/pegawai/' . $nama_berkas_acak;
        $counter++;
    }
    move_uploaded_file($file_tmp, '../foto/pegawai/' . $nama_berkas_acak);
    $query = mysqli_query($koneksi, "INSERT INTO profil_pegawai VALUES ('', '$nama', '$jabatan', '$bidang', '$nama_berkas_acak')");
    header('location: ../index.php?page=data-pegawai');
}
