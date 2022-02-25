<?php 
require '../../config.php';
if(isset($_POST['save'])){
        $id = $_GET['pm_id'];   
         
        $sql = "UPDATE tb_pemesanan SET pm_status='SUDAH' WHERE pm_id='$id'";
        mysqli_query($koneksi, $sql) or die("<b>Error</b> Ada kesalahan<br/>" . mysqli_error($koneksi));
        header('location: http://localhost/web/adminhacom/crudpemesanan/index.php');
        echo "<div class=\"alert alert-success\" role=\"alert\">Berhasil Disimpan</div>";
}



$id = $_GET['pm_id'];
$query1 = "SELECT pr_gambar, pr_judul,pm_id, pm_nama, pm_notelp, pm_email, pm_kuant, pm_status, pm_total, pm_alamat, pm_tanggal, pm_keterangan FROM tb_produk, tb_pemesanan WHERE tb_produk.pr_id=tb_pemesanan.pr_id AND pm_id = $id";


$result = mysqli_query($koneksi, $query1);


$data = mysqli_fetch_array($result);
$num = 100;

function rupiah($angka){
	
    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;
 
}

 ?>

<a href="<?= $WEB_CONFIG['base_url'] ?>/adminhacom/crudpemesanan/index.php" class="btn btn-warning mb-3">
    <svg style="width:20px;height:20px" viewBox="0 0 24 24">
        <path fill="#000000" d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M18,11H10L13.5,7.5L12.08,6.08L6.16,12L12.08,17.92L13.5,16.5L10,13H18V11Z" />
    </svg> Back To Data
</a>
<div class="container">
<div class="card" style="padding:10px;">
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-3">
            <img src="../../images/<?= $data['pr_gambar'] ?>" style="width: 150px; height:150px;">
        </div>
        <div class="col-md-9" style="margin-left: -70px;">
            <h5 style="font-weight: bold;"><?= substr($data['pr_judul'], 0, $num) . '...' ?></h5>
            <br/>
            <h6> Kuantitas : <?= $data['pm_kuant'] ?></h6>
            <p style="font-weight: bold;">Total : </p>
            <p style="font-weight: bold; margin-top: -40px;margin-left: 90px; font-size: 24pt; color:orangered;"><?= rupiah($data['pm_total']) ?></p>
        </div>
    </div>
    <h3 style="font-weight: bold; margin-top: 30px">Detail Pemesan</h3>
        <div class="form-group row">
            <label class="col-md-3" for="nama">Nama Pembeli</label>
            <textarea class="col-md-9" style="margin-left: -30px;" name="nama" placeholder="<?= $data['pm_nama'] ?>" id="nama" rows="2" disabled></textarea>
        </div>
        <br/>
        <div class="form-group row">
            <label class="col-md-3" for="notelp">No.Telp/WA</label>
            <textarea class="col-md-9" style="margin-left: -30px;" name="notelp" placeholder="<?= $data['pm_notelp'] ?>" id="notelp" rows="1" disabled></textarea>
        </div>
        <br/>
        <div class="form-group row">
            <label class="col-md-3" for="email">Email</label>
            <textarea class="col-md-9" style="margin-left: -30px;" name="email" placeholder="<?= $data['pm_email'] ?>" id="email" rows="1" disabled></textarea>
        </div>
        <br/>
        <div class="form-group row">
            <label class="col-md-3" for="alamat">Alamat</label>
            <textarea class="col-md-9" style="margin-left: -30px;" name="alamat" placeholder="<?= $data['pm_alamat'] ?>" id="alamat" rows="3" disabled></textarea>
        </div>
        <br/>
        <div class="form-group row">
            <label class="col-md-3" for="keterangan">Keterangan</label>
            <textarea class="col-md-9" style="margin-left: -30px;" name="keterangan" placeholder="<?= $data['pm_keterangan'] ?>" id="keterangan" rows="3" disabled></textarea>
        </div>
        <h5>Tanggal :  <?= date('d-m-Y', strtotime($data["pm_tanggal"]));   ?></h5>
        <input type="submit" class="btn-lg btn-primary m-1" name="save" value="Transaksi Selesai">
        <br/>
    </form>
    <br/>
    </div>
</div>