<?php

$conn = mysqli_connect('localhost', 'root', '', 'codemasterclass');

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $cekdb = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
    $row = mysqli_fetch_assoc($cekdb);

    if (is_array($row) && !empty($row)) {
        // Periksa apakah password yang dimasukkan sesuai dengan yang di-hash
        if ($password == $row['password']) {
            header("Location: adminHome.php");
        } else {
            // Jika password tidak cocok
            echo '
            <script>
                alert("Password Salah");
                window.location.href="login_admin.php";
            </script>';
        }
    } else {
        // User tidak ditemukan, tampilkan pesan error
        echo '
        <script>
            alert("Username tidak ditemukan");
            window.location.href="login_admin.php";
        </script>';
    }
}
?>
