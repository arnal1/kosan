<?php
session_start();

if(!isset($_SESSION['login'])){
  header("location:../login.php");
  exit;
}

include "../config.php";

$id = $_POST['id'];
$nama_kost = $_POST['nama_kost'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

$query = mysqli_query($koneksi,"UPDATE kost SET nama='$nama_kost',keterangan='$keterangan',harga='$harga' WHERE id='$id'");

if($query){
    header("location:../../admin/kost.php");
}else{
    header("location:../../admin/kost.php");
}
?>