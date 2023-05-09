<?php 
include_once("koneksi.php");

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$id = $_POST["id"];

$query = $conn->prepare("UPDATE mahasiswa SET nama = :nama, nim = :nim WHERE id = :id");

$query->execute(array(":nama" => $nama, ":nim" => $nim, ":id" => $id));


if($query->rowCount() > 0){
   header("Location: read.php");
} else {
    echo "data gagal ditambahkan";
}

?>