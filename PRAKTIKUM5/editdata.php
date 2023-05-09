<?php 
include_once("koneksi.php");

$id = $_GET["id"];

$query = $conn->prepare("SELECT * FROM mahasiswa WHERE id =". $id);

$query->execute();

$hasil = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $hasil[0]['id']?>">
        <label for="nama">Nama : </label>
        <input  type="text" name="nama" value="<?= $hasil[0]['nama'] ?>">
        <br>
        <label for="nim">NIM : </label>
        <input type="text" name="nim" value="<?= $hasil[0]['nim'] ?>">
        <br>
        <button class="btn btn-primary" type="submit">ubah</button>
    </form>
</body>
</html>