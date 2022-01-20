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
  if(isset($_POST["submit"])){

	$Name= $_POST["name"];
	$Email= $_POST["email"];
    $Uname= $_POST["uname"];
	$Password= $_POST["password"];
    $Gender= $_POST["gender"];
    $B_Date= $_POST["b_date"];
    $Address= $_POST["address"];

	$sql = "INSERT INTO employee_info (name, email, uname, password,  gender, b_date, address)
	 VALUES ('$Name','$Email','$Uname','$Password','$Gender','$B_Date','$Address')";

if (mysqli_query($conn, $sql)) {
    echo"<script> alert('You are successfully added employee!');
    window.location.href='login.php';
    </script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}


?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>Event Management System</title>
		
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <!--CSS link -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/etlinefont.css" rel="stylesheet" >
    <link href="css/style.css" type="text/css"  rel="stylesheet"/>

    <style type="text/css">
        .txt
        {
            color: white;
        }
    
        </style>
</head>



<body  data-spy="scroll" data-target="#main-menu">

   <!--Start Navigation-->
   <header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">Toggle navigation</span>
								<span class="fa fa-bars"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            <!--Start Logo -->
							<div class="logo-nav">
								<a href="index.php">
									<img src="images/logo.png" alt="Company logo" />
								</a>
							</div>
                            <!--End Logo -->
							<div class="clear-toggle"></div>
							<div id="main-menu" class="collapse scroll navbar-right">
								<ul class="nav">                                   
                                   																		
									<li> <a href="registration.php">Registration</a></li>
                                    
                                    <li> <a href="login.php">Log in</a></li>
                                     
									
										
								</ul>
							</div><!-- end main-menu -->
						</div>
					</div>
				</div>
			</header>
    <!--End Navigation-->

   
   <!--Start Form-->
   <section id="contact" class="section parallax">
      <div class="overlay"></div>
       <div class="container">
           <div class="row">
           
                 <div class="title-box text-center white">
                    <h2 class="title">Add Employee</h2>
                 </div>
             </div>

               <!--Start contact form-->
               <div class="col-md-8 col-md-offset-2 contact-form">
                
                <form action="employee.php" method="POST" class="row" enctype="multipart/form-data">

                   
                      <label for="name" class="txt">Name</label>
                  
                      <input type="text" name="name" class="form-control" id="name" value="" placeholder="Full Name"> <br> <br>
                      
                   

                    
                      <label for="email" class="txt">Email</label>
                    
                      <input type="text" name="email" class="form-control" id="email" value="" placeholder="Email"> <br> <br>
                      
                    

                    
                      <label for="uname" class="txt">Username</label>
                  
                      <input type="text" name="uname" class="form-control" id="uname" value="" placeholder="Userename"> <br> <br>
                      
                    

                     
                      <label for="password" class="txt">Password</label>
                     
                      <input type="password" name="password" class="form-control" id="password" value="" placeholder="Password">
                      <input type="checkbox" onclick="passwordShow()"> Show Password <br> <br> 
                     
                                       
                    
                      <label for="gender" class="txt">Gender</label>
                      <span style="color:red" id="err_gender"></span>
                      <select id="gender" name="gender" class="form-select">
                          <option selected disabled value="NULL">Select Gender</option>
                          <option  value="Male">Male</option>
                          <option  value="Female">Female</option>
                          <option  value="Other">Other</option>
                      </select> <br> <br>

                      <label for="b_date" class="txt">Birth Date</label>
                      <span style="color:red" id="err_b_date"></span>
                      <input type="date" name="b_date" class="form-control" id="b_date" value=""> <br> <br>



                      <label for="address" class="txt">Address</label>
                      <span style="color:red" id="err_address"></span>
                      <textarea name="address" class="form-control h-25" id="address" placeholder="Address"></textarea>
                
                    
                    
                      <input type="submit" name="submit" class="btn btn-green" value="Submit"> &nbsp;&nbsp; 
                      <input type="submit" name="reset" class="btn btn-green" value="Reset">
                    

                  </form>
              <!--End form-->
              
       </div> <!-- /.container-->
   </section>
   <!--End Contact-->
   
   
   <!--Start Footer-->
   <footer>
       <div class="container">
           <div class="row">
               <!--Start copyright-->
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="copyright"><p>Copyright © 2021 All Rights reserved by MD. NUR ALAM</p>
                </div>
               </div>
               <!--End copyright-->
               
               <!--start social icons-->
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="social-icons">
                       <ul>
                        <li> <a href="http://www.facebook.com/polash.info"><i class="fa fa-facebook"></i></a></li>
                        <li> <a href="http://www.facebook.com/polash.info"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="http://www.facebook.com/polash.info"><i class="fa fa-google-plus"></i></a></li>
                        <li> <a href="http://www.facebook.com/polash.info"><i class="fa fa-instagram"></i></a></li>
                       </ul>
                    </div>
               </div>
               <!--End social icons-->
           </div> <!-- /.row-->
       </div> <!-- /.container-->
   </footer>
   <!--End Footer-->

   <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

    
 </body>
</html>

