<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $No_Urut= $_POST['No_Urut'];
      $Nama_Barang = $_POST['Nama_Barang'];
      $Tanggal_Beli = $_POST['Tanggal_Beli'];
      $Jumlah_Beli = $_POST['Jumlah_Beli'];
      $Jumlah_Harga = $_POST['Jumlah_Harga'];
      $Taksiran_Umur_Teknis = $_POST['Taksiran_Umur_Teknis'];
      $Taksiran_Umur_Ekonomis = $_POST['Taksiran_Umur_Ekonomis'];
      $Keadaan_Barang= $_POST['Keadaan_Barang'];
      $Keterangan = $_POST['Keterangan'];

      $query = "INSERT INTO buku_inventaris (No_Urut, Nama_Barang, Tanggal_Beli, Jumlah_Beli, Jumlah_Harga, Taksiran_Umur_Teknis, Taksiran_Umur_Ekonomis, Keadaan_Barang, Keterangan) VALUES ('$No_Urut', '$Nama_Barang', '$Tanggal_Beli', '$Jumlah_Beli', '$Jumlah_Harga', '$Taksiran_Umur_Teknis', '$Taksiran_Umur_Ekonomis', '$Keadaan_Barang', '$Keterangan')";

      if (mysqli_query($conn, $query)) {
            echo "";
      } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
      header("Location: Admin_Inventaris.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style-form.css">
      <title>Formulir Inventaris</title>
</head>

<body>
      <div class="form-inventaris">
            <header>
                  <div class="Logo">
                        <img src="image/koperasi-indonesia-logo.png" alt="">
                        <h2>Koperasi <br>Agro Mulyo Lestari</h2>
                  </div>
                  <ul class="navbar">
                        <li><a href="Admin_Beranda.php">Beranda</a></li>
                        <li><a href="#">Administrasi</a></li>
                        <li><a href="Admin_Katalog_Produk.php">Produk Kami</a></li>
                        <li><a href="Logout_Admin.php" onclick="return confirm('Apakah Anda yakin?')">Logout</a></li>
                  </ul>
            </header>
            <nav>
                  <div class="navbar">
                        <a href="Admin_Daftar_Anggota.php">Buku Daftar</a>
                        <a href="Admin_Notulen_Rapat_Biasa.php">Notulen Rapat</a>
                        <a href="Admin_Buku_Tamu.php">Buku Tamu</a>
                        <a href="Admin_Inventaris.php">Buku Inventaris</a>
                  </div>
            </nav>
            <section>
                  <div class="sidebar">
                        <h2>Buku Inventaris</h2>
                        <ul>
                              <li><a href=""></a></li>
                              <li><a href=""></a></li>
                              <li><a href=""></a></li>
                        </ul>
                  </div>
                  <div class="input">
                        <form class="formulir" action="Form_Inventaris.php" method="post">
                              <h3>Formulir Inventaris</h3>
                              <label for="nomor">No Urut :</label>
                              <input type="number" id="nomor" name="No_Urut" required><br><br>
                              <label for="nama">Nama Barang :</label>
                              <input type="text" id="nama" name="Nama_Barang" required><br><br>
                              <label for="tanggal">Tanggal Beli :</label>
                              <input type="date" id="tanggal" name="Tanggal_Beli" required><br><br>
                              <label for="jumlah-beli">Jumlah Beli :</label>
                              <input type="text" id="jumlah-beli" name="Jumlah_Beli" required><br><br>
                              <label for="jumlah-harga">Jumlah Harga :</label>
                              <input type="number" id="jumlah-harga" name="Jumlah_Harga" required><br><br>
                              <label for="taksiran-umur-teknis">Taksiran Umur Teknis :</label>
                              <input type="text" id="taksiran-umur-teknis" name="Taksiran_Umur_Teknis" required><br><br>
                              <label for="taksiran-umur-ekonomis">Taksiran Umur Ekonomis :</label>
                              <input type="text" id="taksiran-umur-ekonomis" name="Taksiran_Umur_Ekonomis"
                                    required><br><br>
                              <label for="keadaan-barang">Keadaan Barang :</label>
                              <select id="keadaan-barang" name="Keadaan_Barang" required>
                                    <option value="Baik-Sekali">Baik Sekali</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Buruk">Buruk </option>
                                    <option value="Buruk-Sekali">Buruk Sekali</option>
                              </select><br><br>
                              <label for="keterangan">Keterangan :</label>
                              <input type="text" id="keterangan" name="Keterangan" required><br><br>
                              <input type="submit" value="Tambah">
                        </form>
                  </div>
            </section>
            <footer>
                  <p><strong>Copyright &copy; Koperasi Agro Mulyo Lestari</strong></p>
            </footer>
      </div>
</body>

</html>