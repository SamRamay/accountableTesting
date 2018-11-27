<?php
$page_Title = "Contact";
include './db/config.php';
include_once './view/layout.php';
include_once './db/contact.php';

  $sql = "SELECT * FROM contact_info";
  $result = $conn->query($sql);

        if ($result->num_rows == 1) {
          while($row = $result->fetch_assoc()) {

            $mobile = $row['phone'];
            $email = $row['email'];
            $site = $row['site'];


          }
        }
          else{
            echo "error" . $conn->error;
          }

 ?>





<div class="container" style="margin-top:4em; margin-bottom: 4em;">


  <div class="col-md-3">
    <h3>Contact Info.</h3>
    <ul class="contact-info">
      <li><i class="icon-map"></i></li>
      <li><i class="icon-phone"></i> <b> <?php echo $mobile; ?> </b></li>
      <li><i class="icon-envelope"></i> <b> <?php echo $email; ?> </b></li>
      <li><i class="icon-globe"></i><a href="home.php"> <?php echo $site; ?> </a></li>
    </ul>
  </div>
  <div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
    <div class="row">
      <form class="" action="contact.php" method="post">
      <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" placeholder="Name" name="username" type="text">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" placeholder="Email" name="email" type="text">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea name="query" class="form-control" cols="30" rows="7" placeholder="Message"></textarea>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input value="Send Message" name="send" class="btn btn-primary" type="submit">
        </div>
      </div>
      </form>
    </div>

  </div>
</div>

  <?php include './view/footer.php'; ?>
	</div>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
