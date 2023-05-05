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
  <link rel="stylesheet" href="../navbar.css">
  <style>
    .img-thumbnail{
      border-radius: 50%;
      width: 150px;
      height: 150px;
      object-fit: cover;
    }
  </style>
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

  <div class="container my-2">
     <div class="col-md-4 text-center"> 
            <img src="https://via.placeholder.com/150" class="img-thumbnail" alt="Foto Profil">
     </div>
    <div class="card" style="border: none;">
      <div class="card-body">
        <div class="row">
          <div class="col-md-8">
          <form>
            <div class="row">
              <label for="name" class="col-sm-3 col-form-label">Nama Lengkap:</label>
              <div class="col-sm-9">
                <span class="text-truncate"><?php echo $_SESSION['username'];?></span>
                <hr style="border:1px solid #42855B" class="mt-1">
              </div>
            </div>
            <div class="row">
              <label for="phone" class="col-sm-3 col-form-label">Nomor Telepon:</label>
              <div class="col-sm-9">
                <span class="text-truncate"><?php echo $_SESSION['no_telepon'];?></span>
                <hr style="border: 1px solid #42855B;" class="mt-1">
              </div>
            </div>
          </form>
            <div class="text-center">
              <button type="submit" class="btn btn-primary mt-4" onclick="location.href='editprofil.php'">Edit Profil</button>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
      <div class="card-footer mb-2">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="peraturan.php" class="btn btn-secondary" type="button">Peraturan</a>
          <button class="btn btn-secondary" type="button">FAQ</button>
          <a href="../auth/logout.php" class="btn btn-danger" type="button">Keluar</a>
        </div>
      </div>
    </div>
  </div>

<?php
include'../navbar.php';
?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>