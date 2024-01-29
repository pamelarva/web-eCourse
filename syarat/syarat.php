<?php
include_once 'koneksi.php';
// Fungsi untuk mendapatkan data dari database
function ambilData($koneksi, $query, $kolom)
{
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        return $data[$kolom];
    } else {
        return false;
    }
}

// Ambil data
$penjelasan = ambilData($koneksi, "SELECT penjelasan FROM syarat WHERE id = 1", "penjelasan");
$akun = ambilData($koneksi, "SELECT akun FROM syarat WHERE id = 1", "akun");
$penggunaan_dilarang = ambilData($koneksi, "SELECT penggunaan_dilarang FROM syarat WHERE id = 1", "penggunaan_dilarang");
$tanggung_jawab = ambilData($koneksi, "SELECT tanggung_jawab FROM syarat WHERE id = 1", "tanggung_jawab");
$batasan = ambilData($koneksi, "SELECT batasan FROM syarat WHERE id = 1", "batasan");
$hukum = ambilData($koneksi, "SELECT hukum FROM syarat WHERE id = 1", "hukum");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Masterclass || Syarat & Ketentuan</title>

    <!--Bootstrap -->
    <link rel="stylesheet" href="stylesyarat.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/4592f70558.js" crossorigin="anonymous"></script>

    <!--Style -->
    <link rel="stylesheet" type="text/css" href="stylesyarat.css">
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

    <!-- ATAS -->
    <section class="CONTENT">
        <div class="content">
            <h1>Syarat & Ketentuan</h1>
            <h3>Mohon dibaca dan dipahami dengan seksama</h3>
        </div>
    
        <!-- PENJELASAN -->
        <div class="penjelasan">
            <p><?php echo $penjelasan; ?></p>
            <h2>1. Akun</h2>
            <p><?php echo $akun; ?></p>
            <h2>2. Penggunaan yang Dilarang</h2>
            <p><?php echo $penggunaan_dilarang; ?></p>
            <h2>3. Tanggung Jawab Anda</h2>
            <p><?php echo $tanggung_jawab; ?></p>
            <h2>4. Batasan Tanggung Jawab Kami</h2>
            <p><?php echo $batasan; ?></p>
            <h2>5. Hukum yang Berlaku</h2>
            <p><?php echo $hukum; ?></p>
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