<?php
include '../../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $teks = $_POST['teks'];
    $id = $_POST['id'];

    // Periksa apakah ada file gambar yang diunggah
    if (!empty($_FILES['foto']['name'])) {
        // Nama Foto Baru
        $nama_file_baru = $_FILES['foto']['name'];

        // Ekstensi berkas baru
        $ekstensi_baru = pathinfo($nama_file_baru, PATHINFO_EXTENSION);

        // Nama berkas acak baru
        $nama_berkas_acak_baru = uniqid() . '.' . $ekstensi_baru;

        // Lokasi berkas sementara baru
        $file_tmp_baru = $_FILES['foto']['tmp_name'];
        $lokasi_berkas_baru = '../foto/berita/' . $nama_berkas_acak_baru;

        // Dapatkan nama berkas lama untuk dihapus
        $query = mysqli_query($koneksi, "SELECT foto FROM berita WHERE id='$id'");
        $row = mysqli_fetch_assoc($query);
        $nama_berkas_lama = $row['foto'];
        $lokasi_berkas_lama = '../foto/berita/' . $nama_berkas_lama;

        // Hapus berkas lama jika ada
        if (file_exists($lokasi_berkas_lama)) {
            unlink($lokasi_berkas_lama);
        }

        // Lokasi Foto
        $file_tmp = $_FILES['foto']['tmp_name'];
        move_uploaded_file($file_tmp, '../foto/berita/' . $nama_berkas_acak_baru);

        // Lakukan koneksi ke database ($koneksi) di sini
        $query = mysqli_query($koneksi, "UPDATE berita SET judul='$judul', isi='$teks', foto='$nama_berkas_acak_baru' WHERE id='$id'");
    } else {
        // Lakukan koneksi ke database ($koneksi) di sini
        $query = mysqli_query($koneksi, "UPDATE berita SET judul='$judul', isi='$teks' WHERE id='$id'");
    }
    header('location: ../index.php?page=data-berita');
}
