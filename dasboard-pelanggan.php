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
if ($_SESSION["level"] != 3) {
    echo "<script>
            alert('Perhatian anda tidak punya hak akses');
            document.location.href = 'login.php';
          </script>";
    exit;
}

$title = 'Dasboard Pelanggan';

include 'layout/header.php';

// check apakah tombol tambah ditekan
if (isset($_POST['tambah'])) {
  if (create_kritiksaran($_POST) > 0) {
      echo "<script>
              alert('Data Kritik & Saran Berhasil Ditambahkan');
              document.location.href = 'dasboard-pelanggan.php';
            </script>";
  } else {
      echo "<script>
              alert('Data Kritik & Saran Gagal Ditambahkan');
              document.location.href = 'dasboard-pelanggan.php';
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
                    <h1 class="m-0"><i class="fas fa-list"></i> Dasboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Dasboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Contact -->
        <section id="contact">
      <div class="container-sm mt-5">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Kritik & Saran</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <form method="post">
              <!-- <div class="mb-3">
                <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $_SESSION['nama']; ?>" required>
              </div> -->
              <div class="mb-3">
                <label for="kritik" class="form-label">Kritik</label>
                <input type="text" class="form-control" id="kritik" name="kritik" required>
              </div>
              <div class="mb-3">
                <label for="saran" class="form-label">Saran</label>
                <input type="text" class="form-control" id="saran" name="saran" required>
              </div>
              <button type="submit" name="tambah" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Contact -->
    </div>
<?php include 'layout/footer.php'; ?>
