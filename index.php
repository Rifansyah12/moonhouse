<?php
session_start();
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="styles/main.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
   <title>moonhouse</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="row navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand-xs navbar-light bg-white">
         <h1>MOONHOUSE.SCN</h1>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="index.php" class="nav-link active">Beranda</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="product.php" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="tentangkami.php" class="nav-link">Tentang Kami</a>
                    </li>
                </ul>
                <!-- Mobile Button -->
                <a href="logout.php" class="btn btn-login my-2 my-sm-0">Logout</a>

                <!-- Desktop Button -->
                
                </form>
            </div>
        </nav>
    </div>

    <!-- bagian header -->
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 align-self-center">
                    <h1 class="mb-4 mt-4" style="color: blueviolet;">
                     SELAMAT DATANG!
                     <br>
                     <br>
                        Anda hanya tinggal pilih <span style="color: blue;">Sepatu</span> Anda disini!<br>
                    </h1>
                    <p class="mb-4" style="color: black;">
                        Situs jual beli sepatu second tepercaya <br> Temukan berbagai pilihan sepatu second berkualitas untuk gaya hidup Anda!
                    </p>
                </div>
                <div class="col-lg-5 mb-2 align-self-stretch">
                    <img src="frontend/images/hero3.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <br><br> <br>
    <!-- bagian Produk terbaru -->
    <section class="section-populer" id=populer>
        <div class="container">
            <div class="row justify-content-center justify-content-lg-center justify-content-md-center justify-content-sm-center">
                <span class="judul">Produk Terbaru</span>
            </div>
            <div class="row justify-content-center">
                <div class="card px-1 py-3 text-left d-flex flex-column" style="width: 14rem;">
                    <img src="img/dcmarteen.jpg" class="card-img-top" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title">
                            Dr.Marteens Red Cherry
                        </h5>
                        <div class="row">
                            <div class="col align-self-center">
                            </div>
                            <div class="col justify-content-end">
                            </div>
                        </div>
                        <hr>
                        <p class="harga" style="color: #c2c2c2;">Rp.1.250.000</p>
                        <a href="produk_detail.html" div class="btn-ikut-kursus btn-block"> Lihat Detail</a></div>
                </div>
            </div> <section class="section-populer" id=populer>
        </div>
        </div>
    </section>
    <!-- akhir bagian produk terbaru -->
    <!-- bagian Kategori Kelas -->
    <div class="row justify-content-center">
        <div class="judul">Kategori Produk</div>
    </div>
    <section class="kategori-kelas">
        <div class="container">
            <div class="row justify-content-center">
                <a href="nike.php" class="box">
                    <img src="img/R.png" alt="icon">
                    <br>
                    <br>
                    <p style="text-decoration: none; color: black;">NIKE</p>
                </a>
                <!-- <a href="#" class="box">
                    <img src="frontend/images/game2.png" alt="icon"><br>
                    <p style="text-decoration: none;">Game Development</p>
                </a> -->
                <a href="Converse.html" class="box">
                    <img src="img/converse.jpeg" >
                    <br>
                    <br>
                    <p style="text-decoration: none; color: black;">CONVERSE</p>
                </a>
                <!-- <a href="#" class="box">
                    <img src="frontend/images/animasi.png" alt="icon"><br>
                    <p style="text-decoration: none;">Animation Class</p>
                </a> -->
                <a href="Vans.html" class="box">
                    <img src="img/Vans-Logo-1966.jpg" alt="icon">
                    <br>
                    <br>
                    <p style="text-decoration: none; color: black;">VANS</p>
                </a>
                <!-- <a href="#" class="box">
                    <img src="frontend/images/dm.png" alt="icon"><br>
                    <p style="text-decoration: none;">Digital Marketing</p>
                </a> -->
            </div>
        </div>
    </section>
    <!-- bagian Akhir Kategori Kelas -->
    <br><br>
    <!-- Awal footer -->
    <footer class="section-footer mt-5 mb-4 border-top">
      <div class="container pt-5 pb-5">
          <div class="row justify-content-center">
              <div class="col-12">
                  <div class="row">
                      <div class="col-12 col-lg-3">
                          <h5>Bantuan</h5>
                          <ul class="list-unstyled">
                              <li><a href="#">Tentang Kami</a></li>
                              <li><a href="#">Kebijakan & Privasi</a></li>
                          </ul>
                      </div>
                      <div class="col-12 col-lg-3">
                          <h5>Informasi</h5>
                          <ul class="list-unstyled">
                              <li><a href="#">Produk Terbaru</a></li>
                              <li><a href="#">Tutorial</a></li>
                              <li><a href="#">Cara Daftar</a></li>
                          </ul>
                      </div>
                      <div class="col-12 col-lg-3">
                          <h5>Kantor</h5>
                          <ul class="list-unstyled">
                              <li><a href="#">Buana Sari 5 NO.4</a></li>
                              <li><a href="#">Bandung, BandungKidul</a></li>
                              <li><a href="#">admin@rizkihndrwn</a></li>
                          </ul>
                      </div>
                      <div class="col-12 col-lg-3">
                          <h5>Media Sosial</h5>
                          <ul class="list-unstyled">
                              <li>
                                  <img src="img/medsos.png" alt="image">
                                  <a href="#">@moonhouse.scn</a>
                              </li>

                              <li>
                                  <img src="img/pngtree-whatsapp-icon-png-image_3584844-removebg-preview.png" alt="image">
                                  <a href="#">0895631885857</a>
                              </li>

                              <li>
                                  <img src="img/png-transparent-computer-icons-like-button-facebook-rectangle-logo-dpi-thumbnail-removebg-preview.png" alt="image">
                                  <a href="#">moonhouse.scn</a>
                              </li>

                          </ul>
                      </div>

                  </div>
              </div>
          </div>
      </div>
      <div class="container-fluid">
          <div class="row justify-content-center align-items-center pb-3">
              <div class="col-auto text-grey-500 font-weight-bold">
                  2023 Copyright Rizki Hendriawan
              </div>
          </div>
      </div>
  </footer>


    <script src=" frontend/libraries/jquery/jquery-3.5.1.min.js "></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.min.js "></script>

</body>

</html>