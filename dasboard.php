<?php

session_start();

// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
            // alert('login dulu dong');
            document.location.href = 'login.php';
          </script>";
    exit;
}

// membatasi halaman sesuai user login
if ($_SESSION["level"] != 1 and $_SESSION["level"] != 2 and $_SESSION["level"] != 3) {
    echo "<script>
            alert('Perhatian anda tidak punya hak akses');
            document.location.href = 'login.php';
          </script>";
    exit;
}

$title = 'Dasboard';

include 'layout/header.php';

// $data_penjualan = select("SELECT * FROM tb_penjualan ORDER BY id_penjualan ASC");

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-list"></i> Dasboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Menu Utama</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php include 'layout/footer.php'; ?>
