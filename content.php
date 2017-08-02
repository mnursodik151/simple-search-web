<!DOCTYPE html>
<?php
	include 'connection.php';
?>
<html lang="en">
<head>
  <title> I MADE YU DUDE </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/webapp/style/bootstrap-3.3.7-dist/css/bootstrap.css">
  <link rel="stylesheet" href="http://localhost/webapp/style/sidebar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://localhost/webapp/style/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script src="http://localhost/webapp/style/sidebar.js"></script>
</head>
<body>

<?php include 'menubars.php'; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
            <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM analysis WHERE id='$id'";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)) {                          
                    ?>
                <div class="row">
                    <div class="col-lg-7 col-lg-offset-2">
                  <img src=<?php echo $row["image"];?> alt=<?php echo $row["image"];?>>
                      <h3><?php echo $row["title"];?></h3>
                      <div class="alert alert-warning" >
                      <h4>CLAIM</h4></br>
                      <?php echo $row["klaim"];?>
              </div>
              <div class="alert alert-info" ><h4>ANALISIS</h4></br>
              <?php echo $row["content"]?></div>
                    </div>
              </div>  
              
              <?php
                    }
                    ?>          
                    </div>                   
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
</html>