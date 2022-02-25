<?php require 'config.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./img/logo_hacom.jpg">
    <link rel="icon" type="image/png" href="./img/logo_hacom.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $WEB_CONFIG['app_name'] ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
</head>

<body style="background-color: white;">
    <nav class="navbar navbar-expand-lg fixed-top navbar-primary" style="background-color: #DA4453;">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?= $WEB_CONFIG['base_url'] ?>"><i class="now-ui-icons business_bank"></i> Beranda</a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-neutral" href="<?= $WEB_CONFIG['base_url'] ?>alur.php">
                            <p>Alur Pembelian</p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                            <i class="now-ui-icons design_app"></i>
                            <p>Produk</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>hotwav.php">
                                Hotwav
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>vfone.php">
                                Vfone
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>itel.php">
                                Itel Mobile
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>samsung.php">
                                Samsung
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>redmi.php">
                                Redmi
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>oppo.php">
                                Oppo
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>vivo.php">
                                Vivo
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>evercoss.php">
                                Evercoss
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>strawberry.php">
                                Strawberry
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>realme.php">
                                Realme
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>nokia.php">
                                Nokia
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>infinix.php">
                                Infinix
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>tecno.php">
                                Tecno
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>polytron.php">
                                Polytron
                            </a>
                            <a class="dropdown-item" href="<?= $WEB_CONFIG['base_url'] ?>allp.php">
                                Semua Produk
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-neutral disabled" href="#">
                            <p>Outlet Kami</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Temukan kami di facebook" data-placement="bottom" href="https://www.facebook.com/hacom.hacom.39    " target="_blank">
                            <i class="fab fa-facebook-square" style="height: 25px, width 25px;"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Temukan kami di Tokopedia" data-placement="bottom" href="https://www.tokopedia.com/hacom" target="_blank">
                            <img class="img-tkp" src="./img/tokopedia.png" alt="" height="20px" weight="20px">
                            <p class="d-lg-none d-xl-none">Tokopedia</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Temukan Kami di Shopee" data-placement="bottom" href="https://shopee.co.id/pt.harapan" target="_blank">
                            <img class="img-shp" src="./img/shopee.png" alt="" height="25" weight="25">
                            <p class="d-lg-none d-xl-none">Shopee</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid px-0 text-center " style="margin-top: 60px; background-color: gainsboro; justify-content: center;">
        <img class="img-fluid" src="./img/banner-outlet.jpg" alt="banner">
    </div>
    <div class="container-fluid text-center text-white font-weight-bold" style="justify-content: center; background-color: #DA4453;padding-top: 20px;padding-bottom: 2px;">
        <h3 class="font-weight-bold">SURABAYA</h3>
    </div>

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default text-white" style=" background-color: #DA4453 ; border-radius: 10px; padding: 15px;">
                    <div class="panel-body">
                        <h3 style="font-family: 'Times New Roman', Times, serif;">HACOM ITC</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><img src="./img/loc.png" style="height: 18px;width: 12px;"> Mega Grosir Lantai 2 Blok D6 No. 1-3 A</p>
                        <img src="./img/outlet/itc.jpg" alt="itc" style="height: 250px;width: 350px;">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default text-white" style=" background-color: #DA4453; border-radius: 10px; padding: 15px;">
                    <div class="panel-body">
                        <h3 style="font-family: 'Times New Roman', Times, serif;">HACOM WTC</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><img src="./img/loc.png" style="height: 18px;width: 12px;"> Mega Grosir Lantai 2 Blok D6 No. 1-3 A</p>
                        <img src="./img/outlet/wtc.jpeg" alt="itc" style="height: 250px;width: 350px;">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default text-white" style=" background-color:#DA4453; border-radius: 10px; padding: 15px;">
                    <div class="panel-body">
                        <h3 style="font-family: 'Times New Roman', Times, serif;">HACOM Dharmahusada</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><img src="./img/loc.png" style="height: 18px;width: 12px;"> Jl. Dharmahusada No. 83,</p>
                        <img src="./img/outlet/dharma.jpeg" alt="itc" style="height: 250px;width: 350px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default text-white" style=" background-color:#DA4453; border-radius: 10px; padding: 15px;">
                    <div class="panel-body">
                        <h3 style="font-family: 'Times New Roman', Times, serif;">HACOM Kenjeran</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><img src="./img/loc.png" style="height: 18px;width: 12px;"> Jl. Kenjeran No. 98 B-C</p>
                        <img src="./img/outlet/kenjeran.jpeg" alt="itc" style="height: 250px;width: 350px;">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default text-white" style=" background-color:#DA4453; border-radius: 10px; padding: 15px;">
                    <div class="panel-body">
                        <h3 style="font-family: 'Times New Roman', Times, serif;">HACOM Pacuan Kuda</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><img src="./img/loc.png" style="height: 18px;width: 12px;"> Jl. Pacuan Kuda No. 56</p>
                        <img src="./img/outlet/pacuan.jpeg" alt="itc" style="height: 250px;width: 350px;">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default text-white" style=" background-color:#DA4453; border-radius: 10px; padding: 15px;">
                    <div class="panel-body">
                        <h3 style="font-family: 'Times New Roman', Times, serif;">HACOM Manukan</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><img src="./img/loc.png" style="height: 18px;width: 12px;"> Jl. Manukan Tama Blok A2 No. 53</p>
                        <img src="./img/outlet/manukan.jpeg" alt="itc" style="height: 250px;width: 350px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center text-white font-weight-bold" style="justify-content: center; background-color: #DA4453;padding-top: 20px;padding-bottom: 2px;margin-top: 30px;">
        <h3 class="font-weight-bold">GRESIK</h3>
    </div>

    <div class="container text-center text-white" style="margin-top: 30px;">
        <div class="panel panel-default" style=" background-color:#DA4453; border-radius: 10px; padding: 15px;">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="./img/outlet/gresik.jpeg" alt="itc" style="height: 250px;width: 350px;">
                    </div>
                    <div class="col-md-4 text-left font-weight-bold">
                        <h3 class="font-weight-bold" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">HACOM Gresik</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><img src="./img/loc.png" style="height: 18px;width: 12px;"> Jl. Raya Sukomulyo No. 42, Manyar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center text-white font-weight-bold" style="justify-content: center; background-color: #DA4453;padding-top: 20px;padding-bottom: 2px;margin-top: 30px;">
        <h3 class="font-weight-bold">JOMBANG</h3>
    </div>

    <div class="container text-center text-white" style="margin-top: 30px;">
        <div class="panel panel-default" style=" background-color:#DA4453; border-radius: 10px; padding: 15px;">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="./img/outlet/jombang.jpg" alt="wtc" style="height: 250px;width: 350px;">
                    </div>
                    <div class="col-md-4 text-left font-weight-bold">
                        <h3 class="font-weight-bold" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">HACOM Jombang</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><img src="./img/loc.png" style="height: 18px;width: 12px;"> Jl. KH. Hasyim Ashari No. 26, Kaliwungu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center text-white font-weight-bold" style="justify-content: center; background-color: #DA4453;padding-top: 20px;padding-bottom: 2px;margin-top: 30px;">
        <h3 class="font-weight-bold">NGANJUK</h3>
    </div>

    <div class="container text-center text-white" style="margin-top: 30px;">
        <div class="panel panel-default" style=" background-color:#DA4453; border-radius: 10px; padding: 15px;">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="./img/outlet/warujayeng.jpeg" alt="wtc" style="height: 250px;width: 350px;">
                    </div>
                    <div class="col-md-4 text-left font-weight-bold">
                        <h3 class="font-weight-bold" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">HACOM Warujayeng</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><img src="./img/loc.png" style="height: 18px;width: 12px;"> Jl. Jaksa Agung Suprapto No. 1, Pelem -Warujayeng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center text-white font-weight-bold" style="justify-content: center; background-color: #DA4453;padding-top: 20px;padding-bottom: 2px;margin-top: 30px;">
        <h3 class="font-weight-bold">BANYUWANGI</h3>
    </div>

    <div class="container text-center text-white" style="margin-top: 30px;">
        <div class="panel panel-default" style=" background-color:#DA4453; border-radius: 10px; padding: 15px;">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="./img/outlet/rogojampi.jpeg" alt="wtc" style="height: 250px;width: 350px;">
                    </div>
                    <div class="col-md-4 text-left font-weight-bold">
                        <h3 class="font-weight-bold" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">HACOM Rogojampi</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><img src="./img/loc.png" style="height: 18px;width: 12px;"> Jl. Raya Rogojampi No. 102, rogojampi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center text-white" style="margin-top: 30px;">
        <div class="panel panel-default" style=" background-color:#DA4453; border-radius: 10px; padding: 15px;">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="./img/outlet/muncar.jpeg" alt="wtc" style="height: 250px;width: 350px;">
                    </div>
                    <div class="col-md-4 text-left font-weight-bold">
                        <h3 class="font-weight-bold" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">HACOM Muncar</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><img src="./img/loc.png" style="height: 18px;width: 12px;"> Jl. Raya Sumber ayu No. 169, muncar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center text-white font-weight-bold" style="justify-content: center; background-color: #DA4453;padding-top: 20px;padding-bottom: 2px;margin-top: 30px;">
        <h3 class="font-weight-bold">JEMBER</h3>
    </div>

    <div class="container text-center text-white" style="margin-top: 30px;">
        <div class="panel panel-default" style=" background-color:#DA4453   ; border-radius: 10px; padding: 15px;">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="./img/outlet/jember.jpeg" alt="wtc" style="height: 250px;width: 350px;">
                    </div>
                    <div class="col-md-4 text-left font-weight-bold">
                        <h3 class="font-weight-bold" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">HACOM Jember</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><img src="./img/loc.png" style="height: 18px;width: 12px;"> Jl. Jawa 2 No. 14B, Sumbersari</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center text-white font-weight-bold" style="justify-content: center; background-color: #DA4453;padding-bottom: 2px;padding-top: 5px;margin-top: 30px;">
        <h6 class="font-weight-bold">© HACOM Cellular Surabaya. All Right Reserved.</h6>
    </div>

    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="./assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
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