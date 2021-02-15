<?php
include 'session.php';

$id_register = $_POST['id_reg'];
//echo $id_register;
$nama_depan = $_POST['namadepan'];
$nama_belakang = $_POST['namabelakang'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];



?>

<html>

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
	<style type="text/css">
        a {
  text-decoration: none;
}
body {
    background-color: #fef8eb;
    background-size: cover;
  background-repeat: no-repeat;
}
</style>
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
	<!-- buat class container -->

	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<img src="image/iconedit.jpg" width="300px" height="300px">

			<!-- membuat form -->
			<form action = "config/edit.php" method ="POST" class="col-lg-6">
				<h5>Edit data</h5>
				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Nama Depan</label>
						<input type="text" class="form-control" name="namadepan" value="<?php echo $nama_depan?>">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Nama Belakang</label>
						<input type="text" class="form-control" name="namabelakang" value="<?php echo $nama_belakang;?>" >
					</div>
				</div>
				<!-- end baris 1 pada form -->

				<!-- baris ke 2 pada form -->
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="contoh1">Email</label>
						<input type="text" class="form-control" name="email" value=" <?php echo $email;?>">
					</div>
					<div class="form-group col-md-4">
						<label for="contoh2">Username</label>
						<input type="text" class="form-control" name="username" value=" <?php echo $username;?>">
					</div>
					<div class="form-group col-md-4">
						<label for="contoh2">Password</label>
						<input type="text" class="form-control" name="password" value=" <?php echo $password;?>">
					</div>
				
				</div>
				<!-- end baris 2 pada form -->
				<input type="hidden" name="id_reg" value = "<?php echo $id_register ?>"/>
				<button type="submit" class="btn btn-primary">Edit</button>
			</form>
			
			<!-- end form -->
		</div>
	</div>
	<!-- end container -->
	 <!--footer-->
   <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">@Copyright by 18111062_GhinaFairuzNazilah_TIFRP18CIDA_UASWEB1</p>
        </div>
    </footer>

    <!--akhir footer-->

</body>

</html>