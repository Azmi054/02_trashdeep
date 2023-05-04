<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@200&family=Montserrat:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <title>Trasndeep</title>
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="home.css">
  </head>

  <body class="body">
    <nav class="navbar navbar-home">
      <img src="../assets/name.svg" draggable="false" alt="Trashdeep" height="40">
        <div class="container">
          <a class="navbar-brand" href="../Profil/profil.php">
                <div class="d-flex align-items-center">
                    <div class="avatar">
                        <img src="https://via.placeholder.com/60" alt="User Avatar">
                    </div>
                    <span class="text-truncate"><?php echo $_SESSION['username'];?></span>
                </div>
            </a>
            <div class="d-flex align-items-center">
                <a href="#" class="me-3"><i class="bi bi-bell fs-4"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>


      <div class="container pt-3">
      <div class="container">
        <div class="row">
          <div class="col mb-4">
            <a>
            <div class="card">
              <div class="d-flex align-items-center">
                <h5 class="card-title flex-grow-1">Lapor Sampah</h5>
                <img src="assets/laporan.svg" alt="gambar" class="ml-auto">
              </div>
              <div class="row no-gutters">
                <div class="mx-2 tombol-laporan">
                  <a href="laporan.php" class="btn btn-primary">Buat Laporan</a>
                </div>
              </div>
            </div>
            </a>
          </div>
        </div>
      <div class="row">
        <div class="col mb-4">
        <a href="../Edukasi/edukasi.php" style ="text-decoration :none">
          <div class="card">
            <h5 class="card-title m-3">Edukasi</h5>
          </div>
        </a>
        </div>
      </div>
      <div class="row">
        <div class="col mb-4">
        <a href="index.php" style ="text-decoration :none">
          <div class="card">
            <h5 class="card-title m-3">Informasi</h5>
          </div>
        </a>
        </div>
      </div>
      <div class="row">
        <div class="col mb-4">
        <a href="index.php" style ="text-decoration :none">
          <div class="card">
            <h5 class="card-title m-3">Lokasi Terdekat pembuangan Sampah</h5>
          </div>
        </a>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand navbar-dark bg-utama fixed-bottom" style="background-color:#012e1d;">
        <ul class="navbar-nav nav-justified w-100 d-flex align-items-center">
            <li class="nav-item">
                <a href="profil.php" class="nav-link mt-2"><i class="bi bi-house-door" style="font-size: 20px;"></i></a>
            </li>
            <li class="nav-item jual-sampah">
                <a href="#" class="nav-link"><i class="bi bi-cart" style="font-size: 20px;"></i><br>Jual Sampah</a>
            </li>
            <li class="nav-item">
                <a href="app/riwayat.php" class="nav-link mt-2"><img src="assets/riwayat.svg" alt=""><br>Riwayat</a>
            </li>
        </ul>
    </nav>    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>