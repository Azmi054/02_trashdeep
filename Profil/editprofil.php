<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil Saya</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="profil.css">
</head>


<body class="body">
<nav>
      <div class="navbar">
          <a class="navbar-brand" href="profil.php" style=" color : white">
            <img
              src="../assets/beranda.svg"
              draggable="false"
              alt="Trashdeep"
              height="40"
            />
          </a>
        </div>
    </nav>

    <div class="container my-5">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center">Profil Saya</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4 text-center">
            <img src="https://via.placeholder.com/150" class="img-thumbnail" alt="Foto Profil">
            <form method="post" action="../auth/upload_profil.php" enctype="multipart/form-data">
              <div class="mb-3">
                <input type="file" name="foto_profil">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary mb-3" name="submit">Upload Foto</button>
              </div>
            </form>
          </div>
          <div class="col-md-8">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" value="<?php echo $_SESSION['username'];?>">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="phone" value="<?php echo $_SESSION['no_telepon'];?>">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password Lama</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan Password Lama">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password Baru</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan Password Baru">
              </div>
            </form>
            <div class="text-center">
              <button type="submit" class="btn btn-primary mb-3">simpan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>
