<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
  $user = $_POST['username'];
  $gmail = $_POST['email'];
  $pass = $_POST['password'];

  if(!empty($gmail) && !empty($pass) && !is_numeric($gmail))
  {
    $query = "insert into form (username, email, password) values ('$user', '$gmail', '$pass')";

    mysqli_query($con, $query);

    echo "<script type='text/javascript'> alert('Succesfully Register')</script>";
  }
  else
  {
    echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="login1.css">
    <title>Code Masterclass || Login</title>

</head>
<body>
    <!-- HEADER -->
<header>
    <nav class="navbar">
      <div class="logo">
        <a href=""><img src="LOGO_White.png" alt="Logo" class="logo-img" /></a>
        <a href=""><h1 class="logo-title">CODEMASTERCLASS</h1></a>
      </div>
      <ul class="nav">
      <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                href=""
                role="button"
                aria-expanded="false"
                >Kelas</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="">Semua Kelas</a>
                </li>
                
                <?php
                  $kelas = array(
                    "Materi_AR.html" => "Media Pembelajaran AR/VR",
                    "Materi_Video.html" => "Video & Animasi",
                    "Materi_ASI.html" => "Aplikasi Sistem Informasi",
                    "materi_UI.php" => "UI/UX Design",
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
            href=""
            >Karya Siswa</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Syarat & Ketentuan</a>
        </li>
      </ul>
      <div class="d-grid gap-1 d-md-flex justify-content-md-end">
        <a href="../signup/login.php"
          ><button class="lgn-btn btn-primary" type="button" id="login">
            Login/Register
          </button>
        </a>
      </div>
    </nav>
    </header>

    <!-- LOGIN DAN REGISTER -->
    <div class="containerlgn" id="containerlgn">
        <div class="signin-signup">
            <form method="POST" action="proses_login.php" onSubmit="return validasi(this)" class="sign-in-form">
                <h2 class="title">Login</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" id="username" placeholder="Username">
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" id="pass" placeholder="Password">
                </div>
                <input type="submit" value="Login" class="btnlgn" name="proses">
                <p id="message"></p>
                <p class="account-text">Belum memiliki Akun? <a href="#" id="sign-up-btn2">Register</a></p>
            </form>
            
            <form method="POST" action="proses_signup.php" onSubmit="return validasi(this)" class="sign-up-form">
                <h2 class="title">Register</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" id="username" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" id="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <input type="submit" value="Register" class="btnlgn">
                <p class="account-text">Sudah memiliki Akun? <a href="#" id="sign-in-btn2">Login</a></p>
            </form>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="contentlgn">
                    <h3>CODEMASTERCLASS!</h3>
                    <p>e-course yang dirancang untuk mengajarkan
                        pemrograman secara komprehensif</p>
                    <button class="btnlgn" id="sign-in-btn">Login</button>
                </div>
                <img src="login1.png" alt="" class="gambar">
            </div>
            <div class="panel right-panel">
                <div class="contentlgn">
                    <h3>CODEMASTERCLASS!</h3>
                    <p>e-course yang dirancang untuk mengajarkan
                        pemrograman secara komprehensif</p>
                    <button class="btnlgn" id="sign-up-btn">Register</button>
                </div>
                <img src="login3_1.png" alt="" class="gambar">
            </div>
        </div>
    </div>

    <script src="path/to/bootstrap.js"></script>
    <script src="scriptHome.js"></script>
    <script src="scriptLogin.js"></script>
    
    <script>
      function validasi(form) {
        if (form.username.value == "") {
          alert("Anda belum mengisikan Username?");
          form.username.focus();
          return false;
        }

        if (form.email.value == "") {
          alert("Anda belum mengisikan Email?");
          form.email.focus();
          return false;
        }    

        if (form.password.value == "") {
          alert("Anda belum mengisikan Password?");
          form.password.focus();
          return false;
        }

        return true;
      }
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