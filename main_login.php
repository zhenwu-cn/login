<!--<?php
  // session_start();
  // if(isset($_SESSION['myusername'])){
  //   header("location:login_success.php");
  // }
?>
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
  </head>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="http://www.see-source.com/bootstrap/js/bootstrap-carousel.js"></script>    
  <style type="text/css">
    body{width:800px; margin:auto; margin-top:100px;}
  </style>
  <script type="text/javascript">
    $('.carousel').carousel({  
      interval: 1000
    })
    $('.carousel').carousel('cycle');
  </script>
  <body>
<!--     <div class="container">

      <form class="form-signin" name="form1" method="post" action="checklogin.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
        The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
       
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        <div id="message"></div>
      </form>

    </div>  --><!-- /container -->
    <div id="myCarousel" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"  class="" ></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item">
           <img src="http://www.see-source.com/bootstrap/demo/images/bootstrap-mdo-sfmoma-01.jpg" alt="">
           <div class="carousel-caption">
              <h4>First Thumbnail label</h4>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
           </div>
        </div>
        <div class="item">
          <img src="http://www.see-source.com/bootstrap/demo/images/bootstrap-mdo-sfmoma-02.jpg" alt="">
          <div class="carousel-caption">
            <h4>Second Thumbnail label</h4>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          </div>
        </div>
        <div class="item active">
          <img src="http://www.see-source.com/bootstrap/demo/images/bootstrap-mdo-sfmoma-03.jpg" alt="">
          <div class="carousel-caption">
            <h4>Third Thumbnail label</h4>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
    </div>

    <br>
    
    <div align="center">
      <form class="form-inline" role="form" method="post" action="checklogin.php">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Username</label>
          <input name="myusername" type="text" class="form-control" id="myusername" placeholder="Username">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input name="mypassword" type="password" class="form-control" id="mypassword" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-default">Sign in</button>
      </form>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>
    
  </body>
</html>
