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

$title = 'Tambah Penjualan';

include 'layout/header.php';

// check apakah tombol tambah ditekan
if (isset($_POST['tambah'])) {
    if (create_penjualan($_POST) > 0) {
        echo "<script>
                alert('Data Penjualan Berhasil Ditambahkan');
                document.location.href = 'penjualan.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Penjualan Gagal Ditambahkan');
                document.location.href = 'penjualan.php';
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
                    <h1 class="m-0"><ia class="fas fa-plus"></ia> Tambah Penjualan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="penjualan.php">Data Penjualan</a></li>
                        <li class="breadcrumb-item active">Tambah Penjualan</li>
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
                    <label for="penjualan" class="form-label">Jumlah Penjualan</label>
                    <input type="text" class="form-control" id="penjualan" name="penjualan" placeholder="Penjualan..." required>
                </div>

                <button type="submit" name="tambah" class="btn btn-primary" style="float: right;">Tambah</button>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>

<?php include 'layout/footer.php'; ?>
