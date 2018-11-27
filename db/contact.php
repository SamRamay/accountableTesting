<?php

include 'config.php';

  if (isset($_POST['send'])) {
    // code...
    $username = $_POST['username'];
    $email = $_POST['email'];
    $query = $_POST['query'];

    $sql = "INSERT INTO query (username,email,comments) VALUES ('$username','$email','$query')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> alert ('your query is updated successfully.will contact you soon');</script>";;
          }
        else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }

    $conn->close();


  }





 ?>
