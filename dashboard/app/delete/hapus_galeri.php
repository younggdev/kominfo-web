<?php
include '../../config/config.php';

$id = $_GET['id'];


$pilih = mysqli_query($koneksi, "SELECT * FROM galeri  where id='$id'");
$data = mysqli_fetch_array($pilih);

$foto = $data['foto'];
unlink("../foto/galeri/" . $foto);
$query = mysqli_query($koneksi, "DELETE FROM galeri WHERE id = '$id'");
header('location: ../index.php?page=data-galeri');
