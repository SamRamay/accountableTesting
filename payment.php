<?php
$page_Title = "Payment";
include_once './view/layout.php';
if(!(isset($_SESSION['username']))){
                header ("Location: index.php");
            }
include_once './db/payment.php';

 ?>


	<div id="fh5co-pricing-section" style="margin-top:0px;">
		<div class="container  col-md-8 col-md-offset-4">
				<div class="pricing">
					<div class=" animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Pay for Test</h2>
							<div class="price"><sup class="currency">$</sup>50<small>/Test</small></div>
							<p>Here is the link where you can pay for the test.</p>
              <?php if($user){ ?>
              <?php if($user->payment){ ?>
							<a href="#" class="btn btn-success btn-sm disabled">Already Paid! <br> You are not Selected for the test yet!</a>
				<?php  }elseif ($user->selection) {?>
							<a href="#" class="btn btn-danger btn-sm disabled">You are selected For the Test</a>

				<?php }
            else{ ?>
              <form action="premium_charge.php" method="POST">
                <script
                  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                  data-key="<?php echo $stripe['publishable']; ?>"
                  data-amount="5000"
                  data-name="Company Name"
                  data-email="<?php echo $user->email; ?>"
                  data-description="Premium membership"
                  data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                  data-locale="auto">
                </script>
              </form>            
          <?php }
      }
          else { ?>

          <a href="index.php" class="btn btn-select-plan btn-sm">Go CheckIn</a>
        <?php } ?>
						</div>
					</div>


					</div>
				</div>
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
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
