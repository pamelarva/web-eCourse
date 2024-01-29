<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code Masterclass || Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styleEdit.css">
  </head>
  <body>
    <!-- HEADER -->
   <header>
    <nav class="navbar">
      <div class="logo">
        <a href="adminHome.php"><img src="img/LOGO_White.png" alt="Logo" class="logo-img" /></a>
        <a href="adminHome.php"><h1 class="logo-title">CODEMASTERCLASS</h1></a>
      </div>
      <ul class="nav">
      <li class="nav-item">
          <a class="nav-link" href="adminSiswa.php">Siswa</a>
        </li>
      
        <li class="nav-item">
          <a
            class="nav-link active"
            aria-current="page"
            href="adminKelas.php"
            >Kelas</a>
        </li>

        <li class="nav-item">
          <a
            class="nav-link active"
            aria-current="page"
            href="../hasilkarya/hasilkarya.php"
            >Karya Siswa</a>
        </li>
      </ul>
      <div class="d-grid gap-1 d-md-flex justify-content-md-end">
        <a href="../admin/login_admin.php">
          <button class="lgn-btn btn-primary" type="button" id="login">
            Log Out
          </button>
        </a>
      </div>
    </nav>
    </header>

    
    <br>
    <div class="container1">
      <h1>Update Kelas</h1>
      <br>
      <?php
      include('koneksi.php');

      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql_edit_kelas = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id='$id'");
        while ($data=mysqli_fetch_array($sql_edit_kelas)){
          $kelas_id = $data['id'];
          $kelas_judul = $data['judul'];
          $kelas_link = $data['link'];
      }

      
      ?>
      <form action="edit_kelas.php" method="POST">
        <input type="hidden" name="kelas_id" value="<?php echo $id; ?>">

        <div class="row mb-3">
          <label for="kelas_id" class="col-sm-2 col-form-label">Id</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="kelas_id" name="kelas_id" value= '<?php echo $id ?> ' readonly required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputJudul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="kelas_judul" name="kelas_judul" value="<?php echo $kelas_judul; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputLink" class="col-sm-2 col-form-label">Link</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="kelas_link" name="kelas_link" value="<?php echo $kelas_link; ?>">
          </div>
        </div>

        <button type="submit" class="btn btn-outline-light" name="update" value="Update">Simpan Perubahan</button>
      </form>
      <?php
      }
      /* Mengecek apabila tombol "Simpan Perubahan" diklik */
      if (isset($_POST['update'])) {
        /* Menerima dan Menampung data */
        $kelas_id = $_POST['kelas_id'];
        $kelas_judul = $_POST['kelas_judul'];
        $kelas_link = $_POST['kelas_link'];
  

        /* Melakukan penyimpanan data ke tabel katalog */
        $sql = mysqli_query($koneksi, "UPDATE kelas SET judul='$kelas_judul',
         link='$kelas_link' WHERE id='$kelas_id'");

        if ($sql) {
          echo "<br><h5>Data kelas <b><i>" . $kelas_judul . "</b></i> berhasil diubah.</h5>";
        } else {
          echo "Terjadi kesalahan saat menyimpan perubahan.";
        }
      }
      ?>
      <br>
      <a href="adminKelas.php" class="btn btn-outline-light">Kembali ke Beranda</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn307352nD2" crossorigin="anonymous"></script>
  </body>
  <br>
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
