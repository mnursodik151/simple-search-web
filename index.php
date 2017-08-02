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

<?php include 'menubars.php'; 
  if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "success") {
      echo '<div class="alert alert-success" role="alert">Berhasil mengirim entry</div>';
    } else {
      echo '<div class="alert alert-warning" role="alert">Gagal mengirim entry</div>';
    }
  } 
?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <?php
                    $sql = "SELECT * FROM analysis";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
  
                    while($row = mysqli_fetch_assoc($result)) {                          
                    ?> 
                      <div class="row">
                    <div class="col-lg-7 col-lg-offset-2">
                        <div class="thumbnail">
                  <img src=<?php echo $row["image"];?> alt="lucina">
                    <div class="caption">
                      <h3><?php echo $row["title"];?></h3>
                      <p><?php echo $row["preview"]?>....</p>
                      <p><a href=<?php echo "content.php?id=".$row["id"];?> class="btn btn-primary" role="button">learn more</a></p>
                    </div>
              </div>            
                    </div>                   
                </div> 
                <?php
                    }                    
                    } else {
                    ?>
                      <div class="alert alert-warning" role="alert">Pencarian anda tidak ditemukan silakan masukan kata kunci lain atau submit entry untuk analisis lebih lanjut</div>
                    <?php
                     
                    }
                    ?>                  
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
</html>