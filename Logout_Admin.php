<?php
// logout.php

// Mulai sesi (jika belum dimulai)
session_start();

// Hapus semua data sesi
session_destroy();

// Redirect ke halaman login
header("Location: Beranda.php");
exit();
?>