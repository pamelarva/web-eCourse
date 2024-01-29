<?php

$conn = mysqli_connect('localhost', 'root', '', 'codemasterclass');

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]); // Menggunakan MD5 untuk menghash password

    $insert = mysqli_query($conn, "INSERT INTO signup (username, email, password) VALUES ('$username', '$email', '$password')");

    if ($insert) {
        // Pendaftaran berhasil, atur sesi dan alihkan ke halaman lain
        header("Location: login.php"); // Ganti dengan halaman yang sesuai
        exit();
    } else {
        // Gagal pendaftaran, tampilkan pesan error
        echo '
        <script>
            alert("Registrasi Gagal");
            window.location.href="login.php";
        </script>';
    }
}
?>
