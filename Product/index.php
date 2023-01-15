<?php
include "../admin/page/koneksi.php";
require_once('../admin/Component/cardComponent.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <title>DYTA Yasmin - Product</title>
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
              <li><a href="product">Product</a></li>
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
              <a id="product" class="nav-link" href="">Product</a>
            </li>
            <img src="../Assets/Logo.png" />
            <li class="nav-item active">
              <a class="nav-link" href="../article">Article</a>
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
          <h1>Product</h1>
        </div>
      </div>
    </div>
    <div class="card bg-dark text-center card2 mt-5" style="width: auto; text-align: justify; max-width: 600px">
      <div class="card-header text-center title1" style="color: white">
        DYTA Yasmin
      </div>
      <div class="card-body">
        <p class="card-text">
          Untuk menciptakan citarasa rujak serut yang segar dan nikmat untuk
          dinikmati, kami menggunakan buah-buahan segar dan bahan lainnya yang
          berkualitas.
        </p>
      </div>
    </div>
  </section>
  <section class="about-section" class="mt-5">
    <div class="container">
      <div class="row clearfix">
        <!--Content Column-->
        <div class="content-column col-md-6 col-sm-12 col-xs-12">
          <div class="inner-column">
            <div class="sec-title">
              <div class="title">Tentang Manfaat Produk Kami</div>
              <h2>
                Berikut adalah daftar bahan-bahan yang digunakan dan manfaat
                bagi tubuh:
              </h2>
            </div>
            <h1>Timun</h1>
            <div class="text">
              Timun adalah kelompok tanaman Cucurbitaceae yang masih satu
              keluarga dengan labu, pare, dan melon. Timun mengandung nutrisi
              seperti antioksidan, vitamin C, rendah kalori, natrium dan
              rendah lemak. Manfaat timun bisa untuk kesehatan, perawatan
              kulit, sampai jantung.
            </div>
          </div>
        </div>

        <!--Image Column-->
        <div class="image-column col-md-6 col-sm-12 col-xs-12">
          <div class="inner-column" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
              <img src="../Assets/mentimum1.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="content-column col-md-6 col-sm-12 col-xs-12 mt-5">
          <div class="inner-column">
            <h1>Nanas</h1>
            <div class="text">
              Buah nanas mengandung sejumlah besar vitamin C yang membantu
              melawan kerusakan sel. Vitamin C juga menjadi membantu mengatasi
              masalah kesehatan, seperti penyakit jantung dan nyeri sendi.
            </div>
          </div>
        </div>

        <!--Image Column-->
        <div class="image-column col-md-6 col-sm-12 col-xs-12 mt-5">
          <div class="inner-column" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
              <img src="../Assets/nanas.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="content-column col-md-6 col-sm-12 col-xs-12 mt-5">
          <div class="inner-column">
            <h1>Kedondong</h1>
            <div class="text">
              Buah kedondong yang seringkali ditemukan di dalam rujak
              mengandung vitamin A sebanyak 233 IU, 30 mg vitamin C, kalsium
              sebanyak 15 mg kalsium, 3 mg zat besi, dan 22 gram fosfor. Tak
              lupa, di dalam daging kedondong mengandung serat makanan serta
              vitamin B kompleks seperti thiamin dan riboflavin. Manfaat
              kedondong ternyata terbukti baik untuk kesehatan tubuh.
            </div>
          </div>
        </div>

        <!--Image Column-->
        <div class="image-column col-md-6 col-sm-12 col-xs-12 mt-5">
          <div class="inner-column" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
              <img src="../Assets/kedondong.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="content-column col-md-6 col-sm-12 col-xs-12 mt-5">
          <div class="inner-column">
            <h1>Ubi Merah/Ubi Jalar</h1>
            <div class="text">
              Manfaat ubi jalar bagi kesehatan tak hanya terbatas pada
              membantu membuat perut kenyang. Ubi jalar ternyata memiliki
              kandungan nutrisi yang dapat membantu memenuhi kebutuhan gizi
              Anda sehari-hari. Tak hanya itu, ubi jalar juga memiliki gula
              alami yang lebih banyak dari kentang, tetapi dengan jumlah
              kalori yang lebih sedikit.
            </div>
          </div>
        </div>

        <!--Image Column-->
        <div class="image-column col-md-6 col-sm-12 col-xs-12 mt-5">
          <div class="inner-column" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
              <img src="../Assets/ubi.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="content-column col-md-6 col-sm-12 col-xs-12 mt-5">
          <div class="inner-column">
            <h1>Mangga</h1>
            <div class="text">
              Buah yang merupakan salah satu bahan paling penting dalam
              hidangan rujak yang tidak hanya menyegarkan, namun juga memiliki
              banyak manfaat kesehatan seperti menjaga kesehatan rambut dan
              kulit, menurunkan tekanan darah, mencegah kanker, meredakan
              sembelit, dan lain lain.
            </div>
          </div>
        </div>

        <!--Image Column-->
        <div class="image-column col-md-6 col-sm-12 col-xs-12 mt-5">
          <div class="inner-column" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
              <img src="../Assets/mangga.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="content-column col-md-6 col-sm-12 col-xs-12 mt-5">
          <div class="inner-column">
            <h1>Bengkoang</h1>
            <div class="text">
              Dalam 100 gram buah bengkoang terkandung sekitar 40 persen
              kebutuhan vitamin C harian untuk tubuh. Adapun asupan vitamin C
              dalam tubuh memainkan peran penting dalam menjaga dan
              meningkatkan sistem kekebalan tubuh. Jika kekebalan tubuh
              meningkat, tubuh tidak akan mudah terserang bakteri, virus,
              ataupun jamur yang dapat menyebabkan penyakit. Selain itu
              terdapat serat yang berfungsi meningkatkan kesehatan pencernaan.
            </div>
          </div>
        </div>

        <!--Image Column-->
        <div class="image-column col-md-6 col-sm-12 col-xs-12 mt-5">
          <div class="inner-column" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
              <img src="../Assets/bengkoang.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="section2">
    <div class="divider mt-5">
      <span></span><span>Penawaran DYTA Yasmin</span><span></span>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4 px-5 py-5 justify-content-center">
      <?php

      include "../admin/page/koneksi.php";

      $nomor = 1;
      $sql = $connect->query("SELECT * FROM tb_produk");


      while ($data = $sql->fetch_assoc()) {
        Component($data['nama_produk'], $data['harga_produk'], $data['foto_produk']);
      }
      ?>
    </div>
    </div>
  </section>
</body>
<!-- Footer -->
<footer class="footer text-center text-lg-start">
  <div class="text-center p-3">Copyright &copy; 2022 DYTA Yasmin</div>
</footer>

</html>