<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 104</title>
</head>
<body>
    <?php 
    $array_hp = ["hp1", "hp2", "hp3"];
    $array_hp2 = ["hp1" => "samsung", "hp2" => "oppo", "hp3" => "xiaomi"];


    ?>

    <table>
        <tr>
            <th>Daftar HP</th>
        </tr>
        <tr>
            <td>
                <?= $array_hp[0]?>
            </td>
        </tr>
        <tr>
            <td>
                <?= $array_hp[1]?>
            </td>
        </tr>
        <tr>
            <td>
                <?= $array_hp["hp1"]?>
            </td>
        </tr>
    </table>
</body>
</html>