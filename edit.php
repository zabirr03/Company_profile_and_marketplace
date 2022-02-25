<?php
    include('config.php');
    if (isset($_GET['pr_id']) && ($_GET['kuantitas']) && ($_GET['total'])) {  
        $id = $_GET['pr_id'];
        $kuan = $_GET['kuantitas'];
        $ttl = $_GET['total'];
    
    if(isset($_POST['save'])){
        
            $nama = $_POST['nama'];
            $notelp = $_POST['notelp'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $keterangan = $_POST['keterangan'];
            
            $sql = "INSERT INTO tb_pemesanan (pr_id, pm_nama, pm_notelp, pm_email, pm_alamat, pm_kuant, pm_total, pm_status, pm_keterangan, pm_tanggal) VALUES( $id, '$nama', '$notelp', '$email', '$alamat', $kuan, $ttl, 'BELUM', '$keterangan', now())";

            if(mysqli_query($koneksi, $sql)){
                header('Location: http://localhost/web/done.php');
            }else{
                echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal Disimpan</div>";
            }
        
        }
    }
    ?>