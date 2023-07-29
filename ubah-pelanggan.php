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

$title = 'Ubah Pelanggan';

include 'layout/header.php';

// check apakah tombol ubah ditekan
if (isset($_POST['ubah'])) {
    if (update_pelanggan($_POST) > 0) {
        echo "<script>
                alert('Data Pelanggan Berhasil Diubah');
                document.location.href = 'pelanggan.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Pelanggan Gagal Diubah');
                document.location.href = 'pelanggan.php';
              </script>";
    }
}

// ambil id pelanggan dari url
$id_pelanggan = (int)$_GET['id_pelanggan'];

// query ambil data pelanggan
$pelanggan = select("SELECT * FROM tb_pelanggan WHERE id_pelanggan = $id_pelanggan")[0];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <ia class="fas fa-edit"></ia> Ubah Pelanggan
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="pelanggan.php">Data Pelanggan</a></li>
                        <li class="breadcrumb-item active">Ubah Pelanggan</li>
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

                <input type="hidden" name="id_pelanggan" value="<?= $pelanggan['id_pelanggan']; ?>">

                <div class="mb-3">
                    <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $pelanggan['nama_pelanggan']; ?>" placeholder="Nama pelanggan..." required>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pelanggan['alamat']; ?>" placeholder="Alamat..." required>
                </div>

                <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>

<?php include 'layout/footer.php'; ?>
