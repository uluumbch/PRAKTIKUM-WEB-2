<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRAK2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>PRAK201</h1>
    <form action="" method="get">
        <div class="mb-3"> 
            <label for="name1" class="form-label">Nama 1</label>
            <input type="text" id="name1" name="name1">
        </div>

        <div class="mb-3"> 
            <label for="name2" class="form-label">Nama 2</label>
            <input type="text" id="name2" name="name2">
        </div>

        <div class="mb-3"> 
            <label for="name3" class="form-label">Nama 3</label>
            <input type="text" id="name3" name="name3">
        </div>

        <div class="mb-3"> 
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <?php   
        if(isset($_GET['name1']) && isset($_GET['name2']) && isset($_GET['name3'])){
            $arrName = array($_GET['name1'], $_GET['name2'], $_GET['name3']);
            echo "<h2>Hasil</h2>";
            // sort name using if else
            if($arrName[0] < $arrName[1] && $arrName[0] < $arrName[2]){
                if($arrName[1] < $arrName[2]){
                    echo $arrName[0] . "<br>";
                    echo $arrName[1] . "<br>";
                    echo $arrName[2] . "<br>";
                }else{
                    echo $arrName[0] . "<br>";
                    echo $arrName[2] . "<br>";
                    echo $arrName[1] . "<br>";
                }
            }else if($arrName[1] < $arrName[0] && $arrName[1] < $arrName[2]){
                if($arrName[0] < $arrName[2]){
                    echo $arrName[1] . "<br>";
                    echo $arrName[0] . "<br>";
                    echo $arrName[2] . "<br>";
                }else{
                    echo $arrName[1] . "<br>";
                    echo $arrName[2] . "<br>";
                    echo $arrName[0] . "<br>";
                }
            }else{
                if($arrName[0] < $arrName[1]){
                    echo $arrName[2] . "<br>";
                    echo $arrName[0] . "<br>";
                    echo $arrName[1] . "<br>";
                }else{
                    echo $arrName[2] . "<br>";
                    echo $arrName[1] . "<br>";
                    echo $arrName[0] . "<br>";
                }
            }
        }
    ?>
    <h1>PRAK202</h1>
    <form action="" method="get">
        <div class="mb-3"> 
            <label for="name" class="form-label">Nama </label>
            <input type="text" id="name" name="name">
            <span class="text-danger">* <?php if (isset($_GET['sb2']) && $_GET['name'] == "") 
                echo "tidak boleh kosong";
            ?></span>
        </div>

        <div class="mb-3"> 
            <label for="nim" class="form-label">NIM</label>
            <input type="text" id="nim" name="nim"> <span class="text-danger">*</span>
        </div>
        <div class="mb-3">
            <p>Jenis Kelamin : <span class="text-danger">*</span>
            </p>
            <input type="radio" name="jk" id="jkp" value="Laki-Laki">
            <label for="jkp">Laki-Laki</label>
            <input type="radio" name="jk" id="jkw" value="Perempuan">
            <label for="jkw">Perempuan</label>

        </div>

        <div class="mb-3"> 
            <button type="submit" name="sb2" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <?php   
        if(isset($_GET['sb2']) && $_GET['name'] != "" && isset($_GET['jk']) && $_GET['nim'] != "" ){
            $name = $_GET['name'];
            $nim = $_GET['nim'];
            $jk = $_GET['jk'];
            echo "<h2>Hasil</h2>";
            echo "Nama : $name <br>";
            echo "NIM : $nim <br>";
            echo "Jenis Kelamin : $jk <br>";
        }
    ?>

    <h1>PRAK203</h1>
    <form action="" method="get">
        <div class="mb-3">
            <label for="suhu" class="form-label">Suhu</label>
            <input type="text" id="suhu" name="suhuinput">
            <p>Dari : </p>
            <input type="radio" name="suhuAsal" id="suhuAsalc" value="c">
            <label for="suhuAsalc">Celcius</label>
            <br>
            <input type="radio" name="suhuAsal" id="suhuAsalr" value="r">
            <label for="suhuAsalr">Reamur</label>
            <br>
            <p>Ke :</p>
            <input type="radio" name="suhuTujuan" id="suhuTujuanc" value="c">
            <label for="suhuTujuanc">Celcius</label>
            <br>
            <input type="radio" name="suhuTujuan" id="suhuTujuanR" value="r">
            <label for="suhuTujuanR">Reamur</label>
        </div>

        <div class="mb-3"> 
            <button type="submit" name="sb3" class="btn btn-primary">Submit</button>
        </div>

    </form>
    <?php 
        if(isset($_GET['sb3']) && isset($_GET['suhuinput']) && isset($_GET['suhuAsal']) && isset($_GET['suhuTujuan'])){
            $suhu = $_GET['suhuinput'];
            $suhuAsal = $_GET['suhuAsal'];
            $suhuTujuan = $_GET['suhuTujuan'];
            if($suhuAsal == "c" && $suhuTujuan == "r"){
                $hasil = $suhu * 0.8;
                echo "Hasil : $hasil";
            }else if($suhuAsal == "r" && $suhuTujuan == "c"){
                $hasil = $suhu * 1.25;
                echo "Hasil : $hasil";
            }else{
                echo "Hasil : $suhu";
            }
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>