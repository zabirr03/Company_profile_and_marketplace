<?php 

require '../../config.php';
//MENGAMBIL ID DARI URL (METHOD GET)
$delete_id = $_GET['pr_id'];
$query = "DELETE FROM tb_produk WHERE pr_id='$delete_id'";

if(mysqli_query($koneksi, $query)){
    //JIKA DATABASE TERKONEKSI DAN QUERY DIEKSEKUSI 
    $_SESSION['flash'] = "<div class=\"alert alert-success\" role=\"alert\">Data telah terhapus</div>";
}else{
    $_SESSION['flash'] = "<div class=\"alert alert-danger\" role=\"alert\">Data gagal terhapus</div>";
}

//REDIRECT KE base_url = http://localhost/1tugascrud/
header("location: http://localhost/web/adminhacom/crudproduk/");