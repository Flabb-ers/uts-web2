<?php
require_once __DIR__ . '/../../helpers/url.php';
include __DIR__ . '/../templates/head.php';
include __DIR__ . '/../templates/navbar.php';
include __DIR__ . '/../templates/sidebar.php';
?>

<h2 class="my-3">Edit Mata Kuliah</h2>

<form action="<?= base_url('mata-kuliah/edit/' . $mataKuliah->id) ?>" method="POST">
    <input type="hidden" name="id" value="<?= $mataKuliah->id ?>">
    <div class="mb-3">
        <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="nama_mk" name="nama_mk" required value="<?= htmlspecialchars($mataKuliah->nama_mk) ?>">
    </div>

    <div class="mb-3">
        <label for="sks" class="form-label">SKS</label>
        <input type="number" class="form-control" id="sks" name="sks" required value="<?= htmlspecialchars($mataKuliah->sks) ?>" min="1" max="6">
    </div>

    <button type="submit" class="btn btn-primary btn-sm rounded-3"><i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan</button>
    <a href="<?= base_url('mata-kuliah') ?>" class="btn btn-secondary btn-sm rounded-3"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
</form>

<?php include __DIR__ . '/../templates/footer.php'; ?>
