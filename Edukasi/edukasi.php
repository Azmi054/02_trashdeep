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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="edukasi.css" />
    <link rel="stylesheet" href="../navbar.css">
  </head>

  <body>
  <?php
    include'../topnav.php'
    ?>

  <div class="container mt-4 body" >
    <div class="row">
      <div class="col mt-3">
            <div class="container mt-5">
        <h1>Yuk ikuti edukasi tentang 
          bagaimana penanganan sampah!</h1>
      </div>
      </div>
    </div>
    </div>
    <div class="container mt-3">
      <div class="row">
        <div class="col mb-4">
            <div class="card" style="background-color: #82D19B;">
              <h5 class="card-title m-3 ">Tips & Tricks</h5>
              <div class="row no-gutters">
                <div class="p-4 text-end">
                  <a href="trik.php" class="btn" style="background-color: white;">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col mb-4">
            <div class="card" style="background-color: #82D19B;">
              <h5 class="card-title m-3">Tutorial</h5>
              <div class="row no-gutters">
                <div class="p-4 text-end">
                  <a href="tutorial.php" class="btn" style="background-color: white;">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          </a>
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