<?php
// Start the session
session_start();
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

if(isset($_POST["submit"])){

     $uname= $_POST ["uname"];
	   $password= $_POST ["password"];
     
     
   $sql = "select * from user_info where uname='$uname' and password='$password'";
   $sql1 = "select * from employee_info where uname='$uname' and password='$password'";
   
   $check = mysqli_query($conn, $sql);
   $check1 = mysqli_query($conn, $sql1);

  
	   if(mysqli_num_rows($check)>0) {
        $data = mysqli_fetch_array($check);
        $id=$data['uname'];
        $_SESSION['user_login']=$id;
		   echo"<script> alert('You are successfully logged in!');
		   window.location.href='customer.php';
		   </script>";

		  

	
   }else if (mysqli_num_rows($check1)>0) {
    $data = mysqli_fetch_array($check1);
    $id=$data['uname'];
    $_SESSION['user_login']=$id;
    echo"<script> alert('You are successfully logged in!');
    window.location.href='manager.php';
    </script>";


} else {

	if($uname=="nuralam" && $password=="01737&"){

		echo"<script> alert('You are successfully logged in!');
		   window.location.href='dashboardadmin.php';
		   </script>";
			   
	} 
  else{
    echo"<script> alert('You are not registred yet!');
	window.location.href='registration.php';
	</script>";
  }
   }
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
                    <h2 class="title">Log in</h2>
                 </div>
             </div>

               <!--Start contact form-->
               <div class="col-md-8 col-md-offset-2 contact-form">
                
                <form action="login.php" method="POST" class="row" enctype="multipart/form-data">

                    
                      <label for="uname" class="txt">Username</label>
                      <span style="color:red" id="err_uname"></span>
                      <input type="text" name="uname" class="form-control" id="uname" value="" placeholder="Userename" onkeyup="checkUsername()" onblur="checkUsername()" > <br> <br>
                      
                    

                     
                      <label for="password" class="txt">Password</label>
                      <span style="color:red" id="err_password"></span>
                      <span style="color:red" id="err_password"></span>
                      <input type="password" name="password" class="form-control" id="password" value="" placeholder="Password" onkeyup="checkPassword()" onblur="checkPassword()">
                      <input type="checkbox" onclick="passwordShow()"> Show Password <br> <br>
                
                    
                    
                      <input type="submit" name="submit" class="btn btn-green" value="Log in">
                    

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
                   <div class="copyright"><p>Copyright © 2021 All Rights reserved by Event Management System</p>
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

    <script type="text/javascript">

        function checkUsername()
        {

            if (document.getElementById("uname").value == "")
            {
                document.getElementById("err_uname").innerHTML = "*Username Required";
            }
            else
            {
                document.getElementById("err_uname").innerHTML = "";
            } 
        }


        function checkPassword()
        {
        	var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
        	var password = document.getElementById("password").value;

            if (document.getElementById("password").value == "")
            {
                document.getElementById("err_password").innerHTML = "*Password Required";
            }
            else if( !format.test(password) )
            {
            	document.getElementById("err_password").innerHTML = "*Password must contain at least one of the special characters";
            }
            else if( document.getElementById("password").value.length < 8)
            {
            	document.getElementById("err_password").innerHTML = "*Password not be less than 8 characters";
            }
            else
            {
                document.getElementById("err_password").innerHTML = "";
            } 
        }


        function passwordShow()
        {
        	var value = document.getElementById("password");

			if (value.type === "password")
			{
				value.type = "text";
			} 
			else 
			{
				value.type = "password";
			}
        }

	</script>
    
 </body>
</html>

