<?php

session_start();

// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
  echo "<script>
            alert('login dulu dong');
            document.location.href = 'login.php';
          </script>";
  exit;
}

include 'config/app.php';

// menerima id penjualan yang dipilih pengguna
$id_penjualan = (int)$_GET['id_penjualan'];

if (delete_penjualan($id_penjualan) > 0) {
    echo "<script>
            alert('Data Penjualan Berhasil Dihapus');
            document.location.href = 'penjualan.php';
          </script>";
} else {
    echo "<script>
            alert('Data Penjualan Gagal Dihapus');
            document.location.href = 'penjualan.php';
          </script>";
}
