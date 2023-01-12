<?php
include "../admin/page/koneksi.php";
require_once('../admin/Component/ArticleCard.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <title>DYTA Yasmin - Article</title>
  <link rel="stylesheet" href="style.css" />
  <script src="../../Jquery/prettify.js"></script>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <!-- Header -->
  <div class="head1">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>

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
              <li><a href="../testimoni">Testimoni</a></li>
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
              <a id="article" class="nav-link" href="../article">Article</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../testimoni">Testimoni</a>
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
    <div class="container-fluid">
      <div class="row">
        <div class="col justify-content-center text-center center-block">
          <h1 class="mb-5">Article</h1>
        </div>
      </div>
    </div>
  </section>
  <section id="section2">
    <div class="divider">
      <span></span><span>DYTA Yasmin Rujak Serut</span><span></span>
    </div>
    <?php

    include "../admin/page/koneksi.php";

    $nomor = 1;
    $sql = $connect->query("SELECT * FROM tb_artikel");


    while ($data = $sql->fetch_assoc()) {
      ArticleComponent($data['judul_artikel'], $data['des_artikel'], $data['link'], $data['foto']);
    }
    ?>
  </section>
</body>
<footer class="footer text-center text-lg-start">
  <div class="text-center p-3">Copyright &copy; 2022 DYTA Yasmin</div>
</footer>

</html>