<!-- output starts -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>King Group Of Company</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<style>
body {
  background: #C5E1A5;
}
form {
  width: 60%;
  margin: 60px auto;
  background: #efefef;
  padding: 60px 120px 80px 120px;
  text-align: center;
  -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
}
label {
  display: block;
  position: relative;
  margin: 40px 0px;
}
.label-txt {
  position: absolute;
  top: -1.6em;
  padding: 10px;
  font-family: sans-serif;
  font-size: .8em;
  letter-spacing: 1px;
  color: rgb(120,120,120);
  transition: ease .3s;
}
.input {
  width: 100%;
  padding: 10px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #8BC34A;
  transition: ease .6s;
}

.input:focus + .line-box .line {
  width: 100%;
}

.label-active {
  top: -3em;
}

button {
  display: inline-block;
  padding: 12px 24px;
  background: rgb(220,220,220);
  font-weight: bold;
  color: rgb(120,120,120);
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
}

button:hover {
  background: #8BC34A;
  color: #ffffff;
}

</style>
<body class="login" style="background-image: url(assets/img/Login.jpg); ">
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>King Group Of Company</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
    <div class="row" style="background-color: black;height:3px;">
    </div>
  </header>
  <div class="row">
    <div class="col-sm-8">
  <form>
                      <label>
                        <p class="label-txt">ENTER YOUR EMAIL</p>
                        <input type="text" class="input">
                        <div class="line-box">
                          <div class="line"></div>
                        </div>
                      </label>
                      <label>
                        <p class="label-txt">ENTER YOUR NAME</p>
                        <input type="text" class="input">
                        <div class="line-box">
                          <div class="line"></div>
                        </div>
                      </label>
                      <label>
                        <p class="label-txt">ENTER YOUR PASSWORD</p>
                        <input type="text" class="input">
                        <div class="line-box">
                          <div class="line"></div>
                        </div>
                      </label>
                      <button type="submit">submit</button>
                    </form>
    </div></div>
  <div class="container-fluid" >
    <div class="row login-row" >
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-xl-4 offset-xl-4">
      </div>
      <div class="col-12">

        <div class="py-2">
          <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-4 offset-lg-4 login-wrapper" style="margin-top: 100px; background-color: #b3b3b3;opacity: 0.5px;border-radius: 30px;">
              <center><h3><font color="black">Sign Up</font></h3></center>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-dark">Terms and Conditions</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body text-dark">
        <?php echo $terms_and_conditions; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/lottie.min.js"></script>
<script src="js/custom.js"></script>
 <script>
                function myFun() {
                  var x = document.getElementById("password");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
              </script>
</body>
</html>