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
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container ">
          <a class="navbar-brand " href="#">
            <img src="../assets/logo.png" draggable="false" alt="Trashdeep"height="50">
          </a>
          <div class="d-flex align-items-center">
            <a href="#" class="me-3"><i class="bi bi-person-circle fs-4"></i></a>
            <a href="#" class="me-3"><i class="bi bi-bell fs-4"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="container mt-5 pt-5">
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
        <a href="edukasi.php" style ="text-decoration :none">
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