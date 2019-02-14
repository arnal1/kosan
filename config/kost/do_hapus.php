<?php
include "../config.php";
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM kost WHERE id='$id'");

if($query){
    header("location:../../admin/kost.php");

}else{
    header("location:../../admin/kost.php");
}
?>