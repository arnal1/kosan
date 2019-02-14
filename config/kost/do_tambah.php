<?php

session_start();

if(!isset($_SESSION['login'])){
  header("location:../login.php");
  exit;
}

include "../config.php";
$nama_kost = $_POST['nama_kost'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];
$gambar = $_POST['gambar'];

$query = mysqli_query($koneksi,"INSERT INTO kost VALUES('','$nama_kost','$keterangan','$harga','$gambar')");

if($query){
    header("location:../../admin/kost.php");

}else{
    header("location:../../admin/kost.php");
}
?>