<?php
include '../../config/config.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM profil_pegawai WHERE id = '$id'");
header('location: ../index.php?page=data-pegawai');
