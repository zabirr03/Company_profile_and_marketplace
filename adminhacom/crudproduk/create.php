<?php 

    require '../../config.php';
//JIKA MENGIRIMKAN DATA DENGAN NAME "SAVE" (TOMBOL SAVE TELAH DI KLIK)
if(isset($_POST['save'])){
    if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {
        $gambar = $_FILES['gambar']['name'];
        $typefile = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];   
        $vendor = $_POST['vendor'];
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];
        $st = (int)$stok;
        $harga = $_POST['harga'];
        $hrg = (int)$harga;

        $path = "../../images/".$gambar;

        if($typefile == "image/jpeg" || $typefile == "image/png"){
            if(move_uploaded_file($tmp_file, $path)){
                $sql = "INSERT INTO tb_produk(pr_vendor, pr_judul, pr_gambar, pr_deskripsi, pr_stok, pr_harga ) VALUES( '$vendor', '$judul',  '$gambar', '$deskripsi', $st, $hrg)";
                mysqli_query($koneksi, $sql) or die("<b>Error</b> Ada kesalahan<br/>" . mysqli_error($koneksi));
                echo "<div class=\"alert alert-success\" role=\"alert\">Berhasil Disimpan</div>";
            }else{
                echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
            }
        }else{
            echo "<div class=\"alert alert-danger\" role=\"alert\">Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.</div>";
        }
    }
}   
 ?>

<a href="<?= $WEB_CONFIG['base_url'] ?>adminhacom/crudproduk/index.php" class="btn btn-warning mb-3">
    <svg style="width:20px;height:20px" viewBox="0 0 24 24" class="mb-1">
        <path fill="#000000" d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M18,11H10L13.5,7.5L12.08,6.08L6.16,12L12.08,17.92L13.5,16.5L10,13H18V11Z" />
    </svg> Back To Data
</a>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="vendor">Vendor</label>
            <input type="text" name="vendor" class="form-control" placeholder="Nama Vendor " id="vendor" maxlength="40" required autofocus>
        </div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" maxlength="150" placeholder="Masukkan Judul" required>
        </div>
            <label for="gambar">Upload Gambar:</label><br/>
            <input name="gambar" type="file" id="gambar" required />
        <div class="form-group" style="margin-top: 10px;">
            <label for="Deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="stok">Stok/Kuantitas</label>
            <input type="number" name="stok" class="form-control" id="stok" placeholder="Masukkan Stok" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" maxlength="50" placeholder="Masukkan Harga tanpa titik" required>
        </div>
        <input type="submit" class="btn btn-primary m-1" name="save" value="Simpan">
        <br/>
    </form>
    <br/>
</div>