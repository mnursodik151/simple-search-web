<!DOCTYPE html>
<?php
	include 'connection.php';
?>
<html lang="en">
<head>
  <title> I MADE YU DUDE ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/webapp/style/bootstrap-3.3.7-dist/css/bootstrap.css">
  <link rel="stylesheet" href="http://localhost/webapp/style/sidebar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://localhost/webapp/style/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script src="http://localhost/webapp/style/sidebar.js"></script>
</head>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">  
    <div class="navbar-header navbar-right">
      <a class="navbar-brand" href="#">
       	<img alt="Brand" height="50" src="img/book-icon-256x202.png" width="70">
      	</a>   		
   	</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
          
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- sidebar -->
    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Brand
                    </a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li>
                    <a href="#">Login</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="https://twitter.com/maridlcrmn">Follow me</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
       <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row col-lg-10 col-lg-offset-1">
                    <?php

                      $sql = "SELECT * FROM query";
                      $result = mysqli_query($conn, $sql);

                      if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                        echo '<table class="table table-striped"><tr><th>ID</th><th>Email</th><th>URL</th><th>Question</th></tr>';
                        while($row = mysqli_fetch_assoc($result)) {                          
                          echo "<tr><td>" . $row["id"]. "</td><td>" . $row["email"]. "</td><td>" . $row["url"]. "</td><td>" . $row["question"]. "</td></tr>";
                        }
                        echo "</table>";
                      } else {
                        echo "0 results";
                      }
                    ?>
                  
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->