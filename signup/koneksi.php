<?php
$host_name = "localhost";
$username = "root";
$password = "";
$database = "codemasterclass";

$conn = mysqli_connect($host_name, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}else {
    echo "";
}
   
?>