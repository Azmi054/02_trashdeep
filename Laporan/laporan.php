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
    <title>Trashdeep</title>
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="laporan.css" />
    <link rel="stylesheet" href="../navbar.css">
  </head>

  <body class="body">
    <?php
    include'../topnav.php'
    ?>
<div class="container mt-5 pt-5">
  <form action="../auth/proses.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <tabel for="lokasi">Lokasi Penumpukan Sampah</tabel>
      <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Masukkan nama lokasi" required>
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi Penumpukan Sampah</label>
      <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
    </div>
    <div class="form-group">
    <label for="foto">Foto</label>
    <input type="file" class="form-control" name="foto" id="foto" required>
    </div>
    <div class="form-group d-flex justify-content-center mt-5">
      <button type="submit" class="btn btn-primary">Kirim Laporan</button>
    </div>
  </form>
</div>

<?php
include'../navbar.php';
?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>