<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code Masterclass || Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styleKelas.css">
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
        <h1>Tambah Kelas</h1>
        <br>
        <form action="tambah_kelas.php" method="POST" enctype="multipart/form-data">
          <div class="row mb-3">
            <label for="inputJudul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="kelas_judul" name="kelas_judul">
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="inputCover" class="col-sm-2 col-form-label">Cover Kelas</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="fileCover" name="fileCover">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputLink" class="col-sm-2 col-form-label">Link</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="kelas_link" name="kelas_link">
            </div>
          </div>
          
          <button type="submit" class="btn btn-outline-light" name="simpan" value="Simpan" >Tambahkan</button>
        </form>

      <?php
        if (isset ($_POST['simpan'])) {
            include ('koneksi.php');
            $judul = $_POST['kelas_judul'];
            $gambar = basename($_FILES["fileCover"]["name"]);
            $link = $_POST['kelas_link'];

            $target_dir = "../kelas/img/";
            $target_file = $target_dir . basename($_FILES["fileCover"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // link
            $target_dir = "../materi/" . $link . "/";

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
              echo "Maaf, hanya file berekstensi JPG, JPEG, PNG & GIF yang diperbolehkan untuk diupload. ";
              $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
              echo "Maaf, file Anda gagal diupload.";
            // if everything is ok, try to upload file
            } else {
              if (move_uploaded_file($_FILES["fileCover"]["tmp_name"], $target_file)) {
                echo "File ". htmlspecialchars( basename( $_FILES["fileCover"]["name"])). " berhasil diupload.";
              } else {
                echo "Maaf, ada error ketika mengupload file Anda.";
              }
            }

            if ($uploadOk == 1) {
              $sql=mysqli_query ($koneksi, "INSERT INTO kelas VALUES (null,'$judul','$gambar','$link')");
              if ($sql) {
                header("Location: adminKelas.php?status=success");
              } else {
                header("Location: adminKelas.php?status=failed");
              }
            }

            }
        ?>

        </div>

        
        <br>
        <!-- header -->
<script>
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