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

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #ffffff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #ffffff;
        }

        p {
            color: #555;
            line-height: 1.6;
        }
        </style>
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
              <a href="logout.php" class="btn btn-login my-2 my-sm-0">Logout</a>
              </form>

              <!-- Desktop Button -->
              <form class="form-inline my-2 my-lg-0 d-none d-md-block">
              <a href="logout.php" class="btn btn-login my-2 my-sm-0">Logout</a>
              </form>
          </div>
      </nav>
  </div>
    <div class="container">
        <p>Selamat datang di halaman "MOONHOUSE".</p>
        <p>Kami berkomitmen untuk memberikan solusi terbaik dan memberikan pengalaman pelanggan yang memuaskan.</p>

        <p> Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami.</p>
        <p> CONTAC INFORMATION</p>
        <p> Instagram @moonhouse</p>
        <p> Whatsapp 0895631885857</p>
        <p> Facebook @moonhouse</p>
    </div>
</body>
</html>