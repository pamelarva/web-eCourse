<?php

$conn = mysqli_connect('localhost', 'root', '', 'codemasterclass');

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Masterclass || Karya Siswa</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous"/>
    <link rel="stylesheet" href="styleHasilkarya.css">
    <script src="https://kit.fontawesome.com/4592f70558.js" crossorigin="anonymous"></script>
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
        <a href="../profile/profile.php"
          ><button class="lgn-btn btn-primary" type="button" id="login">
            Profile
          </button>
        </a>
      </div>
    </nav>
    </header>

<!-- JUDUL  -->
<div class="judul"><h1>HASIL KARYA</h1></div>
<a class="back-to-home" href="uploadKarya.php">Upload Karya</a>
    <style>
        .back-to-home {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0c134f; 
            color: #e8eaff;
            text-decoration: none;
            margin-bottom: 20px;
            border-radius: 10px;
            margin-left: 80px;
        }

        .back-to-home:hover {
            background-color: #f29727;
        }
        
    </style>
    
    <section class="cards row-cols-2 row-cols-md-4 g-4">

<!-- HASIL KARYA -->

        <?php
        // Query SQL untuk mengambil data dari tabel
        $sql = "SELECT * FROM upload_karya ORDER BY id_upload DESC";
        $result = $conn->query($sql);

        // Periksa apakah ada data yang ditemukan
        if ($result->num_rows > 0) {
            // Loop melalui setiap baris hasil query
            while ($row = $result->fetch_assoc()) {
                // Tampilkan data ke dalam HTML
                echo '<div class="card">';
                echo '<div class="card-img"></div>';
                echo '<a href="' . $row['gambar'] . '">';
                echo '<div class="card-img-hover" style="background-image: url(' . $row['gambar'] . ');"></div>';
                echo '</a>';
                echo '<div class="card-info">';
                echo '<span class="card-category">Kelas</span>';
                echo '<h3 class="card-title">' . $row['judul_kelas'] . '</h3>';
                echo '<span class="card-by">by <a href="#" class="card-admin">' . $row['username'] . '</a></span>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "Tidak ada data yang ditemukan.";
        }
        ?>

        

    </section>

    <!-- INI CS WA -->
    <section id="contact">
        <div class="wa">
            <a class="wa_btn" href="https://wa.me/6281226044879"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </section>


    <script src="scriptHome.js"></script>

    
    <!-- FOOTER -->
  
</body>
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