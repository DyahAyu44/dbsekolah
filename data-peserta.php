<?php
    session_start();
    include 'Koneksi.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Peserta</title>
        
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
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pendaftaran</th>
                            <th>Tanggal Pendaftaran</th>
                            <th>Tahun Ajaran</th>
                            <th>Jurusan</th>
                            <th>Nama Peserta</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
                            while($row = mysqli_fetch_array($list_peserta)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['id_pendaftaran'] ?></td>
                            <td><?php echo $row['tgl_pendaftaran'] ?></td>
                            <td><?php echo $row['th_ajaran'] ?></td>
                            <td><?php echo $row['jurusan'] ?></td>
                            <td><?php echo $row['nm_peserta'] ?></td>
                            <td><?php echo $row['tmpt_lahir'] ?></td>
                            <td><?php echo $row['tgl_lahir'] ?></td>
                            <td><?php echo $row['jk'] ?></td>
                            <td><?php echo $row['agama'] ?></td>
                            <td><?php echo $row['almt_peserta'] ?></td>
                            <td>
                                <a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>">Detail</a> ||
                                <a href="edit-peserta.php">Edit</a> ||
                                <a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>" onclick="return confirm('Yakin ?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </body>
</html>