<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style-admin-administrasi.css" />
      <title>Daftar Anggota</title>
</head>

<?php 
include ("koneksi.php");
if (isset($_GET['No_Anggota'])) {
      $delete_No_Anggota = $_GET['No_Anggota'];
    
      $delete_query = "DELETE FROM daftar_anggota WHERE No_Anggota = '$delete_No_Anggota'";

      if (mysqli_query($conn, $delete_query)) {
            echo "";
      } else {
            echo "Error: " . $delete_query . "<br>" . mysqli_error($conn);
      }
}
?>

<body>
      <div class="admin-daftar-anggota">
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
                        <a href="#">Buku Daftar</a>
                        <a href="Admin_Notulen_Rapat_Biasa.php">Notulen Rapat</a>
                        <a href="Admin_Buku_Tamu.php">Buku Tamu</a>
                        <a href="Admin_Inventaris.php">Buku Inventaris</a>
                  </div>
            </nav>
            <section>
                  <div class="sidebar">
                        <h2>Buku Daftar</h2>
                        <ul>
                              <li><a href="#">Buku Daftar Anggota</a></li>
                              <li><a href="Admin_Daftar_Pengurus.php">Buku Daftar Pengurus</a></li>
                              <li><a href="Admin_Daftar_Pengawas.php">Buku Daftar Pengawas</a></li>
                        </ul>
                  </div>
                  <div class="tabel">
                        <h2>Tabel Daftar Anggota</h2>
                        <?php
                              include("koneksi.php");
                              $sql = "SELECT * FROM daftar_anggota";
                              $result = $conn->query($sql);
                              
                              if ($result->num_rows > 0) {
                                    // Menampilkan data baris per baris
                                    echo
                                    "<table border='1'>
                                    <tr>
                                          <th>No Anggota</th>
                                          <th>Nama Lengkap</th>
                                          <th>Jenis Kelamin</th>
                                          <th>Tempat, Tanggal Lahir</th>
                                          <th>Alamat</th>
                                          <th>Tanggal Masuk</th>
                                    </tr>";
                                    // Tampilkan setiap baris data
                                    while ($row = $result->fetch_assoc()) {
                                          echo 
                                          "<tr>
                                                <td>" . $row["No_Anggota"] . "</td>
                                                <td>" . $row["Nama_Lengkap"] . "</td>
                                                <td>" . $row["Jenis_Kelamin"] . "</td>
                                                <td>" . $row["Tempat_Tanggal_Lahir"] . "</td>
                                                <td>" . $row["Alamat"] . "</td>
                                                <td>" . $row["Tanggal_Masuk"] . "</td>
                                          </tr>";
                                    }
                                    echo "</table>";
                              } else {
                                    echo "Tidak ada data dalam tabel.";
                              }
                        ?>
                        <div class="tombol-tambah">
                              <a href="Form_Daftar_Anggota.php">
                                    <button>Tambah</button>
                              </a>
                        </div>
                        <div class="hapus">
                              <h2>Hapus Data</h2>
                              <form class="form-delete" action="Admin_Daftar_Anggota.php" method="get">
                                    <label for="nim">Pilih No Anggota yang ingin dihapus :</label>
                                    <input type="number" name="No_Anggota" required>
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