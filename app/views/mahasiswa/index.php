<?php
require_once __DIR__ . '/../../helpers/url.php';
include __DIR__ . '/../templates/head.php';
include __DIR__ . '/../templates/navbar.php';
include __DIR__ . '/../templates/sidebar.php';
?>

<h2 class="my-3">Data Mahasiswa</h2>
<a href="<?= base_url('mahasiswa/create') ?>" class="btn btn-success mb-3 btn-sm rounded-3"><i class="fa fa-plus"></i> Tambah Mahasiswa</a>

<?php if (isset($_SESSION['success_message'])): ?>
    <div class="toast-container position-fixed top-0 end-0 p-3" style="margin-top: 50px; z-index: 1050;">
        <div class="toast align-items-center text-white bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?= $_SESSION['success_message']; ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php unset($_SESSION['success_message']); ?>
<?php endif; ?>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($mahasiswas)): ?>
                <?php $no = 1 ?>
                <?php foreach ($mahasiswas as $mahasiswa): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($mahasiswa->nama); ?></td>
                        <td><?= htmlspecialchars($mahasiswa->nim); ?></td>
                        <td><?= htmlspecialchars($mahasiswa->jurusan_nama); ?></td>
                        <td>
                            <a href="<?= base_url('/mahasiswa/edit/' . $mahasiswa->id) ?>" class="btn btn-warning btn-sm rounded-3"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="<?= base_url('/mahasiswa/delete/' . $mahasiswa->id) ?>" class="btn btn-danger btn-sm rounded-3" onclick="return confirm('YYakin ingin menghapus mahasiswa ini? Semua data terkait, seperti nilai, juga akan ikut terhapus.')"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data mahasiswa.</td>
                </tr>
            <?php endif; ?>

        </tbody>
    </table>
</div>

<?php include __DIR__ . '/../templates/footer.php'; ?>