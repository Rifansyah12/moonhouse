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
            </div>
        </nav>
        <div class="container mt-5">
            <form  method="post">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/gambar1.jpg" alt="Deskripsi Gambar" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <h2 style="color: black">FORM PEMBELIAN</h2>

                        <div class="form-group">
                            <label for="nama_barang" style="color: black">Nama Barang:</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                        </div>

                        <div class="form-group">
                            <label for="jumlah" style="color: black">Jumlah:</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                        </div>

                        <div class="form-group">
                            <label style="color: black">Jenis Pembayaran:</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="pembayaran_cash" name="jenis_pembayaran" value="cash" required>
                                <label class="form-check-label" for="pembayaran_cash" style="color: black">Cash</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat_pengiriman" style="color: black">Alamat Pengiriman:</label>
                            <textarea class="form-control" id="alamat_pengiriman" name="alamat_pengiriman" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" name="pembelian">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
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
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src=" frontend/libraries/jquery/jquery-3.5.1.min.js "></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.min.js "></script> -->
    <?php
    if(isset($_POST['pembelian'])){
        $id_pembelian = $_SESSION['pembeli']['id_pembeli'];
        $nama_barang =$_POST['nama_barang'];
        $jumlah_barang= $_POST['jumlah'];
        $jenis_pembayaran = $_POST['jenis_pembayaran'];
        $alamat_pengiriman = $_POST['alamat_pengiriman']; 

        $koneksi->query("INSERT INTO pembelian(id_pembeli,nama_barang,jumlah,jenis_pembayaran,alamat_pengiriman)VALUES
        ('$id_pembelian', '$nama_barang', '$jumlah_barang', '$jenis_pembayaran', '$alamat_pengiriman')");

        echo "<script>alert('produk sudah masuk ke nota'); </script>";
        echo "<script>location='pembelian_product.php'</script>";
    }
    ?>

</body>

</html>