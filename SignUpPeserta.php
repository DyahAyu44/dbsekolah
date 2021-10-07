<?php
  include 'Koneksi.php';
?>  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="Css/Index.css">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

    <title>SMA KOTA MOJOKERTO</title>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="Images\logo.png" width="40" height="40" class="d-inline-block align-text-left">&nbsp;SMA 2 KOTA MOJOKERTO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><img src="https://img.icons8.com/ios-filled/50/000000/facebook--v1.png" width = "25" height = "25" class="d-inline-block align-text-right"/></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><img src="https://img.icons8.com/ios-filled/50/000000/youtube-play.png" width = "25" height = "25" class="d-inline-block align-text-right"/></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><img src="https://img.icons8.com/ios-filled/50/000000/instagram-new.png" width = "25" height = "25" class="d-inline-block align-text-right"/></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Halaman Sign Up</a>
        </li>
        <a class="btn tombol-button-register text-dark" href="Index.php" role="button">Login</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  <!-- Akhir Navbar -->

  <div class="container">
      <div class="row content">
      <center>  
      <h4 class="judul-login mt-1 mb-5">SMA 2 KOTA MOJOKERTO</h4>
      </center>
          <div class = "col-md-6 mb-3">
              <img src="Images/Login.svg" class="img-fluid" alt="image">
          </div>
          <div class = "col-md-6">
              <h3 class="signin-text mb-3">Sign Up</h3>
              <form action = "" method = "post">
                  <div class="form-group">
                      <label for = "user">Username / Email</label>
                      <input type = "text" name = "user" class = "form-control">
                  </div>
                  <div class = "form-group">
                      <label for ="password">Password</label>
                      <input type = "password" name = "pass" class = "form-control">
                  </div>
                  <input class = "btn btn-class" type  = "submit" name = "login" value = "Login">
                  <p class = "login-register mt-4 mb-2">Sudah punya akun? <a href = "Index.php">Login di sini</a></p> 
                  </div>
              </form>
          </div>
        </div>
    </div>                   




<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>