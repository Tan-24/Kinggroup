<!-- output starts -->
<!DOCTYPE html>
<?php
include 'connect.php';
session_start();
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>King Group Of Company</title>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome-all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery-ui.css" />
  <link rel="stylesheet" href="css/swiper.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="css/product-sans.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="login" style="background-color: #C5E1A5; ">
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>King Group Of Company</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <!-- <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>
      </nav> --><!-- .nav-menu -->
    </div>
    <div class="row" style="background-color: black;height:3px;">
    </div>
  </header>
  
  <div class="container-fluid">
          <div class="row">

            <div class="col-sm-12 col-sm-10 offset-sm-2 col-md-6 offset-md-3 col-xl-6 offset-xl-3 login-wrapper" style="margin-top: 100px; background-color: #cccccc;opacity: 0.5px;border-radius: 30px;">
              <center><h3><font color="black">Register</font></h3></center>
                  <div class="tab-pane container pt-2 active" id="login">
                  <form class="form" method="post" onsubmit="return validate(this)" action="signup_process.php">
                          <div class="col-12 col-md-12">
                          <legend>Date of Birth : <?php echo $_SESSION['dob'];?></legend>
                          </div>
                          <div class="col-12 col-md-12">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email ID" required autocomplete="off">
                          </div>  
                          <div class="col-12 col-md-12">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            &nbsp;&nbsp;<input type="checkbox" onclick="myFun()">&nbsp;Show Password
                          </div>
                          <div class="col-12 col-md-12">
                            <input type="password" name="conpassword" id="conpassword" class="form-control" placeholder="Confirm Password">
                            &nbsp;&nbsp;<input type="checkbox" onclick="myFun1()">&nbsp;Show Password
                          </div>
                          
                          <div class="col-12 col-md-12">
                            <input type="number" name="phoneno" id="phoneno" class="form-control" placeholder="Enter Contact Number" required autocomplete="off">
                          </div>
                          <br><legend>Adhaar Card Details</legend>
                          <div class="col-12 col-md-12">
                            <input type="number" name="adhaarno" id="adhaarno" class="form-control" placeholder="Enter Adhaar Card No" required autocomplete="off">
                          </div>
                          <div class="col-12 col-md-12">
                            <input type="text" name="adhaarname" id="adhaarname" class="form-control" placeholder="Enter Name As Per Adhaar Card" required autocomplete="off">
                          </div>
                          <div class="col-12 col-md-12">
                            <input type="textarea" name="address" id="address" class="form-control" placeholder="Enter Address" required autocomplete="off">
                          </div><br>
                          <div class="col-12 col-md-12">
                            <label>Upload Adhaar photo: <input type="file" name="image" id="image"></label>
                          </div>
                          <br><legend>Bank Details</legend>
						              <div class="col-12 col-md-12">
                            <input type="text" name="bankname" id="bankname" class="form-control" placeholder="Enter Bank Name" required autocomplete="off">
                          </div>
                          <div class="col-12 col-md-12">
                            <input type="number" name="accno" id="accno" class="form-control" placeholder="Enter Account Number" required autocomplete="off">
                          </div>
                          <div class="col-12 col-md-12">
                            <input type="text" name="ifsccode" id="ifsccode" class="form-control" placeholder="Enter IFSC Code" required autocomplete="off">
                          </div><br>
                          <div class="col-12 col-md-12">
                            <label>Upload Passbook photo:<input type="file" name="image1" id="image1"></label>
                          </div><br>
                          <div class="col-12 col-md-12">
                            <label>Reference Code: </label>
                            <input type="number" name="asid" id="asid" >
                          </div>
                          <div class="col-12 py-3">
                            <label>Amount to pay : (Minimum 1000)</label><br>
                            <input type="number" name="amount" id="amount" >
                            <br>
                            <input type="checkbox" name="tnc" required> I Accept the <a href="#" data-toggle="modal" data-target="#myModal">Terms and Conditions<br></a>Amount of Rs.1000/- will be deducted
                          </div>
						              					     
                 <br>
                  <div class="col-12">
                  <center><button type="submit" name="login" id="submit" class="btn btn-primary" onclick="return ValidateDOB()">Proceed</button></center>
                </div>
				
                </form>
                <div class="row">
                  <div class="col-8" style="margin-top: 8px;">
                    <p><font color="black">Already have membership?...</font>
                  </div>
                  <div class="col-4">
                    <a class="nav-link" href="login.php">Login</a>
                  </div>
                  <a class="nav-link" href="index.php"> >> back</a>
                  </div>             
                </div>
                     </div>
                  
                </div>
              
            </div>
          </div>
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
 <script type="text/javascript">
                function myFun() {
                  var x = document.getElementById("password");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
                function myFun1() {
                  var x = document.getElementById("conpassword");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
                function validate(thisform){
                var amt = parseInt(document.getElementById("amount").value);
                if(amt < 1000)
                {
                  alert("Pay 1000rs Minimum");
                  thisform.amount.focus(); 
                  return false;
                }
              }
  </script>
</body>
</html>