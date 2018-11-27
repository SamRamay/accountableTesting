<?php

  include 'config.php';


  if (isset($_POST['prepay'])) {
    # code...

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
     $number = $_POST['number'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];

    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $state = $_POST['state'];
     $person1 = $_POST['person1'];
    $mobile1 = $_POST['mobile1'];
    $person2 = $_POST['person2'];
    $mobile2 = $_POST['mobile2'];
    $person3 = $_POST['person3'];
    $mobile3 = $_POST['mobile3'];
    

    

    $sql = "INSERT INTO users (username,email,password,mobile,address1,address2,city,zipcode,state,person1,mobile1,person2,mobile2,person3,mobile3) 
    VALUES 
    ('$username','$email','$password','$number','$address1','$address2','$city',
          '$zipcode','$state','$person1','$mobile1','$person2','$mobile2','$person3','$mobile3')";

    if ($conn->query($sql) === TRUE) {
      session_start();
      $_SESSION['username'] = $email;
      
      $select_user = "select * from users where email='$email' AND password='$password'";

          $result = $conn->query($select_user);

    if ($result->num_rows == 1) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $_SESSION['id']=$row["id"];
          


          }

               header("location: payment.php");
 

          }
          else {
       echo "error innnn" . $conn->error;
    }
}
 else {
       echo "error" . $conn->error;
    }
  }




 ?>
