<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

    <!-- CSS Here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div id="con" class="card-header">Data Siswa</div>

                    <div class="card-body">
                        <a href="create.php" class="btn btn-primary" style="margin-bottom: 10px">Tambah Data</a>

                        <table class="table table-bordered" id="tblSiswa">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    include('connection.php');
                                    $no = 1;
                                    $query = mysqli_query($connection, "SELECT * FROM tbl_student");
                                    while($row = mysqli_fetch_array($query)){
                                ?>

                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row['nisn'] ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td class="text-center">
                                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a>
                                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JS Here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#tblSiswa').DataTable();
        } );
    </script>
</body>
</html>
