<?php
if(isset($_SESSION['username'])){
          // code...
          if ($_SESSION['username']=="admin@admin.com") {
            // code...
            header ("Location: admin.php");

          }
          else {
            // code...
            header ("Location: home.php");

          }
  }
$page_Title = "Check In";
include_once './view/layout.php';
include_once './db/login.php';


 ?>

      <div class="container-fluid" style="margin-top:50px; margin-bottom: 3em;">

  <div class="row" id="pwd-container">

    <div class="col-md-4 col-md-offset-4">
      <section class="login-form">
        <form method="post" action="index.php" role="login">
          <div class="col-md-9 col-md-offset-1">
          <img src="images/acountable.png" alt="AccountableTesting" style="margin-left:1em; width:300px; height:100px;">
          </div>
          <div class="clearfix"></div>
            <p class="text-center" style="margin-top:2em;">Check In Here!</p>

          <div style="padding:10px;">
            <input type="email" name="email" placeholder="Email" required class="form-control input-lg" placeholder="Email" />
          </div>

  <div style="padding:10px;">

            <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />

          </div>
          <div>
          <span class="col-sm-6">Not Registered yet? <br><a href="register.php">Get Registered!</a></span>
          <button type="submit" name="checkin" class="btn btn-primary btn-outline with-arrow btn-lg pull-right col-sm-4" style="padding:20px;">
          Check </button>
          </div>
</form>
</section>


  </div>
</div>

</div>
<div class="clearfix"></div>

    <?php include './view/footer.php'; ?>





<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<!-- Owl Carousel -->
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>