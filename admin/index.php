<?php
session_start();
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../libraries/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="../styles/main.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
   <title>moonhouse</title>
   <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
      color: black;
    }

    th {
      background-color: lightgreen;
      color: black;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
    .link{
        display: inline-block;
        background-color: lightblue;
        border-radius: 5px;
        text-decoration: none;
        color: #f2f2f2;
    }
  </style>
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
                        <a href="index.php" class="nav-link active">Produk Toko</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="product.php" class="nav-link">pembelian</a>
                    </li>

                </ul>
                <!-- Mobile Button -->
                <a href="logout.php" class="btn btn-login my-2 my-sm-0">Logout</a>

                <!-- Desktop Button -->
                
                </form>
            </div>
        </nav>
    </div>
    <h2>Daftar Produk</h2>
<a href="tambahproduk.php" class="link">Tambah Produk</a>

<table>
  <thead>
    <tr>
      <th>ID Produk</th>
      <th>Nama Produk</th>
      <th>Harga</th>
      <th>Foto Produk</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Produk A</td>
      <td>$50.00</td>
      <td>100</td>
      <td>
        <a href="hapus.php" class="link">Hapus</a>
        <a href="edit.php" class="link">Edit</a>
      </td>
    </tr>
    <!-- Tambahkan baris lainnya sesuai dengan jumlah produk yang Anda miliki -->
  </tbody>
</table>

   

</body>

</html>