<?php 
include ("koneksi.php");
if (isset($_GET['No_Urut'])) {
      $delete_No_Urut = $_GET['No_Urut'];
    
      $delete_query = "DELETE FROM buku_inventaris WHERE No_Urut = '$delete_No_Urut'";

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
                        <div class="tombol-tambah">
                              <a href="Form_Inventaris.php">
                                    <button>Tambah</button>
                              </a>
                        </div>
                        <div class="hapus">
                              <h2>Hapus Data</h2>
                              <form class="form-delete" action="Admin_Inventaris.php" method="get">
                                    <label for="nim">Pilih No Pengurus yang ingin dihapus :</label>
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