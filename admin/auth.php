<?php
session_start();

// Cek apakah status session sudah 'login'
if ($_SESSION['status'] != "login") {
    // Jika belum login, tendang balik ke halaman login utama
    header("location:../login.php?pesan=belum_login");
    exit;
}
?>