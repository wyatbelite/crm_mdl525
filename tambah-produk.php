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

$title = 'Tambah Pelanggan';

include 'layout/header.php';

// check apakah tombol tambah ditekan
if (isset($_POST['tambah'])) {
    if (create_produk($_POST) > 0) {
        echo "<script>
                alert('Data Produk Berhasil Ditambahkan');
                document.location.href = 'produk.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Produk Gagal Ditambahkan');
                document.location.href = 'produk.php';
              </script>";
    }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <ia class="fas fa-plus"></ia> Tambah Produk
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="produk.php">Data Produk</a></li>
                        <li class="breadcrumb-item active">Tambah Produk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="" method="post">

                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama produk..." required>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Foto</label>
                    <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Gambar..." required>
                </div>

                <button type="submit" name="tambah" class="btn btn-primary" style="float: right;">Tambah</button>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>


<?php include 'layout/footer.php'; ?>
