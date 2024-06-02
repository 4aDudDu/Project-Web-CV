<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "dbryan";

$koneksi = new mysqli($host, $username, $password, $database);

// Check koneksi
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}
?>
