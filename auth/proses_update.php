<?php
include 'koneksi.php';

// Memeriksa apakah ada data yang dikirimkan melalui parameter GET
if (isset($_GET['id'])) {
  $id_laporan = $_GET['id'];

  // Query untuk mengambil data laporan dengan id tertentu
  $sql = "SELECT * FROM tb_laporan WHERE id='$id_laporan'";
  $result = mysqli_query($conn, $sql);

  // Memeriksa apakah data laporan dengan id tersebut ditemukan
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $lokasi = $row['lokasi'];
    $deskripsi = $row['deskripsi'];
  } else {
    // Jika data laporan tidak ditemukan, redirect ke halaman riwayat laporan
    header('Location: ../Riwayat/riwayat.php');
  }
} else {
  // Jika parameter id tidak ditemukan, redirect ke halaman riwayat laporan
  header('Location: ../Riwayat/riwayat.php');
}

// Memeriksa apakah form telah disubmit dengan method POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id_laporan = $_POST['id'];
  $lokasi = $_POST['lokasi'];
  $deskripsi = $_POST['deskripsi'];

  // Mengambil nama file dan temporary file yang diupload
  $foto = $_FILES['foto']['name'];
  $tmp_foto = $_FILES['foto']['tmp_name'];

  // Memeriksa apakah file foto diupload
  if (!empty($foto)) {
    // Mengunggah file foto ke direktori yang diinginkan
    $upload_dir = '../uploads/';
    $target_file = $upload_dir . basename($foto);
    move_uploaded_file($tmp_foto, $target_file);

    // Query untuk mengupdate data laporan pada tabel tb_laporan
    $sql = "UPDATE tb_laporan SET lokasi='$lokasi', deskripsi='$deskripsi', foto='$foto' WHERE id='$id_laporan'";
  } else {
    // Query untuk mengupdate data laporan pada tabel tb_laporan tanpa foto
    $sql = "UPDATE tb_laporan SET lokasi='$lokasi', deskripsi='$deskripsi' WHERE id='$id_laporan'";
  }

  $result = mysqli_query($conn, $sql);

  // Memeriksa apakah query UPDATE berhasil dijalankan
  if ($result) {
    // Jika berhasil, redirect ke halaman riwayat laporan dengan pesan sukses
    header('Location: ../Riwayat/riwayat.php?success=true');
  } else {
    // Jika gagal, redirect ke halaman edit laporan dengan pesan error
    header('Location: update.php?id=' . $id_laporan . '&success=false');
  }
}

// Menutup koneksi ke database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
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
  <div class="container mt-0">
    <h2 class="text-center mb-4">Update Laporan</h2>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $id_laporan ?>">
      <div class="form-group">
        <label for="lokasi">Lokasi</label>
        <input type="text" class="form-control" name="lokasi" value="<?php echo $lokasi ?>">
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" name="deskripsi"><?php echo $deskripsi ?></textarea>
      </div>
      <div class="form-group text-center">
        <?php if (!empty($row['foto'])) { ?>
          <div class="d-flex align-items-center justify-content-center mb-2">
            <img src="../uploads/<?php echo $row['foto']; ?>" width="400" class="mr-3">
          </div>
        <?php } ?>
        <input type="file" name="foto" class="form-control-file">
      </div>
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="../Riwayat/riwayat.php" class="btn btn-danger">Batal</a>
      </div>
    </form>
  </div>
</body>
</html>

