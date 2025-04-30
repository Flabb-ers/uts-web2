<?php
require_once __DIR__ . '/../../helpers/url.php';
include __DIR__ . '/../templates/head.php';
include __DIR__ . '/../templates/navbar.php';
include __DIR__ . '/../templates/sidebar.php';
?>

<h2 class="my-3">Data Jurusan</h2>
<a href="<?= base_url('jurusan/create') ?>" class="btn btn-success mb-3 btn-sm rounded-3"><i class="fa fa-plus"></i> Tambah Jurusan</a>

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
                <th scope="col">Nama Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($jurusans)): ?>
                <?php $no = 1 ?>
                <?php foreach ($jurusans as $jurusan): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($jurusan->nama_jurusan); ?></td>
                        <td>
                            <a href="<?= base_url('jurusan/edit/' . $jurusan->id) ?>" class="btn btn-warning btn-sm rounded-3"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="<?= base_url('jurusan/delete/' . $jurusan->id) ?>" class="btn btn-danger btn-sm rounded-3" onclick="return confirm('Apakah Anda yakin ingin menghapus jurusan ini? Semua data mahasiswa yang terdaftar dalam jurusan ini akan ikut terhapus')">
                                <i class="fa fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center">Belum ada data jurusan.</td>
                </tr>
            <?php endif; ?>

        </tbody>
    </table>
</div>

<?php include __DIR__ . '/../templates/footer.php'; ?>