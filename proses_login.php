<?php
// Memulai session
session_start();

// Menghubungkan dengan koneksi database
include 'config/koneksi.php';

// Menangkap data dari form login dan mencegah SQL Injection
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = $_POST['password'];

// 1. Mencari username di database
$cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");

// 2. Jika username ditemukan (jumlah baris > 0)
if (mysqli_num_rows($cek) > 0) {
    // Ambil data admin tersebut dari database
    $data = mysqli_fetch_assoc($cek);
    
    // 3. Verifikasi: Cocokkan password ketikan dengan password hash di database
    if (password_verify($password, $data['password'])) {
        // Jika cocok, buat session login
        $_SESSION['status'] = "login";
        $_SESSION['user'] = "Administrator";
        
        // Simpan nama lengkap ke session agar bisa dipanggil di halaman admin
        $_SESSION['nama_lengkap'] = $data['nama_lengkap']; 
        
        // Arahkan ke halaman admin
        header("location:admin/index.php");
        exit;
    } else {
        // Jika password salah (Hash tidak cocok)
        header("location:login.php?pesan=gagal");
        exit;
    }
} else {
    // Jika username tidak ditemukan di database
    header("location:login.php?pesan=gagal");
    exit;
}
?>