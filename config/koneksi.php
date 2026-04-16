<?php
$host = "localhost";
$user = "root";
$pass = "";
// Pastikan nama database di bawah ini persis dengan yang ada di phpMyAdmin
$db   = "30_reyhan ardiansyah efendi"; 

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>