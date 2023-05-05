<?php
session_start();
include'../auth/koneksi.php';
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
    <title>Trashdeep</title>
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="laporan.css">
    <link rel="stylesheet" href="../navbar.css">
  </head>
<?php
include'../topnav.php';
?>

<div class="container mt-5 pt-4" style="margin-bottom: 5rem;" >
  <div class="row">
  <?php
// Query untuk mengambil data dari tabel tb_laporan
$id_masyarakat = $_SESSION['id_masyarakat'];
$sql = "SELECT * FROM tb_laporan WHERE id_masyarakat = '$id_masyarakat'";
$result = mysqli_query($conn, $sql);

// Mengecek apakah query SELECT berhasil dijalankan
if (!$result) {
  die("Query SELECT gagal: " . mysqli_error($conn));
}

// Memeriksa apakah ada data yang ditemukan
if (mysqli_num_rows($result) > 0) {
  // Looping untuk menampilkan data pada div card
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="col-md-4">';
    echo '<div class="card my-3">';
    echo '<div class="card">';
    echo '<img src="../uploads/' . $row["foto"] . '" class="card-img-top mx-auto d-block" alt="Foto Laporan" style="width: 200px">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $row["lokasi"] . '</h5>';
    echo '<p class="card-text">' . $row["deskripsi"] . '</p>';
    echo '<a href="../auth/proses_update.php?id=' . $row["id"] . '" class="btn btn-primary mx-5">Edit</a>';
    echo '<a href="../auth/delate.php?id=' . $row["id"] . '" class="btn btn-danger" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\')">Hapus</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }

// Mengecek apakah query INSERT berhasil dijalankan
if (isset($_GET['success']) && $_GET['success'] == 'true') {
  echo '<div class="alert alert-success">Data berhasil ditambahkan.</div>';
} else if (isset($_GET['success']) && $_GET['success'] == 'false') {
  echo '<div class="alert alert-danger">Data gagal ditambahkan.</div>';
}
}
// Menutup koneksi ke database
mysqli_close($conn);
?>

  </div>
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
