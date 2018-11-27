<?php
include_once 'db/config.php';
session_start();
if(!(isset($_SESSION['username']))){
                header ("Location: index.php");
            }
include_once 'db/login.php';

  if (isset($_POST['update'])) {
    # code...
    $mobile = $_POST['mobile'];
    $site = $_POST['site'];
    $email = $_POST['email'];
    $update = "UPDATE contact_info SET phone=$mobile, site='$site', email='$email' WHERE id=1";
    if ($conn->query($update)) {
      # code...
      echo "data updated successfully";
    }
    else{
      echo "error" . $conn->error;
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.css">

  </head>
  <style media="screen">
    .container{
      margin-top:3em;
    }
    h2{
      text-shadow: 1px 1px;
      color:#27E1CE;
      font-weight:bolder;
      margin-bottom: 1em;
    }
  </style>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="admin.php" style="font-size:2em; color:#27E1CE;"> Accountable Testing</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav pull-right">
      <li><a href="admin.php">Users</a></li>
            <li><a href="all.php">All Users</a></li>

      <li><a href="selected_users.php">Selected Users</a></li>
      <li><a href="add_link.php">Add Links</a></li>
      <li  class="active"><a href="update_contact.php">Contact Update</a></li>
      <li><a href="db/logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>
<div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-2">
            <h2 class="text-center">Update Contact Info</h2>
              <p class="text-center text-danger">Fill those which you want to change with <b>new values</b>. And rest with the same old Values</p>
              <form action="" method="post">
                <div class="form-group">
                  <label for="name">Mobile:</label>
                  <input type="text" class="form-control" name="mobile" id="name">
                </div>
                <div class="form-group">
                  <label for="url">Email:</label>
                  <input type="email" class="form-control" name="email" id="url">
                </div>
                <div class="form-group">
                  <label for="url">Site:</label>
                  <input type="text" class="form-control" name="site" id="site">
                </div>
                <button type="submit" name="update" class="btn btn-warning pull-right">Update</button>
              </form>
          </div>
        </div>
      </div>
      
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>