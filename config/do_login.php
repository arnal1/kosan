<?php

include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username'");

if(mysqli_num_rows($result)===1){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row['password'])){
        echo "<script>
            alert('Login Berhasil');
            window.location.href='../admin/index.php'; 
        </script>";
    } else {
        echo "<script>
            alert('Login Gagal! Password Salah');
            window.location.href='../login.php'; 
        </script>";
    }
} else {
    echo "<script>
        alert('Login Gagal! Username Tidak Terdaftar');
        window.location.href='../login.php';
    </script>";
}

?>