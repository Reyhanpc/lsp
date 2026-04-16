<?php 
// Memastikan session dimulai agar bisa mengecek status login
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Logika otomatis untuk menentukan path/jalur link
// Jika file ini dipanggil dari folder admin, maka perlu mundur satu folder (../)
$direktori_sekarang = basename(dirname($_SERVER['PHP_SELF']));
$path = ($direktori_sekarang == 'admin') ? '../' : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Dlanggu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { 
            --ungu-utama: #6f42c1; 
            --ungu-gelap: #5a32a3; 
        }
        .bg-purple { background-color: var(--ungu-utama) !important; }
        .btn-purple { 
            background-color: var(--ungu-utama); 
            color: white; 
            border-radius: 4px; 
        }
        .btn-purple:hover { 
            background-color: var(--ungu-gelap); 
            color: white; 
        }
        .text-purple { color: var(--ungu-utama); }
        .nav-link:hover { color: #d1b9ff !important; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-purple py-2 shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="<?php echo $path; ?>index.php">
            <img src="<?php echo $path; ?>assets/img/logo.png" alt="Logo SMKN 1 Dlanggu" width="40" height="40" class="me-2 rounded-circle bg-white p-1 shadow-sm">
            <span class="d-none d-sm-inline">SMKN 1 DLANGGU</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link px-3" href="<?php echo $path; ?>index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="<?php echo $path; ?>kontak.php">Hubungi Kami</a></li>
                
                <?php if (!isset($_SESSION['status']) || $_SESSION['status'] != "login"): ?>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-light text-purple fw-bold px-4 shadow-sm" href="<?php echo $path; ?>login.php">Login</a>
                </li>
                <?php else: ?>
                <li class="nav-item ms-lg-3">
                    <a class="nav-link fw-bold text-white border border-white rounded px-3 ms-2" href="<?php echo $path; ?>admin/index.php">Dashboard Admin</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>