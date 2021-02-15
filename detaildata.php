<?php
include 'session.php';
include 'config/data_register.php';
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
          <li class="nav-item active ">
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
        <table id="dataregister" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()) :
                    $id = $row['id'];
                    $namadepan = $row['nama_depan'];
                    $namabelakang = $row['nama_belakang'];
                    $namalengkap = $namadepan . " " . $namabelakang;
                    $email = $row['email'];
                    $username = $row['username'];
                ?>
                    <tr>
                        <td><?php echo $namalengkap; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $username; ?></td>
                        <td>
                            <!-- form hapus -->
                            <form action="edit.php" method="POST">
                                <input type="hidden" name="id_reg" value="<?php echo $id; ?>" />
                                <input type="hidden" name="namadepan" value="<?php echo $namadepan; ?>" />
                                <input type="hidden" name="namabelakang" value="<?php echo $namabelakang; ?>" />
                                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                                <input type="hidden" name="username" value="<?php echo $username; ?>" />
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>

                            <!-- form view -->
                            <form action="view.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                <button type="submit" class="btn btn-success">Detail View</button>
                            </form>

                            <!-- form delete -->
                            <form action="config/hapus.php" method="POST">
                                <input type="hidden" name="id_reg" value="<?php echo $id; ?>" />
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                        </form>
                    </tr>
                <?php endwhile; ?>
            </tbody>
            <a href="config/logout.php" class="btn btn-primary" >Logout</a>
        </table>
    </div>
    <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">@Copyright by 18111062_GhinaFairuzNazilah_TIFRP18CIDA_UASWEB1</p>
    </div>
  </footer>
</body>
<script>
    $(document).ready(function() {
        $('#dataregister').DataTable({
            "aLengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ],
            "iDisplayLength": 5
        });
    });
</script>

</html>