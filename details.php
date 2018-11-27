<?php
$page_Title = "Details";
include_once 'view/layout.php';
if(!(isset($_SESSION['username']))){
                header ("Location: index.php");
            }

include_once 'db/login.php';
include_once 'db/config.php';
include_once 'db/registration.php';


  $id = $_SESSION['id'];

  $sql = "SELECT * FROM users WHERE id=$id";
  $result = $conn->query($sql);

  ?>
  <div class="col-md-12">


  <h2 style="margin-top:3em;">User Details</h2>
  <p>You can't edit this information. You have to call us if you need any update in your personal info.</p>
  </div>
  <div class="container col-md-12" style="margin-top:30px; margin-bottom:5em;">

    <div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>username</th>
        <th>email</th>
        <th>password</th>
        <th>Mobile</th>
        <th>Address 01</th>
        <th>Address 02</th>
        <th>City</th>
        <th>State</th>
        <th>Zip Code</th>
        <th>Emergency #1</th>
        <th>Emergency #2</th>
        <th>Emergency #3</th>
        <th>Status</th>
        
      </tr>
    </thead>
  <?php
  if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
          $payment = $row['payment'];

        ?>
        <tbody>
          <tr>
            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            
            <td>
              <div class="form-group">
                <input type="password" class="form-method" id="myInput" value="<?php echo $row['password'];  ?>">
              </div>
              <input type="checkbox" onclick="myFunction()">Show Password
              </td>
              <td><?php echo $row["mobile"]; ?></td>
            <td><?php echo $row["address1"]; ?></td> 
            <td><?php echo $row["address2"]; ?></td>
             <td><?php echo $row["city"]; ?></td>
            <td><?php echo $row["state"]; ?></td> 
            <td><?php echo $row["zipcode"]; ?></td>
             <td><?php echo nl2br($row["person1"] . "\n" . $row["mobile1"]);  ?></td>
            <td><?php echo nl2br($row["person2"] . "\n" . $row["mobile2"]);  ?></td> 
            <td><?php echo nl2br($row["person3"] . "\n" . $row["mobile3"]);  ?></td>
            <?php if ($payment == 1): ?>
              <td class="text-success"><b>Paid</b></td>
              <?php else: ?>
                <td class="text-warning"><b><a href="payment.php">UnPaid</a></b></td>
            <?php endif; ?>
          </tr>
            
            <?php
            
    }
  
          
    }

    
$conn->close();

  ?>

     </tbody>
   </table>
</div>
</div>

<div class="clearfix"></div>

  <?php

include 'view/footer.php';

 ?>
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
 <script type="text/javascript">

 function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
