<?php
session_start();// Cek nilai sesi
include('../signup/koneksi.php');

// Pastikan $_SESSION['id_user'] sudah ter-set
if (!isset($_SESSION['id_user'])) {
    // Jika belum ter-set, redirect ke halaman login
    header("Location: ../signup/login.php");
    exit(); // Pastikan skrip berhenti setelah pengalihan
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code Masterclass || Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styleprofile.css">
    <script src="https://kit.fontawesome.com/4592f70558.js" crossorigin="anonymous"></script>
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

    <div class="header">
    <h1 class="text-center">My Profile</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </div>

    <!--isian profil-->
    <div class="row">
      <div class="col-2"></div>

        <div class="col-2">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-myprofile-list" data-bs-toggle="list" href="#list-myprofile" role="tab" aria-controls="list-myprofile">My Profile</a>
            <a class="list-group-item list-group-item-action" id="list-karya-list" data-bs-toggle="list" href="#list-karya" role="tab" aria-controls="list-karya">Karya</a>

            <hr>

            <a class="list-group-item list-group-item-action" a href="../signup/login.php">Logout</a>
          </div>
        </div>

        <div class="col-6">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-myprofile" role="tabpanel" aria-labelledby="list-myprofile-list">My Profile
              <hr>
              <br>
              <div class="row justify-content-evenly">
                <?php
                  
                  // Query untuk mengambil data user dari signup
                  $id = $_SESSION['id_user'];
                  $query = mysqli_query($conn, "SELECT * FROM signup WHERE id_user = '$id'");

                  // Periksa apakah query berhasil
                    if ($query) {
                      $user_data = mysqli_fetch_assoc($query);

                      // Periksa apakah kunci 'id_user' ada sebelum menggunakannya
                      if (isset($user_data['id_user'])) {
                          echo '<div class="col-4">';
                          echo '<h6 style="padding: 5px;">Username</h6>';
                          echo '<h6 style="padding: 5px;">Email</h6>';
                          echo '</div>';
                          echo '<div class="col-4">';
                          echo '<h6 style="padding: 5px;">' . $user_data['username'] . '</h6>';
                          echo '<h6 style="padding: 5px;">' . $user_data['email'] . '</h6>';
                          echo '</div>';
                          echo '<div class="col-4"></div>';
                      } else {
                          echo 'Data pengguna tidak ditemukan.';
                      }
                  } else {
                      echo 'Error dalam mengambil data pengguna: ' . mysqli_error($conn);
                  }
                ?>
                <div class="col-4">
                </div>
              </div>
            </div>

            <!-- KARYA -->
            <div class="tab-pane fade" id="list-karya" role="tabpanel" aria-labelledby="list-karya-list">
                Karya Saya
                <br>
                <hr>
                <div class="row">
                    <section class="cards row-cols-2 row-cols-md-4 g-4">
                        <?php
                        // Query untuk mengambil data karya dari tabel upload_karya
                        $id = $_SESSION['id_user'];
                        $query = mysqli_query($conn, "SELECT * FROM upload_karya WHERE id_user = '$id'");

                        // Periksa apakah query berhasil
                        if ($query) {
                            // Loop melalui setiap baris hasil query
                            while ($user_data = mysqli_fetch_assoc($query)) {
                                // Tampilkan data ke dalam HTML
                                echo '<div class="card">';
                                echo '<div class="card-img"></div>';
                                echo '<a href="../hasilkarya/' . $user_data['gambar'] . '">';
                                echo '<div class="card-img-hover" style="background-image: url(../hasilkarya/' . $user_data['gambar'] . ');"></div>';
                                echo '</a>';
                                echo '<div class="card-info">';
                                echo '<span class="card-category">Kelas</span>';
                                echo '<h4 class="card-title">' . $user_data['judul_kelas'] . '</h4>';
                                echo '<span class="card-by">by <a href="#" class="card-admin">' . $user_data['username'] . '</a></span>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo 'Error dalam mengambil data karya: ' . mysqli_error($conn);
                        }
                        ?>
                    </section>
                </div>
            </div>

              

          </div>
        </div>

        <div class="col-2"></div>
    </div>

    <!-- INI CS WA -->
    <section id="contact">
      <div class="wa">
          <a class="wa_btn" href="https://wa.me/6281226044879"><i class="fa-brands fa-whatsapp"></i></a>
      </div>
    </section>
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