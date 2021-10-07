<?php
// include database connection file
include_once("Koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $tahun=$_POST['thn_ajaran'];
    $jurusan=$_POST['jurusan'];
    $nama=$_POST['nm_peserta'];
    $tempatlahir=$_POST['tmpt_lahir'];
    $tgllahir=$_POST['tgl_lahir'];
    $jeniskelamin=$_POST['jk'];
    $agama=$_POST['agama'];
    $alamat=$_POST['almt_peserta'];
        
    // update user data
    $result = mysqli_query($conn, "UPDATE tb_pendaftaran SET thn_ajaran='$tahun',jurusan='$jurusan',nm_peserta='$nama',tmpt_lahir='$tempatlahir',
    tgl_lahir='$tgllahir',jk='$jeniskelamin',agama='$agama',almt_peserta='$alamat' WHERE id_pendaftaran=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: data-peserta.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran=$id");
 
while($data = mysqli_fetch_array($result))
{
    $tahun=$data['thn_ajaran'];
    $jurusan=$data['jurusan'];
    $nama=$data['nm_peserta'];
    $tempatlahir=$data['tmpt_lahir'];
    $tgllahir=$data['tgl_lahir'];
    $jeniskelamin=$data['jk'];
    $agama=$data['agama'];
    $alamat=$data['almt_peserta'];
}
?>
<html>
<head>    
    <title>Edit Peserta</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="Css/Register.css">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
</head>
 
<body>
    <!-- Form -->
    <form action="edit-peserta.php" name="update_user" method="post">

            <!-- Form Tahun Ajaran -->
            <div class="form-group row">
            <label for="thn ajaran" class="col-sm-3 col-form-label">Tahun Ajaran</label>
            <div class="col-sm-8">
            <input type="text" value=<?php echo $tahun;?> class="form-control" name="th_ajaran" placeholder="Masukkan Tahun Ajaran" value="2021/2022" readonly>
            </div>
            </div>

            <!-- Form Pilih Jurusan -->
            <div class="form-group row">
            <label for="jurusan" class="col-sm-3 col-form-label">Pilih Jurusan</label>
            <div class="col-sm-8">
            <select value=<?php echo $jurusan;?> class="form-control" name="jurusan">
              <option value="">Pilih Jurusan</option>
              <option value="IPA">IPA</option>
              <option value="IPS">IPS</option>
              <option value="Bahasa">Bahasa</option>
            </select>  
            </div>
            </div>
            
            <h5 class="data-diri-siswa mt-5 mb-5">&nbsp;&nbsp;&nbsp;Data Pribadi Calon Siswa</h5>

            <!-- Form Nama Lengkap -->
            <div class="form-group row">
            <label for="nama lengkap" class="col-sm-3 col-form-label">Masukkan Nama Lengkap</label>
            <div class="col-sm-8">
            <input type="text" value=<?php echo $nama;?> class="form-control" name="nm_peserta" placeholder="Masukkan Nama Lengkap">
            </div>
            </div>

            <!-- Form Tempat Lahir -->
            <div class="form-group row">
            <label for="tmpt lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
            <div class="col-sm-8">
            <input type="text" value=<?php echo $tempatlahir;?> class="form-control" name="tmpt_lahir" placeholder="Masukkan Tempat Lahir">
            </div>
            </div>

            <!-- Form Tanggal Lahir -->
            <div class="form-group row">
            <label for="tgl lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-8">
            <input type="date" value=<?php echo $tgllahir;?> class="form-control" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
            </div>
            </div>

            <!-- Form Jenis Kelamin -->
            <div class="form-group row">
            <label for="jenis kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-8">
            <div value=<?php echo $jeniskelamin;?> class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jk" value="Laki-laki">
              <label class="form-check-label">Laki - laki</label>
            </div>
            <div value=<?php echo $jeniskelamin;?> class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jk" value="Perempuan">
              <label class="form-check-label">Perempuan</label>
            </div>
            </div>
            </div>

            <!-- Form Pilih Agama -->
            <div class="form-group row">
            <label for="agama" class="col-sm-3 col-form-label">Pilih Agama</label>
            <div class="col-sm-8">
            <select value=<?php echo $agama;?> class="form-control" name="agama">
              <option value="">Pilih Agama</option>
              <option value="Islam">Islam</option>
              <option value="Budha">Budha</option>
              <option value="Hindu">Hindu</option>
              <option value="Kristen">Kristen</option>
              <option value="Katolik">Katolik</option>
            </select>  
            </div>
            </div>

            <!-- Form Alamat -->
            <div class="form-group row">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-8">
            <textarea class="form-control" value=<?php echo $alamat;?> name="almt_peserta" rows="3" placeholder="Masukkan Alamat"></textarea>
            </div>
            </div>

            <!-- Tombol Daftar Sekarang -->
            <div class="form-group row">
            <label for="submit" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-5">
            <input type="hidden" name="id" value=<?php echo $_GET['id_pendaftaran'];?>>
            <input type="submit" name="update" value="Update">
            </div>
            </div>
            
    </form>
</body>
</html>