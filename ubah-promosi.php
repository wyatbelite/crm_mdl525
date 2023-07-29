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

$title = 'Ubah Promosi';

include 'layout/header.php';

// mengambil id_promosi dari url
$id_promosi = (int)$_GET['id_promosi'];

$promosi = select("SELECT * FROM tb_promosi WHERE id_promosi = $id_promosi")[0];

// check apakah tombol ubah ditekan
if (isset($_POST['ubah'])) {
    if (update_promosi($_POST) > 0) {
        echo "<script>
                alert('Data Promosi Berhasil Diubah');
                document.location.href = 'promosi.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Promosi Gagal Diubah');
                document.location.href = 'promosi.php';
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
                    <h1 class="m-0"><i class="fas fa-edit"></i> Ubah Promosi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="promosi.php">Data Promosi</a></li>
                        <li class="breadcrumb-item active">Ubah Promosi</li>
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

                <input type="hidden" name="id_promosi" value="<?= $promosi['id_promosi']; ?>">

                <div class="mb-3">
                    <label for="periklanan" class="form-label">Periklanan</label>
                    <input type="text" class="form-control" id="periklanan" name="periklanan" value="<?= $promosi['periklanan']; ?>" placeholder="Periklanan..." required>
                </div>
                <div class="mb-3">
                    <label for="pemasaran_langsung" class="form-label">Pemasaran Langsung</label>
                    <input type="text" class="form-control" id="pemasaran_langsung" name="pemasaran_langsung" value="<?= $promosi['pemasaran_langsung']; ?>" placeholder="Pemasaran langsung..." required>
                </div>
              

                <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>

<?php include 'layout/footer.php'; ?>
