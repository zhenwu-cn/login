<!DOCTYPE html>
<?php 
  session_start();
  $myusername = $_SESSION['myusername'];
  // echo "$myusername";
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="form-signin">
        <div class="alert alert-success">You have been <strong>successfully logged in</strong>, 
          welcome <strong><?php echo $myusername; ?></strong>.
        </div>
        <a href="logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>
    </div> <!-- /container -->
  </body>
</html>
