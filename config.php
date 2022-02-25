<?php
    $WEB_CONFIG = [
        'app_name' => 'HACOM SURABAYA', 
        'base_url' => 'http://localhost/web/'
       ];
       
       //DATABASE CONFIG
       $DB_CONFIG = [
        'host' => 'localhost',
        'user' => 'u3247238_hacom',
        'passwd' => 'hacomitcsby',
        'db_name' => 'u3247238_hacomsby'
       ];  
       //KONEK KE MYSQL
       $koneksi = mysqli_connect($DB_CONFIG['host'], $DB_CONFIG['user'], $DB_CONFIG['passwd'], $DB_CONFIG['db_name']);
       
?>