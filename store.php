<?php
    include('connection.php');

    $nisn       = $_POST['nisn'];
    $name       = $_POST['name'];
    $address    = $_POST['address'];

    $query = "INSERT INTO tbl_student (nisn, name, address) VALUES ('$nisn', '$name', '$address')";

    $connection->query($query) ? header("location: index.php") : "Data Siswa Gagal Tersimpan!"
?>
