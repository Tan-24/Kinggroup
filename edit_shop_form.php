<!DOCTYPE html>
<?php 
session_start(); 
include 'connect.php';
$shop_id = $_SESSION['shop_id'];

$query="select * from shops where shop_id=$shop_id";
$data=mysqli_query($conn,$query);
if($data)
{
  $object=$data->fetch_object();
  $shop_iduid=$object->shop_id;
  $pass=$object->pass;
  $mobile=$object->mobile;  
  $email=$object->email;
  $name=$object->name;
  
  
}
?>
<html lang="en">
<style>
  <?php
  ?>
/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
/*.row {margin: 0 -5px;}*/

/* Clear floats after the columns */
/*.row:after {
  content: "";
  display: table;
  clear: both;
}*/

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 180%;
  height: 80%;
  padding: 15px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold - v2.2.1
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>King Group Of Company</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="shop_dash.php">Home</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- End Hero -->

  <main id="main">

    <section id="team" class="team">
	<div class="container" style="margin-top: 100px;">
      <div class="row">
				<div class="col-6 offset-md-1 offset-xg-2">
								<div class="card m-3 mt-5 bg-light p-2">
									<legend><center><h3>Edit Stock Point Details :</h3></center></legend><br>
									<center>
									<form method="post" action="shop_editdetails.php" style="margin-left: 10%;">
										<table>
											<tbody>
												
												<tr>
													<td><label><font style="font-size: 23px;">Owner Name : </font></label></td>
													<td><?php echo "<input type='text' name='name' value='$name'>";?></td>
												</tr>
												<tr>
													<td><label><font style="font-size: 23px;">Phone No. : </font></label></td>
													<td><?php echo "<input type='tel' name='mobile' value='$mobile'>";?><br></td>
												</tr>
												<tr>
													<td><label><font style="font-size: 23px;">Password : </font></label></td>
													<td><?php echo "<input type='text' name='pass' value='$pass'>";?></td>
												</tr>
												<tr>
													<td><label><font style="font-size: 23px;">Email : </font></label></td>
													<td><?php echo "<input type='text' name='email' value='$email'>";?></td>
												</tr>
											
											</tbody>
										</table>
                                        <br>
										<center><button name="edit" class="btn btn-secondary">Save Changes</button></center>
                                        <br>
									</form>
									</center>
								</div>
							</div>
						</div>
	</div>
    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <!-- End Clients Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" >
    <div class="footer-top">
	
      <div class="container">
        <div class="row">
		
          <div class="col-lg-12 col-md-6">
            <div class="footer-info">
			<center>
              <h3>King Group Of Company</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
			  
			  
			  </center>
            </div>
          </div>
		
        </div>
      </div>
	 
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>King Group Of Company</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
        Designed by King Group Of Company</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>