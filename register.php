<?php
$page_Title = "Register";
include './db/registration.php';

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
include_once './view/layout.php';



 ?>

      <div class="container-fluid" style="margin-top:50px; margin-bottom: 3em;">

  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>

    <div class="col-md-5">
      <section class="login-form">
      
        <form method="post" class="form-inline" action="register.php" role="register">
        <div class="col-md-9 col-md-offset-1">
          <img src="images/acountable.png" alt="AccountableTesting" style="margin-left:1em; width:300px; height:100px;">
          </div>
          <div class="clearfix"></div>
          <p class="text-center" style="margin-top:2em;">Get Registered to be tested</p>
          <div class="form-group" style="width: 100%; padding: 10px;">
            <input type="text" name="username" required class="form-control" style="width: 100%;" placeholder="Name" />
          </div>

          <div class="form-group" style="width: 100%; padding: 10px;">
            <input type="email" name="email" required class="form-control" style="width: 100%;" placeholder="Email" />
          </div>

          <div class="form-group" style="width: 100%; padding: 10px;">

            <input type="password" name="password" class="form-control" style="width: 100%;" id="password" placeholder="Password" required="" />

          </div>
          <div class="form-group" style="width: 100%; padding: 10px;">
            <input type="number" name="number" required class="form-control" style="width: 100%;" placeholder="Phone Number" />
          </div>
          <div class="form-group" style="padding: 10px;">
            <input type="text" name="address1" required class="form-control" placeholder="Street Address" />
          </div>
          <div class="form-group" style="padding: 10px;">
            <input type="text" name="address2" required class="form-control"  placeholder="Address 02" />
          </div>
          <div class="form-group" style="padding: 10px;">
            <input type="text" name="city" required class="form-control" placeholder="City" />
          </div>

          <div class="form-group" style="padding: 10px;">
            <input type="text" name="zipcode" required class="form-control" placeholder="Zip-Code" />
          </div>


          <div class="form-group"  style="width: 100%; padding: 10px;">
                    <select class="form-control" id="sel1"  style="width: 100%;"  name="state" required>
                      <option>Select State</option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District Of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>
          </div>

          <div class="form-group" style="padding: 10px 10px 0px 10px;">
           <b> Who would you like to have notified for abnormal test?</b> ( You can have upto 3)
          </div>

          <div class="form-group" style="padding: 10px;">
            <input type="text" name="person1" required class="form-control" placeholder="Name 01"/>
          </div>

          <div class="form-group" style="padding: 10px;">
            <input type="text" name="mobile1" required class="form-control"  placeholder="Phone #" />
          </div>
          <div class="form-group" style="padding: 10px;">
            <input type="text" name="person2"  class="form-control" placeholder="Name 02 (Optional)" />
          </div>

          <div class="form-group" style="padding: 10px;">
            <input type="text" name="mobile2"  class="form-control" placeholder="Phone # (Optional)" />
          </div>
          <div class="form-group" style="padding: 10px;">
            <input type="text" name="person3" class="form-control" placeholder="Name 03 (Optional)" />
          </div>

          <div class="form-group" style="padding: 10px;">
            <input type="text" name="mobile3" class="form-control" placeholder="Phone # (Optional)" />
          </div>
          <div style="padding: 10px;">
          <button type="submit"  name="prepay" class="btn btn-lg btn-outline btn-primary pull-right">Register</button>
          </div>
				</form>
          <span style="padding: 10px;" class="col-sm-8">Registered?<a href="index.php"> Check In!</a></span>

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















