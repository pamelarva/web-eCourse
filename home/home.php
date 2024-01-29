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
  <link rel="stylesheet" type="text/css" href="stylehome.css">
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


    <!--kolom-->
    <div class="bakat text-center">
      <div class="row align-items-center">
        <div class="row">
          <!--kolom tulisan-->
          <div class="col-6 col-sm-4" id="kartu1">
            <div class="kartu1">
              <h2>Temukan</h2>
              <h2 style="font-weight: bolder">Bakat Kreatifmu</h2>
              <h2>Di Website Ini !</h2>
              <div
                class="btn-group"
                role="group"
                aria-label="Basic outlined example"
              >
                <a href="../kelas/kelas.php"
                  ><button type="button" class="btn btn-outline-primary">
                    Katalog Kelas
                  </button>
                </a>
              </div>
            </div>
          </div>

          <!--kolom gambar-->
          <div class="col-6 col-sm-4">
            <div class="kartu2">
              <img src="img/vector1.png" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- UNGGULAN -->
    <section class="unggulan">
        <div class="col-sm" id="unggul">
          <table class="unggul">
            <tr style="font-size: 250%; font-weight: 600;">
              <td>40.000+</td>
              <td>700+</td>
              <td>9</td>
              <td>15</td>
            </tr>

            <tr>
              <td>Pengguna</td>
              <td>Materi Eksklusif</td>
              <td>Kelas Berkualitas</td>
              <td>Mentor Berpengalaman</td>
            </tr>
          </table>
        </div>
    </section>

    <!-- BELAJAR -->
    <section class="Belajar">
      <div class="row" id="BLJR">
        <div class="col-sm" id="bljr1">
          <div><img src="img/vector2.png" alt="" id="img-belajar" /></div>
        </div>
        <div class="col-sm" id="bljr1">
          <h1>Kenapa Harus Belajar Disini</h1>
          <table class="bljr">
            <tr>
              <td><img src="img/bintang.png" alt="Icon 1" /></td>
              <td><img src="img/asset_2.png" alt="Icon 3" /></td>
              <td><img src="img/asset_3.png" alt="Icon 4" /></td>
            </tr>
            <tr>
              <td><h5>Akses Selamanya*</h5></td>
              <td><h5>Konsultasi Dengan Mentor</h5></td>
              <td><h5>Free Update Materi</h5></td>
            </tr>
            <tr>
              <td><p>Hanya dengan Sekali Bayar saja, Akses Selamanya Materi*</p></td>
              <td><p></p>Jika Anda Kesulitan dalam Proses Belajar, Tanyakan saja Kepada Mentor</p></td>
              <td><p>Gratis Materi Terbaru secara Rutin</p></td>
            </tr>
         
            <tr>
              <td><img src="img/asset_4.png" alt="Icon 7" /></td>
              <td><img src="img/asset_5.png" alt="Icon 8" /></td>
              <td><img src="img/asset_6.png" alt="Icon 9" /></td>
            </tr>
            <tr>
              <td><h5>Biaya Gratis</h5></td>
              <td><h5>Materi Runtut</h5></td>
              <td><h5>Sertifikat Kelas</h5></td>
            </tr>
            <tr>
              <td><p>Dapatkan Materi - Materi Menarik dari Kami</p></td>
              <td><p>Materi Runtut Mulai dari Dasar - Lanjut</p></td>
              <td><p>Dapatkan Sertifikat dengan Menyelesaikan Materi di Kelas</p></td>
            </tr>
          </table>
        </div>
      </div>
    </section>


    <!-- KATALOG FAVORIT -->
    <section id="Kelas">
      <div class="content" id="ktlgcontent" style="text-align: center; margin-top: 70px;">
        <h2>Kelas Terpopuler</h2>
        <h5>Pilih kelas populer dengan materi-materi yang Menarik</h5>
      </div>
      <div class="ISI">
        <div class="row">
          <div class="box">
            <div class="row">
            <?php
              include_once 'koneksi.php';
              // Query untuk mengambil data kelas
              $query = "SELECT judul, gambar, link FROM kelasBaru";
              $result = $koneksi->query($query);
              // Tampilkan hasil query
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<div class="col-md-4">';
                  echo '<div class="card" style="height: 300px; width: 300px; padding: 35px 35px; background: url(' . $row['gambar'] . '); border-radius: 15px; margin: 35px; position: relative; text-align: center; transform: scale(1); transition: all 0.3s ease-out;">';
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