<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@200&family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>Trashdeep</title>
    <link rel="icon" href="static/asset/foto/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style/daftar.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container ">
            <a class="navbar-brand " href="#">
                <img src="assets/logo.png" draggable="false" alt="Trashdeep"height="45">
                Trashdeep
            </a>
        </div>
    </nav>

    <div class="d-flex justify-content-center = box-daftar">
      <form action="auth/auth.php" method="POST"> 
        <div class="form-group my-3">
              <label for="username" class="label-username">Nama Pengguna:</label>
              <input type="text" class="form-control username" id="username" placeholder="" name="username" />
        </div>
        
        <div class="form-group mb-3">
              <div class="pw">
                  <label for="no_telepon" class="label-password">No Telepon:</label>
                  <input type="nono_telepon" class="form-control no_telepon" id="no_telepon" name="no" />
        </div>
        
        <div class="form-group mb-3">
                <div class="pw">
                    <label for="password" class="label-password">Kata Sandi:</label>
                    <input type="password" class="form-control password" id="password" name="password" />
        </div>
          </div>
          <div class="col-sm-12 pt-1 regist">
              <a href="login.html">Sudah Punya Akun</a>
          </div>
          <button type="submit" class="btn-submit m-5">Submit</button>

      </form>

  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>

</html>