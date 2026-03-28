<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');
include '../koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM skills");

$data = [];

while($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}

echo json_encode($data);
?>