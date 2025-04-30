<?php
require_once __DIR__ . '/../../helpers/url.php';
include __DIR__ . '/../templates/head.php';
include __DIR__ . '/../templates/navbar.php';
include __DIR__ . '/../templates/sidebar.php';
?>

<h2 class="my-3">Tambah Mata Kuliah</h2>

<form action="<?php echo base_url('mata-kuliah/create') ?>" method="POST">
    <div class="mb-3">
        <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
        <input type="text" name="nama_mk" id="nama_mk" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="sks" class="form-label">SKS</label>
        <input type="number" name="sks" id="sks" class="form-control" required min="1" max="6">
    </div>
    <button type="submit" class="btn btn-primary rounded-3 btn-sm">
        <i class="fa-solid fa-floppy-disk"></i> Simpan
    </button>
    <a href="<?php echo base_url('/mata-kuliah') ?>" class="btn btn-secondary btn-sm rounded-3">
        <i class="fa-solid fa-arrow-left"></i> Kembali
    </a>
</form>

<?php include __DIR__ . '/../templates/footer.php'; ?>
