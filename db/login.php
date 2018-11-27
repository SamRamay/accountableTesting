<?php

  include 'config.php';

  if(isset($_POST['checkin'])){


      $uname = $_POST['email'];
      $psw =  $_POST['password'];

      if ($conn->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    else
    {
      if ($uname=="admin@admin.com") {
        // code...
        $sql = "SELECT * FROM users WHERE email='$uname' AND password='$psw'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
          while($row = $result->fetch_assoc()) {

          session_start();
          $_SESSION['username']=$uname;
        }
        header("location: admin.php");


      }
    }
    else {
      // code...


      $select_user = "select * from users where email='$uname' AND password='$psw'";

      $result = $conn->query($select_user);

if ($result->num_rows == 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      session_start();
    $_SESSION['username']=$uname;
    $_SESSION['id']=$row["id"];
    $_SESSION['payment']=$row["payment"];
    $count = $row["count"];
      }

      if ($count < 27) {
        // code...

        $id=$_SESSION['id'];
        $count=$count + 1;
        $sql = "UPDATE users SET count=$count, 	lastcheckIn=now() WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
          header("location: payment.php");

          } else {
          echo "Error updating record: " . $conn->error;

          }
      }
      else {
        // code...
        echo "<script> alert ('You have logged in 28 times in a year.Better luck next year. :) ');</script>";

      }

}
      else{
                echo "<script> alert ('Unable to login. Check Your credentials again');</script>";

      }
    mysqli_close($conn);
    }
  }
  }


 ?>
