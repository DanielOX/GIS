<?php









?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GIS LOGIN</title>
<?php include('lib.php'); ?><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <center>
      <br>
    <h1 >Login</h1>
  </center>
  <br>
  <br>
  <br>


    <div class="container">
          <div class="row">
              <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                    <center>
                        <form action="auth.php" method="post">
                            <div class="form-group">
                                  <input type="email" class="form-control" placeholder="Type Email" name="email" required value="">
                            </div>
                            <div class="form-group">
                                  <input type="password" class="form-control" placeholder="Type Password" name="password" required value="">
                            </div>
                              <button type="submit" class="btn btn-success float-right"> <i class="fa fa-paper-plane-o"></i> </button>
                              <button href="signup.php" type="submit" class="btn btn-success float-right">create new account  </button>
                        </form>
                    </center>
              </div>
          </div>
    </div>






  </body>
</html>
