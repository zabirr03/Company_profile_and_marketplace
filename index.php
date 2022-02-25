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
    <style>
        .bg-orange {
            color: darkorange;
        }
    </style>
</head>

<body class="index-page sidebar-collapse">




    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="400" style="background-color: #DA4453;">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand disabled" href="#"><i class="now-ui-icons business_bank"></i> Beranda</a>
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
                        <a class="nav-link btn btn-neutral" href="<?= $WEB_CONFIG['base_url'] ?>outlet.php">
                            <p>Outlet Kami</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Temukan kami di facebook" data-placement="bottom" href="https://www.facebook.com/hacom.hacom.39" target="_blank">
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

    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image:url('./img/hacom_store.jpg');">
            </div>
            <div class="container">
                <div class="content-center brand">
                    <img class="n-logo" src="./img/logo_hacom.jpg" alt="" height="125" weight="125"><br><br>
                    <h1 class="h1-seo font-weight-bold">HACOM Cellular</h1>
                    <h3>Pusat Handphone Terlengkap Di Surabaya</h3>
                </div>
                <h5 class="category category-absolute text-white"><img src="./img/telp.png" alt="wa" style="height: 20px; width: 20px;"> (031) 3743558 <img src="./img/wa.png" alt="wa" style="height: 20px; width: 20px;"> 0881025893648
                </h5>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center">
        <h1>Distributor & Retail termurah di Surabaya</h1>
        <p>Dapatkan Penawaran Spesial dari kami hanya di HACOM Cell</p>
    </div>

    <div class="section" id="carousel">
        <div class="container text-center">
            <div class="title">
                <h2 class="font-weight-bold">Produk Terbaru<br/><br/></h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <a href="<?= $WEB_CONFIG['base_url'] ?>allp.php">
                            <div class="carousel-item active">
                                <img class="d-block" src="./img/slider1.jpg" alt="First slide" style="height: 500px; width: 1000px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>HACOM CELL</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="./img/slider2.jpg" alt="Second slide" style="height: 500px; width: 1000px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>HACOM CELL</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="./img/slider3.jpg" alt="Third slide" style="height: 500px; width: 1000px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>HACOM CELL</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="./img/slider4.jpg" alt="Third slide" style="height: 500px; width: 1000px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>HACOM CELL</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="./img/slider5.jpg" alt="Third slide" style="height: 600px; width: 1000px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>HACOM CELL</h5>
                                </div>
                            </div>
                            </a>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="now-ui-icons arrows-1_minimal-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="background-color:white; padding: 25px; text-align: center;">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color:#dcdcdc; border-radius: 10px; padding: 15px;">
                    <div class="panel-body">
                        <br/>
                        <i class="now-ui-icons users_single-02" style="font-size: 40px; color: #000000;"></i>
                        <br/>
                        <h3 style="font-family: 'Times New Roman', Times, serif;">Profil</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Kami merupakan Distributor dan toko Retail Handphone dan aksesoris Terlengkap dan Termurah di Surabaya dengan mengedepankan pelayanan kepada pelanggan. Kami Memiliki outlet / toko resmi yang tersebar di Jawa Timur Khususnya kota
                            Surabaya
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color:#dcdcdc; border-radius: 10px; padding: 15px;">
                    <div class="panel-body">
                        <br/>
                        <i class="now-ui-icons shopping_box" style="font-size: 40px; color: #000000;"></i>
                        <br/>
                        <h3 style="font-family: 'Times New Roman', Times, serif;">Produk</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Kami menjual Handphone dan aksessoris yang berkualitas dan bergaransi dengan harga yang terjangkau dan pelayanan yang sangat ramah kepada pelanggan. kami juga menyediakan kredit Hp bagi yang tidak memiliki uang cash dengan bunga
                            yang menarik yang tersedia di setiap outlet kami.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color:#dcdcdc; border-radius: 10px; padding: 15px;">
                    <div class="panel-body">
                        <br/>
                        <i class="now-ui-icons shopping_shop" style="font-size: 40px; color: #000000;"></i>
                        <br/>
                        <h3 style="font-family: 'Times New Roman', Times, serif;">Outlet</h3>
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Tidak hanya toko offline kami juga menyediakan toko online bagi anda yang tidak suka kemana - mana. kami hadir di shopee dengan nama pt.harapan, di Tokopedia dengan nama Hacom atau bisa juga membeli lewat website yang tersedia
                            dengan menggunakan Bank Transfer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="carousel">
        <div class="container text-center">
            <div class="title">
                <h2 class="font-weight-bold">Official Merchant<br/><br/></h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block" src="./img/kredit1.jpeg" alt="First slide" style="height: 400px; width: 600px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>HACOM CELL</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="./img/kredit2.jpeg" alt="Second slide" style="height: 400px; width: 600px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>HACOM CELL</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="./img/kredit3.jpeg" alt="Third slide" style="height: 400px; width: 600px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>HACOM CELL</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="./img/kredit4.jpg" alt="4 slide" style="height: 400px; width: 600px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>HACOM CELL</h5>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="now-ui-icons arrows-1_minimal-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid text-white" style="background-color: #DA4453 ; margin-top: 50px;">
        <div class="row">
            <iframe class="col-md-4" style="margin: 15px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.831951345003!2d112.71462454945407!3d-7.259958094733845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9e5e3b92377%3A0x47bf912390cb681f!2sHACOM%20CELL%20(cab%20pacuan%20kuda%20%2Csby)!5e0!3m2!1sid!2sid!4v1610509945645!5m2!1sid!2sid"
                width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="col-md-6">
                <h4 class="font-weight-bold" style="margin: 15px;"><img src="./img/logo_hacom.jpg" alt="" style="height: 17px; width: 17px;"> HACOM Cellular Surabaya</h4>
                <p style="margin-left: 15px; margin-top: 25px;"> Jl. Pacuan Kuda No.56 Surabaya, Jawa Timur,<br/> 60252 <br/><br/><img src="./img/telp.png" alt="wa" style="height: 15px; width: 15px;"> (031) 3743558<br/><img src="./img/wa.png" alt="wa" style="height: 15px; width: 15px;"> 0881025893648<br/>
                    <img src="./img/shopeeasli.png" alt="wa" style="height: 20px; width: 20px;"> pt.harapan<br/><img src="./img/tokped.jpg" alt="wa" style="height: 19px; width: 19px;"> Hacom</p>
                <h5 style="margin-left: 15px;"> © HACOM Cellular Surabaya. All Right Reserved.</h5>
            </div>
        </div>
    </div>
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