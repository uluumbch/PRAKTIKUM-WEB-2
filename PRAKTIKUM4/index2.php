<?php

$data =
[
    [
    "nama" => "Andi",
    "nim" => "20121",
    "uts" => 90,
    "uas" => 100
    ],
    [
        "nama" => "Budi",
        "nim" => "20129",
        "uts" => 60,
        "uas" => 70
        ],
    ];

for ($i=0; $i < count($data); $i++) { 
    $data[$i]["nilai_akhir"] = $data[$i]["uts"] * (40/100) + (60/100) * $data[$i]["uts"] ;
    // $data[$i]["huruf"] =  if  $data[$i]["nilai_akhir"] > A
}

// print_r($data);

$datasoal3 = 
[
    [
    "no" => 1,
    "nama" => "Andi",
    "matkul" => ["Pemrograman 1", "Basis Data 1"],
    "sks" => [2, 2],
    ],
    [
    "nama" => "Budi",
    "matkul" => ["Pemrograman 1", "Basis Data 1", "Praktikum Pemrograman 1"],
    "sks" => [2, 2, 1],
    ],
];

for ($i=0; $i < count($datasoal3); $i++) { 
    $datasoal3[$i]["total sks"] = array_sum($datasoal3[$i]["sks"]); // buat menghitung total penjumlahn dari sebuah array
}

print_r($datasoal3);