<?php 

require '../../config.php';

$delete_id = $_GET['pm_id'];
$query = "DELETE FROM tb_pemesanan WHERE pm_id='$delete_id'";

if(mysqli_query($koneksi, $query)){
    $_SESSION['flash'] = "<div class=\"alert alert-success\" role=\"alert\">Data telah terhapus</div>";
}else{
    $_SESSION['flash'] = "<div class=\"alert alert-danger\" role=\"alert\">Data gagal terhapus</div>";
}

header("location: http://localhost/web/adminhacom/crudpemesanan/");