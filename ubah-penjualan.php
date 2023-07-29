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

$title = 'Ubah Penjualan';

include 'layout/header.php';

// mengambil id_penjualan dari url
$id_penjualan = (int)$_GET['id_penjualan'];

$penjualan = select("SELECT * FROM tb_penjualan WHERE id_penjualan = $id_penjualan")[0];

// check apakah tombol ubah ditekan
if (isset($_POST['ubah'])) {
    if (update_penjualan($_POST) > 0) {
        echo "<script>
                alert('Data Penjualan Berhasil Diubah');
                document.location.href = 'penjualan.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Penjualan Gagal Diubah');
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
                    <h1 class="m-0"><i class="fas fa-edit"></i> Ubah Penjualan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="penjualan.php">Data Penjualan</a></li>
                        <li class="breadcrumb-item active">Ubah Penjualan</li>
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

                <input type="hidden" name="id_penjualan" value="<?= $penjualan['id_penjualan']; ?>">

                <div class="mb-3">
                    <label for="penjualan" class="form-label">Penjualan</label>
                    <input type="text" class="form-control" id="penjualan" name="penjualan" value="<?= $penjualan['penjualan']; ?>" placeholder="Penjualan..." required>
                </div>

                <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>

<?php include 'layout/footer.php'; ?>
