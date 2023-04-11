<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 4</title>
</head>
<body>
    <form action="" method="post">
        <label for="angka1">Panjang</label>
        <input type="number" name="angka1">
        <br>
        <label for="angka2">lebar</label>
        <input type="number" name="angka2">
        <br>
        <label for="data">Nilai</label>
        <input type="text" name="data">
        <button type="submit">submit</button>
    </form>
    <?php 
        if (isset($_POST)) {
            $data = $_POST['data'];
            $dataBaru = explode(" ", $data); // mecahin array
            echo "array hasil explode";
            echo "<br>";
            print_r($dataBaru);
            echo "array hasil explode";
            echo "<br>";
            print_r(array_chunk($dataBaru, $_POST["angka2"])); // misah array tiap bagian
        }
    ?>
</body>
</html>