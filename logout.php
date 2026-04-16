<?php 
// Memulai session
session_start();

// Menghapus semua data session
session_destroy();

// Mengarahkan (redirect) ke halaman utama sesuai instruksi soal
header("location:index.php");
?>