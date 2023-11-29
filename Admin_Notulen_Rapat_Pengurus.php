<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style-admin-administrasi.css" />
      <title>Notulen Rapat Pengurus</title>
</head>

<?php 
include ("koneksi.php");
if (isset($_GET['No_Urut'])) {
      $delete_No_Urut = $_GET['No_Urut'];
    
      $delete_query = "DELETE FROM notulensi_rapat_pengurus WHERE No_Urut = '$delete_No_Urut'";

      if (mysqli_query($conn, $delete_query)) {
            // Set pesan yang ingin ditampilkan
            $pesan = "Data berhasil dihapus.";
            // echo "Data berhasil dihapus.";
      } else {
            echo "Error: " . $delete_query . "<br>" . mysqli_error($conn);
      }
}
?>

<script>
// Periksa apakah pesan sudah diatur sebelum menampilkan pop-up
<?php if (isset($pesan)) { ?>
alert("<?php echo $pesan; ?>");
<?php } ?>
</script>

<body>
      <div class="admin-notulen-rapat-pengurus">
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
                        <a href="#">Notulen Rapat</a>
                        <a href="Admin_Buku_Tamu.php">Buku Tamu</a>
                        <a href="Admin_Inventaris.php">Buku Inventaris</a>
                  </div>
            </nav>
            <section>
                  <div class="sidebar">
                        <h3>Notulen Rapat</h3>
                        <ul>
                              <li><a href="Admin_Notulen_Rapat_Biasa.php">Notulen Biasa</a></li>
                              <li><a href="#">Notulen Pengurus</a></li>
                              <li><a href="Admin_Notulen_Rapat_Pengawas.php">Notulen Pengawas</a></li>
                        </ul>
                  </div>
                  <div class="tabel">
                        <h2>Tabel Notulen Rapat Pengurus</h2>
                        <?php
                              include("koneksi.php");
                              $sql = "SELECT * FROM notulensi_rapat_pengurus";
                              $result = $conn->query($sql);
                              
                              if ($result->num_rows > 0) {
                                    // Menampilkan data baris per baris
                                    echo
                                    "<table border='1'>
                                    <tr>
                                          <th>No Urut</th>
                                          <th>Tanggal Rapat</th>
                                          <th>Tempat Rapat</th>
                                          <th>Pengurus Hadir</th>
                                          <th>Undangan Hadir</th>
                                          <th>Pimpinan Rapat</th>
                                          <th>Acara Rapat</th>
                                          <th>Keputusan Rapat</th>
                                    </tr>";
                                    // Tampilkan setiap baris data
                                    while ($row = $result->fetch_assoc()) {
                                          echo 
                                          "<tr>
                                                <td>" . $row["No_Urut"] . "</td>
                                                <td>" . $row["Tanggal_Rapat"] . "</td>
                                                <td>" . $row["Tempat_Rapat"] . "</td>
                                                <td>" . $row["Jumlah_Pengurus_Hadir"] . "</td>                                                <td>" . $row["Undangan_Hadir"] . "</td>
                                                <td>" . $row["Pimpinan_Rapat"] . "</td>
                                                <td>" . $row["Acara_Rapat"] . "</td>
                                                <td>" . $row["Keputusan_Rapat"] . "</td>
                                          </tr>";
                                    }
                                    echo "</table>";
                              } else {
                                    echo "Tidak ada data dalam tabel.";
                              }
                        ?>
                        <div class="tombol-tambah">
                              <a href="Form_Notulen_Rapat_Pengurus.php">
                                    <button>Tambah</button>
                              </a>
                        </div>
                        <div class="hapus">
                              <h2>Hapus Data</h2>
                              <form class="form-delete" action="Admin_Notulen_Rapat_Pengurus.php" method="get">
                                    <label for="nim">Pilih No Urut yang ingin dihapus :</label>
                                    <input type="number" name="No_Urut" required>
                                    <input type="submit" value="Hapus" onclick="return confirm('Apakah Anda yakin?')">
                              </form>
                        </div>
                  </div>
            </section>
            <footer>
                  <p><strong>Copyright &copy; Koperasi Agro Mulyo Lestari</strong></p>
            </footer>
      </div>
</body>

</html>