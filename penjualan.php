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
if ($_SESSION["level"] != 1 and $_SESSION["level"] != 2) {
    echo "<script>
            alert('Perhatian anda tidak punya hak akses');
            document.location.href = 'akun.php';
          </script>";
    exit;
}

$title = 'Daftar Penjualan';

include 'layout/header.php';

$data_penjualan = select("SELECT * FROM tb_penjualan ORDER BY id_penjualan DESC");

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-list"></i> Data Penjualan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Data Penjualan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Data Penjualan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <?php if ($_SESSION['level'] == 1) : ?>
                    <a href="tambah-penjualan.php" class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus"></i> Tambah</a>
                <?php endif; ?>

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Penjualan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_penjualan as $penjualan) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>Rp. <?= $penjualan['penjualan']; ?></td>
                                    <td width="20%" class="text-center">

                                    <?php if ($_SESSION['level'] == 1) : ?>
                                        <a href="ubah-penjualan.php?id_penjualan=<?= $penjualan['id_penjualan']; ?>" class="btn btn-success"><i class="fas fa-edit"></i> Ubah</a>

                                        <a href="hapus-penjualan.php?id_penjualan=<?= $penjualan['id_penjualan']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Data Penjualan Akan Dihapus.?');"><i class="fas fa-trash-alt"></i> Hapus</a>
                                    <?php endif; ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php include 'layout/footer.php'; ?>
