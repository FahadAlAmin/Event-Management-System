<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventmanagement";

// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
//if (!$conn) {
  //die("Connection failed: " . mysqli_connect_error());
//}
  if(isset($_POST["submit"])){

	$Name= $_POST["name"];
	$Email= $_POST["email"];
    $Subject= $_POST["subject"];
	$Messages= $_POST["messages"];


	$sql = "INSERT INTO messages (name, email, subject, messages)
	 VALUES ('$Name','$Email','$Subject','$Messages')";

	 
	 if (mysqli_query($conn, $sql)) {
		echo"<script> alert('You are successfully sent messages!');
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
                                
									<li class="active"> <a href="#home">Home</a> </li>

                                    <li> <a href="#services">Services</a> </li>
									
									<li> <a href="#center">Convention Center</a> </li>

                                    <li> <a href="#gallery">Gallery</a> </li>

                                    <li> <a href="#team">Team</a> </li>

                                    <li> <a href="#contact">Contact</a> </li>                                    
                                   																		
									<li> <a href="registration.php">Registration</a></li>
                                    
                                    <li> <a href="login.php">Log in</a></li>
                                     
									
										
								</ul>
							</div><!-- end main-menu -->
						</div>
					</div>
				</div>
			</header>
    <!--End Navigation-->

      
        <!-- Start Slider  -->
        <section id="home" class="home">
             <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    <li class="first">
                        <div class="slider-text-wrapper">  
                            <div class="container">
                                <div class="big">Event Management System</div>          
                                <div class="small">Are you ready to booking an event</div>
                                <a href="login.php" class="middle btn btn-white">Booking Event</a>
                            </div>       
                        </div>
                        <img src="images/slider/1.jpg" alt="">
                    </li>
                    
                    <li class="secondary">
                        <div class="slider-text-wrapper"> 
                            <div class="container">                       
                                <div class="big">Event Management System</div>          
                                <div class="small">Are you ready to booking an event</div>
                                <a href="booking.html" class=" middle btn btn-white">Booking Event</a>
                            </div>
                         </div>
                        <img src="images/slider/2.jpg" alt="">
                    </li>
                    
                    <li class="third">
                        <div class="slider-text-wrapper"> 
                            <div class="container">                              
                                <div class="big">Event Management System</div>          
                                <div class="small">Are you ready to booking an event</div>
                                <a href="booking.html" class="middle btn btn-white">Booking Event</a>
                             </div>
                        </div>
                        <img src="images/slider/3.jpg" alt="">
                    </li>
                </ul>
            </div>
        </section>
          <!-- End Slider  -->

          <!--Start Services-->
   <section id="services" class="section">
    <div class="container">
        <div class="row">
        
             <div class="title-box text-center">
                <h2 class="title">Services</h2>
             </div>
          
           <!--Services Item-->
           <div class="col-md-4">
               <div class="services-box">
                   <div class="services-icon"> <i class="icon-basket"></i> </div> 
                   <div class="services-desc">
                      <h4>Service 1</h4>
                      <p>American International University-Bangladesh (AIUB)</p>
                   </div>
               </div>
           </div>
            <!--End services Item-->
            
            <!--Services Item-->
            <div class="col-md-4">
                <div class="services-box">
                    <div class="services-icon"> <i class="icon-basket"></i> </div> 
                    <div class="services-desc">
                       <h4>Service 2</h4>
                       <p>American International University-Bangladesh (AIUB)</p>
                    </div>
                </div>
            </div>
           <!--End services Item-->
           
           <!--Services Item-->
           <div class="col-md-4">
            <div class="services-box">
                <div class="services-icon"> <i class="icon-basket"></i> </div> 
                <div class="services-desc">
                   <h4>Service 3</h4>
                   <p>American International University-Bangladesh (AIUB)</p>
                </div>
            </div>
        </div>
            <!--End services Item-->
          
        </div> <!--/.row-->
    </div> <!--/.container-->
</section> 
<!--End Services-->

<br> <br>

  
 <!--Start Section-->
 <section id= "center"class="center">

    <div class="title-box text-center">
        <h2 class="title">Convention Center</h2>
     </div>

    <div class="container">



        <div class="row"> 
              <div class="col-md-12">
                  <div class="content-tab-1">
                      <ul class="nav">
                          <li class="active">
                              <a aria-expanded="true" href="#tab-content-1" data-toggle="tab">
                              <i class="fa fa-institution"></i>
                              <h4>Convention Center 1</h4>
                              </a>
                              <div class="tab-arrow">
                              </div>
                          </li>
                          
                            <li>
                              <a aria-expanded="true" href="#tab-content-2" data-toggle="tab">
                              <i class="fa fa-institution"></i>
                              <h4>Convention Center 2</h4>
                              </a>
                              <div class="tab-arrow">
                              </div>
                          </li>
                          
                          <li>
                              <a aria-expanded="true" href="#tab-content-3" data-toggle="tab">
                              <i class="fa fa-institution"></i>
                              <h4>Convention Center 3</h4>
                              </a>
                              <div class="tab-arrow">
                              </div>
                          </li>
                          
                            <li>
                              <a aria-expanded="true" href="#tab-content-4" data-toggle="tab">
                              <i class="fa fa-institution"></i>
                              <h4>Convention Center 4</h4>
                              </a>
                              <div class="tab-arrow">
                              </div>
                          </li>
                          
                      </ul>
                      
                      <div class="tab-content-main">
                              <div class="container">
                                  <div class="tab-content">
                                      <div class="tab-pane active in" id="tab-content-1">
                                          
                                         <!-- Features Icon-->	
                                          <div class="col-md-6 margin-bottom-30">
                                              <div class="tab1-features">
                                                  <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                                  <div class="info">
                                                      <h4>Convention Center 1</h4>
                                                      <p>American International University-Bangladesh (AIUB)</p>
                                                  </div>
                                              </div>
                                              
                                              <div class="tab1-features">
                                                  <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                                  <div class="info">
                                                      <h4>Convention Center 1</h4>
                                                      <p>American International University-Bangladesh (AIUB)</p>
                                                  </div>
                                              </div>
                                            
                                              <div class="tab1-features">
                                                  <div class="icon"> <i class="fa fa-star-o"></i></div>
                                                  <div class="info">
                                                      <h4>Convention Center 1</h4>
                                                      <p>American International University-Bangladesh (AIUB)</p>
                                                  </div>
                                              </div>
                                              
                                          </div>
                                          <!--End features Icon-->
                                          
                                         
                                        <!--  Start Carousel-->
                                        <div class="col-md-6">
                                            <div class="tab-carousel">
                                                  <div class="item"><img src="images/works/img4.jpg" alt=""></div>
                                                  <div class="item"><img src="images/works/img5.jpg" alt=""></div>
                                                  <div class="item"><img src="images/works/img6.jpg" alt=""></div>						 
                                            </div>
                                        </div>
                                        <!-- End Carousel-->                                            
                                          
                                      </div>
                                     <!-- End Tab content 1-->
                                      
                                      
                                     <!-- Start Tab content 2-->
                                      <div class="tab-pane" id="tab-content-2">

                                          <!-- Features Icon-->	
                                          <div class="col-md-6 margin-bottom-30">
                                            <div class="tab1-features">
                                                <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                                <div class="info">
                                                    <h4>Convention Center 2</h4>
                                                    <p>American International University-Bangladesh (AIUB)</p>
                                                </div>
                                            </div>
                                            
                                            <div class="tab1-features">
                                                <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                                <div class="info">
                                                    <h4>Convention Center 2</h4>
                                                    <p>American International University-Bangladesh (AIUB)</p>
                                                </div>
                                            </div>
                                          
                                            <div class="tab1-features">
                                                <div class="icon"> <i class="fa fa-star-o"></i></div>
                                                <div class="info">
                                                    <h4>Convention Center 2</h4>
                                                    <p>American International University-Bangladesh (AIUB)</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!--End features Icon-->
                                        
                                       
                                      <!--  Start Carousel-->
                                      <div class="col-md-6">
                                          <div class="tab-carousel">
                                                <div class="item"><img src="images/works/img4.jpg" alt=""></div>
                                                <div class="item"><img src="images/works/img5.jpg" alt=""></div>
                                                <div class="item"><img src="images/works/img6.jpg" alt=""></div>						 
                                          </div>
                                      </div>
                                      <!-- End Carousel-->                                          
                                          

                                              
                                      </div>
                                      
                                      
                                      <div class="tab-pane" id="tab-content-3">
                                          <!-- Features Icon-->	
                                          <div class="col-md-6 margin-bottom-30">
                                            <div class="tab1-features">
                                                <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                                <div class="info">
                                                    <h4>Convention Center 3</h4>
                                                    <p>American International University-Bangladesh (AIUB)</p>
                                                </div>
                                            </div>
                                            
                                            <div class="tab1-features">
                                                <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                                <div class="info">
                                                    <h4>Convention Center 3</h4>
                                                    <p>American International University-Bangladesh (AIUB)</p>
                                                </div>
                                            </div>
                                          
                                            <div class="tab1-features">
                                                <div class="icon"> <i class="fa fa-star-o"></i></div>
                                                <div class="info">
                                                    <h4>Convention Center 3</h4>
                                                    <p>American International University-Bangladesh (AIUB)</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!--End features Icon-->
                                        
                                       
                                      <!--  Start Carousel-->
                                      <div class="col-md-6">
                                          <div class="tab-carousel">
                                                <div class="item"><img src="images/works/img4.jpg" alt=""></div>
                                                <div class="item"><img src="images/works/img5.jpg" alt=""></div>
                                                <div class="item"><img src="images/works/img6.jpg" alt=""></div>						 
                                          </div>
                                      </div>
                                      <!-- End Carousel-->                                          
                                              
                                  
                                              
                                  </div>
                                      
                                      <div class="tab-pane" id="tab-content-4">
                                              
                                         <!-- Features Icon-->	
                                         <div class="col-md-6 margin-bottom-30">
                                            <div class="tab1-features">
                                                <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                                <div class="info">
                                                    <h4>Convention Center 4</h4>
                                                    <p>American International University-Bangladesh (AIUB)</p>
                                                </div>
                                            </div>
                                            
                                            <div class="tab1-features">
                                                <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                                <div class="info">
                                                    <h4>Convention Center 4</h4>
                                                    <p>American International University-Bangladesh (AIUB)</p>
                                                </div>
                                            </div>
                                          
                                            <div class="tab1-features">
                                                <div class="icon"> <i class="fa fa-star-o"></i></div>
                                                <div class="info">
                                                    <h4>Convention Center 4</h4>
                                                    <p>American International University-Bangladesh (AIUB)</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!--End features Icon-->
                                        
                                       
                                      <!--  Start Carousel-->
                                      <div class="col-md-6">
                                          <div class="tab-carousel">
                                                <div class="item"><img src="images/works/img4.jpg" alt=""></div>
                                                <div class="item"><img src="images/works/img5.jpg" alt=""></div>
                                                <div class="item"><img src="images/works/img6.jpg" alt=""></div>						 
                                          </div>
                                      </div>
                                      <!-- End Carousel--> 	
                                              
                                      </div>
                                      
                                  </div>
                              </div>
                        </div>
                      <!--/.tab-content-main-->  
                  </div>
              </div>
            
          </div> <!--/.row-->  
    </div> <!--/.container-->
</section>
<!--End Section-->
   
<br> <br> <br>

   <!--Start portfolio-->
   <section id="gallery" class="gallery">
				<!-- Filtering -->
                  <div class="title-box text-center">
                    <h2 class="title">Some of our event gallery</h2>
                 </div>


					<div class=" col-md-12 text-center">
						<!-- Filtering -->
						<ul class="filtering">
							<li class="filter" data-filter="all">All</li>
							<li class="filter" data-filter="fashion">Wedding</li>
							<li class="filter" data-filter="event">Holud</li>
                            <li class="filter" data-filter="wedding">Birthday</li>
						</ul>
					</div>

                    <div class="work-main">
                        <!-- Work Grid -->
                        <ul class="work-grid">
                            <!-- Work Item -->
                            <li class="work-item thumnail-img mix corporate">
                                <div class="work-image">
                                    <img src="images/works/img1.jpg" alt="thumbnail">
                                    
                                     <!--Hover link-->
                                     <div class="hover-link">
                                        
            
                                        <a href="images/works/img1.jpg" class="popup-image">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                     </div>
                                     <!--End link-->
    
                                     
    
                                </div> <!-- /.work-image-->
                            </li> 
                            <!--End Work Item -->
                            
                            <!-- Work Item -->
                            <li class="work-item thumnail-img mix fashion wedding">
                                <div class="work-image">
                                    <img src="images/works/img2.jpg" alt="thumbnail">
                                    
                                     <!--Hover link-->
                                     <div class="hover-link">
                                        <
            
                                        <a href="images/works/img2.jpg" class="popup-image">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                     </div>
                                     <!--End link-->
    
                                    
    
                                </div> <!-- /.work-image-->
                            </li> 
                            <!--End Work Item -->
                            
                            <!-- Work Item -->
                            <li class="work-item thumnail-img mix corporate">
                                <div class="work-image">
                                    <img src="images/works/img3.jpg" alt="thumbnail">
                                    
                                     <!--Hover link-->
                                     <div class="hover-link">
                                      
            
                                        <a href="images/works/img3.jpg" class="popup-image">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                     </div>
                                     <!--End link-->
    
                                     
    
                                </div> <!-- /.work-image-->
                            </li> 
                            <!--End Work Item -->
    
                            <!-- Work Item -->
                            <li class="work-item thumnail-img mix corporate">
                                <div class="work-image">
                                    <img src="images/works/img4.jpg" alt="thumbnail">
                                    
                                     <!--Hover link-->
                                     <div class="hover-link">
                                        
            
                                        <a href="images/works/img4.jpg" class="popup-image">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                     </div>
                                     <!--End link-->
    
                                     
    
                                </div> <!-- /.work-image-->
                            </li> 
                            <!--End Work Item -->
                            
                            <!-- Work Item -->
                            <li class="work-item thumnail-img mix fashion wedding">
                                <div class="work-image">
                                    <img src="images/works/img5.jpg" alt="thumbnail">
                                    
                                     <!--Hover link-->
                                     <div class="hover-link">
                                        
            
                                        <a href="images/works/img5.jpg" class="popup-image">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                     </div>
                                     <!--End link-->
    
                                     
    
                                </div> <!-- /.work-image-->
                            </li> 
                            <!--End Work Item -->
                            
                            <!-- Work Item -->
                            <li class="work-item thumnail-img mix event wedding">
                                <div class="work-image">
                                    <img src="images/works/img6.jpg" alt="thumbnail">
                                    
                                     <!--Hover link-->
                                     <div class="hover-link">
                                        
            
                                        <a href="images/works/img6.jpg" class="popup-image">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                     </div>
                                     <!--End link-->
    
                                     
    
                                </div> <!-- /.work-image-->
                            </li> 
                            <!--End Work Item -->
    
                            <!-- Work Item -->
                            <li class="work-item thumnail-img mix event">
                                <div class="work-image">
                                    <img src="images/works/img7.jpg" alt="thumbnail">
                                    
                                     <!--Hover link-->
                                     <div class="hover-link">
                                        
            
                                        <a href="images/works/img7.jpg" class="popup-image">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                     </div>
                                     <!--End link-->
    
                                     
    
                                </div> <!-- /.work-image-->
                            </li> 
                            <!--End Work Item -->
    
                            <!-- Work Item -->
                            <li class="work-item thumnail-img mix corporate">
                                <div class="work-image">
                                    <img src="images/works/img8.jpg" alt="thumbnail">
                                    
                                     <!--Hover link-->
                                     <div class="hover-link">
                                        
            
                                        <a href="images/works/img8.jpg" class="popup-image">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                     </div>
                                     <!--End link-->
    
                                     
    
                                </div> <!-- /.work-image-->
                            </li> 
                            <!--End Work Item -->
    
                            <!-- Work Item -->
                            <li class="work-item thumnail-img mix event">
                                <div class="work-image">
                                    <img src="images/works/img9.jpg" alt="thumbnail">
                                    
                                     <!--Hover link-->
                                     <div class="hover-link">
                                        
            
                                        <a href="images/works/img9.jpg" class="popup-image">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                     </div>
                                     <!--End link-->
    
                                     
    
                                </div> <!-- /.work-image-->
                            </li> 
                            <!--End Work Item -->
    
                            <!-- Work Item -->
                            <li class="work-item thumnail-img mix wedding">
                                <div class="work-image">
                                    <img src="images/works/img10.jpg" alt="thumbnail">
                                    
                                     <!--Hover link-->
                                     <div class="hover-link">
                                        
            
                                        <a href="images/works/img10.jpg" class="popup-image">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                     </div>
                                     <!--End link-->
    
                                     
    
                                </div> <!-- /.work-image-->
                            </li> 
                            <!--End Work Item -->
    
                            <!-- Work Item -->
                            <li class="work-item thumnail-img mix fashion">
                                <div class="work-image">
                                    <img src="images/works/img11.jpg" alt="thumbnail">
                                    
                                     <!--Hover link-->
                                     <div class="hover-link">
                                        
            
                                        <a href="images/works/img11.jpg" class="popup-image">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                     </div>
                                     <!--End link-->
    
                                     
    
                                </div> <!-- /.work-image-->
                            </li> 
                            <!--End Work Item -->
    
                            <!-- Work Item -->
                            <li class="work-item thumnail-img mix corporate">
                                <div class="work-image">
                                    <img src="images/works/img12.jpg" alt="thumbnail">
                                    
                                     <!--Hover link-->
                                     <div class="hover-link">
                                        
            
                                        <a href="images/works/img12.jpg" class="popup-image">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                     </div>
                                     <!--End link-->
    
                                     
    
                                </div> <!-- /.work-image-->
                            </li> 
                            <!--End Work Item -->
                        </ul>
                        </div>
                    
			</section>
  <!--End portfolio-->
   
   
    
  <!--Start Team-->
  <section id="team" class="section">
		<div class="container">
            <div class="row">
                    
             <div class="title-box text-center">
                <h2 class="title">Team</h2>
             </div>
              
             </div>
			
                <!-- Team -->
				<div class="team-items team-carousel">
                      <!-- Team Member #1 -->
                      <div class="item">
                          <img src="images/team/team1.jpg" alt=""  />
                          <h4>MD. NUR ALAM</h4>
                          <h5>Admin</h5>
                          <p>American International University-Bangladesh (AIUB)</p>
                          
                          <div class="socials">
                              <ul>
                               <li><a class="facebook" href="http://www.facebook.com/polash.info"><i class="fa fa-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Member -->
                      
                      <!-- Team Member #2 -->
                      <div class="item">
                          <img src="images/team/team2.jpg" alt=""  />
                          <h4>SAYMA NASRIN</h4>
                          <h5>Manager</h5>
                          <p>American International University-Bangladesh (AIUB)</p>
                          
                          <div class="socials">
                              <ul>
                               <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Member -->
                      
                      <!-- Team Member #3 -->
                      <div class="item">
                          <img src="images/team/team3.jpg" alt=""  />
                          <h4>MINHAZUL ISLAM SHOVON</h4>
                          <h5>Team member</h5>
                          <p>American International University-Bangladesh (AIUB)</p>
                          
                          <div class="socials">
                              <ul>
                               <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Member -->
                      
                       <!-- Team Member #4 -->
                      <div class="item">
                          <img src="images/team/team4.jpg" alt=""  />
                          <h4>AL AMIN FAHAD</h4>
                          <h5>Team member</h5>
                          <p>American International University-Bangladesh (AIUB)</p>
                          
                          <div class="socials">
                              <ul>
                               <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Member -->
				</div>
                <!-- End Team -->
			</div>
            <!-- End Content -->
	</section>
  <!--End Team-->

 
  
   
   
   <!--Start Contact-->
   <section id="contact" class="section parallax">
      <div class="overlay"></div>
       <div class="container">
           <div class="row">
           
                 <div class="title-box text-center white">
                    <h2 class="title">Contact</h2>
                 </div>
             </div>

               <!--Start contact form-->
               <div class="col-md-8 col-md-offset-2 contact-form">
               
                    <div class="contact-info text-center">
                       <p>01737959695</p>
                       <p>Mirpur 10 (Panir tanki, Senpara), Dhaka</p>
                       <p>mdnuralam.info@gmail.com</p>
                    </div>
                     
                     <form method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <input class="form-control" name="name" id="name" placeholder="Full Name" type="text">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" name="email" id="email" placeholder="Your Email" type="email">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" name="subject" id="subject" placeholder="Subject" type="text">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="messages" id="messages" rows="7" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" name=" submit" id="submit" class="btn btn-green">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
               </div>
              <!--End contact form-->
              
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

