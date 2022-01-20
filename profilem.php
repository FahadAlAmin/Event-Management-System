<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Start the session
session_start();
if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style type="text/css">

    </style>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile"> <br> <br>
        
      <h1 class="text-light"><a href="manager.php">Manager Dashboard</a></h1>
      </div>

      <nav class="nav-menu">
        <ul>
          <li><a href="index.php"><i class="bx bx-file-blank"></i> <span>Home</span></a></li>
          <li><a href="bookinglist1.php"><i class="bx bx-file-blank"></i>See Booking</a></li>
          <li><a href="profilem.php"><i class="bx bx-file-blank"></i>Profile</a></li>
          <li><a href="login.php"><i class="bx bx-file-blank"></i>Log Out</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class=" d-flex justify-content-between align-items-center">
          <h2>Event Management System</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Log Out</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
          <div class="row">
              <div class="col-5m-6">

<?php
              $session_user=$_SESSION['user_login'];
              $sql="select * from employee_info where uname='$session_user'";
              $query=mysqli_query($conn, $sql);
              $user_row=mysqli_fetch_assoc($query);

  ?>
                  <table class="table tab-tableboarded">
                      <tr>
                        <td>ID</td>
                        <td><?php echo $user_row['id']; ?></td>
                      </tr>
                      <tr>
                      <td>Name</td>
                        <td><?php echo $user_row['name']; ?></td>
                      </tr>
                      <tr>
                      <td>Email</td>
                        <td><?php echo $user_row['email']; ?></td>
                      </tr>
                      <tr>
                      <td>User Name</td>
                        <td><?php echo $user_row['uname']; ?></td>
                      </tr>
                      <tr>
                      <td>Gender</td>
                        <td><?php echo $user_row['gender']; ?></td>
                      </tr>
                      <tr>
                      <td>Address</td>
                        <td><?php echo $user_row['address']; ?></td>
                      </tr>
                  </table>

              </div>
         </div>
        
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Copyright © 2021 All Rights reserved by MD. NUR ALAM
      </div>
      
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="assets/js/main.js"></script>

</body>

</html>