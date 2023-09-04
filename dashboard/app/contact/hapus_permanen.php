<?php
include '../../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM contact_us WHERE id = '$id'");
    header('location: ../index.php?page=trash');
}
