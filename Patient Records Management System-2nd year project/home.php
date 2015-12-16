
<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
  header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>


<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>Welcome - <?php echo $userRow['email']; ?></title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
    <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
  <![endif]-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
          <li><a href="#registration" class="scroll-link">Add New Patient</a></li>
          <li><a href="#services" class="scroll-link">Services</a></li>
          <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
          <li><a href="#work" class="scroll-link">Portfolio</a></li>
          <li><a href="#contactUs" class="scroll-link">Contact Us</a></li>
          <li><a href="logout.php?logout"><font color="red">Log out here</font></a></li>
        </ul>
      </div>
      <div id="header">
  <div id="left">
    <label></label>
    </div>
   
</div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->
<div id="#top"></div>
<section id="home">
  <div class="banner-container"> <img src="images/banner-bg.jpg" alt="banner" />
    <div class="container banner-content">
      <div class="hero-text animated fadeInDownBig">
        <h1 class="responsive-headline" style="font-size: 40px;">Belief in recovery always while at <br /><font color="red" size="15px"><b> PATIENT CARE UGANDA</b></font></h1>
        <a href="#basics" class="arrow-link"> <i class="fa fa-arrow-circle-down fa-2x"></i> </a> 
        <!--<p>Awesome theme for your Business or Corporate site to showcase <br/>
          your product and service.</p>--> 
      </div>
    </div>
  </div>
</section>



<section id="registration" class="registration-parlex" class="page-section colord">
  <div class="parlex-back">
    <div class="container">
     
      <div class="row mrgn30">
        <h2 align="center"><b><font color="yellow">ENTER PATIENT DETAILS</font></h2>
        <p>&nbsp;</
        <form method="post" action="patient_process.php" id="contactfrm" role="form">
          <div class="col-sm-4">
            <div class="form-group">
              <label for="pname">PATIENT NAME</label>
              <input type="text" class="form-control" name="pname" id="pname" placeholder="Enter Patient Name" title="Please enter your patient name (at least 2 characters)" required="required">
            </div>
            <div class="form-group">
              <label for="Regno">PATIENT REGISTRATION NUMBER</label>
              <input type="text" class="form-control" name="regno" id="regno" placeholder="Enter Registration Number" title="Please enter your registration no. (at least 2 characters)" required="required">
            </div>

            <div class="form-group">
              <label for="email">EMAIL ADDRESS</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address" required="required">
              
            </div>
          </div>
           <div class="col-sm-4">
            <div class="form-group">
              <label for="test">DIAGNOSIS TEST</label>
              <input type="text" class="form-control" name="test" id="test" placeholder="Enter Diagnosis test" title="Please enter diagnosis test (at least 2 characters)" required="required">
            </div>
            <div class="form-group">
              <label for="address">PATIENT ADDRESS</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Enter Patient Address" title="Please enter your registration no. (at least 2 characters)" required="required">
            </div>

            <div class="form-group">
              <label for="date">REGISTRATION DATE</label>
              <input type="date" class="form-control" name="date" id="date" placeholder="Enter registration date" title="Please enter patient registration date" required="required">
              
            </div>
          </div>
 
 <div class="col-sm-4">
            <div class="form-group">
              <label for="nation">NATIONALITY</label>
              <input type="text" class="form-control" name="name" id="nation" placeholder="Enter nationality" title="Please enter your nationality (at least 2 characters)" required="required">
            </div>
            <div class="form-group">
              <label for="city">CITY</label>
              <input type="text" class="form-control" name="city" id="city" placeholder="Enter city" title="Please enter your city (at least 2 characters)" required="required">
            </div>

            <div class="col-sm-12">
              <label for="dob">DATE OF BIRTH</label>
              <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter date of birth" title="Please enter date of birth" required="required">
              
            </div>
            <br />
          <button name="reset" type="reset" class="btn btn-lg btn-primary" id="reset">Cancel</button>
              <button name="btn-Create" type="submit" class="btn btn-lg btn-primary" id="submit" >Send</button>
            
        </form>
        
      </div>
    </div>
    <div class="container">
      <div class="social text-center"> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-flickr"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
      <!--CLEAR FLOATS--> 
    </div>
    <!--/.container--> 
  </div>
</section>
<section id="services" class="page-section colord">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2><b><font color="yellow">OUR SERVICES</font></h2>
      <p>Services that we offer to our esteemed customers (patients and many more)</p>
    </div>
    <div class="row"> 
      <!-- item -->
      <div class="col-md-3 text-center c1"> <i class="fa fa-life-ring fa-2x circle"></i>
        <h3><span class="id-color">Cardio Monitoring</span></h3>
        <p>We do mind about continuous monitoring of the heart activity, generally by electrocardiography.</p>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center c2"> <i class="fa fa-plus-square fa-2x circle"></i>
        <h3><span class="id-color">Medical Treatment</span></h3>
        <p> We offer professional medical services such as first aid services to injured patients, pharmacuetical services</p>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center c1"> <i class="fa fa-female fa-2x circle"></i>
        <h3><span class="id-color">Women Care Help</span></h3>
        <p>We work on pregnant women. we do admit them in respective and spacious wards with good facilities</p>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center c2"> <i class="fa fa-child fa-2x circle"></i>
        <h3><span class="id-color">Child Care</span></h3>
        <p>We do offer child care services to children ranging from 1-12 years such as; Polio immunization</p>
      </div>
      <!-- end:--> 
    </div>
  </div>
  <!--/.container-->
  <div class="container">
      <div class="social text-center"> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-flickr"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
      <!--CLEAR FLOATS--> 
    </div>
    <!--/.container--> 
  </div 
></section>
<section id="aboutUs">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2><b><font color="yellow">ABOUT US</font></h2>
      
    </div>
    <div class="row feature design">
      <div class="six columns right">
        <h3><font color="purple"></font></h3>
        <p>We are dedicated to helping you feel the way you want to feel – to help you live a long, healthy, happy life </p>
        <p>We believe health and happiness is our natural state – we were made for that. But in our experience very few women find that so easily. Almost always, it takes change, whether you start when you’re 25 or 85! </p>
      </div>
      <div class="six columns feature-media left"> <img src="images/feature-img-1.png" alt=""> </div>
    </div>
  </div>
</section>
<section id="work" class="page-section page">
  <div class="container text-center">
    <div class="heading">
      <h2><b><font color="yellow">OUR FACILITIES</font></h2>
      <p></p>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="portfolio">
          <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
            <li class="item branding" style="position: absolute; left: 0px; top: 0px;"> <a href="images/work/1.jpg" class="fancybox"> <img src="images/work/1.jpg" alt="">
              <div class="overlay">  </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 292px; top: 0px;"> <a href="images/work/2.jpg" class="fancybox"> <img src="images/work/2.jpg" alt="">
              <div class="overlay"> </div>
              </a> </li>
            <li class="item branding" style="position: absolute; left: 585px; top: 0px;"> <a href="images/work/3.jpg" class="fancybox"> <img src="images/work/3.jpg" alt="">
              <div class="overlay">  </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 877px; top: 0px;"> <a href="images/work/4.jpg" class="fancybox"> <img src="images/work/4.jpg" alt="">
              <div class="overlay"> </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 0px; top: 219px;"> <a href="images/work/5.jpg" class="fancybox"> <img src="images/work/5.jpg" alt="">
              <div class="overlay">  </div>
              </a> </li>
            <li class="item web" style="position: absolute; left: 292px; top: 219px;"> <a href="images/work/6.jpg" class="fancybox"> <img src="images/work/6.jpg" alt="">
              <div class="overlay"> </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 585px; top: 219px;"> <a href="images/work/7.jpg" class="fancybox"> <img src="images/work/7.jpg" alt="">
              <div class="overlay"> </div>
              </a> </li>
            <li class="item web" style="position: absolute; left: 877px; top: 219px;"> <a href="images/work/8.jpg" class="fancybox"> <img src="images/work/8.jpg" alt="">
              <div class="overlay"> </div>
              </a> </li>
             
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
      <div class="social text-center"> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-flickr"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
      <!--CLEAR FLOATS--> 
    </div>
    <!--/.container--> 
  </div></section>
 
  <div class="container">
      <div class="social text-center"> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-flickr"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
      <!--CLEAR FLOATS--> 
    </div>
    <!--/.container--> 
  </div
></section>
<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading -->
          <h2><b><font color="yellow">CONTACT</font></h2>
          <p></p>
        </div>
      </div>
      <div class="row mrgn30">
        <form method="post" action="" id="contactfrm" role="form">
          <div class="col-sm-4">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
              <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="comments">Comments</label>
              <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
            </div>
            <div class="result"></div>
          </div>
        </form>
        <div class="col-sm-4">
          <h4>Address: KIBULI</h4>
          <address>
          <br>
          
          Kibuli, SA 02434-34534 UGANDA <br>
          </address>
          <h4>Phone: +256 752204193</h4>
          <address>
          12345-49589-2<br>
          </address>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="social text-center"> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-flickr"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
      <!--CLEAR FLOATS--> 
    </div>
    <!--/.container--> 
  </div>
  <div class="container">
      <div class="social text-center"> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-flickr"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
      <!--CLEAR FLOATS--> 
    </div>
    <!--/.container--> 
  </div></section>


<!--/.page-section-->
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2014 | All Rights Reserved </a> </div>
    </div>
    <!-- / .row --> 
  </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/waypoints.js"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
