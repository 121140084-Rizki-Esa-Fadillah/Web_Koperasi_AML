<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $No_Urut= $_POST['No_Urut'];
      $Tanggal= $_POST['Tanggal'];
      $Nama_Pejabat = $_POST['Nama_Pejabat'];
      $Pejabat = $_POST['Pejabat'];
      $Alamat_Kantor= $_POST['Alamat_Kantor'];
      $Isi_Anjuran = $_POST['Isi_Anjuran'];

      $query = "INSERT INTO buku_anjuran_pejabat (Tanggal, Pejabat, Alamat_Kantor, Isi_Anjuran) VALUES ('$Tanggal', '$Pejabat', '$Alamat_Kantor', '$Isi_Anjuran')";

      if (mysqli_query($conn, $query)) {
            echo "";
      } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
      header("Location: Admin_Buku_Anjuran_Tamu.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style-form.css" />
      <title>Buku Tamu</title>
</head>

<body>
      <div class="buku-tamu">
            <header>
                  <div class="Logo">
                        <img src="image/koperasi-indonesia-logo.png" alt="" />
                        <h2>Koperasi <br />Agro Mulyo Lestari</h2>
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
                        <h2>Buku Tamu</h2>
                        <ul>
                              <li><a href="Admin_Buku_Tamu.php">Buku Tamu Biasa</a></li>
                              <li><a href="#">Buku Anjuran Pejabat</a></li>
                        </ul>
                  </div>
                  <div class="input">
                        <form class="formulir" action="Form_Buku_Anjuran_Pejabat.php" method="post">
                              <h3>Formulir Buku Anjuran Pejabat</h3>
                              <label for="nomor">No Urut :</label>
                              <input type="number" id="nomor" name="No_Urut" required><br><br>
                              <label for="tanggal">Tanggal :</label>
                              <input type="date" id="tanggal" name="Tanggal" required><br><br>
                              <label for="nama">Nama Pejabat :</label>
                              <input type="text" id="nama" name="Nama_Pejabat" required><br><br>
                              <label for="pejabat">Pejabat :</label>
                              <input type="text" id="pejabat" name="Pejabat" required><br><br>
                              <label for="alamat">Alamat Kantor :</label>
                              <input type="text" id="alamat" name="Alamat_Kantor" required><br><br>
                              <label for="isi-anjuran">Isi Anjuran :</label>
                              <input type="text" id="isi-anjuran" name="Isi_Anjuran" required><br><br>
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