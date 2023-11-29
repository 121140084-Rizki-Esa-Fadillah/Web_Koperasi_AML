<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style-administrasi.css" />
      <title>Notulen Rapat Pengurus</title>
</head>

<body>
      <div class="notulen-rapat-pengurus">
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
                        <a href="#">Notulen Rapat</a>
                        <a href="Buku_Tamu.php">Buku Tamu</a>
                        <a href="Inventaris.php">Buku Inventaris</a>
                  </div>
            </nav>
            <section>
                  <div class="sidebar">
                        <h3>Notulen Rapat</h3>
                        <ul>
                              <li><a href="Notulen_Rapat_Biasa.php">Notulen Biasa</a></li>
                              <li><a href="#">Notulen Pengurus</a></li>
                              <li><a href="Notulen_Rapat_Pengawas.php">Notulen Pengawas</a></li>
                        </ul>
                  </div>
                  <div class="tabel">
                        <h3>Notulensi Rapat Pengurus</h3>
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
                            <th>Pengurus yang Hadir</th>
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
                                <td>" . $row["Jumlah_Pengurus_Hadir"] . "</td>
                                <td>" . $row["Undangan_Hadir"] . "</td>
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
                  </div>
            </section>
            <footer>
                  <p><strong>Copyright &copy; Koperasi Agro Mulyo Lestari</strong></p>
            </footer>
      </div>
</body>

</html>