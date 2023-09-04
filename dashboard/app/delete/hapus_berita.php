<?php
include '../../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    // Dapatkan nama file gambar berdasarkan ID
    $query = mysqli_query($koneksi, "SELECT foto FROM berita WHERE id='$id'");
    $row = mysqli_fetch_assoc($query);
    $nama_file = $row['foto'];

    // Hapus data dari database
    $delete_query = mysqli_query($koneksi, "DELETE FROM berita WHERE id='$id'");

    if ($delete_query) {
        // Hapus berkas dari lokal penyimpanan
        $lokasi_berkas = '../foto/berita/' . $nama_file;
        if (file_exists($lokasi_berkas)) {
            unlink($lokasi_berkas);
        }

        header('location: ../index.php?page=data-berita');
    } else {
        // Penanganan jika query gagal
        echo "Gagal menghapus data.";
    }

    $query = mysqli_query($koneksi, "DELETE FROM berita WHERE id = '$id'");
    header('location: ../index.php?page=data-berita');
}
