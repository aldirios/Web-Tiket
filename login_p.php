<?php

$user = $_POST['username'];
$pass = $_POST['password'];

if($user == "a" & $pass=="a") {
    echo "<script>window.alert('Selamat, Anda berhasil Sign In!!');window.location.href='home.php';</script>";
} else {
    echo "<script>window.alert('Gagal Sign In!!');window.location.href='login.php';</script>";
}
