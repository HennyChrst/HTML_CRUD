<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];
        $penulis = $_POST["penulis"];

        $query = mysqli_query($db, "INSERT INTO buku VALUES (
            NULL, '$nama', '$isbn', $unit, '$penulis'
        )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH BUKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Form Tambah Data Buku</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama</label>
                <input required name="nama" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ISBN</label>
                <input required name="isbn" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Unit</label>
                <input required name="unit" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Penulis</label>
                <input required name="penulis" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a class="btn btn-warning my-4" href="./index.php">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>