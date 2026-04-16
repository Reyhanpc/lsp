<?php 
include 'auth.php'; 
include '../config/koneksi.php'; 
include '../layouts/header.php'; 
?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-purple">Panel Administrator</h2>
        <div>
            <a href="tambah.php" class="btn btn-purple px-4 shadow-sm">Tambah Kegiatan</a>
            <a href="../logout.php" class="btn btn-danger px-4 shadow-sm ms-2">Logout</a>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="py-3">Gambar</th>
                        <th class="py-3">Judul</th>
                        <th class="py-3">Tanggal</th>
                        <th class="py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM kegiatan ORDER BY tanggal_kegiatan DESC");
                    while($d = mysqli_fetch_array($query)){
                    ?>
                    <tr class="align-middle">
                        <td class="px-4"><?php echo $no++; ?></td>
                        <td><img src="../assets/img/<?php echo $d['gambar']; ?>" width="70" class="rounded"></td>
                        <td class="fw-bold"><?php echo $d['judul_kegiatan']; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($d['tanggal_kegiatan'])); ?></td>
                        <td class="text-center">
                            <a href="edit.php?id=<?php echo $d['id_kegiatan']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="aksi_kegiatan.php?id=<?php echo $d['id_kegiatan']; ?>&aksi=hapus" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include '../layouts/footer.php'; ?>