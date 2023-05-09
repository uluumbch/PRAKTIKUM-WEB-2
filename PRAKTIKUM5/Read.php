<?php 
include_once("koneksi.php");

$query = $conn->prepare("SELECT * from mahasiswa");

$query->execute();

$hasil = $query->fetchAll(PDO::FETCH_ASSOC);


echo "<a href='tambahdata.php'>Tambah Data</a><br>";

echo "<ul>";
foreach($hasil as $baris){
    // echo "Nama : " . $baris['nama'] . " NIM : " . $baris['nim'] . "<a href='editdata.php?id='". $baris['id'] . "<br>";
    echo "<li>". $baris['nama'] ." | ". $baris['nim']. 
            "<a href='editdata.php?id=". $baris['id']."'> | edit</a>  | 
            <a href='delete.php?id=". $baris['id']."'>hapus</a> 
        </li>";
}
echo "</ul>";
?>
