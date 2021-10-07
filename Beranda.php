<?php
session_start();
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
    <link rel="stylesheet" href="Css/Beranda.css">

    <title>SMA KOTA MOJOKERTO</title>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="https://www.facebook.com/officialsman2mojokerto/?_rdc=1&_rdr"><img src="https://img.icons8.com/ios-filled/50/ffffff/facebook--v1.png" width = "22" height="22"/></a>
    <a class="navbar-brand" href="https://www.facebook.com/officialsman2mojokerto/?_rdc=1&_rdr"><img src="https://img.icons8.com/ios-filled/50/ffffff/youtube-play.png" width = "25" height="25"/></a>
    <a class="navbar-brand" href="https://www.facebook.com/officialsman2mojokerto/?_rdc=1&_rdr"><img src="https://img.icons8.com/windows/32/ffffff/instagram-new.png" width = "25" heigtht="25"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="Images\logo.png" width="40" height="40" class="d-inline-block align-text-left">&nbsp;SMA 2 KOTA MOJOKERTO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fasilitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gallery</a>
        </li>
        <a class="btn tombol-button-register text-light" href="logout.php" role="button">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Jumbotron Beranda -->
<div class="jumbotron jumbotron-fluid">
      <div class="container">
      <div class="row">
      <div class="col-md-6">
        <h1 class="display-4 text-light">SMA NEGERI 1 </h1>
        <p class="kedua text-light">Cerdas Berkarya</p>
        <p class="lead text-light">Menjadi Sekolah Unggul dalam Imtaq, Iptek, Budi Pekerti, Peduli Lingkungan<br> 
          dan Berwawasan Internasional<br>
        </p>
        <a class="btn tombol-button1 text-dark" href="profilsekolah.php" role="button">&nbsp; Profil Sekolah &nbsp;<img src="https://img.icons8.com/ios-glyphs/30/000000/circled-chevron-right.png"/></a>
        <a class="btn tombol-button2 text-dark" href="HubungiKami.php" role="button">&nbsp; Hubungi Kami &nbsp;<img src="https://img.icons8.com/ios-glyphs/30/000000/circled-chevron-right.png"/></a>
      </div>
      </div>
      </div>
</div>

        <!-- End Jumbotron -->

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