<?php
include '../../auth/koneksi.php';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Trashdeep</title>
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../navbar.css">
  </head>

  <body>
  <nav class="navbar navbar-php fixed-top">
      <div class="navbar">
          <a class="navbar-brand" href="../Home petugas/home.php" style=" color : white">
            <img
              src="../../assets/beranda.svg"
              draggable="false"
              alt="Trashdeep"
              height="40"
            />
          </a>
        </div>
    </nav>
    <?php
session_start();
include '../../auth/koneksi.php';

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Ambil data dari tabel jadwal
$query = "SELECT * FROM tb_jadwal";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  echo '<div class="row mt-5 pt-5">';
  
  while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="col-sm-4 mb-3">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">' . $row['tanggal'] . '</h5>
                <div class="d-flex justify-content-between">
                <h6 class="card-subtitle text-muted">' . $row['waktu'] . '</h6>
                <a href="../auth/hapus.php?id=' . $row['id'] . '" class="btn fs-4"><i class="bi bi-x-lg"></i></a>
                </div>
                <p class="card-text">' . $row['kegiatan'] . '</p>
                </div>
            </div>
          </div>';
  }
  
  echo '</div>';
} else {
  echo 'Tidak ada data jadwal.';
}




// Tutup koneksi ke database
mysqli_close($conn);
?>

<div class="mb-5 text-center" >
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #82D19B; margin-bottom: 70px; color:black;">Tambah Jadwal</button>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../auth/jadwal.php" method="POST">
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
          </div>
          <div class="form-group">
            <label for="waktu">Waktu</label>
            <input type="time" class="form-control" id="waktu" name="waktu" required>
          </div>
          <div class="form-group">
            <label for="kegiatan">Kegiatan</label>
            <textarea class="form-control" id="kegiatan" name="kegiatan" rows="3" required></textarea>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Tambah</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


    <?php
    include '../navbar.php';
    ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
