<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Code Masterclass || Katalog Kelas</title>

  <!--Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/4592f70558.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"/>

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha256-K2Op9iRNpLrU7YHBCAcFfj6fQtr2uA11Zh5avUWJrLI=" crossorigin="anonymous">
  
  <!--Style -->
  <link rel="stylesheet" type="text/css" href="stylekelas.css">
</head>
  <body style="background-color: #e8eaff">
    <!-- HEADER -->
<header>
    <nav class="navbar">
      <div class="logo">
        <a href="../home/home.php"><img src="img/LOGO_White.png" alt="Logo" class="logo-img" /></a>
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

    <!-- INI KOTAKAN KELAS -->
    <section id="Kelas">
      <div class="content">
        <h1>KATALOG KELAS</h1>
        <h3>Pilih kelas sesuai dengan minatmu dan belajar bersama-sama</h3>
      </div>
      <div class="ISI">
        <div class="row">
          <div class="box">
            <div class="row">
            <?php
              include_once 'koneksi.php';
              // Query untuk mengambil data kelas
              $query = "SELECT judul, gambar, link FROM kelas";
              $result = $koneksi->query($query);
              // Tampilkan hasil query
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<div class="col-md-4">';
                  echo '<div class="card" style="height: 300px; width: 300px; padding: 35px 35px; background: url(img/' . $row['gambar'] . '); border-radius: 15px; margin: 35px; position: relative; text-align: center; transform: scale(1); transition: all 0.3s ease-out;">';
                  echo '<h4>' . $row['judul'] . '</h4>';
                  echo '<div style="padding-top: 20px;"><a href="../materi/' . $row['link'] . '" class="button">Lihat Kelas</a></div>';
                  echo '</div></div>';
                }
              } else {
                echo "Tidak ada data kelas.";
              }
            ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- INI CS WA -->
  <?php
    include_once 'koneksi.php';
    // Ambil nomor WhatsApp dari database
    $sql = "SELECT nomor FROM cs WHERE id = 1";
    $result = $koneksi->query($sql);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $nomorWhatsApp = $row["nomor"];
    } else {
      $nomorWhatsApp = "6281226044879"; // Nomor default jika query database gagal
    }
    $koneksi->close();
  ?>
    <section id="contact">
      <div class="wa">
        <a class="wa_btn" href="https://wa.me/<?php echo $nomorWhatsApp; ?>">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
      </div>
    </section>

    <!-- HOME HEADER -->
    <script>
        window.addEventListener("scroll", function () {
            var navbar = document.querySelector(".navbar");
            navbar.classList.toggle("navbar-scroll", window.scrollY > 0);
        });

        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('nav');
            if (window.scrollY > 0) {
                navbar.classList.add('transparent');
            } else {
                navbar.classList.remove('transparent');
            }
        });
    </script>
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