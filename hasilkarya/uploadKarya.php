<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Masterclass || Kelas1</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous"/>
    <link rel="stylesheet" href="styleUploadKarya.css">
</head>
<body>
<!-- HEADER -->
<header>
    <nav class="navbar">
      <div class="logo">
        <a href="../home/home.php"><img src="LOGO_White.png" alt="Logo" class="logo-img" /></a>
        <a href="../home/home.php"><h1 class="logo-title">CODEMASTERCLASS</h1></a>
      </div>
      <ul class="nav">
      <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                href="../kelas/kelas.php"
                role="button"
                aria-expanded="false"
                >Kelas</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../kelas/kelas.php">Semua Kelas</a>
                </li>
                
                <?php
                  $kelas = array(
                    "Materi_AR.html" => "Media Pembelajaran AR/VR",
                    "Materi_Video.html" => "Video & Animasi",
                    "Materi_ASI.html" => "Aplikasi Sistem Informasi",
                    "../materi/materi_UI.php" => "UI/UX Design",
                    "Materi_Bisnis.html" => "Bisnis Digital",
                    "Materi_PG.html" => "Pengembangan Game",
                    "Materi_Keamanan.html" => "Keamanan Siber",
                    "Materi_AI.html" => "AI dan IOT",
                    "Materi_Pemrograman.html" => "Pemrograman"
                  );

                  foreach ($kelas as $link => $namaKelas) {
                    echo '<li><a class="dropdown-item" href="' . $link . '">' . $namaKelas . '</a></li>';
                  }
                ?>
                
              </ul>
            </li>
        <li class="nav-item">
          <a
            class="nav-link active"
            aria-current="page"
            href="../hasilkarya/hasilkarya.php"
            >Karya Siswa</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../syarat/syarat.php">Syarat & Ketentuan</a>
        </li>
      </ul>
      <div class="d-grid gap-1 d-md-flex justify-content-md-end">
        <a href="../profile/profile.php">
          <button class="lgn-btn btn-primary" type="button" id="login">
            Profile
          </button>
        </a>
      </div>
    </nav>
    </header>

    <?php
      session_start();
      if (isset($_SESSION['id_user'])) {
        $id_user = $_SESSION['id_user'];
      }

      include('../signup/koneksi.php');

      $query = "SELECT * FROM upload_karya WHERE id_user = '$id_user'";

      ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">

    <label for="id" class="col-sm-2 col-form-label">Id</label>
    <input type="text" class="form-control" id="id" name="id" value= '<?php echo $id_user ?> ' readonly required>

    <label for="username">Nama :</label>
    <input type="text" name="username" required><br>

    <label for="kelas">Kelas :</label>
    <select name="judul" required>
        <option>Media AR/VR</option>
        <option>Video & Animasi</option=>
        <option>Aplikasi Sistem Informasi</option=>
        <option>UI/UX Design</option=>
        <option>Bisnis Digital</option=>
        <option>Pengembangan Game</option=>
        <option>Keamanan Siber</option=>
        <option>AI dan IOT</option=>
        <option>Pemrograman</option=>
    </select><br>


    <label for="gambar">Pilih Gambar:</label>
    <input type="file" name="gambar" accept="image/*" required><br>

    <input type="submit" value="Upload">
    </form>
    <?php
    // Lakukan validasi dan penyimpanan gambar di sini
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $judul = $_POST["judul"];

        // Menggunakan direktori uploads sebagai contoh
        $uploadDir = 'uploads/';

        // Membuat direktori jika belum ada
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $gambarName = basename($_FILES['gambar']['name']);
        $gambarPath = $uploadDir . $gambarName;

        // Memindahkan file yang diunggah ke direktori uploads
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $gambarPath)) {
           
            // Koneksi ke database (ganti dengan informasi koneksi yang sesuai)
            $conn = mysqli_connect('localhost', 'root', '', 'codemasterclass');

            if (!$conn) {
                die("Koneksi gagal: " . mysqli_connect_error());
            }

            // Query SQL untuk menyimpan data ke dalam tabel
            $sql = "INSERT INTO upload_karya ( id_user, username, judul_kelas, gambar) VALUES ('$id_user', '$username', '$judul', '$gambarPath')";


            if ($conn->query($sql) === TRUE) {
              // Menampilkan alert menggunakan JavaScript jika berhasil
              echo '<script>alert("Gambar berhasil diunggah dan data berhasil disimpan ke database.");</script>';
          } else {
              // Menampilkan alert menggunakan JavaScript jika terjadi kesalahan
              echo '<script>alert("Error: ' . $sql . '\\n' . $conn->error . '");</script>';
          }

        } else {
            echo "Gagal mengunggah gambar.";
        }
    }
    ?>


    </body>
<!-- FOOTER -->
<footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-left">
          <h3>Tentang Kami</h3>
          <p>
            "Code Masterclass" adalah e-course yang dirancang untuk mengajarkan
            pemrograman secara komprehensif
          </p>
        </div>
        <div class="footer-right">
          <h3>Hubungi Kami</h3>
          <p>Email: codemasterclass@e-course.com</p>
          <p>Telepon: 123-456-7890</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2023 E-Course Code Masterclass</p>
      </div>
    </div>
  </footer>
</html>