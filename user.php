<!DOCTYPE html>
<?php 
session_start(); 
include 'connect.php';
$uid = $_SESSION['uid'];

$query="select * from signup_details where uid=$uid";
$data=mysqli_query($conn,$query);
if($data)
{
  $object=$data->fetch_object();
  $adhaarname=$object->adhaarname;
  $uid=$object->uid;
  $profilepic=$object->profilepic;
  

}
?>
<html lang="en">
<style>
  <?php
  ?>
/* Float four columns side by side */

.container{
  width:100%;
}


/* Remove extra left and right margins, due to padding */
/*.row {margin: 0 -5px;}*/

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
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
        <h1 class="text-light"><a href="index.php" ><span>King Group Of Company</span></a></h1>
	   
		
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
	<li><a href="user.php">Home</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
    <div class="row" style="background-color: black;height:3px;">
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- End Hero -->

  <main id="main">
    <section id="team" class="team">
    <div class="container" style="margin-top: 100px;">
    <div class="row">
      <div class="col-lg-4" style="background-color: transparent;">
        <div class="member" data-aos="zoom-in">
		
          <img src="assets/img/team/team-1.jpg" < class="img-fluid" alt="" style="border-radius:100px;">
              <div class="member-info">
                 <h4>Name: <?php echo $adhaarname; ?> </h4>
                <h4>Associated id: <?php echo $uid; ?> </h4>

                <div><a href="index.php"><button>Logout</button></a></div>
        </div>
      </div>
      </div>

      <div class="col-lg-8">

      <div class="row">
      <div class="col-sm-6">
         <div class="card">
        <h3>View Profile</h3>
        <form action="profile.php">
        <button class="btn btn-secondary" name="profile">View</button>
        </form>
        </div>
      </div>
	  
	
      <div class="col-sm-6">
         <div class="card">
        <h3>Edit Profile</h3>
        <form action="edit.php">
        <button class="btn btn-secondary" name="edit">Edit</button>
        </form>
        </div>
      </div>
	  
      <div class="col-sm-6">
         <div class="card">
        <h3>Add Money</h3>
        <form action="add_money.php">
        <button class="btn btn-secondary" name="money">Add</button>
        </form>
        </div>
      </div>

      <div class="col-sm-6">
         <div class="card">
        <h3>View Balance</h3>
        <form action="balance.php">
        <button class="btn btn-secondary" name="balance">View</button>
        </form>
        </div>
      </div>
	  
	   <div class="col-sm-6">
         <div class="card">
        <h3>Purchase Items</h3>
        <form action="purchase.php">
        <button class="btn btn-secondary" name="balance">Purchase</button>
        </form>
        </div>
      </div>

      <div class="col-sm-6">
         <div class="card">
        <h3>Purchase History</h3>
        <form action="purchasehistory.php">
        <button class="btn btn-secondary" name="balance">History</button>
        </form>
        </div>
      </div>
      

    </div>
<br>
    
  </div>
</section>
</main>
   

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