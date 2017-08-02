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
                   <form class="col-lg-7 col-lg-offset-2" action="submit_proccess.php" method="POST"> 
                    <div class="form-group">
                        <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">@</span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" aria-describedby="basic-addon1">
                      </div>
                  </div>
                  <div class="form-group">
                        <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">http://</span>
                        <input type="text" class="form-control" id="url" name="url" placeholder="URL yang ingin dianalisis" aria-describedby="basic-addon2">
                      </div>
                  </div>  
                  <div class="form-group">
                  <label for="question">Pertanyaan anda</label>
                        <textarea class="form-control" id="question" name="question">
                        </textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
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