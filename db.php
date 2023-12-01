<?php   
    $hostname = 'localhost';
    $usernmae = 'root';
    $password = '';
    $dbname = 'db_bukawarung';

    $conn = mysqli_connect($hostname, $usernmae, $password, $dbname) or die ('Gagal terhubung ke database');
?>