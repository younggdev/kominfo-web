<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$pesan = $_POST['pesan'];
$tanggal = date("Y-m-d H:i:s");

$query = mysqli_query($koneksi, "INSERT INTO contact_us VALUES ('', '$nama', '$email', '$no_hp', '$pesan', 'inbox', '$tanggal')");
header('location: ../index.php#kontak');
