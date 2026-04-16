<?php 
// Memanggil layout bagian atas (Navbar dll)
include 'layouts/header.php'; 
?>

<div class="container mt-4 mb-5">
    <div class="row mb-4">
        <div class="col">
            <h2 class="border-bottom border-purple border-3 pb-2 text-purple">Hubungi Kami</h2>
        </div>
    </div>

    <div class="row g-4">
        
        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-purple text-white fw-bold">
                    🏢 Informasi Kontak Sekolah
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold text-purple mb-3">SMK Negeri 1 Dlanggu</h5>
                    <p class="card-text mb-2">
                        <strong>📍 Alamat:</strong><br>
                        Jl. Jend. A. Yani No. 1, Ds. Pohkecik, Kec. Dlanggu, <br>
                        Kab. Mojokerto, Jawa Timur 61371
                    </p>
                    <p class="card-text mb-2">
                        <strong>📞 Call Center / Telepon:</strong><br>
                        (0321) 513093
                    </p>
                    <p class="card-text mb-4">
                        <strong>✉️ Email:</strong><br>
                        info@smkn1dlanggu.sch.id
                    </p>
                    
                    <h6 class="fw-bold mb-2">Peta Lokasi:</h6>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://maps.google.com/maps?q=SMK%20Negeri%201%20Dlanggu,%20Mojokerto&t=&z=15&ie=UTF8&iwloc=&output=embed" class="rounded shadow-sm" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-purple text-white fw-bold">
                    👨‍💻 Profil Web Programmer
                </div>
                <div class="card-body d-flex flex-column align-items-center text-center">
                    <img src="https://ui-avatars.com/api/?name=Reyhan&background=6f42c1&color=fff&size=100" class="rounded-circle mb-3 shadow-sm border border-3 border-light" alt="Foto Programmer">
                    
                    <h4 class="card-title fw-bold text-purple mb-1">Reyhan Ardiansyah Efendi</h4>
                    <p class="text-muted small mb-2">Peserta Ujian LSP Junior Web Programmer</p>
                    <span class="badge bg-purple px-3 py-2 mb-4">No. Absen: 30</span>

                    <ul class="list-group list-group-flush w-100 text-start small">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="fw-bold text-muted">Status</span>
                            <span class="text-dark fw-medium">Siswa SMKN 1 Dlanggu</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="fw-bold text-muted">Email Pribadi</span>
                            <span class="text-dark fw-medium">reyhan@email.com</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="fw-bold text-muted">Keahlian Utama</span>
                            <span class="text-dark fw-medium text-end">PHP, MySQL</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="fw-bold text-muted">Nomor Hp</span>
                            <span class="text-dark fw-medium text-end">+62 838-3437-5842</span>
                        </li>
                    </ul>
                    
                    <div class="mt-auto pt-4 w-100">
                        <div class="p-3 bg-light rounded text-secondary small fst-italic">
                            "Website sistem informasi ini dikembangkan secara dinamis sebagai pemenuhan syarat kelulusan ujian kompetensi profesi dan persiapan Penilaian Sumatif Akhir Jenjang (PSAJ) 2026."
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php 
// Memanggil layout bagian bawah (Footer dll)
include 'layouts/footer.php'; 
?>