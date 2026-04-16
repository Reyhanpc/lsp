<?php 
include 'layouts/header.php'; 
?>

<div class="container" style="min-height: 80vh; display: flex; align-items: center; justify-content: center;">
    <div class="row w-100 justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <h4 class="fw-bold text-purple">Login Admin</h4>
                        <p class="text-muted small">Silakan masuk untuk mengelola data</p>
                    </div>

                    <?php if(isset($_GET['pesan']) && $_GET['pesan'] == "gagal"): ?>
                        <div class="alert alert-danger border-0 small py-2 text-center" role="alert">
                            Username atau Password salah!
                        </div>
                    <?php endif; ?>

                    <form action="proses_login.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label small fw-bold">Username</label>
                            <input type="text" name="username" class="form-control rounded-0" id="username" placeholder="Masukkan username" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label small fw-bold">Password</label>
                            <input type="password" name="password" class="form-control rounded-0" id="password" placeholder="Masukkan password" required>
                        </div>
                        <button type="submit" class="btn btn-purple w-100 fw-bold py-2 shadow-sm">MASUK</button>
                    </form>
                    
                    <div class="text-center mt-4">
                        <a href="index.php" class="text-decoration-none text-muted small">← Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'layouts/footer.php'; ?>