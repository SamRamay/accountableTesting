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
      <li><a href="admin.php">Users</a></li>
      <li class="active"><a href="all.php">All Users</a></li>
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
        <h2 class="text-center">List of All Users</h2>
        <div class="col-md-12">
          <div class="table-responsive">
          <table class="table table-hover ">
            <thead>
              <tr>
                <th>email</th>
                <th>Mobile</th>
                <th>Address 01</th>
                <th>Address 02</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Emergency #1</th>
                <th>Emergency #2</th>
                <th>Emergency #3</th>
                
              </tr>
 </thead>
             <tbody>

  <?php
  $sql2 = "SELECT * FROM users ORDER BY lastcheckIn DESC";
  $result = $conn->query($sql2);
  if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
       if ($row['email'] != "admin@admin.com") {
        $id = $row['id'];

        ?>
          <tr>
            <td><?php echo $row["email"]; ?></td>
              <td><?php echo $row["mobile"]; ?></td>
            <td><?php echo $row["address1"]; ?></td> 
            <td><?php echo $row["address2"]; ?></td>
             <td><?php echo $row["city"]; ?></td>
            <td><?php echo $row["state"]; ?></td> 
            <td><?php echo $row["zipcode"]; ?></td>
             <td><?php echo nl2br($row["person1"] . "\n" . $row["mobile1"]);  ?></td>
            <td><?php echo nl2br($row["person2"] . "\n" . $row["mobile2"]);  ?></td> 
            <td><?php echo nl2br($row["person3"] . "\n" . $row["mobile3"]);  ?></td>
            
            
          </tr>
            
            <?php
            
    }
  }

    
}

  ?>

     </tbody>
   </table>
</div>
</div>
      
    </div>

  </body>
</html>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
