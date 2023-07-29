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

// membatasi halaman sesuai user login
if ($_SESSION["level"] != 1) {
    echo "<script>
            alert('Perhatian anda tidak punya hak akses');
            document.location.href = 'login.php';
          </script>";
    exit;
}

$title = 'Daftar Kritik Saran';

include 'layout/header.php';

// menampilkan data kritiksaran
$data_kritiksaran = select("SELECT * FROM tb_kritiksaran ORDER BY id_kritiksaran ASC");

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-users"></i> Data Kritik Saran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Data Kritik Saran</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main content -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Data Kritik Saran</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Kritik</th>
                                <th>Saran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_kritiksaran as $kritiksaran) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $kritiksaran['kritik']; ?></td>
                                    <td><?= $kritiksaran['saran']; ?></td>
                                    <td class="text-center" width="20%">
                                        <a href="hapus-kritiksaran.php?id_kritiksaran=<?= $kritiksaran['id_kritiksaran']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Kritik Saran Akan Dihapus.?');"><i class="fas fa-trash-alt"></i> Hapus</a>
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
