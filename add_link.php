<?php 
session_start();
if(!(isset($_SESSION['username']))){
                header ("Location: index.php");
            }
	include_once 'db/config.php';
	if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$url = $_POST['url'];


		# code...
	

	$sql = "INSERT INTO links (name,url) VALUES ('$name', '$url')";

	if ($conn->query($sql) === TRUE) {
		# code...
		echo "<script>alert ('Link Added  Successfully :) ');</script>";

	}
	else {
            echo "Error updating record: " . $conn->error;

	}
}




 ?>

 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.css">
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
  </head>

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
      <li class="active"><a href="add_link.php">Add Links</a></li>
      <li><a href="update_contact.php">Contact Update</a></li>
      <li><a href="db/logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-2">
            <h2 class="text-center">Add a new Link</h2>
            	<form action="" method="post">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                  <label for="url">URL:</label>
                  <input type="text" class="form-control" name="url" id="url">
                </div>
                <button type="submit" name="submit" class="btn btn-success pull-right">Submit</button>
              </form>
          </div>
        </div>
      </div>
  
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <h2 class="text-center">Saved Links</h2>

        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
            <tr>
              <th>Name</td>
              <th>URL</td>
              <th>Action</td>
            </tr>
            </thead>
            
                           
               <?php 
                $links = "SELECT * FROM links";
                $result = $conn->query($links);
                if ($result->num_rows > 0 ) {
                  # code...
                  while ($row = $result->fetch_assoc()) {
                    # code...
                    $id = $row['id'];
                    ?>
                    <tbody>
                    <tr>
                    <td><?php echo $row['name'];  ?></td>
                    <td><?php echo $row['url'];  ?></td>
                    <td> 
                      <form method="post" action="add_link.php">
                      <input type="submit" name="delete" class="btn btn-danger" value="delete"> </td>
                    </form>
                    </tr>


                    <?php
                  }
                  if (isset($_POST['delete'])) {
                        # code...
                        $sql = "DELETE FROM links WHERE id=$id";
                        if ($conn->query($sql) === TRUE) {
                            echo "Deleted Successfully :)";
                        } else {
                            echo "Error updating record: " . $conn->error;
                        }

  }

          } else {
            echo "Error updating record: " . $conn->error;
          }
    $conn->close();
                

                

                ?> 


</tbody>


          </table>
          
        </div>
      </div>
    </div>
  </div>

<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


</body>
</html>

