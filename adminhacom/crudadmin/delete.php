<?php 

require '../../config.php';
//MENGAMBIL ID DARI URL (METHOD GET)
$delete_id = $_GET['adm_id'];
$query = "DELETE FROM tb_admin WHERE adm_id='$delete_id'";

if(mysqli_query($koneksi, $query)){
    //JIKA DATABASE TERKONEKSI DAN QUERY DIEKSEKUSI 
    $_SESSION['flash'] = "<div class=\"alert alert-success\" role=\"alert\">Data telah terhapus</div>";
}else{
    $_SESSION['flash'] = "<div class=\"alert alert-danger\" role=\"alert\">Data gagal terhapus</div>";
}

header("location: http://localhost/web/adminhacom/crudadmin/");