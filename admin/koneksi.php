<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codemasterclass";

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
?>
