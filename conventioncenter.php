<?php
// Start the session
session_start();
if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}
?>
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

  <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000000;
  color: white;
}
</style>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile"> <br> <br>
        
      <h1 class="text-light"><a href="customer.php">Customer Dashboard</a></h1>
      </div>

      <nav class="nav-menu">
        <ul>
        <li><a href="index.php"><i class="bx bx-file-blank"></i>Home</a></li>
          <li><a href="conventioncenter.php"><i class="bx bx-file-blank"></i>Convention Center</a></li>
          <li><a href="foodpac.php"><i class="bx bx-file-blank"></i>Food Package</a></li>
          <li><a href="booking.php"><i class="bx bx-file-blank"></i>Booking</a></li>
          <li><a href="profilec.php"><i class="bx bx-file-blank"></i>Profile</a></li>
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

      <table id="customers">
  <tr>
   <th>Convention Center ID</th>
    <th>Convention Center name</th>
    <th>Capacity</th>
    <th>Cost</th>
    <th>Location</th>
  </tr>
  <tr>
  <th>Convention Center 1</th>
    <td>Setara</td>
    <td>500 people</td>
    <td>200000 Taka</td>
    <td>Farmgate, Dhaka</td>
  </tr>
  <tr>
  <th>Convention Center 2</th>
    <td>Police</td>
    <td>200 people</td>
    <td>50000 Taka</td>
    <td>Mirpur 13, Dhaka</td>

  </tr>
  <tr>
  <th>Convention Center 3</th>
    <td>Sena Maloncha</td>
    <td>1000 people</td>
    <td>350000 Taka</td>
    <td>Cantonment, Dhaka</td>

  </tr>
  <tr>
  <th>Convention Center 4</th>
    <td>Basundhara</td>
    <td>1500 people</td>
    <td>500000 Taka</td>
    <td>Bashundhara City, Dhaka</td>

  </tr>
  
  </table>
        
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