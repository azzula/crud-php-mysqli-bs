<?php
    include('connection.php');

    $id         = $_POST['id'];
    $nisn       = $_POST['nisn'];
    $name       = $_POST['name'];
    $address    = $_POST['address'];

    $query = "UPDATE tbl_student SET nisn = '$nisn', name = '$name', address = '$address' WHERE id = '$id'";

    $connection->query($query) ? header("location: index.php") : "Data Siswa Gagal Diperbarui!";
?>
