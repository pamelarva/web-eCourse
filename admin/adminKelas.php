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
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Code Masterclass || Dashboard Admin</title>

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
  <link rel="stylesheet" type="text/css" href="CSS/styleKelas.css">
</head>
  <body style="background-color: #e8eaff">
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
            href="adminKarya.php"
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


    <div class="container1">
      <div class="header">
      <h1>Daftar Kelas</h1>
      <a href="tambah_kelas.php"  class="btn btn-outline-light">Tambah Kelas</a>
      </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Judul</th>
                <th scope="col">Gambar</th>
                <th scope="col">Link</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>

            <tbody>
                <?php 
                    include ('koneksi.php');
                    $query_kelas = "SELECT * FROM kelas";
                    $result_kelas = mysqli_query($koneksi, $query_kelas);
                    $i = 1;
                      while ($row_kelas = mysqli_fetch_assoc($result_kelas)) {
                      ?>
              <tr>
                <td width='30'><?php echo $row_kelas['id']; ?></td>
                <td width='150'><?php echo $row_kelas['judul']; ?></td>
                <td width='100'><?php echo "<image width='60px' src='../kelas/img/".$row_kelas['gambar']."'>"?></td>
                <td width='100'><?php echo $row_kelas['link']; ?></td>

                <td width='100'>
                  <a class='btn btn btn-outline-light' style="background-color: #0c134f" href='edit_kelas.php?id=<?php echo $row_kelas['id']; ?>' onmouseover="this.style.backgroundColor='#f29727'" onmouseout="this.style.backgroundColor='#0c134f'">Edit</a>
                  <a class='btn btn btn-outline-light' style="background-color: #0c134f" href='hapus_kelas.php?id=<?php echo $row_kelas['id']; ?>' onmouseover="this.style.backgroundColor='#f29727'" onmouseout="this.style.backgroundColor='#0c134f'">Hapus</a>
                </td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
    </div>


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