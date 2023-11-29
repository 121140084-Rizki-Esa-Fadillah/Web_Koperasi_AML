<?php
// Simpan file ini dengan nama login.php

// Fungsi untuk melakukan validasi login
function login($email, $password) {
      // Gantilah dengan logika validasi sesuai kebutuhan Anda
      // Misalnya, Anda dapat menggunakan koneksi ke database untuk memeriksa data pengguna

      $adminEmail = "AgroMulyoLestari@gmail.com";
      $adminPassword = "KoperasiAML";

      if ($email == $adminEmail && $password == $adminPassword) {
            // Login berhasil
            session_start();
            $_SESSION['user_email'] = $email;
            header("Location: Admin_Beranda.php"); // Ganti dengan halaman yang sesuai
            exit();
      } else {
            // Login gagal
            header("Location: Login_Admin.php?error=1"); // Redirect kembali ke halaman login dengan indikator error
            exit();
      }
}

// Tangkap data dari form login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];

      login($email, $password);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style-login.css">
      <title>Login</title>
</head>

<body>
      <div class="login">
            <img class="koperasi-indonesia" src="image/koperasi-indonesia-logo.png" />
            <h1>Koperasi Agro Mulyo Lestari</h1>

            <?php
                  // Tampilkan notifikasi kesalahan jika ada
                  if (isset($_GET['error']) && $_GET['error'] == 1) {
                        echo '<p style="color: red;">Email atau password salah. Silakan coba lagi.</p>';
                  }
            ?>

            <form action="" method="post" onsubmit="Login(event);" autocomplete="off"">
                  <label for=" email">Email :</label>
                  <input type="email" id="email" name="email" required><br><br>
                  <label for="password">Password :</label>
                  <input type="password" id="password" name="password"><br><br><br>
                  <a href="#"><button type="submit">Masuk</button></a>
            </form>
      </div>
</body>

</html>