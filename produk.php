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
if ($_SESSION["level"] != 1 and $_SESSION['level'] != 3 ) {
    echo "<script>
            alert('Perhatian anda tidak punya hak akses');
            document.location.href = 'produk.php';
          </script>";
    exit;
}


$title = 'Data Produk';

include 'layout/header.php';

// menampilkan data produk
$data_produk = select("SELECT * FROM tb_produk ORDER BY id_produk ASC");

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-users"></i> Data Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Data Produk</li>
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
                    <h3 class="card-title">Tabel Data Produk</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <?php if ($_SESSION['level'] == 1):?>
                    <a href="tambah-produk.php" class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus"> </i> Tambah</a>
                    <?php endif; ?>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Gambar Produk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_produk as $produk) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $produk['nama_produk']; ?></td>
                                    <td><?="<img src='assets-template/img/".$produk['gambar']."'style='width:200px; height:100px;'>"?></td>
                                    <td class="text-center" width="20%">
                                    <?php if ($_SESSION['level'] == 1):?>
                                        <a href="ubah-produk.php?id_produk=<?= $produk['id_produk']; ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Ubah</a>
                                    
                                        <a href="hapus-produk.php?id_produk=<?= $produk['id_produk']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Produk Akan Dihapus.?');"><i class="fas fa-trash-alt"></i> Hapus</a>
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
