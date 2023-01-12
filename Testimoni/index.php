<?php
require_once('../Admin/Component/GalleryCard.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <title>DYTA Yasmin - Testimoni</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <!-- Header -->
  <div class="head1">
    <nav class="navbar navbar-expand-md justify-content-center">
      <!-- Navbar -->

      <!-- Sidebar-->
      <div class="container-fluid">
        <div class="sidebar">
          <input type="checkbox" id="openSideMenu" class="openSideMenu" />
          <label for="openSideMenu" class="menuIconToggle">
            <div class="hamb-line dia part-1"></div>
            <div class="hamb-line hor"></div>
            <div class="hamb-line dia part-2"></div>
          </label>
          <nav class="hamburger">
            <ul>
              <li><a href="../homepage">Home</a></li>
              <li><a href="../about">About</a></li>
              <li><a href="../product">Product</a></li>
              <li><a href="../article">Article</a></li>
              <li><a href="">Testimoni</a></li>
              <li><a href="../contact">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <!-- Sidebar-->

      <nav id="floatNav" class="navbar navbar-expand-sm">
        <div class="container-fluid">
          <ul class="nav flex-row nav-justified">
            <li class="nav-item active">
              <a class="nav-link" href="../homepage">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../about">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../product">Product</a>
            </li>
            <img src="../Assets/Logo.png" />
            <li class="nav-item active">
              <a class="nav-link" href="../article">Article</a>
            </li>
            <li class="nav-item active">
              <a id="Testimoni" class="nav-link" href="">Testimoni</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </nav>
    <!-- Akhir Navbar -->
  </div>
  <section id="section1">
    <div class="container-fluid d-flex justify-content-center">
      <div class="row">
        <div class="col justify-content-center text-center center-block">
          <h1>Gallery</h1>
          <div class="container mt-5 mb-5">
            <div class="row g-2">
              <div class="col-md-4">
                <div class="card p-3 text-center px-4 c1 justify-content-center">
                  <div class="user-image">
                    <img
                      src="https://s16.picofile.com/file/8414366276/105_1055656_account_user_profile_avatar_avatar_user_profile_icon.png"
                      alt="profile image" class="mx-auto d-block img-fluid rounded-circle profile-img" width="150"
                      height="150">
                  </div>

                  <div class="user-content">
                    <h5 class="mb-0">Indri</h5>

                    <p class="text1">
                      Rujaknya serutnya seger bgt, sedeep, asem, manis n pedesnya passss bangeeet aplg kalo dimakan
                      dingin2.. manteeep
                    </p>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card" width="900px">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img class="card-img-top" src="https://i.ibb.co/wQ28Qpt/deddy-corbuzier.jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <div class="card-body text-center">

                    <h5 class="h5 font-weight-bold">Deddy Corbuzier, Ph.D</h5>
                  </div>
                  <audio src="../Assets/testimoni_deddy.mp3" controls></audio>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card p-3 text-center px-4 c3">
                  <div class="user-image">
                    <img
                      src="https://s16.picofile.com/file/8414366276/105_1055656_account_user_profile_avatar_avatar_user_profile_icon.png"
                      alt="profile image" class="mx-auto d-block img-fluid rounded-circle profile-img" width="150"
                      height="150">
                  </div>

                  <div class="user-content">
                    <h5 class="mb-0">Nafista</h5>

                    <p class="text3">
                      Fresh, segar, pedesnya pas. Mantulll lain kali pasti order lagi
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="section2">
    <div class="divider">
      <span></span><span>DYTA Yasmin Gallery</span><span></span>
    </div>
    <!-- Page Content -->
    <div class="row row-cols-1 row-cols-md-4 g-4 px-5 py-5 justify-content-center">
      <?php

      include "../admin/page/koneksi.php";

      $nomor = 1;
      $sql = $connect->query("SELECT * FROM tb_galeri");


      while ($data = $sql->fetch_assoc()) {
        GalleryComponent($data['foto']);
      }
      ?>
    </div>
  </section>
</body>
<footer class="footer text-center text-lg-start mt-5">
  <div class="text-center p-3">Copyright &copy; 2022 DYTA Yasmin</div>
</footer>

</html>