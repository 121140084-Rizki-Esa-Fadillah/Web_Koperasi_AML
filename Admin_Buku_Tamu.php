<?php 
include ("koneksi.php");
if (isset($_GET['No_Urut'])) {
      $delete_No_Urut = $_GET['No_Urut'];
    
      $delete_query = "DELETE FROM buku_tamu WHERE No_Urut = '$delete_No_Urut'";

      if (mysqli_query($conn, $delete_query)) {
            echo "";
      } else {
            echo "Error: " . $delete_query . "<br>" . mysqli_error($conn);
      }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style-admin-administrasi.css" />
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
                        <li><a href="Logout_Admin.php" onclick="return confirm('Apakah Anda yakin?')">Logout</a></li>
                  </ul>
            </header>
            <nav>
                  <div class="navbar">
                        <a href="Admin_Daftar_Anggota.php">Buku Daftar</a>
                        <a href="Admin_Notulen_Rapat_Biasa.php">Notulen Rapat</a>
                        <a href="#">Buku Tamu</a>
                        <a href="Admin_Inventaris.php">Buku Inventaris</a>
                  </div>
            </nav>
            <section>
                  <div class="sidebar">
                        <h2>Buku Tamu</h2>
                        <ul>
                              <li><a href="#">Buku Tamu Biasa</a></li>
                              <li><a href="Admin_Buku_Anjuran_Pejabat.php">Buku Anjuran Pejabat</a></li>
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
                        <div class="tombol-tambah">
                              <a href="Form_Buku_Tamu.php">
                                    <button>Tambah</button>
                              </a>
                        </div>
                        <div class="hapus">
                              <h2>Hapus Data</h2>
                              <form class="form-delete" action="Admin_Buku_Tamu.php" method="get">
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