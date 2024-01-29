<?php
session_start();
include('koneksi.php');
$conn = mysqli_connect('localhost', 'root', '', 'codemasterclass');

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $cekdb = mysqli_query($conn, "SELECT * FROM signup WHERE username = '$username'");
    $row = mysqli_fetch_assoc($cekdb);

    if (is_array($row) && !empty($row)) {
        if ($password == $row['password']) {
            $_SESSION['username'] = $username;
            $_SESSION['id_user'] = $row['id_user'];
            header("Location: ../home/home.php");
        } else {
            echo '
            <script>
                alert("Password Salah");
                window.location.href="login.php";
            </script>';
        }
    } else {
        echo '
        <script>
            alert("Username tidak ditemukan");
            window.location.href="login.php";
        </script>';
    }
}


?>
