<?php
include 'config/koneksi.php';
include 'layouts/header.php';
?>

<div class="py-5 bg-light border-bottom">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold text-dark">Selamat Datang di SMKN 1 Dlanggu</h1>
        <p class="lead text-secondary mx-auto" style="max-width: 700px;">
            Pusat informasi kegiatan, prestasi, dan agenda terbaru seluruh civitas akademika SMK Negeri 1 Dlanggu.
        </p>
        <div class="mt-4">
            <a href="#kegiatan" class="btn btn-purple px-4 py-2 fw-bold shadow-sm">Lihat Kegiatan</a>
            <a href="#jurusan" class="btn btn-outline-secondary px-4 py-2 ms-2 shadow-sm">Program Keahlian</a>
        </div>
    </div>
</div>

<div class="container my-5 py-4" id="kegiatan">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold text-purple m-0">Kegiatan Terbaru</h2>
            <p class="text-muted m-0">Agenda terkini yang baru saja dilaksanakan.</p>
        </div>
        <div class="col-md-6 text-md-end mt-3 mt-md-0">
            <div class="badge bg-purple px-3 py-2 shadow-sm">Terupdate secara Dinamis</div>
        </div>
    </div>

    <div class="row g-4">
        <?php
        $query = "SELECT * FROM kegiatan ORDER BY tanggal_kegiatan DESC";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $id_modal = "modalKegiatan" . $data['id_kegiatan'];
        ?>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <div style="height: 220px; position: relative;">
                            <img src="assets/img/<?php echo $data['gambar']; ?>" class="w-100 h-100" style="object-fit: cover;" alt="Kegiatan">
                            <div class="position-absolute top-0 end-0 m-2">
                                <span class="badge bg-white text-purple shadow-sm px-3 py-2">
                                    <?php echo date('d M Y', strtotime($data['tanggal_kegiatan'])); ?>
                                </span>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold mb-3 text-dark"><?php echo $data['judul_kegiatan']; ?></h5>
                            <p class="card-text text-muted small mb-4" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-align: justify;">
                                <?php echo $data['deskripsi']; ?>
                            </p>
                            <button type="button" class="btn btn-link text-purple p-0 fw-bold text-decoration-none" data-bs-toggle="modal" data-bs-target="#<?php echo $id_modal; ?>">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="<?php echo $id_modal; ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header bg-purple text-white">
                                <h5 class="modal-title fw-bold">Detail Kegiatan</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <img src="assets/img/<?php echo $data['gambar']; ?>" class="w-100 rounded mb-4 shadow-sm" style="max-height: 400px; object-fit: cover;">
                                <h3 class="fw-bold text-purple mb-1"><?php echo $data['judul_kegiatan']; ?></h3>
                                <p class="text-muted small mb-4">Dilaksanakan pada: <strong><?php echo date('d F Y', strtotime($data['tanggal_kegiatan'])); ?></strong></p>
                                <hr>
                                <h6 class="fw-bold">Deskripsi Lengkap:</h6>
                                <p class="text-secondary" style="line-height: 1.8; text-align: justify;">
                                    <?php echo nl2br($data['deskripsi']); ?>
                                </p>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-secondary rounded-0 px-4" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<div class='col-12 text-center py-5'><p class='text-muted'>Belum ada data kegiatan.</p></div>";
        }
        ?>
    </div>
</div>

<div class="bg-purple text-white py-5 mt-5" id="jurusan">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold m-0">Kompetensi Keahlian</h2>
            <p class="text-light mt-2 opacity-75">Pilihan program studi unggulan yang ada di SMK Negeri 1 Dlanggu</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="card-body">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#6f42c1" class="bi bi-laptop" viewBox="0 0 16 16">
                                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold text-dark mb-3">Rekayasa Perangkat Lunak</h5>
                        <p class="text-muted small mb-0">Mempelajari pengembangan aplikasi berbasis web, mobile, desktop, serta pengelolaan basis data secara profesional.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="card-body">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#6f42c1" class="bi bi-hdd-network" viewBox="0 0 16 16">
                                <path d="M4.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM3 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm2 7a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2.5.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                <path d="M2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h5.5v3A1.5 1.5 0 0 0 6 11.5H.5a.5.5 0 0 0 0 1H6A1.5 1.5 0 0 0 7.5 14h1a1.5 1.5 0 0 0 1.5-1.5h5.5a.5.5 0 0 0 0-1H10A1.5 1.5 0 0 0 8.5 10V7H14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm0 1h12a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm6 7.5v2a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold text-dark mb-3">Teknik Komputer Jaringan</h5>
                        <p class="text-muted small mb-0">Fokus pada perakitan komputer, pemeliharaan hardware, instalasi jaringan lokal (LAN) hingga administrasi server.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="card-body">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#6f42c1" class="bi bi-palette" viewBox="0 0 16 16">
                                <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                <path d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284 1.064.326 1.758.539 1.758.051a7 7 0 1 0-14 0c0 3.866 3.134 7 7 7z"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold text-dark mb-3">Desain Komunikasi Visual</h5>
                        <p class="text-muted small mb-0">Mendalami ilmu desain grafis, ilustrasi digital, videografi, serta pembuatan konten kreatif untuk berbagai media digital.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="card-body">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#6f42c1" class="bi bi-film" viewBox="0 0 16 16">
                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm4 0v6h8V1zm8 8H4v6h8zM1 1v2h2V1zm2 3H1v2h2zM1 7v2h2V7zm2 3H1v2h2zm-2 3v2h2v-2zM15 1h-2v2h2zm-2 3v2h2V4zm2 3h-2v2h2zm-2 3v2h2v-2zm2 3h-2v2h2z"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold text-dark mb-3">Animasi</h5>
                        <p class="text-muted small mb-0">Mempelajari teknik pembuatan animasi 2D dan 3D, efek visual, storyboarding, hingga proses pasca-produksi industri kreatif.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="card-body">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#6f42c1" class="bi bi-buildings" viewBox="0 0 16 16">
                                <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z"/>
                                <path d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold text-dark mb-3">Perhotelan</h5>
                        <p class="text-muted small mb-0">Membekali siswa dengan keahlian operasional hotel, mulai dari front office, tata graha (housekeeping), hingga pelayanan tamu.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="card-body">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#6f42c1" class="bi bi-cup-hot" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6zM13 12.5a2.01 2.01 0 0 1-.316-.225l.684-3.079a2 2 0 1 1 1.48 2.217l-.132.59A2 2 0 0 1 13 12.5M11.66 14.88c.032-.016.064-.034.095-.054.444-.282.808-.729 1-1.28l.848-3.816a1 1 0 0 0-.96-1.214H1.472a1 1 0 0 0-.96 1.214l1.652 7.434a1.5 1.5 0 0 0 1.464 1.174h5.792a1.5 1.5 0 0 0 1.284-.664l.956-2.793z"/>
                                <path d="M2.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                <path d="M5.5 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5M3.733 1.185a.5.5 0 0 0-.309.646c.15.422.091.958-.198 1.637-.175.409-.328.777-.328 1.032 0 .552.448 1 1 1 .553 0 1-.448 1-1 0-.255-.153-.623-.328-1.032-.289-.679-.348-1.215-.198-1.637a.5.5 0 0 0-.646-.646zm2.5 0a.5.5 0 0 0-.309.646c.15.422.091.958-.198 1.637-.175.409-.328.777-.328 1.032 0 .552.448 1 1 1 .553 0 1-.448 1-1 0-.255-.153-.623-.328-1.032-.289-.679-.348-1.215-.198-1.637a.5.5 0 0 0-.646-.646zm2.5 0a.5.5 0 0 0-.309.646c.15.422.091.958-.198 1.637-.175.409-.328.777-.328 1.032 0 .552.448 1 1 1 .553 0 1-.448 1-1 0-.255-.153-.623-.328-1.032-.289-.679-.348-1.215-.198-1.637a.5.5 0 0 0-.646-.646z"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold text-dark mb-3">Tata Boga</h5>
                        <p class="text-muted small mb-0">Fokus pada pengolahan makanan nusantara maupun kontinental, pastry & bakery, serta manajemen tata hidang profesional.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'layouts/footer.php'; ?>