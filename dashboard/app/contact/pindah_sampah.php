<?php

include '../../config/config.php';
if (isset($_GET['id'])) {
    $data_ids = $_GET['id'];
    $data_ids_array = explode(",", $data_ids); // Ubah string menjadi array
    foreach ($data_ids_array as $data_id) {
        // Lakukan operasi pemindahan data dari "sampah" ke "inbox" berdasarkan $data_id
        $query = "UPDATE contact_us SET status = 'sampah' WHERE id = $data_id";

        if ($koneksi->query($query) !== TRUE) {
            echo "Error: " . $query . "<br>" . $koneksi->error;
        }
    }
    header('location: ../index.php?page=data-contact');
} else {
    echo "Tidak ada data yang diproses.";
}
