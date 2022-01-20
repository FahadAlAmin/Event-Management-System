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
        
      <h1 class="text-light"><a href="dashboardadmin.php">Admin Dashboard</a></h1>
      </div>

      <nav class="nav-menu">
        <ul>
          <li><a href="index.php"><i class="bx bx-file-blank"></i> <span>Home</span></a></li>
          <li><a href="customerlist.php"><i class="bx bx-file-blank"></i> <span>See Registred Customer</span></a></li>
          <li><a href="bookinglist.php"><i class="bx bx-file-blank"></i>See Booking</a></li>
          <li><a href="messagelist.php"><i class="bx bx-file-blank"></i>See Messages</a></li>
          <li><a href="employee.php"><i class="bx bx-file-blank"></i>Add Employee</a></li>
          <li><a href="employeelist.php"><i class="bx bx-file-blank"></i>Employee List</a></li>
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
      <h2 style="text-align: center">Message List</h2>

      <table id="customers">
  <tr>
    
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Messages</th>
    <th>Reply</th>
  </tr>

  <?php



  $sql="select * from messages";
  $query=mysqli_query($conn, $sql);

  while($info=mysqli_fetch_array($query)){
    ?>


  <tr>
    
    <td><?php echo $info["id"];?></td>
    <td><?php echo $info["name"];?></td>
    <td><?php echo $info["email"];?></td>
    <td><?php echo $info["subject"];?></td>
    <td><?php echo $info["messages"];?></td>
    <td><a href="https://mail.google.com/mail" class="btn btn-secondary">
        <i class="fa fa-angle-double-right"></i> Reply
      </a>
    </td>
  </tr>
  <?php
  }
  ?>

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