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

    </div>
    <div class="row" style="background-color: black;height:3px;">
    </div>
  </header>
  
  <div class="container-fluid">
          <div class="row">

            <div class="col-sm-12 col-sm-10 offset-sm-2 col-md-6 offset-md-3 col-xl-4 offset-xl-4 login-wrapper" align="center" style="margin-top: 200px; background-color: #cccccc;opacity: 0.5px;border-radius: 30px;"><br>
            	<script>alert('To register your age should be greater than 18');</script>
              <center><h3><font color="black">Validate Your Age</font></h3></center>
                  <div class="tab-pane container pt-2 active" id="login">
                  <form class="form" method="post" action="validate.php">
                  		<div class="col-6 col-md-6">
                            <input type="text" name="dob" id="txtDate" class="form-control" placeholder="Enter DoB" onblur = "ValidateDOB()" required autocomplete="off">
                          </div>  
                         <!-- <input type="text" name="dob" id="txtDate" onblur = "ValidateDOB()" /> -->
						<span class="error" id="lblError"></span>
						</br>
						<!-- <input type="button" name="submit" id="btnValidate" value="Validate" onclick="return ValidateDOB()" /> -->
						<button class="btn btn-primary" name="submit" id="btnValidate" onclick="return ValidateDOB()">validate</button><br><br>
						<!-- <a href="validate.php"><input type="button" name="submit" id="btnValidate" value="Validate" onclick="return ValidateDOB()" /></a> -->
                </form>
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

<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/lottie.min.js"></script>
<script src="js/custom.js"></script>
 <script type="text/javascript">
    function ValidateDOB() {
        var lblError = document.getElementById("lblError");
 
        //Get the date from the TextBox.
        var dateString = document.getElementById("txtDate").value;
        var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;
 
        //Check whether valid dd/MM/yyyy Date Format.
        if (regex.test(dateString)) {
            var parts = dateString.split("/");
            var dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
            var dtCurrent = new Date();
            lblError.innerHTML = "Eligibility 18 years ONLY."
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
                return false;
            }
 
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {
 
                //CD: 11/06/2018 and DB: 15/07/2000. Will turned 18 on 15/07/2018.
                if (dtCurrent.getMonth() < dtDOB.getMonth()) {
                    return false;
                }
                if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                    //CD: 11/06/2018 and DB: 15/06/2000. Will turned 18 on 15/06/2018.
                    if (dtCurrent.getDate() < dtDOB.getDate()) {
                        return false;
                    }
                }
            }
            lblError.innerHTML = "";
            return true;
        } else {
            lblError.innerHTML = "Enter date in dd/MM/yyyy format ONLY."
            return false;
        }
    }
</script>
</body>
</html>