<?php 
include_once("koneksi.php");

$id = $_GET["id"];

$query = $conn->prepare("DELETE FROM mahasiswa WHERE id = :id");

$query->execute(array(":id" => $id));

if($query->rowCount() > 0){
    header("Location: read.php");
 } else {
     echo "data gagal ditambahkan";
 }
 
?>