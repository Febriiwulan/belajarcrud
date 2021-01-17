<?php

require_once "db.php";
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$jenis_barang = $_POST['jenis_barang'];

$sql = "INSERT INTO databarang (id_barang, nama_barang, jumlah_barang, jenis_barang) VALUES ('".$id_barang."','".$nama_barang."','".$jumlah_barang."','".$jenis_barang."')";


if ($conn->query($sql)){
   header('Location: tables.php?status=success');
   echo "data berhasil disimpan";
}else{
    die("Error : " . $conn->connect_error);
    header('Location: tables.php?status=failed');
}
exit;
?>