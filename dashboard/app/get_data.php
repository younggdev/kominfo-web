<?php
include '../config/config.php';
$query = "SELECT id, nama  FROM profil_pegawai";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$query2 = "SELECT id, caption FROM galeri";
$result2 = $conn->query($query2);

$data2 = array();
while ($row = $result2->fetch_assoc()) {
    $data2[] = $row;
}

$combinedData = array(
    'profil_pegawai' => $data,
    'galeri' => $data2
);

header('Content-Type: application/json');
echo json_encode($combinedData);
