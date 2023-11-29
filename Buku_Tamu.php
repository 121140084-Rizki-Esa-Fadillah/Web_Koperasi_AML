<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style-administrasi.css" />
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
                        <li><a href="Beranda.php">Beranda</a></li>
                        <li><a href="#">Administrasi</a></li>
                        <li><a href="Katalog_Produk.php">Produk Kami</a></li>
                        <li><a href="Login_Admin.php">Login</a></li>
                  </ul>
            </header>
            <nav>
                  <div class="navbar">
                        <a href="Daftar_Anggota.php">Buku Daftar</a>
                        <a href="Notulen_Rapat_Biasa.php">Notulen Rapat</a>
                        <a href="#">Buku Tamu</a>
                        <a href="Inventaris.php">Buku Inventaris</a>
                  </div>
            </nav>
            <section>
                  <div class="sidebar">
                        <h2>Buku Tamu</h2>
                        <ul>
                              <li><a href="#">Buku Tamu Biasa</a></li>
                              <li><a href="Buku_Anjuran_Pejabat.php">Buku Anjuran Pejabat</a></li>
                        </ul>
                  </div>
                  <div class="tabel">
                        <h3>Tabel Buku Tamu</h3>
                        <?php
                        include("koneksi.php");
                        $sql = "SELECT * FROM buku_tamu";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                              // Menampilkan data baris per baris
                              echo
                              "<table border='1'>
                              <tr>
                                    <th>No Urut</th>
                                    <th>Nama Tamu</th>
                                    <th>Alamat</th>
                                    <th>Bertemu Dengan</th>
                              </tr>";
                              // Tampilkan setiap baris data
                              while ($row = $result->fetch_assoc()) {
                              echo "
                              <tr>
                                    <td>" . $row["No_Urut"] . "</td>
                                    <td>" . $row["Nama_Tamu"] . "</td>
                                    <td>" . $row["Alamat"]  . "</td>
                                    <td>" . $row["Bertemu_Dengan"] . "</td>
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