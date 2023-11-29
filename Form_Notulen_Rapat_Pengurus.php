<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $No_Urut= $_POST['No_Urut'];
      $Tanggal_Rapat = $_POST['Tanggal_Rapat'];
      $Tempat_Rapat = $_POST['Tempat_Rapat'];
      $Jumlah_Pengurus_Hadir = $_POST['Jumlah_Pengurus_Hadir'];
      $Undangan_Hadir= $_POST['Undangan_Hadir'];
      $Pimpinan_Rapat = $_POST['Pimpinan_Rapat'];
      $Acara_Rapat = $_POST['Acara_Rapat'];
      $Keputusan_Rapat = $_POST['Keputusan_Rapat'];

      $query = "INSERT INTO notulensi_rapat_pengurus (No_Urut, Tanggal_Rapat, Tempat_Rapat, Jumlah_Pengurus_Hadir, Undangan_Hadir, Pimpinan_Rapat, Acara_Rapat, Keputusan_Rapat) VALUES ('$No_Urut', '$Tanggal_Rapat', '$Tempat_Rapat', '$Jumlah_Pengurus_Hadir', '$Undangan_Hadir', '$Pimpinan_Rapat', '$Acara_Rapat', '$Keputusan_Rapat')";


      if (mysqli_query($conn, $query)) {
            echo "Data berhasil ditambahkan.";
      } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
      header("Location: Admin_Notulen_Rapat_Pengurus.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style-form.css">
      <title>Form Notulensi Rapat Pengurus</title>
</head>

<body>

      <div class="form-notulensi-rapat-pengurus">
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
                        <a href="Daftar_Anggota.php">Daftar Anggota</a>
                        <a href="#">Notulen Rapat</a>
                        <a href="Admin_Buku_Tamu.php">Buku Tamu</a>
                        <a href="Admin_Invenaris.php">Buku Inventaris</a>
                  </div>
            </nav>
            <section>
                  <div class="sidebar">
                        <h3>Notulen Rapat</h3>
                        <ul>
                              <li><a href="Admin_Notulen_Rapat_Biasa.php">Rapat Biasa</a></li>
                              <li><a href="Admin_Notulen_Rapat_Pengurus.php">Rapat Pengurus</a></li>
                              <li><a href="Admin_Notulen_Rapat_Pengawas.php">Rapat Pengawas</a></li>
                        </ul>
                  </div>
                  <div class="input">
                        <form class="formulir" action="Form_Notulen_Rapat_Pengawas.php" method="post">
                              <h3>FORMULIR RAPAT PENGURUS</h3>
                              <label for="No">No Urut :</label>
                              <input type="number" id="No" name="No_Urut" required><br><br>
                              <label for="Tanggal">Tanggal Rapat :</label>
                              <input type="text" id="Tanggal" name="Tanggal_Rapat" required><br><br>
                              <label for="Tempat">Tempat Rapat :</label>
                              <input type="text" id="Tempat" name="Tempat_Rapat" required><br><br>
                              <label for="Jumlah Pengurus ">Jumlah Pengurus Hadir :</label>
                              <input type="number" id="Jumlah Pengurus" name="Jumlah_Pengurus_Hadir" required><br><br>
                              <label for="Undangan">Undangan Hadir :</label>
                              <input type="number" id="Undangan" name="Undangan_Hadir" required><br><br>
                              <label for="Pimpinan">Pimpinan Rapat :</label>
                              <input type="text" id="Pimpinan" name="Pimpinan_Rapat" required><br><br>
                              <label for="Acara">Acara Rapat :</label>
                              <input type="text" id="Acara" name="Acara_Rapat" required><br><br>
                              <label for="Keputusan">Keputusan Rapat :</label>
                              <input type="text" id="Keputusan" name="Keputusan_Rapat" required><br><br>
                              <input type="submit" value="SUBMIT">
                        </form>
                  </div>
            </section>
            <footer>
                  <p><strong>Copyright &copy; Koperasi Agro Mulyo Lestari</strong></p>
            </footer>
      </div>
</body>

</html>