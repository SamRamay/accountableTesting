<?php
//include_once './db/payment.php';
include_once './db/login.php';
include_once './db/registration.php';
session_start();

 ?>
 <!DOCTYPE html>
<html class="no-js">
 	<head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Accountable &mdash; <?php print $page_Title?></title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">

 	<link rel="shortcut icon" href="favicon.ico">

 	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">

 	<!-- Animate.css -->
 	<link rel="stylesheet" href="css/animate.css">
 	<!-- Icomoon Icon Fonts-->
 	<link rel="stylesheet" href="css/icomoon.css">
 	<!-- Bootstrap  -->
 	<link rel="stylesheet" href="css/bootstrap.css">
 	<!-- Flexslider  -->
 	<link rel="stylesheet" href="css/flexslider.css">
 	<!-- Theme style  -->
 	<link rel="stylesheet" href="css/style.css">

 	<!-- Modernizr JS -->
 	<script src="js/modernizr-2.6.2.min.js"></script>


 	</head>
 	<body>


 	<div id="fh5co-page">
 	<header id="fh5co-header" role="banner">
 		<div class="container">
 			<div class="header-inner">
			 <div class="row">
			<div class="col-xs-9 col-md-2">
        <a href="home.php"> <img src="images/acountable.png" alt="AccountableTesting" style="height:80px; width: 280px; margin: 0px; padding: 0px;"></a>
				</div>
				<div class="col-xs-3 col-md-10">
				 <nav role="navigation">
 					<ul>
            <li><a href="home.php">Home</a></li>
 						<li><a href="links.php">Links</a></li>
            <li><a href="payment.php">Payment</a></li>
 						<li><a href="services.php">Other Services</a></li>
 						<li><a href="contact.php">Contact</a></li>
            <?php if ($page_Title=="Register"){?>
              <li class="cta "><a href="index.php">Check In</a></li>

          <?php }
             elseif ($page_Title=="Check In") {
            # code...
             ?>
            <li class="cta"><a href="register.php">Register</a></li>

            <?php   }
            elseif($_SESSION['username']){
              ?>
							<li class="dropdown">
                <a href="#" class="dropdown-toggle"
                data-toggle="dropdown" role="button" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i> <?php  echo $_SESSION['username'] ?> <span class="caret"></span></a>

			            <ul class="dropdown-menu" role="menu">
                    <div style="line-height:45px;">
                      <li><a href="details.php"><i class="fa fa-info-circle" aria-hidden="true"></i> My Account </a></li>

                    </div>
                    <div style="line-height:45px;">
                      <li><a href="payment.php"><i class="fa fa-building" aria-hidden="true"></i> Payment </a></li>

                    </div>
                    <div style="line-height:45px;">
                      <li><a href="db/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>

                    </div>

			            </ul>
              </li>
						 <?php }
             else{?>
               <li class="cta"><a href="index.php">Check In</a></li>

             <?php } ?>
 					</ul>
 				</nav>
				 </div>
				 </div>
 			</div>
 		</div>
 	</header>
  
