<?php
    require '../config.php';

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tb_admin WHERE adm_username='$username' AND adm_password='$password'";
        $result = mysqli_query($koneksi, $sql);
        $login = mysqli_num_rows($result);

        if($login > 0){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location: http://localhost/web/adminhacom/landingpage.php");
        }else{
            header("location: http://localhost/web/adminhacom/index.php?error=error");
        }
    }
?>