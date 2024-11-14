<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Nota Pembelian</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container2{
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.total-label {
    text-align: right;
}

.total-amount {
    font-weight: bold;
}

@media screen and (max-width: 600px) {
    table {
        overflow-x: auto;
        display: block;
    }
}
/* Gaya dasar untuk tombol tautan */
a {
  display: inline-block;
  padding: 10px 20px; /* Sesuaikan dengan padding yang diinginkan */
  text-decoration: none;
  background-color: #3498db; /* Warna latar belakang tombol */
  color: #ffffff; /* Warna teks tombol */
  border-radius: 5px; /* Sudut bulat pada tombol */
  transition: background-color 0.3s ease; /* Animasi perubahan warna latar belakang */
}

/* Gaya ketika kursor berada di atas tombol */
a:hover {
  background-color: #2980b9; /* Warna latar belakang tombol saat hover */
}


    </style>
</head>
<?php
$id_pembeli = $_SESSION['pembeli']['id_pembeli'];
$nama_pembeli = $_SESSION['pembeli']['nama_pembeli'];

?>
<body>
    <div class="container2">
        <?php
        
        $ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembeli='$id_pembeli'");
        ?>
        <h1>Nota Pembelian</h1>
        <p><strong>Nama Pelanggan:</strong><?php echo $nama_pembeli; ?></p>
        <table>
            <tr>
                <th>Nama Barang</th>
                <th>Jenis Pembayaran</th>
                <th>Alamat Pengiriman</th>
                <th>Total</th>
</tr>
            <tr>
                <?php while($pecah=$ambil->fetch_assoc()){?>
                <td><?php echo $pecah['nama_barang']; ?></td>
                <td><?php echo $pecah['jenis_pembayaran']; ?></td>
                <td><?php echo $pecah['alamat_pengiriman']; ?></td>
                <td><?php echo $pecah['jumlah']*250000; ?></td>
            </tr>
<?php } ?>
        </table>
        <a href="product.php" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>
