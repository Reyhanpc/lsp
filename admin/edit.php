<?php 
include 'auth.php'; 
include '../config/koneksi.php'; 
include '../layouts/header.php'; 

// Ambil ID dari URL
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE id_kegiatan='$id'");
$d = mysqli_fetch_array($data);

// Menangkap status error dari URL
$error = isset($_GET['error']) ? $_GET['error'] : '';
$kelas_error = ($error == 'kepanjangan') ? 'is-invalid' : '';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-0 shadow-sm p-3">
                <h4 class="fw-bold text-purple mb-4 px-3">Update Data Kegiatan</h4>
                <form action="aksi_kegiatan.php?aksi=update" method="post" enctype="multipart/form-data" class="card-body">
                    
                    <input type="hidden" name="id" value="<?php echo $d['id_kegiatan']; ?>">
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-end mb-1">
                            <label class="form-label small fw-bold mb-0">Judul Kegiatan</label>
                            <small id="charCount" class="fw-bold text-muted">0/255</small>
                        </div>
                        
                        <input type="text" id="inputJudul" name="judul" class="form-control rounded-0 <?php echo $kelas_error; ?>" value="<?php echo $d['judul_kegiatan']; ?>" required>
                        
                        <div id="errorTeks" class="invalid-feedback fw-bold">
                            Judul terlalu panjang! Batas maksimal adalah 255 karakter.
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Tanggal Kegiatan</label>
                        <input type="date" name="tanggal" class="form-control rounded-0" value="<?php echo $d['tanggal_kegiatan']; ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control rounded-0" rows="4" required><?php echo $d['deskripsi']; ?></textarea>
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label small fw-bold">Ganti Gambar (Opsional)</label>
                        <input type="file" name="gambar" class="form-control rounded-0">
                        <p class="text-muted small mt-2">Gambar saat ini: <strong><?php echo $d['gambar']; ?></strong></p>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="index.php" class="btn btn-light rounded-0 px-4">Batal</a>
                        <button type="submit" class="btn btn-purple rounded-0 px-5 shadow-sm">Update</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const inputJudul = document.getElementById('inputJudul');
    const charCount = document.getElementById('charCount');

    // Fungsi untuk memperbarui tampilan counter
    function updateCounter() {
        const panjang = inputJudul.value.length;
        charCount.textContent = panjang + '/255';

        if (panjang > 255) {
            charCount.classList.replace('text-muted', 'text-danger');
            inputJudul.classList.add('is-invalid');
        } else {
            charCount.classList.replace('text-danger', 'text-muted');
            inputJudul.classList.remove('is-invalid');
        }
    }

    // Jalankan fungsi saat pertama kali halaman dimuat (untuk menghitung judul dari DB)
    updateCounter();

    // Jalankan fungsi setiap kali ada input (ketikan atau paste)
    inputJudul.addEventListener('input', updateCounter);
</script>

<?php include '../layouts/footer.php'; ?>