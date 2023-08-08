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

$title = 'Ubah Produk';

include 'layout/header.php';

// check apakah tombol ubah ditekan
if (isset($_POST['ubah'])) {
    if (update_produk($_POST) > 0) {
        echo "<script>
                alert('Data Produk Berhasil Diubah');
                document.location.href = 'produk.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Produk Gagal Diubah');
                document.location.href = 'produk.php';
              </script>";
    }
}

// ambil id pelanggan dari url
$id_produk = (int)$_GET['id_produk'];

// query ambil data pelanggan
$produk = select("SELECT * FROM tb_produk WHERE id_produk = $id_produk")[0];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <ia class="fas fa-edit"></ia> Ubah Produk
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="produk.php">Data Produk</a></li>
                        <li class="breadcrumb-item active">Ubah Produk</li>
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

                <input type="hidden" name="id_produk" value="<?= $produk['id_produk']; ?>">

                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $produk['nama_produk']; ?>" placeholder="Nama produk..." required>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Foto</label>
                    <input type="text" class="form-control" id="gambar" name="gambar" value="<?= $produk['gambar']; ?>" placeholder="Gambar..." required>
                </div>

                <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>

<?php include 'layout/footer.php'; ?>
