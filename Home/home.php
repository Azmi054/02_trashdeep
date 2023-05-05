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
      <div class="container">
        <a class="navbar-brand">
            <img src="../assets/trashdeep.svg" draggable="false" alt="Trashdeep" height="30" class="mb-3">
                <div class="d-flex align-items-center">
                    <div class="avatar">
                        <img src="https://via.placeholder.com/60" alt="User Avatar">
                    </div>
                    <span class="text-truncate text-black"><?php echo $_SESSION['username'];?></span>
                </div>
            </a>
            <div class="d-flex align-items-center">
                <a href="#" class="mt-5 me-2 text-black"><i class="bi bi-bell fs-4"></i></a>             
            </div>
        </div>
    </nav>


<div class="container pt-3 card-columns">
  <div class="container" >
    <div class="row" >
      <div class="col mb-3">
        <a>
          <div class="card" style="background-color: #82D19B;">
            <div class="d-flex align-items-center">
              <h5 class="card-title flex-grow-1 fs-5 mb-2 mx-2">Lapor Sampah</h5>
              <img src="../assets/laporan.svg" alt="gambar" class="ml-auto img-fluid">
            </div>
            <div class="row no-gutters">
              <div class="mx-2 d-flex  mb-2">
                <a href="../Laporan/laporan.php" class="btn btn-sm" style="background-color: white;">Buat Laporan</a>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
      <div class="row">
        <div class="col mb-3">
          <a href="../Edukasi/edukasi.php" style="text-decoration:none">
            <div class="card" style="background-color: #82D19B;">
              <h5 class="card-title m-3 fs-5" style="color: black;">Edukasi</h5>
            </div>
          </a>
        </div>
      </div>
    <div class="row">
      <div class="col mb-3">
        <a href="index.php" style="text-decoration:none">
          <div class="card" style="background-color: #82D19B;">
            <h5 class="card-title m-3 fs-5" style="color: black;">Informasi</h5>
          </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col mb-3">
        <a href="../Lokasi/lokasi.php" style="text-decoration:none">
          <div class="card" style="background-color: #82D19B;">
            <h5 class="card-title m-3 fs-5" style="color: black;">Lokasi Terdekat pembuangan Sampah</h5>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<?php
include'../navbar.php';
?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>