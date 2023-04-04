<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
    <style>
        .merah{
            color: red;
        }

        .hijau{
            color: green;
        }
    </style>
</head>
<body>
    <?php 

    // merubah string menjadi huruf kecil
        $text = "AbCDEf";
        $textArr = str_split(strtolower($text));
        echo strtoupper($text);
        echo "<br>";
        var_dump($textArr);

        // for loop
        for ($i=0; $i < 10; $i++) { 
            if ($i %2 ==0) {
                echo "<p class='hijau'>perulangan ke $i</p>";    
            }else{

                echo "<p class='merah'>perulangan ke $i</p>";
            }
            echo "<br>";
        }

        echo "<br>";
        // while loop
        $angka = 1;
        while ($angka < 10) {
            echo $angka;
            $angka++;
        };

        echo "<br>";
        //  do while
        $a = 1;
        do {
            echo $a;
            $a++;
        } while ($a <= 10);

        echo "<br>";
        // foreach loop
        $array = ['A', 'B', 'C', 'D'];
        $arrayAssoc = [
            "data1"=> 'A',
            "data2"=> 'B',
        ];
        foreach ($arrayAssoc as $key => $value) {
            echo $value;
            echo "<br>";
            echo $key;
        }
    ?>
</body>
</html>