<?php
include '../../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    // Dapatkan nama file gambar berdasarkan ID
    $query = mysqli_query($koneksi, "SELECT foto FROM profil_pegawai WHERE id='$id'");
    $row = mysqli_fetch_assoc($query);
    $nama_file = $row['foto'];

    // Hapus data dari database
    $delete_query = mysqli_query($koneksi, "DELETE FROM profil_pegawai WHERE id='$id'");

    if ($delete_query) {
        // Hapus berkas dari lokal penyimpanan
        $lokasi_berkas = '../foto/pegawai/' . $nama_file;
        if (file_exists($lokasi_berkas)) {
            unlink($lokasi_berkas);
        }

        header('location: ../index.php?page=data-pegawai');
    } else {
        // Penanganan jika query gagal
        echo "Gagal menghapus data.";
    }

    $query = mysqli_query($koneksi, "DELETE FROM profil_pegawai WHERE id = '$id'");
    header('location: ../index.php?page=data-pegawai');
}
