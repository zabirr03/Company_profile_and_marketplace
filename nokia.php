<?php require 'config.php' ?>
<!DOCTYPE html>
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

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        .bound {
            background-color: gray;
            padding: 10px;
            margin: 20px;
        }
    </style>
</head>

<body>
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
                                Xiaomi
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
    <div class="container-fluid text-left" style="margin-top: 40px; margin-left: 20px; justify-content: center;">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2 class="font-weight-bold">Produk Unggulan Nokia :</h2>
        <br/>
        <br/>
        <br/>
    </div>
    <div class="container text-center">
        <div class="row">
            <?php
                include('config.php');

               $sql = "SELECT * FROM tb_produk WHERE pr_vendor = 'nokia'";
               $result = mysqli_query($koneksi, $sql) or die("<b>Error:</b> Ada kesalahan<br/>" . mysqli_error($koneksi));
               $row = mysqli_fetch_assoc($result);

               function rupiah($angka){
	
                $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                return $hasil_rupiah;
             
            }
            
                ?>
                <?php foreach( $result as $row ) : ?>
                    <div class="col-md-3">
                    <a href="<?= $WEB_CONFIG['base_url'] ?>detail.php?pr_id=<?= $row['pr_id'] ?>"><div class="panel panel-default " style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-top: 30px; background-color: white; border-top-left-radius: 8px; border-top-right-radius: 8px;  padding: 8px; height: 360px;">
                    <div class="panel-body">
                        <img class src="./images/<?= $row['pr_gambar'] ?>" style="height: 250px;width: 250px;">
                        <p style="font-size: 8pt;" ><?= $row['pr_judul'] ?></p>
                        <!-- <p style="font-size: 16pt; align-self: flex-end;">Rp. <?= $row['pr_harga'] ?></p> -->
                        
                    </div>
                    </div>
                    <div class="panel panel-default text-white" style="border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; background-color: #DA4453 ;  padding: 1px; height: 45px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="panel-body">
                    <p style="font-size: 16pt;"><?= rupiah($row['pr_harga']) ?></p>
                    </div>
                    </div>
                </div></a>
                <?php endforeach; ?>
        </div>
    </div>

    <div class="container-fluid text-center text-white font-weight-bold" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);justify-content: center; background-color: #DA4453;padding-bottom: 2px;padding-top: 5px;margin-top: 30px;">
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