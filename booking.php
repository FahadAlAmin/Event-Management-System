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
	$CC_Center= $_POST["cc_center"];
    $F_Package= $_POST["f_package"];
	$S_Date= $_POST["s_date"];
    $requirement= $_POST["requirement"];

	$sql = "INSERT INTO booking_info (name, cc_center, f_package, s_date, requirement)
	 VALUES ('$Name','$CC_Center','$F_Package','$S_Date','$requirement')";

	 
	 if (mysqli_query($conn, $sql)) {
		echo"<script> alert('You are successfully booking!');
		window.location.href='customer.php';
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
								<a href="index.html">
									<img src="images/logo.png" alt="Company logo" />
								</a>
							</div>
                            <!--End Logo -->
							<div class="clear-toggle"></div>
							<div id="main-menu" class="collapse scroll navbar-right">
								<ul class="nav">                                   
                                     
																			
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
                    <h2 class="title">Booking Event</h2>
                 </div>
             </div>

               <!--Start contact form-->
               <div class="col-md-8 col-md-offset-2 contact-form">
                
                <form action="booking.php" method="POST" enctype="multipart/form-data">

                    
                    <label for="name" class="txt">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value=""> <br> <br>
                        

                        
                            <label for="ccc" class="txt">Choose Convention Center</label>
                            <select id="cc_center" name="cc_center" class="form-select">
                                <option selected disabled value="NULL">Select Option</option>
                                <option  value="Setara">Convention Center 1</option>
                                <option  value="Police">Convention Center 2</option>
                                <option  value="Sena Maloncha">Convention Center 3</option>
                                <option  value="Basundhara">Convention Center 4</option>
                            </select> <br> <br>
                            
                               
                  
                   <label for="sfp" class="txt">Select Food Package</label>
                    <select id="f_package" name="f_package" class="form-select">
                        <option selected disabled value="NULL">Select Option</option>
                        <option  value="Roast">Food package 1</option>
                        <option  value="Kacchi">Food package 2</option>
                        <option  value="Polao">Food package 3</option> 
                    </select> <br> <br>


                    <label for="b_date" class="txt">Select Date</label>
                      <input type="date" name="s_date" class="form-control" id="s_date" value=""> <br> <br>
                    
                    
                  
                    <label for="rq" class="txt">Requirement</label>
                    <textarea name="requirement" class="form-control h-25" id="requirement"></textarea> <br> <br>
                  
                  
                    <input type="submit" name="submit" id="submit" class="btn btn-green" value="booking"> &nbsp;&nbsp; <input type="submit" name="cancel" class="btn btn-green" value="cancel">
                  

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

