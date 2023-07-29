<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Halaman Utama</title>
  </head>

  <body id="home">
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">MDL-525</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto my-2 my-lg-0">
    </ul>
    <form class="nav-item">
    <!-- <a class="nav-link" href="login.php">Login Pegawai</a> -->
    <a href="login.php" class="btn btn-primary my-2 my-sm-0" role="button" aria-pressed="true">Login</a>
    <!-- <button  href="login.php" class="btn btn-outline-success my-2 my-sm-0" type="button">Login Pegawai</button> -->
    </form>
  </div>
</nav>
    <!-- Akhir Navbar -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img src="assets-template/img/4.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets-template/img/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets-template/img/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets-template/img/3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

    <!-- About -->
    <section id="about">
      <div class="container mt-5">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>MDL-525</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-6">
            <p>PT. MDL-525 merupakan salah satu perusahaan milik swasta yang berdomisili di Kabupaten Garut, yang berdiri pada tahun 1976. PT. MDL-525 berusaha dibidang produksi saos dan kembang tahu. Pada tahun 2008 Perusahaan tersebut memproduksi penyedap rasa (bumbu tabur)</p>
      </div>
    </section>
    <!-- Akhir About -->

        <!-- Contact -->
        <hr></hr>
        <tr></tr>
        <section id="contact">
      <div class="container-sm">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Kritik & Saran</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <form>
              <div class="mb-3">
                <label for="id_pelanggan" class="form-label">ID Pelanggan</label>
                <input type="text" class="form-control" id="id_pelanggan" aria-describedby="id_pelanggan" />
              </div>
              <div class="mb-3">
                <label for="kritik" class="form-label">Kritik</label>
                <textarea class="form-control" id="kritik" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="saran" class="form-label">Saran</label>
                <textarea class="form-control" id="saran" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Contact -->

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-3 pt-3 mt-4">
    <strong>Copyright &copy; MDL-525</strong>
    </footer>
    <!-- Akhir Footer -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



  </body>
</html>

