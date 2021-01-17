<?php

require_once "db.php";
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$jenis_barang = $_POST['jenis_barang'];
    

$sql = "UPDATE databarang SET nama_barang = '".$nama_barang."', jumlah_barang= '".$jumlah_barang."', jenis_barang= '".$jenis_barang."'
 WHERE id_barang = '".$id_barang."'";

header("location:tables.php?pesan=data-berhasil-diupdate");

if ($conn->query($sql)){
    echo "Data sudah di update";
    header: ('Location : tables.php');
}else{
    die("Error : " . $conn->connect_error);
}
die;
?>