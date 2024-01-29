<?php

$conn = mysqli_connect('localhost', 'root', '', 'codemasterclass');

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Code Masterclass || Materi Kelas Video</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="StyleMateri1.css" />
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
                    "../materi/Materi_AR.php" => "Media Pembelajaran AR/VR",
                    "../materi/Materi_Video.php" => "Video & Animasi",
                    "../materi/Materi_ASI.php" => "Aplikasi Sistem Informasi",
                    "../materi/materi_UI.php" => "UI/UX Design",
                    "../materi/Materi_Bisnis.php" => "Bisnis Digital",
                    "../materi/Materi_PG.php" => "Pengembangan Game",
                    "../materi/Materi_Keamanan.php" => "Keamanan Siber",
                    "../materi/Materi_AI.php" => "AI dan IOT",
                    "../materi/Materi_Pemrograman.php" => "Pemrograman"
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

    <section class="materi">
      <a class="back-to-home" href="Materi_Video.php">Kembali ke Beranda Kelas</a>
      <div class="container">
        <h1 class="title">Video</h1>
        <h5>Membuat video menarik dengan style sendiri</h5>
      </div>
      <div class="accordion">
        <div class="materi-content">
          <!-- MATERI -->
          <?php
          $query = "SELECT * FROM materiui";
          $result = $conn->query($query);
          
          if (!$result) {
              die("Error running query: " . $conn->error);
          }
          
          while ($row = $result->fetch_assoc()) {
            echo '<div class="contentBx">';
            echo '<div class="label">' . $row["label"] . '</div>';
            echo '<div class="content">';
        
            if ($row["content_type"] === 'text') {
                echo '<a href="' . $row["content"] . '">' . $row["subtext"] . '</a>';
            } elseif ($row["content_type"] === 'video') {
                echo '<div class="video-container" data-video-id="' . $row["content"] . '"></div>';
            } elseif ($row["content_type"] === 'pdf') {
                echo '<div class="pdf-container"><embed src="' . $row["content"] . '" type="application/pdf"/></div>';
            } 
            echo '</div></div>';
        }
        
          ?>
          <div class="contentBx">
            <div class="label">UPLOAD KARYA</div>
            <div class="content">
                <a href="../hasilkarya/uploadkarya.php">Upload karyamu disini</a>
            </div>
          </div>

          <div class="contentBx">
            <div class="label">CLAIM CERTIFICATE</div>
            <div class="content">
              <p>Jika sudah selesai, silahkan konfirmasi kepada Bangmin melalui WhatsApp dengan menuliskan <br>
                <br>
                Nama : <br>
                Kelas yang diikuti : <br>
                Email : <br>
                <br>
                Dan bukti SS jika kamu sudah melakukan Studi Kelas <br>
                <br>
                Terima kasih 😇
              </p>
                <a href="https://wa.me/6281226044879">WhatsApp</a>
            </div>
          </div>

        </div>
      </div>
    </section>

    
    <!-- JS drop Materi -->
    <script>
      const accordion = document.getElementsByClassName("contentBx");

      for (i = 0; i < accordion.length; i++) {
        accordion[i].addEventListener("click", function () {
          this.classList.toggle("active");
        });
      }
    </script>

    <!-- JS Link YT -->
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="scriptMateri1.js"></script>
    <script src="scriptHome.js"></script>
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
