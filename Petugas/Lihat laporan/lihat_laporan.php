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
    <title>Trashdeep</title>
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
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

    <div class="container mt-5 pt-4" style="margin-bottom: 5rem;">
      <div class="row">
        <?php
        // Query untuk mengambil data dari tabel tb_laporan dengan status kosong
        $sql = "SELECT * FROM tb_laporan WHERE status = ''";
        $result = mysqli_query($conn, $sql);
        if($result){
          // Mengambil jumlah data laporan
          $row_count = mysqli_fetch_assoc($result);
          $total_laporan = $row_count['id'];

          // Jumlah data yang ingin ditampilkan per halaman
          $data_per_halaman = 100;

          // Menghitung jumlah halaman yang tersedia
          $total_pages = ceil($total_laporan / $data_per_halaman);

          // Mendapatkan nomor halaman dari URL
          $halaman_sekarang = isset($_GET['halaman']) ? $_GET['halaman'] : 1;

          // Menghitung offset (posisi awal data) dari nomor halaman
          $offset = ($halaman_sekarang - 1) * $data_per_halaman;

          // Query untuk mengambil data laporan dengan status kosong dan melakukan pagination
          $sql = "SELECT * FROM tb_laporan WHERE status = '' LIMIT $offset, $data_per_halaman";
          $result = mysqli_query($conn, $sql);
        }

            // Mengecek apakah query SELECT berhasil dijalankan
            if (!$result) {
              die("Query SELECT gagal: " . mysqli_error($conn));
            }

            // Memeriksa apakah ada data yang ditemukan
            if (mysqli_num_rows($result) > 0) {
              // Inisialisasi nomor item pada halaman
              $nomor_item = ($halaman_sekarang - 1) * $data_per_halaman + 1;

              // Looping untuk menampilkan data pada div card
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="card my-3">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">Pelaporan ' . $nomor_item . ' '. '</h5>';
                echo '<h5 class="card-title" style="color:white;">'. $row["lokasi"] . '</h5>';
                echo '<p class="card-text">' . $row["deskripsi"] . '</p>';
                echo '</div>';
                echo '<div class="card-footer text-end">';
                echo '<a href="detail_laporan.php?id=' . $row["id"] . '" class="btn btn-outline-light me-2">Lihat Detail</a>';
                echo '</div>';
                echo '</div>';  

                // Menambah nomor item pada halaman
                $nomor_item++;
              } 


              } else {
                echo '<div class="alert alert-info">Tidak ada data yang ditemukan.</div>';
              }

              // Menutup koneksi ke database
              mysqli_close($conn);
              ?>
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
