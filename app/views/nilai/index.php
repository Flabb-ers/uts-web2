<?php
require_once __DIR__ . '/../../helpers/url.php';
include __DIR__ . '/../templates/head.php';
include __DIR__ . '/../templates/navbar.php';
include __DIR__ . '/../templates/sidebar.php';
?>

<h2 class="my-3">Data Nilai</h2>
<a href="<?= base_url('nilai/create') ?>" class="btn btn-success mb-3 btn-sm rounded-3"><i class="fa fa-plus"></i> Tambah Nilai</a>

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
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Nilai</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($nilais)): ?>
                <?php $no = 1 ?>
                <?php foreach ($nilais as $nilai): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($nilai->nama_mahasiswa); ?></td>
                        <td><?= htmlspecialchars($nilai->nama_mk); ?></td>
                        <td><?= htmlspecialchars($nilai->nilai); ?></td>
                        <td>
                            <a href="<?= base_url('nilai/edit/' . $nilai->id) ?>" class="btn btn-warning btn-sm rounded-3">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                            <a href="<?= base_url('nilai/delete/' . $nilai->id) ?>" class="btn btn-danger btn-sm rounded-3" onclick="return confirm('Yakin ingin menghapus data nilai ini?')">
                                <i class="fa fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">Belum ada data nilai.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . '/../templates/footer.php'; ?>