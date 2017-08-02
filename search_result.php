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

<?php include 'menubars.php';?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <?php
                    $key = $_GET['keyword'];
                    ?>
                     <div class="jumbotron">
                    <h2>Hasil Pencarian Untuk : <?php echo $key;?></h2></br>
                    </div>
                    <?php
                    $sql = "SELECT * FROM analysis WHERE title LIKE '%$key%' OR content LIKE '%$key%' OR klaim LIKE '%$key%'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
  
                    while($row = mysqli_fetch_assoc($result)) {                          
                    ?> 
                      <div class="row">
                    <div class="col-lg-7 col-lg-offset-2">
                    <div class="col-md-6">
                        <a href=<?php echo "content.php?id=".$row["id"];?> class="thumbnail">
                  <img src=<?php echo $row["image"];?> alt=<?php echo $row["image"];?>>
                    </div>
                    <div class="col-md-6">
                      <h3><?php echo $row["title"];?></h3>
                      <p><?php echo $row["preview"]?>....</p>
                    </div>
              </a>
              </div>            
                    </div>                   
                    <?php
                    }                    
                    } else {
                    ?>
                      <div class="alert alert-warning" role="alert">Pencarian anda tidak ditemukan silakan masukan kata kunci lain atau <a href="submit.php"> submit entry </a> untuk analisis lebih lanjut</div>
                    <?php
                     
                    }
                    ?>
                </div>            
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
</html>