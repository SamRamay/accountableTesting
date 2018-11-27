<?php
$page_Title="Home";
include_once './view/layout.php';
if(!(isset($_SESSION['username']))){
                header ("Location: index.php");
            }
include_once './db/login.php';

 ?>
 <style type="text/css">
 	b{
 		color: #008080;
 	}
 	#fh5co-hero .flexslider {
  border: none;
  z-index: 1;
  margin-bottom: 0;
  min-height: 700px;

}
 	#fh5co-hero .flexslider .slides {
  position: relative;
  overflow: hidden;
  min-height: 700px;
}
#fh5co-hero .flexslider .slides li {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  min-height: 300px;
  min-height: 700px;
}
#fh5co-hero .flexslider .flex-control-nav {
  
  z-index: 1000;
  margin-top:60px;

}

#fh5co-hero {
  height: 600px;
  max-height: 700px;
  background: #fff url(../images/loader.gif) no-repeat center center;
  margin-bottom: 10px;
}


 </style>

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight"   >
			<ul class="slides" >
		   	<li style="background-image: url(images/slider2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2 style="color:#00cccc"> Live a new Free Life! </h2>
                <?php if (!$_SESSION['username']): ?>
                  <p><a href="index.php" class="btn btn-primary btn-lg">Let's Check In</a></p>
                <?php endif; ?>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slider3.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2 style="color:#00cccc"> Give Yourself an effective tool for recovery</h2>
								
                <?php if (!$_SESSION['username']): ?>
                  <p><a href="index.php" class="btn btn-primary btn-lg">Let's Check In</a></p>
                <?php endif; ?>		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slider1.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
								<h2 style="color:#00cccc"> You can do this! We can HELP! </h2>
                <?php if (!$_SESSION['username']): ?>
                  <p><a href="index.php" class="btn btn-primary btn-lg">Let's Check In</a></p>
                <?php endif; ?>		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	  </aside>
	  <div class="clearfix"></div>
	  <div>
  <?php include 'about.php'; ?>
</div>

<div class="clearfix"></div>
		<?php include './view/footer.php'; ?>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
