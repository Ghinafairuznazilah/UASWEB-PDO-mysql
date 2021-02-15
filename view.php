<?php
include 'session.php';
$idreg = $_POST["id"];
require_once 'config/koneksi.php';

try{
$sql = "SELECT biodata.id, biodata.id_pendaftar, biodata.pic_location, 
biodata.alamat_rumah, biodata.pendidikan_terakhir, biodata.status,
biodata.kota_lahir, biodata.tgl_lahir, biodata.pekerjaan, biodata.perusahaan,
data_pendaftar.nama_depan, data_pendaftar.nama_belakang, data_pendaftar.email, data_pendaftar.username ,data_pendaftar.level
FROM biodata RIGHT JOIN data_pendaftar ON biodata.id = data_pendaftar.id WHERE data_pendaftar.id=?";
$q = $database_connection->prepare($sql);
$q->execute([$idreg]);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
    $id = $row['id'];
    $namadepan = $row['nama_depan'];
    $namabelakang = $row['nama_belakang'];
    $namalengkap = $namadepan . " " . $namabelakang;
    $email = $row['email'];
    $username = $row['username'];
    $level = $row['level'];
    $photo = $row['pic_location'];
    $alamat = $row['alamat_rumah'];
    $kotalahir = $row['kota_lahir'];
    $tanggallahir = $row['tgl_lahir'];
    $pekerjaan = $row['pekerjaan'];
    $perusahaan = $row['perusahaan'];
    $pendidikan = $row['pendidikan_terakhir'];
    $id_pendaftar = $row['id_pendaftar'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviewer.id</title>
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>

    <!-- CSS dan JS DataTable -->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>
    <!--Navigation Bar-->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <!--fixed top digunakan agar navigation bar tetap dan tepat berada di atas-->
    <div class="container">
      <a class="navbar-brand" href="#">Reviewer.id</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <!--active digunakan agar warna menonjolpada salah satu nav item ketika sedang dituju disuatu halam-->
            <a class="nav-link" href="menuutama.php">Menu Utama</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="detaildata.php">Data User</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="postdetails.php">Post Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>

      </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    </button>

    <ul class="navbar-nav ml-md-auto">
      <li>

      <a href="user.php">
      <img src="img/profile.png" width="40" height="40" class="rounded-circle mr-3">Your Profile
      <?php echo $_SESSION['username'];?>
    </a>

      </li>
    </ul>
    </div>
  </nav>
  </br></br></br></br>
  <!--Akhir Navigation bar-->
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="detaildata.php">Detail Data</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $photo;?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $namalengkap;?></h4>
                      <p class="text-secondary mb-1"><?php echo $pekerjaan;?></p>
                      <p class="text-muted font-size-sm"><?php echo $perusahaan;?></p><br/><br/>
                      <a href="<?php echo $photo;?>">Download Foto Profil</a>
                      <form action="config/upload.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="id_pendaftar" value="<?php echo $id_pendaftar?>">
                      <input type="file" name="file" id="file">
                      <button type="submit">Update foto</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $namalengkap;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> <?php echo $email;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> <?php echo $username;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tempat & Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $kotalahir . " , " . $tanggallahir;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $alamat;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pendidikan Terakhir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $pendidikan;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Level</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $level;?> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
     <!--footer-->
   <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">@Copyright by 18111062_GhinaFairuzNazilah_TIFRP18CIDA_UASWEB1</p>
        </div>
    </footer>

    <!--akhir footer-->

</body>
</html>