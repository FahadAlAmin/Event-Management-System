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

	$sql = "INSERT INTO user_info (name, email, uname, password,  gender, b_date, address)
	 VALUES ('$Name','$Email','$Uname','$Password','$Gender', '$B_Date', '$Address')";

	 
	 if (mysqli_query($conn, $sql)) {
		echo"<script> alert('You are successfully registred!');
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
                    <h2 class="title">Registration</h2>
                 </div>
             </div>

               <!--Start contact form-->
               <div class="col-md-8 col-md-offset-2 contact-form">
                
                <form action="" method="POST" class="row" enctype="multipart/form-data">

                   
                      <label for="name" class="txt">Name</label>
                      <span style="color:red" id="err_name"></span>
                      <input type="text" name="name" class="form-control" id="name" value="" placeholder="Full Name" onkeyup="checkName()" onblur="checkName()"> <br> <br>
                      
                   

                    
                      <label for="email" class="txt">Email</label>
                      <span style="color:red" id="err_email"></span>
                      <input type="text" name="email" class="form-control" id="email" value="" placeholder="Email" onkeyup="checkEmail()" onblur="checkEmail()"> <br> <br>
                      
                    

                    
                      <label for="uname" class="txt">Username</label>
                      <span style="color:red" id="err_uname"></span>
                      <input type="text" name="uname" class="form-control" id="uname" value="" placeholder="Userename" onkeyup="checkUsername()" onblur="checkUsername()" > <br> <br>
                      
                    

                     
                      <label for="password" class="txt">Password</label>
                      <span style="color:red" id="err_password"></span>
                      <span style="color:red" id="err_password"></span>
                      <input type="password" name="password" class="form-control" id="password" value="" placeholder="Password" onkeyup="checkPassword()" onblur="checkPassword()">
                      <input type="checkbox" onclick="passwordShow()"> Show Password <br> <br>
                    

                    
                      <label for="c_password" class="txt">Confirm Password</label>
                      <span style="color:red" id="err_c_password"></span>
                      <input type="password" name="c_password" class="form-control" id="c_password" value="" placeholder="Confirm Password" onkeyup="checkConfirmPassword()" onblur="checkConfirmPassword()">
                      <input type="checkbox" onclick="confirmPasswordShow()"> Show Password <br> <br> 
                     
                                       
                    
                      <label for="gender" class="txt">Gender</label>
                      <span style="color:red" id="err_gender"></span>
                      <select id="gender" name="gender" class="form-select" onkeyup="checkGender()" onblur="checkGender()">
                          <option selected disabled value="NULL">Select Gender</option>
                          <option  value="Male">Male</option>
                          <option  value="Female">Female</option>
                          <option  value="Other">Other</option>
                      </select> <br> <br>
                      
                    
                      <label for="b_date" class="txt">Birth Date</label>
                      <span style="color:red" id="err_b_date"></span>
                      <input type="date" name="b_date" class="form-control" id="b_date" value="" onkeyup="checkBirthDate()" onblur="checkBirthDate()"> <br> <br>


                      <label for="address" class="txt">Address</label>
                      <span style="color:red" id="err_address"></span>
                      <textarea name="address" class="form-control h-25" id="address" placeholder="Address" onkeyup="checkAddress()" onblur="checkAddress()"></textarea>
                      <span style="color:red" id="err_address"></span> <br> <br>
                
                    
                    
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

    <script type="text/javascript">

		function checkName()
        {
            if (document.getElementById("name").value == "")
            {
                document.getElementById("err_name").innerHTML = "*Name Required";
                document.getElementById("err_name").style.color = "red";
                document.getElementById("name").style.borderColor = "red";
            }
            else if(!isNaN(document.getElementById("name").value))
            {
                
                document.getElementById("err_name").innerHTML="*The first letter Numeric Value cannot be given";
                document.getElementById("err_name").style.color = "red";
                document.getElementById("name").style.borderColor = "red";
            }
            else
            {
                document.getElementById("err_name").innerHTML = "";
                document.getElementById("name").style.borderColor = "black";
            } 
        }

        function checkEmail()
        {
            var email       = document.getElementById("email").value;
            var atposition  = email.indexOf("@");  
            var dotposition = email.lastIndexOf(".");

            if (document.getElementById("email").value == "")
            {
                document.getElementById("err_email").innerHTML = "*Email Required";
                document.getElementById("err_email").style.color = "red";
                document.getElementById("email").style.borderColor = "red";
            }
            else if( atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length )
            {
                document.getElementById("err_email").innerHTML="*Please enter a valid e-mail address";
                document.getElementById("err_email").style.color = "red";
                document.getElementById("email").style.borderColor = "red";
            }
            else
            {
                document.getElementById("err_email").innerHTML = "";
                document.getElementById("email").style.borderColor = "black";
            } 
        }

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

        function checkAddress()
        {
            if (document.getElementById("address").value == "")
            {
                document.getElementById("err_address").innerHTML = "*Address Required";
            }
            else
            {
                document.getElementById("err_address").innerHTML = "";
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

        function checkConfirmPassword()
        {
            if (document.getElementById("c_password").value == "")
            {
                document.getElementById("err_c_password").innerHTML = "*Confirm Password Required";
            }
            else if( document.getElementById("c_password").value != document.getElementById("password").value)
            {
            	document.getElementById("err_c_password").innerHTML = "*Password & Confirm Password Not Match!!";
            }
            else
            {
                document.getElementById("err_c_password").innerHTML = "";
            } 
        }

        function checkGender()
        {
            if (document.getElementById("gender").value == "NULL")
            {
                document.getElementById("err_gender").innerHTML = "*Gender Required";
            }
            else
            {
                document.getElementById("err_gender").innerHTML = "";
            } 
        }

        function checkBirthDate()
        {
        	var birthDate = document.getElementById("b_date").value;
        	var birthYear = birthDate.slice(0, 4);

        	var today     = new Date();
        	var todayYear = today.getFullYear();

        	var age = todayYear - birthYear;

            if (document.getElementById("b_date").value == "")
            {
                document.getElementById("err_b_date").innerHTML = "*Date Required";
            }
            else if( age < 18)
            {
            	document.getElementById("err_b_date").innerHTML = "*You are under 18 years of age";
            }
            else
            {
                document.getElementById("err_b_date").innerHTML = "";
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

        function confirmPasswordShow()
        {
        	var value = document.getElementById("c_password");

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

