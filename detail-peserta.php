<?php
    session_start();
    include 'Koneksi.php';

    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Detail Peserta</title>
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="Css/data-peserta.css">

        <!-- Font CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
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
            <a class="nav-link" aria-current="page" href="Beranda.php">Website</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="#">Pendaftaran Mahasiswa</a>
            </li>
            <a class="btn tombol-button-login text-light" href="index2.php" role="button">Login</a>
            </li>
        </ul>
        </div>
        </div>
        </nav>
    <!-- Akhir Navbar -->
        <section class="content" >
            <div class="box">
                
            <h4 class='judul-formulir'>Bukti Pendaftaran</h4>
            <p class='title-formulir'>Peserta SMA 2 KOTA MOJOKERTO</p>
            <hr class='my-4'>
            <!-- Kode Pendaftaran -->
            <div class="form-group row">
            <label class="col-sm-2">Kode Pendaftaran</label>
            <div class="col-sm-1">
            <label>:&nbsp;&nbsp;<?php echo $p->id_pendaftaran ?></label>
            </div>
            </div>

            <!-- Tahun Ajaran -->
            <div class="form-group row">
            <label class="col-sm-2">Tahun Ajaran</label>
            <div class="col-sm-1">
            <label>:&nbsp;&nbsp;<?php echo $p->th_ajaran ?></label>
            </div>
            </div>

            <!-- Jurusan -->
            <div class="form-group row">
            <label class="col-sm-2">Jurusan</label>
            <div class="col-sm-1">
            <label>:&nbsp;&nbsp;<?php echo $p->jurusan ?></label>
            </div>
            </div>

            <!-- Nama Lengkap -->
            <div class="form-group row">
            <label class="col-sm-2">Nama Lengkap</label>
            <div class="col-sm-2">
            <label>:&nbsp;&nbsp;<?php echo $p->nm_peserta ?></label>
            </div>
            </div>

            <!-- Tempat & tanggal Lahir -->
            <div class="form-group row">
            <label class="col-sm-2">Tempat, Tanggal Lahir</label>
            <div class="col-sm-8">
            <label>:&nbsp;&nbsp;<?php echo $p->tmpt_lahir.', '.$p->tgl_lahir ?></label>
            </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-group row">
            <label class="col-sm-2">Jenis Kelamin</label>
            <div class="col-sm-1">
            <label>:&nbsp;&nbsp;<?php echo $p->jk ?></label>
            </div>
            </div>

            <!-- Agama -->
            <div class="form-group row">
            <label class="col-sm-2">Agama</label>
            <div class="col-sm-1">
            <label>:&nbsp;&nbsp;<?php echo $p->agama ?></label>
            </div>
            </div>

            <!-- Alamat -->
            <div class="form-group row">
            <label class="col-sm-2">Alamat</label>
            <div class="col-sm-6">
            <label>:&nbsp;&nbsp;<?php echo $p->almt_peserta ?></label>
            </div>
            </div>

            </div>
        </section>
    </body>
</html>