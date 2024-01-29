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
    <title>Code Masterclass || Kelas Aplikasi Sistem Informasi</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous"/>
    <link rel="stylesheet" href="StyleMateri.css">
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

    <!-- CONTENT -->
    <div class="container">
        <h1 class="title">
        Aplikasi Sistem Informasi
        </h1>
        <h5>Ayo kita menuju teknologi maju</h5>
    </div>

    <div class="Materi">
        <div class="tentang">
            <h2>Tentang Kelas Ini</h2>
            <p>Virtual Reality (VR) adalah teknologi yang menciptakan lingkungan atau dunia yang tidak nyata dengan menggunakan komputer. Ini menghadirkan suasana yang seolah-olah nyata dan memungkinkan pengguna untuk berinteraksi dengan lingkungan tersebut. <br><br>Augmented Reality (AR) adalah teknologi yang menambahkan informasi visual, audio, atau haptic pada dunia nyata yang ditampilkan melalui perangkat seperti smartphone, tablet, atau kacamata AR. Ini memungkinkan pengguna untuk melihat dunia nyata dengan tambahan informasi yang ditambahkan oleh komputer.</p>
        </div>
    
        <div class="target_cocok" style="padding-right:10px ;">
            <div class="target">
                <h2>Target Kelas Ini</h2>
                <ul type="disc">
                    <li>Memahami Tools di Figma untuk kebutuhan <br>UI Design</li>
                    <li>Memahami Fundamental UI Design untuk kebutuhan Mobile App</li>
                    <li>Memahami Cara Membuat Beberapa UI Design khusus Mobile App di Figma</li>
                </ul>
                <div class="vertical-line"></div> <!-- Pembatas vertikal -->
            </div>

            <div class="cocok" style="margin-left: 40px;">
                <h2>Cocok Untuk</h2>
                <ul type="disc">
                    <li>Yang ingin menjadi seorang UI Designer</li>
                    <li>Yang baru terjun ke dalam dunia UI Design</li>
                    <li>Yang ingin bisa memahami UI Design khusus Mobile App</li>
                    <li>Yang ingin bisa memahami Fundamental UI Design khusus Mobile App</li>
                </ul>
            </div>
        </div>

        <div class="apk">
            <h2>Aplikasi yang Digunakan</h2>
            <img src="logo-figma-min-1024x1536.png" alt="" width="8%">
            <h4>Premier Pro</h4>
            <a href="https://www.figma.com/downloads/"><button>Download</button></a>
        </div>
    </div>

    <div class="kurikulum">
        <h2>Kurikulum Kelas</h2>
        <p>Materi-materi Berkualitas dan Disusun secara Terstruktur</p>
        <a class="back-to-home" href="Materi1_ASI.php">Materi</a>
        <style>
          .back-to-home {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0c134f;
            color: #e8eaff;
            text-decoration: none;
            margin-bottom: 20px;
            border-radius: 10px;
          }

          .back-to-home:hover {
            background-color: #1f2da7;
          }
        </style>
    </div>

    

    </div>

        <script>
            const accordion = document.getElementsByClassName
            ('contentBx');
    
            for (i = 0; i<accordion.length;i++ ){
                accordion[i].addEventListener('click', function(){
                    this.classList.toggle('active')
                })
            }
        </script>
    </div>
    
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