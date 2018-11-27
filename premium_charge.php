<?php
include_once './db/payment.php';

  if(isset($_POST['stripeToken']))
  {
    $token = $_POST['stripeToken'];

    try {


        \Stripe\Charge::create([
          "amount" => 5000,
          "currency" => "usd",
          "source" => $token,
          "description" => $user->email
        ]);

        $db->query("
          UPDATE users
          SET payment=1
          WHERE id = {$user->id}
        ");

}

catch (Stripe_CardError $e) {

        echo "something wrong with the info";

    }

    header('location: payment.php');
    exit();

  }

 ?>
