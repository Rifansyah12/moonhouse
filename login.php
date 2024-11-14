<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            color: #333;
        }

        .login-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
        a {
            text-decoration: none;
            color: blueviolet;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form class="login-form" method="post">
            <div class="form-group">
                <label for="username">Email</label>
                <input type="text" id="username" name="email" placeholder="Masukan Email Anda" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukan Kata Sandi" required>
            </div>
            <div class="form-group">
                <button type="submit" name="login">Login</button>
            </div>
        </form>
        <a href="register.php">Klik Jika Anda Tidak Mempunyai Akun</a>
    </div>

    <?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pasword = $_POST['password'];

        $ambil = $koneksi->query("SELECT * FROM pembeli WHERE email_pembeli='$email' AND password='$pasword'");
        $akuncocok = $ambil->num_rows;

        if($akuncocok==1){
            $akun = $ambil->fetch_assoc();
            $_SESSION['pembeli']=$akun;

            echo "<script> alert('Anda Sukses Login'); </script>";
            echo "<script>location='index.php'; </script>";
        }else{
            echo "<script> alert('Anda Gagal Login'); </script>";
            echo "<script>location='login.php'; </script>";
        }
    }
    ?>


</body>
</html>
