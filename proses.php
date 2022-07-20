<?php 

$jenis = $_POST['jenis'];
$merek = $_POST['merek'];
$kuantitas = $_POST['kuantitas'];
$kondisi = $_POST['kondisi'];
$keterangan = $_POST['keterangan'];

$fp = fopen("gudang.txt", "a+");
fputs($fp, "$jenis|$merek|$kuantitas|$kondisi|$keterangan\n");
fclose($fp);

@include("index.php");
echo("<center>data berhasil di inputkan</center>")

 ?>



