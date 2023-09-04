<?php
include '../../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $caption = $_POST['caption'];
    $tanggal = date("Y-m-d H:i:s");

    // Nama Foto
    $nama_file = $_FILES['foto']['name'];

    // Ekstensi berkas
    $ekstensi = pathinfo($nama_file, PATHINFO_EXTENSION);

    // Nama berkas acak
    $nama_berkas_acak = uniqid() . '.' . $ekstensi;

    // Lokasi Foto
    $file_tmp = $_FILES['foto']['tmp_name'];
    $lokasi_berkas = '../foto/galeri/' . $nama_berkas_acak;

    // Jika berkas dengan nama yang sama sudah ada, tambahkan angka di belakang
    $counter = 1;
    while (file_exists($lokasi_berkas)) {
        $nama_berkas_acak = uniqid() . '_' . $counter . '.' . $ekstensi;
        $lokasi_berkas = '../foto/galeri/' . $nama_berkas_acak;
        $counter++;
    }

    move_uploaded_file($file_tmp, $lokasi_berkas);
    $query = mysqli_query($koneksi, "INSERT INTO galeri VALUES ('', '$caption', '$nama_berkas_acak', '$tanggal')");
    header('location: ../index.php?page=data-galeri');
}
