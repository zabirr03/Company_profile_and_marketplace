<?php require 'config.php'; ?>
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
                            </a>>
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
    <?php
        if (isset($_GET['pr_id'])) {
            $id = $_GET['pr_id'];
            include('config.php');
            $sqli = "SELECT * FROM tb_produk WHERE pr_id= $id" ;
            $result = mysqli_query($koneksi, $sqli) or die("<b>Error:</b> Ada kesalahan<br/>" . mysqli_error($koneksi));
            $row = mysqli_fetch_assoc($result);
            }

            function rupiah($angka){
	
                $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                return $hasil_rupiah;
             
            }
                ?>
    <?php foreach( $result as $row ) : ?>
    <div class="container" style="margin-top: 100px;">
        <h6><?= $row['pr_vendor'] ?><h6>
                    <div class="panel panel-default" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-top: 30px; background-color: white; border-top-left-radius: 8px; border-top-right-radius: 8px;  padding: 8px;">
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class src="./images/<?= $row['pr_gambar'] ?>" style="height: 500px;width: 500px; margin: 10px;">
                        </div>
                        <div class="col-md-6">
                            <h4 class="font-weight-bold"><?= $row['pr_judul'] ?></h4>
                            <br/>
                            <br/>                            
                            <div class="panel panel-default" style="padding: 2px; height: 60px; width: 400px">
                            <div class="panel-body" style="background-color: #DCDCDC">
                            <p style="font-size: 25pt; margin-left: 25px; color:#DA4453; font-weight: bold;"> <?= rupiah($row['pr_harga']) ?></p>
                            
                            </div>
                            </div>
                            <br/><br/>
                            <br/>
                            <p>pahami alur pembelian di <a href="<?= $WEB_CONFIG['base_url'] ?>alur.php" style="color: orange; font-weight: bold;">sini</a></p>
                            <br/><br/>
                            <br/>
                            <form name="formupload" enctype="multipart/form-data" action="<?= $WEB_CONFIG['base_url'] ?>pesan.php?pr_id=<?= $row['pr_id'] ?>" method="post">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="sel1" style="margin-top: 8px;">Kuantitas</label>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" id="kuantitas" name="kuantitas">
                                    <?php for($i=1; $i <= $row['pr_stok']; $i++){
                                        echo "<option>$i</option>";
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <p style="margin-left: 15px;margin-top:5px; font-size:12pt;">Stok: <?= $row['pr_stok'] ?></p>
                                </div>
                                
                            </div>
                            <br/><br/>
                            <br/>
                            <button type="submit" class="btn btn-round col-md-9" style="background-color:#DA4453; font-size:14pt">Beli Sekarang</button>
                            </form>
                        </div>
                    <br/><br/><br/><br/><br/>
                    <h4 style="margin-left: 85px;">Deskripsi Produk</h4>
                    <br/><br/><br/><br/>
                    <textarea class="col-md-10 disabled" rows="40" id="comment" style="height:413px; margin-left:25px; border:none;" placeholder="<?= $row['pr_deskripsi'] ?>" disabled></textarea>
                    </div>
                    </div>
    </div>
    <?php endforeach; ?>


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