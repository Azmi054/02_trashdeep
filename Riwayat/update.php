<!DOCTYPE html>
<html>
<head>
  <title>Edit Laporan</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>

  <div class="container mt-3">
    <h2>Edit Laporan</h2>
    <hr>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      <input type="hidden" name="id" value="<?php echo $id_laporan ?>">
      <div class="form-group">
        <label for="lokasi">Lokasi</label>
        <input type="text" class="form-control" name="lokasi" value="<?php echo $lokasi ?>">
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" name="deskripsi"><?php echo $deskripsi ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="../Riwayat/riwayat.php" class="btn btn-secondary">Batal</a>
    </form>
  </div>

</body>
