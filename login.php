
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Reviewer.id</title>
    <style type="text/css">
        a {
  text-decoration: none;
}
body {
    background-image: url(image/new6.png);
    background-size: cover;
  background-repeat: no-repeat;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
#forgot-pass {
  color: #ffebcd;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 3px;
  text-align: right;
}
#card {
  background: #f08080;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 600px;
  margin: 6rem auto 8.1rem auto;
  width: 450px;
}
#card-content {
  padding: 12px 44px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 25px;
  padding-top: 15px;
  text-align: center;
}
#signup {
  color: black;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}
#submit-btn {
  background: black;
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #24c64f;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: #dedede;
  height: 1px;
  width: 100%;
}

.form-control{
  background: #ffebcd;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: #dedede;
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}


      </style>
  </head>
  
  <body>
      
<!--Navigation Bar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark"> 
    <!--fixed top digunakan agar navigation bar tetap dan tepat berada di atas-->
        <div class="container">
        <a class="navbar-brand" href="#">Reviewer.id</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
                        <a href="login.php" class="btn btn-outline-primary mr-2">Log In</a>
                        <a href="register.php" class="btn btn-outline-light mr-2">Sign Up</a>
                   </div>
                </li>
            </ul>
        </div>
</nav>
  <!--Akhir Navigation bar-->

<!--card-->
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      

      <form class="form" action="config/login.php" method="POST">
        <label for="username" style="padding-top:13px">
            &nbsp;
          </label>Username
          <div class="form-group">
        <input id="username" class="form-control" type="text" name="username" required/>
        </div>
        <div class="form-border"></div>
        <label for="password" style="padding-top:22px">&nbsp;Password
          </label>
          <div class="form-group">
        <input id="password" class="form-control" type="password" name="password" required/>
        </div>
        <div class="form-border"></div>
        <a href="#">
          <legend id="forgot-pass">Forgot password?</legend>
        </a>

        <button name="login" type="submit" input id="submit-btn" >Login</button>
        <a href="register.php" id="signup">Don't have account yet?</a>
        
      </form>
      
    </div>
  </div>
  <!--akhir card-->

   <!--footer-->
   <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">@Copyright by 18111062_GhinaFairuzNazilah_TIFRP18CIDA_UASWEB1</p>
        </div>
    </footer>

    <!--akhir footer-->

  
  

  
            



           

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>


  


</html>


  
