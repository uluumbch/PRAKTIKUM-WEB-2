<?php 
include_once("koneksi.php");

$nama = $_POST["nama"];
$nim = $_POST["nim"];

$query = $conn->prepare("INSERT INTO mahasiswa (nama, nim) VALUES (:nama, :nim)");

$query->execute(array(":nama" => $nama, ":nim" => $nim));


if($query->rowCount() > 0){
   header("Location: read.php");
} else {
    echo "data gagal ditambahkan";
}

?>