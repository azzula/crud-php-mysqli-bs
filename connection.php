<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "db_school";    

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    $connection ? "Koneksi Berhasil!" : "Koneksi Gagal! : ". mysqli_connect_error();
?>
