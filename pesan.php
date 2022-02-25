<?php
    require 'config.php';
   if (isset($_GET['pr_id']) && ($_POST['kuantitas'])) {
    $id = $_GET['pr_id'];
    $kuan = $_POST['kuantitas'];
    $int = (int)$kuan;

    include('config.php');
    $sqli = "SELECT * FROM tb_produk WHERE pr_id= $id" ;
    $result = mysqli_query($koneksi, $sqli) or die("<b>Error:</b> Ada kesalahan<br/>" . mysqli_error($koneksi));
    $row = mysqli_fetch_assoc($result);

    $ttl = $int * $row['pr_harga'];
    }

    function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
     
    }


    
?>
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
    <?php foreach( $result as $row ) : ?>
    <div class="container" style="margin-top: 100px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-bottom: 30px; padding:15px;">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="./img/alur-pembelian.jpg">
            </div>
            <div class="col-md-6">
                <h2>Form Pemesanan</h2>
                <br/>
                <form enctype="multipart/form-data" action="<?= $WEB_CONFIG['base_url'] ?>edit.php?pr_id=<?= $row['pr_id'] ?>&kuantitas=<?= $kuan ?>&total=<?= $ttl ?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required autofocus>
                </div>
                <div class="form-group">
                    <label for="notelp">No.Telp / WA (wajib bisa dihubungi)</label>
                    <input type="number" class="form-control" id="notelp" name="notelp" placeholder="No. Telp/WA" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="alamat">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3" ></textarea>
                </div>
                <br/>
                <p>Detail Pesanan :</p>
                <div class="row" style="background-color: gainsboro; padding-top: 5px; padding-bottom:5px; width:450px; border-radius: 8px;">
                    <div class="col-md-4">
                        <img src="./images/<?= $row['pr_gambar'] ?>">
                    </div>
                    <div class="col-md-8">
                        <p style="font-size: 12pt;"><?= $row['pr_judul'] ?></p>
                        <p>Kuantitas : <?= $kuan ?></p>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-4">    
                        <h3 style="margin-top: 20px;">Total :</h3>
                    </div>
                    <div class="col-md-8">    
                        <h3 style="margin-top: 20px;color: #DA4453; font-weight:bold;"><?= rupiah($ttl) ?></h3>
                        <br/>
                        <br/>
                    </div>
                </div>
                <button type="submit" name="save" onclick="return confirm('Konfirmasi Pembelian?')" class="btn btn-round col-md-12" style="background-color:#DA4453; font-size:14pt">Pesan Sekarang !</button>
                </form>
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