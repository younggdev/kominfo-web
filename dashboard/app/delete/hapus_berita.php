<?php
include '../../config/config.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM berita WHERE id = '$id'");
header('location: ../index.php?page=data-berita');
