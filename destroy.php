<?php
    include('connection.php');

    $id = $_GET['id'];
    $query = "DELETE FROM tbl_student WHERE id = '$id'";

    $connection->query($query) ? header("location: index.php") : "Data Siswa Gagal Dihapus!";
?>
