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
          <a class="navbar-brand" href="lihat_laporan.php" style=" color : white">
            <img
              src="../../assets/beranda.svg"
              draggable="false"
              alt="Trashdeep"
              height="40"
            />
          </a>
        </div>
    </nav>

  <div class="container mt-5 pt-5" style="margin-bottom: 7rem;">
      <div class="row">
           <?php
            // Mendapatkan ID laporan dari parameter GET pada URL
            $id_laporan = $_GET['id'];

            // Query untuk mengambil data laporan dengan ID yang sesuai
            $sql = "SELECT * FROM tb_laporan WHERE id = $id_laporan";
            $result = mysqli_query($conn, $sql);

            // Memeriksa apakah query SELECT berhasil dijalankan
            if (!$result) {
            die("Query SELECT gagal: " . mysqli_error($conn));
            }
            // Menampilkan laporan berdasarkan ID
            $id = $_GET['id'];
            $sql = "SELECT * FROM tb_laporan WHERE id = $id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<img src="../../uploads/' . $row["foto"] . '" class="card-img-top mx-auto d-block" alt="Foto Laporan" style="width: 350px">';
                echo '<p>Lokasi: ' . $row["lokasi"] . '</p>';
                echo '<p>Deskripsi: ' . $row["deskripsi"] . '</p>';
                echo '<p>Tanggal: ' . $row["waktu_laporan"] . '</p>';
                
                // Menampilkan form untuk mengupdate komentar
                echo '<form method="post" action="../auth/detail.php">';
                echo '<div class="form-group">';
                echo '<label for="komentar">Komentar:</label>';
                echo '<textarea class="form-control" id="komentar" name="komentar">' . $row["komentar"] . '</textarea>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<div class="form-group2">';
                echo '<label for="status">Status:</label>';
                echo '<select class="form-control" id="status" name="status">';
                echo '<option value="Diterima">Diterima</option>';
                echo '<option value="Ditolak">Ditolak</option>';
                echo '</select>';
                echo '</div>';
                echo '</div>';
                echo '<input type="hidden" name="laporan_id" value="' . $id . '">';
                echo '<div class=tmbl>';
                echo '<button type="submit" class="btn btn-primary float-right">Kirem</button>';
                echo '</div>';
                echo '</form>';
                   
            }
            } else {
            // Menampilkan pesan bahwa data laporan tidak ditemukan
            echo '<p>Data laporan tidak ditemukan.</p>';
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

    <style>
        .form-group {
  margin-bottom: 1.5rem;
}

label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: 600;
}

textarea {
  min-height: 150px;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 1rem;
  line-height: 1.5;
  width: 100%;
}

select {
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 1rem;
  line-height: 1.5;
  width: 100%;
}

input[type="hidden"] {
  display: none;
}

button[type="submit"] {
  background-color: #007bff;
  border: none;
  color: #fff;
  padding: 0.5rem 1rem;
  border-radius: 4px;
  font-size: 1rem;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0069d9;
}


    </style>
    <script src="script.js"></script>
  </body>
</html>
