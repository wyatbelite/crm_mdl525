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

$title = 'Ubah Akun';

include 'layout/header.php';

// check apakah tombol ubah ditekan
if (isset($_POST['ubah'])) {
    if (update_akun($_POST) > 0) {
        echo "<script>
                alert('Data Akun Berhasil Diubah');
                document.location.href = 'akun.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Akun Gagal Diubah');
                document.location.href = 'akun.php';
              </script>";
    }
}

// ambil id akun dari url
$id_akun = (int)$_GET['id_akun'];

// query ambil data akun
$akun = select("SELECT * FROM tb_akun WHERE id_akun = $id_akun")[0];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <ia class="fas fa-edit"></ia> Ubah Akun
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="akun.php">Data Akun</a></li>
                        <li class="breadcrumb-item active">Ubah Akun</li>
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

                <input type="hidden" name="id_akun" value="<?= $akun['id_akun']; ?>">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $akun['nama']; ?>" placeholder="Nama..." required>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $akun['username']; ?>" placeholder="Username..." required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $akun['email']; ?>" placeholder="Email..." required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password <small>(Masukkan password baru/lama)</small></label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password..." required minlength="6">
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">Level</label>
                    <select name="level" id="level" class="form-control" value="<?= $akun['username']; ?>" required>
                                    <?php $level = $akun['level']; ?>
                                    <option value="1" <?= $level == '1' ? 'selected' : null ?>>Operator Pemasaran</option>
                                    <option value="2" <?= $level == '2' ? 'selected' : null ?>>Operator Penjualan</option>
                    </select>
                </div>

                <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>

<?php include 'layout/footer.php'; ?>
