<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Reviewer.id</title>
    <style type="text/css">
        body {
            background-image: url(img/pastel2.png);
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
            <li>
                <img src="image/profile.png" width="40" height="40" class="rounded-circle mr-3" />
                <a href="login.php" class="btn btn-outline-light mr-3">Login</a>

                </div>
            </li>
        </ul>
        </div>
    </nav>
    <!--Akhir Navigation bar-->
    </br></br></br></br>

    <!--container full-->
    <div class="container col-sm-12">
        <div class="row">
        </div>

        <!--container content-->
        <div class="container">
            <div class="row">
                <!--content,comment,thumbnail-->
                <div class="col-sm-8">
                    <div class="thumbnail">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Review</a></li>
                                <li class="breadcrumb-item"><a href="#">Information</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Food</a>
                                <li>
                            </ol>
                        </nav>

                        <h3>Seblak</h3>
                        <img src="image/seblak.jpg" width="45%" alt="">
                        <div class="caption text-justify">

                            <p>Seblak adalah makanan Indonesia yang dikenal berasal dari Bandung,
                                Jawa Barat yang bercita rasa gurih dan pedas.
                                Terbuat dari kerupuk basah yang dimasak dengan sayuran dan sumber protein seperti telur,
                                ayam, boga bahari atau olahan daging sapi, dan dimasak dengan kencur.
                                Seblak kini menjadi makanan jajanan jalanan yang digemari berbagai kalangan masyarakat,
                                terutama di Jawa Barat dan Jabodetabek.
                                Seiring berkembangnya tren jajanan tradisional dan kaki lima, seblak tidak hanya
                                disajikan dengan toping biasa di gerobak.
                                Seblak berkembang menjadi makanan yang modern dan berhasil menarik perhatian. Makanan
                                yang bertekstur kenyal ini memiliki rasa yang pedas dan menyegarkan, serta memiliki
                                beberapa variasi, baik rasa maupun bahan tambahan juga kemasan penjualan.</p>

                            <hr>
                        </div>
                        <div class="comment">
                            <label>
                                <h2>Leave a coment</h2>
                            </label>
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" id="usr">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-info" value="Kirim Komentar">
                            </div>

                        </div>

                    </div>

                </div>
                <!--akhir content,comment, thumbnail-->

                <!--content samping-->
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="caption">
                                <h4>Food</h4>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <img src="image/bakpia.jpg" width="100%" alt="">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Bakpia adalah makanan oleh-oleh khas jogja yang mudah sekali ditemui. rasanya
                                            bervariasi dan pastinya enak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="caption">
                                <h4>Travelling</h4>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <img src="image/pantai.jpg" width="100%" alt="Cinque Terre">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Pantai Rembat Indramayu yang tentunya punya spot foto yang instagramable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="caption">
                                <h4>Information</h4>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <img src="image/bolabasket.jpg" width="100%" alt="Cinque Terre">
                                    </div>
                                    <div class="col-sm-9">
                                        <p> menurut wikipedia : Basket dianggap sebagai olahraga unik karena diciptakan
                                            secara tidak sengaja oleh seorang guru olahraga. Pada tahun 1891, Dr. James
                                            Naismith, seorang guru olahraga asal Kanada yang mengajar di sebuah
                                            perguruan tinggi
                                            Terinspirasi dari permainan yang pernah ia mainkan saat kecil di Ontario,
                                            Naismith menciptakan permainan yang sekarang dikenal sebagai bola basket
                                            pada 15 Desember 1891.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="caption">
                                <h4>Fashion</h4>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <img src="image/jeans.jpg" width="100%" alt="Cinque Terre">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Jaket Jeans yang sempet jadi trend di tahun 1990. di masa sekarang ini makin
                                            hype.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!--akhir content samping-->


            </div>
        </div>
        <!--akhir container content-->

    </div>

    <!--footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">@Copyright by 18111062_GhinaFairuzNazilah_TIFRP18CIDA_UASWEB1</p>
        </div>
    </footer>

    <!--akhir footer-->


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