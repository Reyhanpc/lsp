<?php
include 'auth.php';
include '../config/koneksi.php';

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';

// ==========================================
// 1. PROSES TAMBAH DATA
// ==========================================
if($aksi == "tambah"){
    $judul     = $_POST['judul'];
    $tanggal   = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    
    $file_name = $_FILES['gambar']['name'];
    $file_tmp  = $_FILES['gambar']['tmp_name'];
    
    $upload = move_uploaded_file($file_tmp, '../assets/img/'.$file_name);
    
    if($upload) {
        $query = "INSERT INTO kegiatan (judul_kegiatan, deskripsi, tanggal_kegiatan, gambar) 
                  VALUES ('$judul', '$deskripsi', '$tanggal', '$file_name')";
        
        try {
            mysqli_query($koneksi, $query);
            header("location:index.php");
        } catch (mysqli_sql_exception $e) {
            // Redirect kembali ke form tambah sambil membawa sinyal error
            header("location:tambah.php?error=kepanjangan");
            exit;
        }
    } else {
         header("location:tambah.php?error=gambar");
         exit;
    }

// ==========================================
// 2. PROSES UPDATE DATA
// ==========================================
} elseif($aksi == "update"){
    $id        = $_POST['id']; 
    $judul     = $_POST['judul'];
    $tanggal   = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    
    if($_FILES['gambar']['name'] != ""){
        $file_name = $_FILES['gambar']['name'];
        $file_tmp  = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($file_tmp, '../assets/img/'.$file_name);
        
        $query = "UPDATE kegiatan SET judul_kegiatan='$judul', deskripsi='$deskripsi', tanggal_kegiatan='$tanggal', gambar='$file_name' WHERE id_kegiatan='$id'";
    } else {
        $query = "UPDATE kegiatan SET judul_kegiatan='$judul', deskripsi='$deskripsi', tanggal_kegiatan='$tanggal' WHERE id_kegiatan='$id'";
    }
    
    try {
        mysqli_query($koneksi, $query);
        header("location:index.php");
    } catch (mysqli_sql_exception $e) {
        // Redirect kembali ke form edit sambil membawa sinyal error dan ID
        header("location:edit.php?id=$id&error=kepanjangan");
        exit;
    }

// ==========================================
// 3. PROSES HAPUS DATA
// ==========================================
} elseif($aksi == "hapus"){
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM kegiatan WHERE id_kegiatan='$id'");
    header("location:index.php");
}
?>