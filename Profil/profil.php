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
          <a class="navbar-brand" href="../Home/home.php" style=" color : white">
            <img
              src="../assets/beranda.svg"
              draggable="false"
              alt="Trashdeep"
              height="40"
            />
            Beranda
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
          </div>
          <div class="col-md-8">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Nomor Telepon</label>
              </div>
            </form>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-3">Edit Profil</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-secondary me-md-2" type="button">Pengaturan</button>
          <button class="btn btn-secondary" type="button">FAQ</button>
          <button class="btn btn-danger" type="button">Keluar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>
