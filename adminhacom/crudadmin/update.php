<?php 
require '../../config.php';
if(isset($_POST['save'])){
        $id = $_GET['adm_id'];   
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['confirm'];

    if($password == $konfirmasi){  
        $sql = "UPDATE tb_admin SET adm_username='$username', adm_password='$password' WHERE adm_id='$id'";
        mysqli_query($koneksi, $sql) or die("<b>Error</b> Ada kesalahan<br/>" . mysqli_error($koneksi));
        echo "<div class=\"alert alert-success\" role=\"alert\">Berhasil Disimpan</div>";
    }else{
        echo "<div class=\"alert alert-danger\" role=\"alert\">PASSWORD HARUS SAMA!!!</div>";
    }
    
 
}



$id = $_GET['adm_id'];
$query1 = "SELECT * FROM tb_admin WHERE adm_id = $id";


$result = mysqli_query($koneksi, $query1);


$data = mysqli_fetch_array($result);

 ?>

<a href="<?= $WEB_CONFIG['base_url'] ?>/adminhacom/crudadmin/index.php" class="btn btn-warning mb-3">
    <svg style="width:20px;height:20px" viewBox="0 0 24 24">
        <path fill="#000000" d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M18,11H10L13.5,7.5L12.08,6.08L6.16,12L12.08,17.92L13.5,16.5L10,13H18V11Z" />
    </svg> Back To Data
</a>
<div class="container">
<form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $data['adm_username'] ?>" id="username" maxlength="100" required autofocus>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" value="<?= $data['adm_password'] ?>" id="password" maxlength="32" placeholder="Masukkan password" required>
        </div>
        <div class="form-group" style="margin-top: 10px;">
            <label for="confirm">Konfirmasi Password</label>
            <input type="password" class="form-control" id="confirm" value="<?= $data['adm_password'] ?>" name="confirm" placeholder="Konfirmasi Password"  required>
        </div>
        <input type="submit" class="btn btn-primary m-1" name="save" value="Simpan">
        <br/>
    </form>
    <br/>
</div>