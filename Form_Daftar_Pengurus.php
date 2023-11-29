<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $No_Pengurus= $_POST['No_Pengurus'];
      $Nama_Lengkap = $_POST['Nama_Lengkap'];
      $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
      $Tempat_Tanggal_Lahir = $_POST['Tempat_Tanggal_Lahir'];
      $Alamat= $_POST['Alamat'];
      $Jabatan = $_POST['Jabatan'];

      $query = "INSERT INTO daftar_pengurus (No_Pengurus, Nama_Lengkap, Jenis_Kelamin, Tempat_Tanggal_Lahir, Alamat, Jabatan) VALUES ('$No_Pengurus', '$Nama_Lengkap', '$Jenis_Kelamin', '$Tempat_Tanggal_Lahir', '$Alamat', '$Jabatan')";


      if (mysqli_query($conn, $query)) {
            echo "";
      } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
      header("Location: Admin_Daftar_Pengawas.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style-form.css">
      <title>Formulir Daftar Pengurus</title>
</head>

<body>

      <div class="form-daftar-pengurus">
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
                        <h2>Buku Daftar</h2>
                        <ul>
                              <li><a href="Admin_Daftar_Anggota.php">Buku Daftar Anggota</a></li>
                              <li><a href="Admin_Daftar_Pengurus.php">Buku Daftar Pengurus</a></li>
                              <li><a href="Admin_Daftar_Pengawas.php">Buku Daftar Pengawas</a></li>
                        </ul>
                  </div>
                  <div class="input">
                        <form class="formulir" action="Form_Daftar_Pengurus.php" method="post">
                              <h3>Formulir Daftar Pengurus</h3>
                              <label for="nomor">No Pengurus :</label>
                              <input type="number" id="nomor" name="No_Pengurus" required><br><br>
                              <label for="nama">Nama Lengkap :</label>
                              <input type="text" id="nama" name="Nama_Lengkap" required><br><br>
                              <label for="kelamin">Jenis Kelamin :</label>
                              <select id="jenis_kelamin" name="Jenis_Kelamin" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                              </select><br><br>
                              <label for="TTL">Tempat, Tanggal Lahir :</label>
                              <input type="text" id="TTL" name="Tempat_Tanggal_Lahir" required><br><br>
                              <label for="alamat">Alamat :</label>
                              <input type="text" id="alamat" name="Alamat" required><br><br>
                              <label for="jabatan">Jabatan :</label>
                              <input type="text" id="jabatan" name="Jabatan" required><br><br>
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