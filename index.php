<?php
session_start();
include_once("dbConnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $userId = mysqli_real_escape_string($con, $_POST['u_id']);
     $password = mysqli_real_escape_string($con, $_POST['u_ps']);

     $query = mysqli_query($con, "SELECT s_pwd FROM t_user_data WHERE s_id='$userId'");
     if ($query && mysqli_num_rows($query) > 0) {
          $res = mysqli_fetch_row($query);
          $stored_password = $res[0];

          if (strcmp($password, $stored_password)==0) {
               $_SESSION['user_id'] = $userId;
               header("Location: homepageuser.php");
               exit();
          } else {
               echo '<script>
               alert("Wrong Password...!\nTry to Sign-in once again");
               window.location.href = "index.php";
               </script>';
               exit();
          }
     } else {
          echo '<script>
          alert("Invalid User-Id...!\nIf you are New-User, Try to Sign-up");
          window.location.href = "index.php";
          </script>';
          exit();
     }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

     <title>CIT - Channabasaveshwara Institute Of Technology </title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <link type="text/css" rel="stylesheet" href="css/login.css">
     </link>
     <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
     <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
     <script src="bootstrap/jquery.min.js"></script>
     <script src="bootstrap/bootstrap.min.js"></script>

     <link rel="stylesheet" href="css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>

     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to Channabasaveshwara Institute Of Technology </p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 0816-4021402</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 9:00 AM - 5:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">principal@cittumkur.org</a></span>
                    </div>

               </div>
          </div>
     </header>

     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <img src="images/long-logo.png" alt="" width="500" height="100">
               </div>
               <p>

               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>

                         <li><a href="#news" class="smoothScroll">Admission</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <li><a href="adminlogin.php" class="smoothScroll">Admin Login</a></li>
                         <li><a href="#Sign_in" class="smoothScroll">Sign in</a></li>
                         <li><a href="signup.php" class="smoothScroll">>Register</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Admission 2023</h3>
                                        <h1>Build Your Carrer Your Self</h1>
                                        <a href="signup.php" class="section-btn btn btn-default smoothScroll">Register</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>AUDITORIUM | CANTEEN | COMPUTER-CENTRE | LAWN | LIBRARY | SEMINAR | HALLs</h3>
                                        <h1> Facilities </h1>
                                        <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Central Library - A Bouquet Of Knowledge</h3>
                                        <h1>Library</h1>
                                        <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Admission</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>ADMISSION</h2>
                         </div>
                    </div>
               </div>
          </div>
          <div class="container">
               <div class="row">

                    <h3>The Institute Highlights</h3>
                    <br>
                    <p> Affiliated to Visvesvaraya Technological University Belgaum.</p>
                    <p> Approved By AITCE,New Delhi.</p>
                    <p> Accredited By NAAC with B+ Grade with CGPA of 2.53.</p>
                    <p> Over 10,000 successful Alumni worldwide.</p>
                    <p> Excellent placements and 100% internship assistance</p>
                    <p> for Academic Year 2022-23</p>
                    <p> Placement with highest package of Rs 10 Lakh P. A. and avg package 3.2 Lakh P. A.</p>
                    <p> Highly Qualified and Experienced Faculty.</p>
                    <p> Excellent infrastructure and facilities.</p>
                    <p> Toppers with 9.8 CGPA and rank holders in Visvesvaraya technological University.</p>
                    <p> Scholarship / Awards for eligible students.</p>
                    <p> Rated 'AAA' College Among the Engineering Colleges in India.</p>

               </div>
          </div>
          <div class="container">
               <div class="row">

                    <h3>Bachelor of Engineering (B.E.)</h3>
                    <br>
                    <p> Computer Science and Engineering <b> intake 120</b></p>
                    <p> Information Science and Engineering <b> intake 60</b></p>
                    <p> Artificial Intelligence and Data Science <b> intake 60</b></p>
                    <p> Civil Engineering <b> intake 60</b></p>
                    <p> Electrical Engineering<b> intake 60</b></p>
                    <p> Electronics & Communication Engineering<b> intake 120</b></p>
                    <p> Mechanical Engineering <b> intake 60</b> </p>
                    <br>

               </div>
          </div>
     </section>

     <section id="Sign_in">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">
                                   <p>
                                   <h2>Sign In</h2>
                                   </p>
                         </div>
                    </div>
               </div>
          </div>
          <div class="container">
               <div class="row">

                    <form id="index" action="index.php" method="post">

                         <div class="container-fluid">
                              <div class="row">
                                   <div class="col-sm-12">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">

                                        </div>
                                   </div>
                              </div>

                              <div id="dmain" style="margin-left:600px; margin-top:30px;">
                                   <br>
                                   <div class="wow fadeInUp" data-wow-delay="1s">
                                        <h4 style="width:300px; margin-left: 66px;">Log in</h4>
                                        <form action="login.php" method="POST" onsubmit="return validateForm()">
                                             <input type="text" id="u_id" name="u_id" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your User ID"><br>
                                             <h4 style="width:300px; margin-left: 66px;">Password</h4>
                                             <input type="password" id="u_ps" name="u_ps" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your Password"><br>
                                             <input type="submit" id="u_sub" name="u_sub" value="Sign in" class="toggle btn btn-primary" style="width:100px; margin-left: 160px;"><br>
                                             <a href="signup.php" class="toggle btn btn-primary" style="width:100px; margin-left: 160px; margin-top: 5px">Sign Up</a>
                                        </form>
                                   </div>
                              </div>
                         </div>
               </div>
          </div>
          </div>
          </form>

          </div>
          </div>
     </section>

     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">
                                   <p>
                                   <h2>Our Vision</h2>
                                   </p>
                                   To create technically competent and ethically responsible professionals capable of providing efficient solutions to the contemporary world.
                              </h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>
                                   <h2>Our Mission</h2>
                                   </p>
                                   We aim to excel in our continual efforts, towards being one of the most recognized institutions, by:
                                   Providing a conducive environment comprising high-end infrastructure and state-of-the-art laboratory facilities wherein the students, faculty and staff can collectively enhance their technical potential.
                                   Encouraging innovation through research activities for the benefit of society.
                                   Developing competent professionals responsive to change in technology.

                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/principal.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Suresh D.S</h3>
                                        <p>Director & Principal,
                                             <br>Channabasaveshwara Institiute Of Technology
                                        </p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>
     </br>
     </br>
     </br>

     <section id="google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.5748040939093!2d76.9109813135617!3d13.314480210867073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb023f4f8236f97%3A0x927abe05ecce4de7!2sChannabasaveshwara%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1642253709236!5m2!1sen!2sin" width="2000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </section>

     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Our Contact</p>
                              <p> N.H. 206, Gubbi, </p>
                              <p> Tumkur,</p>
                              <p> Karnataka - 572 216</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i>+91-081-6421402</p>
                                   <p><i class="fa fa-phone"></i>+91-9449637043</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="mailto:principal@cittumkur.org">principal@cittumkur.org</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>9:00 AM - 5:00 PM</span></p>

                              </div>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/cit2001official/" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="https://x.com/cit2001official" class="fa fa-twitter"></a></li>
                                   <li><a href="https://www.instagram.com/cit2001official/" class="fa fa-instagram"></a></li>
                                   <li><a href="mailto:hr@cittumkur.org" class="fa fa-envelope-o"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2023 Channabasaveshwara Institute of Technology. All Rights Reserved.

                                        <br> Designers: <a href="https://www.linkedin.com/in/holika-h-k-7bb201275/" style="text-decoration: none;">Holika</a> & <a href="https://www.linkedin.com/in/tarun-k-48082b259/" style="text-decoration: none;">Tarun</a>
                                   </p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link">
                                   <a href="#">Library</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                   <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script>
          function validation() {
               if (document.getElementById("u_ps").value == $res) {
                    alert("Successfully Logged In")
               } else {
                    alert("Wrong Password")
                    location.href = "index.php"
               }
          }
     </script>

</body>

</html>