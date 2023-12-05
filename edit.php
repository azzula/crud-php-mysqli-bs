<?php 
    include('connection.php');
  
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_student WHERE id = $id LIMIT 1";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>

    <!-- CSS Here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Edit Siswa</div>

                    <div class="card-body">
                        <form action="update.php" method="post">
                            <div class="mb-3">
                                <label for="nisn" class="form-label">NISN</label>
                                <input type="text" name="nisn" id="nisn" value="<?php echo $row['nisn'] ?>" placeholder="Masukkan NISN Siswa" class="form-control">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name" id="name" value="<?php echo $row['name'] ?>" placeholder="Masukkan Nama Lengkap Siswa" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat Lengkap</label>
                                <textarea name="address" id="address" rows="4" class="form-control" placeholder="Masukkan Alamat Siswa Lengkap"><?php echo $row['address'] ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Perbarui</button>
                            <a href="index.php" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
</body>
</html>
