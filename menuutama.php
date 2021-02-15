<?php

include 'session.php';
include 'config/data_register.php';

session_start();

if(empty($_SESSION)){
	header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>Reviewer.id</title>
  <style type="text/css">
    body {
      background-image: url(img/bc2.jpg);
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
          <li class="nav-item active">
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


  <div class="container" style="margin-top:40px">
    <div class="row">
      <div class="col-md-9">
        <div class="panel panel-default">
          <div class="panel-body">
            <h3>Reviewer.id Indonesian Food : Seblak</h3>
            <hr>

            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object " src="image/seblak.jpg" width="100%" height="200px">
              </a>
              <div class="media-body">
                <p>
                  Hello rivi!
                  Seblak merupakan jajanan pedas khas Bandung yang populer di kalangan anak muda.
                  Cita rasa pedas menggigit dan gurih membuat hidangan ini juga digemari semua orang,
                  khususnya para penikmat makanan pedas.
                  Bukan cuma itu, isiannya berupa kerupuk mentah, bakso, telur, sosis, ceker, dan sayuran membuat
                  makanan ini begitu komplit. Alhasil, selain dapat merasakan tekstur kenyal dari aci, variasi bahan
                  dalam seblak juga bikin perut kenyang.
                  Selain nikmat, seblak sebenarnya mudah dibuat di rumah. Dengan menggunakan bahan-bahan yang mudah
                  didapatkan, kamu sudah dapat mengkreasikan seblak versimu sendiri. Makanya, yuk langsung simak
                  reviewnya !
                </p>

              </div>
              <p style="text-align:right;">
                <a href="postdetails.php">
                  <button class="btn btn-primary">Read More</button>
                </a>
              </p>
            </div>
            <hr>
            <h3>Reviewer.id Fashion terkini : Jaket Jeans</h3>
            <hr>

            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="image/jeans.jpg" width="300px" height="200px">
              </a>

              <div class="media-body">
                <p>Hello rivi! Girly look dengan denim jacket, bisa kok! Temukan style jaket jeans wanita untuk gaya
                  yang feminin.</p>
                <p>Jaket jeans merupakan fashion item yang kemungkinan besar ada di dalam lemari pakaianmu. Fashion item
                  satu ini memang wajib untuk kamu miliki. Apalagi untuk kamu penggemar casual style. Beberapa denim
                  item seperti denim pants atau denim jacket memang mudah sekali di mix and match. Oleh karena itu,
                  fashion item ini selalu jadi favorit semua orang.
                  Denim jacket selalu bisa diandalkan karena sifatnya yang mudah dipadukan dengan fashion item apa pun.
                  But first of all, apakah kamu sudah memiliki denim jacket? eitss jangan salah pilih jaket ya, simak
                  dulu yuk review kami mengenai jaket jeans!</p>
              </div>
              <p style="text-align:right;">
                <a href="postdetails.php">
                  <button class="btn btn-primary">Read More</button>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="text-center">Latest Review</h4>
          </div>
          <div class="panel-body">
            <div class="recent">
              <a href="postdetails.php"><img class="img-responsive" src="image/lombok.jpg" alt="" /></a>
              <h4>
                <a href="postdetails.php">Reviewer.id Wisata : Lombok</a>
              </h4>
            </div>

            <div class="recent">
              <a href="postdetails.php"><img class="img-responsive" src="image/bolabasket.jpg" alt="" /></a>
              <h4 class="entry-title">
                <a href="postdetails.php">Reviewer id Information : Bola Basket</a>
              </h4>
            </div>
            <!--recent-->
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">@Copyright by 18111062_GhinaFairuzNazilah_TIFRP18CIDA_UASWEB1</p>
    </div>
  </footer>


  </div>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.s1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>