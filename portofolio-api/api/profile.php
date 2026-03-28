<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');
include '../koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM profile LIMIT 1");
$data = mysqli_fetch_assoc($query);

echo json_encode($data);
?>