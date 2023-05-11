<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@200&family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>Trashdeep</title>
    <link rel="icon" href="../assets/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="daftar.css">
</head>

<body class="body">
    <nav class="navbar bg-body-tertiary">
        <div class="container ">
            <a class="navbar-brand " href="#">
                <img src="../../assets/logo.png" draggable="false" alt="Trashdeep"height="50">
            </a>
        </div>
    </nav>

    <div class="d-flex justify-content-center box-daftar">
      <form action="../auth/proses_daftar.php" method="POST" onsubmit="checkUsername()">
        <div class="form-group my-3">
              <label for="username" class="label-username">Nama Lengkap:</label>
              <input type="text" class="form-control username" id="username" placeholder="" name="username" required />
        </div>
        
        <div class="form-group mb-3">
              <div class="pw">
                  <label for="no_telepon" class="label-password">No Telepon:</label>
                  <input type="tel" class="form-control no_telepon" id="no_telepon" name="no_telepon" required />
              </div>
        </div>
        
        <div class="form-group mb-3">
            <div class="pw">
                <label for="password" class="label-password">Kata Sandi:</label>
                <div class="input-group">
                    <input type="password" class="form-control password" id="password" name="password" required /> <br>
                </div>
                <div class="input-group-text">
                <input type="checkbox" class="btn-toggle-password" id="btn-toggle-password" />
                    <label class="form-check-label" for="btn-toggle-password">Tampilkan kata sandi</label>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn-submit m-2" style="color: white;">Daftar</button>
        </div>
        <div class="col-sm-12 pt-12 regist text-center">
            <a>Sudah Punya Akun?</a><a href="../Login petugas/login.php"> Masuk</a>
        </div>
      </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
</body>

</html>