<?php
 require '../config.php'; 
 
 if(isset($_GET['error'])){
     echo "<div class=\"alert alert-danger\" role=\"alert\">Pastikan Username dan Password Benar!</div>";
 }
 
 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../img/logo_hacom.jpg">
    <link rel="icon" type="image/png" href="../img/logo_hacom.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $WEB_CONFIG['app_name'] ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
    <style>
        .bg-orange {
            color: darkorange;
        }
    </style>
</head>

<body class="index-page ">
    <div class="wrapper">
        <div class="page-header">
            <div class="page-header-image" data-parallax="true" style="background-image:url('../img/login.png'); object-fit: cover;">
            </div>
        <div class="container">
          <div class="row">
              <br/>
            <div class="card card-signup" data-background-color="orange" style="border-radius: 10px;">
              <form class="form" method="post" action="login.php">
                <div class="card-header text-center">
                  <h3 class="card-title title-up">login</h3>
                  <div class="social-line">
                    <a href="#" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                      <i class="fab"><img src="../img/logo_hacom.jpg" style="width: 25px; height: 25px;"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" name="username" id="password" placeholder="Username" require>
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons objects_key-25"></i>
                      </span>
                    </div>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control" require />
                  </div>
                </div>
                <div class="card-footer text-center">
                  <input type="submit" name="login" class="btn btn-neutral btn-round btn-lg"></input>
                </div>
              </form>
            </div>
          </div>
                
            </div>
        </div>
    </div>




  




    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="../assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            // the body of this function is in assets/js/now-ui-kit.js
            nowuiKit.initSliders();
        });

        function scrollToDownload() {

            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
    </script>
</body>

</html>