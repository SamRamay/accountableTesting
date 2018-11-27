<?php
$page_Title="Home";
include_once './view/layout.php';
if(!(isset($_SESSION['username']))){
                header ("Location: index.php");
            }
include_once './db/login.php';
include_once './db/config.php';

  $sql = "SELECT * FROM links";

  $result = $conn->query($sql);



 ?>

 <div id="fh5co-work-section" class="fh5co-light-grey-section">
   <div class="container">
     <div class="row">
       <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
         <h2>Links</h2>
       </div>
     </div>
     <div class="row">
      <?php

      if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <div class="col-md-4 animate-box">
         <a href="https://<?php echo $row['url']; ?>" target="_blank" class="item-grid text-center">
           <div class="v-align">
             <div class="v-align-middle">
               <h3 class="title text-uppercase"><?php echo $row['name']; ?></h3>
               <h5 class="category"><?php echo $row['url']; ?></h5>
             </div>
           </div>
         </a>
       </div>

     <?php
    }
} else {
    echo "0 results";
}





      ?>
       
       
   </div>
 </div>
</div>

<?php include './view/footer.php' ?>

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
