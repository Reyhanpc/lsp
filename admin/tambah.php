<?php 
include 'auth.php'; 
include '../layouts/header.php'; 

// Menangkap status error dari URL
$error = isset($_GET['error']) ? $_GET['error'] : '';
$kelas_error = ($error == 'kepanjangan') ? 'is-invalid' : '';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-0 shadow-sm p-3">
                <h4 class="fw-bold text-purple mb-4 px-3">Tambah Data Kegiatan</h4>
                <form action="aksi_kegiatan.php?aksi=tambah" method="post" enctype="multipart/form-data" class="card-body">
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-end mb-1">
                            <label class="form-label small fw-bold mb-0">Judul Kegiatan</label>
                            <small id="charCount" class="fw-bold text-muted">0/255</small>
                        </div>
                        
                        <input type="text" id="inputJudul" name="judul" class="form-control rounded-0 <?php echo $kelas_error; ?>" placeholder="Masukkan judul kegiatan..." required>
                        
                        <div id="errorTeks" class="invalid-feedback fw-bold">
                            Judul terlalu panjang! Batas maksimal adalah 255 karakter.
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Tanggal Kegiatan</label>
                        <input type="date" name="tanggal" class="form-control rounded-0" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control rounded-0" rows="4" placeholder="Jelaskan detail kegiatan..." required></textarea>
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label small fw-bold">Upload Gambar</label>
                        <input type="file" name="gambar" class="form-control rounded-0" required>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="index.php" class="btn btn-light rounded-0 px-4">Batal</a>
                        <button type="submit" id="btnSimpan" class="btn btn-purple rounded-0 px-5 shadow-sm">Simpan</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const inputJudul = document.getElementById('inputJudul');
    const charCount = document.getElementById('charCount');
    const btnSimpan = document.getElementById('btnSimpan');

    inputJudul.addEventListener('input', function() {
        const panjang = this.value.length;
        charCount.textContent = panjang + '/255';

        if (panjang > 255) {
            // Jika melebihi 255 (misal 276/255)
            charCount.classList.replace('text-muted', 'text-danger');
            this.classList.add('is-invalid'); // Box jadi merah
        } else {
            // Jika masih aman
            charCount.classList.replace('text-danger', 'text-muted');
            this.classList.remove('is-invalid'); // Box normal
        }
    });
</script>

<?php include '../layouts/footer.php'; ?>