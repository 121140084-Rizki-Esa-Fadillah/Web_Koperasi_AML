<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style-administrasi.css" />
      <title>Inventaris</title>
</head>

<body>
      <div class="inventaris">
            <header>
                  <div class="Logo">
                        <img src="image/koperasi-indonesia-logo.png" alt="" />
                        <h2>Koperasi <br />Agro Mulyo Lestari</h2>
                  </div>
                  <ul class="navbar">
                        <li><a href="Beranda.php">Beranda</a></li>
                        <li><a href="#">Administrasi</a></li>
                        <li><a href="Katalog_Produk.php">Produk Kami</a></li>
                        <li><a href="Login_Admin.php">Login</a></li>
                  </ul>
            </header>
            <nav>
                  <div class="navbar">
                        <a href="Daftar_Anggota.php">Buku Daftar</a>
                        <a href="otulen_Rapat_Biasa.php">Notulen Rapat</a>
                        <a href="Buku_Tamu.php">Buku Tamu</a>
                        <a href="#">Buku Inventaris</a>
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
                  <div class="tabel">
                        <h3>Tabel Buku Inventaris</h3>
                        <?php
                        include("koneksi.php");
                        $sql = "SELECT * FROM buku_inventaris";
                        $result = $conn->query($sql);
        
                        if ($result->num_rows > 0) {
                              // Menampilkan data baris per baris
                              echo
                              "
                              <table border='1'>
                              <tr>
                                    <th>No Urut</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal Beli</th>
                                    <th>Jumlah Beli</th>
                                    <th>Jumlah Harga</th>
                                    <th>Taksiran Umur Teknis</th>
                                    <th>Taksiran Umur Ekonomis</th>
                                    <th>Keadaan Barang</th>
                                    <th>Keterangan</th>
                              </tr>";
                              // Tampilkan setiap baris data
                              while ($row = $result->fetch_assoc()) {
                              echo "<tr>
                                    <td>" . $row["No_Urut"] . "</td>
                                    <td>" . $row["Nama_Barang"] . "</td>
                                    <td>" . $row["Tanggal_Beli"] . "</td>
                                    <td>" . $row["Jumlah_Beli"] . "</td>
                                    <td>" . $row["Jumlah_Harga"] . "</td>
                                    <td>" . $row["Taksiran_Umur_Teknis"]  . "</td>
                                    <td>" . $row["Taksiran_Umur_Ekonomis"]  . "</td>
                                    <td>" . $row["Keadaan_Barang"]  . "</td>
                                    <td>" . $row["Keterangan"] . "</td>
                              </tr>";
                              }
                              echo "</table>";
                        } else {
                              echo "Tidak ada data dalam tabel.";
                        }
                        ?>
                  </div>
            </section>
            <footer>
                  <p><strong>Copyright &copy; Koperasi Agro Mulyo Lestari</strong></p>
            </footer>
      </div>
</body>

</html>