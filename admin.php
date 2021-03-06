<?php
include_once 'db/config.php';
session_start();
if(!(isset($_SESSION['username']))){
                header ("Location: index.php");
            }
include_once 'db/login.php';
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
      <li class="active"><a href="admin.php">Users</a></li>
      <li><a href="all.php">All Users</a></li>
      <li><a href="selected_users.php">Selected Users</a></li>
      <li><a href="add_link.php">Add Links</a></li>
      <li><a href="update_contact.php">Contact Update</a></li>
      <li><a href="db/logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>
    <div class="container">
      <div class="row">
        <h2 class="text-center">List of Checked in Users</h2>
        <div class="col-md-10 col-md-offset-1">
          <div class="table-responsive">
          <table class="table table-hover ">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Check Ins</th>
                <th>Status</th>
                <th>Last Access</th>
                <th>Mobile #</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                  <?php


          $sql = "SELECT * FROM users ORDER BY lastcheckIn DESC ";

          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row

            while($row = $result->fetch_assoc()) {
                
                if($row['payment'] == 1){
                  if ($row['email'] != "admin@admin.com") {
                    # code...
                    $id = $row['id'];
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["count"]; ?></td>
                    <td class="text-success"><b>Paid</b></td>
                    <td><?php echo $row["lastcheckIn"] ?></td>
                    <td> <?php echo $row['mobile'] ?> </td>
                    <td>
                    <form method="post" action="admin.php"> 
                      <input type="submit" name="select" class="btn btn-sm btn-success" value="Select">
                      <input type="submit" name="delete" class="btn btn-sm btn-danger" value="Delete">
                    </form>
                       </td>
                       <?php
                        $user_email = $row['email'];
                       

            }
          }
          }
          if (isset($_POST['select'])) {
                        # code...
                        $sql = "UPDATE users SET payment=0, selection=1 WHERE email='$user_email'";
                        if ($conn->query($sql) === TRUE) {
                            echo "Selected Successfully :)";
                        } else {
                            echo "Error updating record: " . $conn->error;
                        }

  }
  elseif (isset($_POST['delete'])) {
                        # code...
                        $sql = "DELETE FROM users WHERE id=$id";
                        if ($conn->query($sql) === TRUE) {
                            echo "Deleted Successfully :)";
                        } else {
                            echo "Error updating record: " . $conn->error;
                        }

  }

          } else {
            echo "Error updating record: " . $conn->error;
          }

          


    ?>
            </tbody>
          </table>
        </div>


        </div>

      </div>

    </div>

  </body>
</html>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
