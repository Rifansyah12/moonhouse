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
            <h1>MOONHOUSE</h1>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="index.php" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="product.php" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="tentangkami.php" class="nav-link">Tentang Kami</a>
                    </li>
                </ul>
                <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0">
                        Masuk
                    </button>
                </form>

                <!-- Desktop Button -->
                <a href="logout.php" class="btn btn-login my-2 my-sm-0">Logout</a>
            </div>
        </nav>
    </div>

    <br>
    <!-- bagian Kelas Populer -->
    <section class="section-populer" id=populer>
        <div class="container">
            <div class="row justify-content-start justify-content-lg-start justify-content-md-start justify-content-sm-start">
                <span class="judul">NIKE <img src="img/R.png"></span>
            </div>
            <div class="row justify-content-center">
                <div class="card px-1 py-3 text-left d-flex flex-column" style="width: 14rem;">
                    <img src="img/Nike Air Force 1 '07 Rs Whiteblack.jpeg" class="card-img-top" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title">
                            Nike Air Force 1 <br> White Black
                        </h5>
                        <div class="row">
                            <div class="col align-self-center">
                            </div>
                            <div class="col justify-content-end">
                            </div>
                        </div>
                        <hr>
                        <p class="harga" style="color: #c2c2c2;">Rp.350.000</p>
                        <a href="Pembelian/Buy_nike.php" div class="btn-ikut-kursus btn-block">Buy Now</a>
                            </div>
                </div>
                <div class="card px-1 py-3 text-left d-flex flex-column" style="width: 14rem;">
                    <img src="img/SPORT NIKE AIRMAX RUNNING.jpeg" class="card-img-top" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title">
                            Sport Nike Airmax <br> Running
                        </h5>
                        <div class="row">
                            <div class="col align-self-center">
                            </div>
                            <div class="col justify-content-end">
                            </div>
                        </div>
                        <hr>
                        <p class="harga" style="color: #c2c2c2;">Rp.250.000</p>
                        <a href="Pembelian/Buy_nike2.php" div class="btn-ikut-kursus btn-block"> Buy Now</a></div>
                </div>
                <!-- tambah content produk -->
                <div class="card px-1 py-3 text-left d-flex flex-column" style="width: 14rem;">
                    <img src="img/Nike airmax 97 triple blck.jpeg" class="card-img2" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title">
                            Nike AIR MAX97 <br> Triple Black
                        </h5>
                        <div class="row">
                            <div class="col align-self-center">
                            </div>
                            <div class="col justify-content-end">
                            </div>
                        </div>
                        <hr>
                        <p class="harga" style="color: #c2c2c2;">Rp.350.000</p>
                        <a href="Pembelian/Buy_nike3.php" div class="btn-ikut-kursus btn-block"> Buy Now</a></div>
                </div>
                <div class="card px-1 py-3 text-left d-flex flex-column" style="width: 14rem;">
                    <img src="img/NIke Air Jordan.jpeg" class="card-img2" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title">
                            Air Jordan
                        </h5>
                        <div class="row">
                            <div class="col align-self-center">
                            </div>
                            <div class="col justify-content-end">
                            </div>
                        </div>
                        <hr>
                        <p class="harga" style="color: #c2c2c2;">Rp.1.250.000</p>
                        <a href="Pembelian/Buy_nike4.php" div class="btn-ikut-kursus btn-block">Buy Now</a>
                            </div>
                </div>
            </div>
            <!-- pagination -->

            <!-- Akhirpagination -->
        </div>
        </div>
        </div>
    </section>
    <!-- akhir bagian populer -->


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

    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="libraries/jquery/jquery-3.5.1.min.js"></script>

</body>

</html>