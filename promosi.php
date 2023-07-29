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
            document.location.href = 'akun.php';
          </script>";
    exit;
}

$title = 'Daftar Promosi';

include 'layout/header.php';

// menampilkan data promosi
$data_promosi = select("SELECT id_promosi, periklanan, pemasaran_langsung, penjualan FROM tb_promosi INNER JOIN tb_penjualan ON tb_promosi.id_penjualan = tb_penjualan.id_penjualan");

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-users"></i> Data Promosi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Data Promosi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
<table id="example2" class="table table-bordered table-hover">
<?php
// Membuat panggilan subproses untuk menjalankan skrip Python
$command = "E:/xampp/htdocs/mdl525/regression_analysis.py";
ob_start();
passthru($command);
$output = ob_get_clean();

// Menampilkan hasil dari skrip Python
echo "<pre>$output</pre>";
?>
</table>


<!-- Main content -->
<section class="content">
        <div class="container-fluid">

            <!-- Main content -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Data Promosi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="tambah-promosi.php" class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus"></i> Tambah</a>

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Periklanan</th>
                                <th>Pemasaran Langsung</th>
                               
                                <th>Penjualan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_promosi as $promosi) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $promosi['periklanan']; ?></td>
                                    <td><?= $promosi['pemasaran_langsung']; ?></td>
                                    <td><?= $promosi['penjualan']; ?></td>
                                    <td class="text-center" width="20%">

                                        <a href="ubah-promosi.php?id_promosi=<?= $promosi['id_promosi']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Ubah</a>

                                       
                                        <a href="hapus-promosi.php?id_promosi=<?= $promosi['id_promosi']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Promosi Akan Dihapus.?');"><i class="fas fa-trash-alt"></i> Hapus</a>
                                        
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