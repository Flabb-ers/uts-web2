<?php
require_once __DIR__ . '/../../helpers/url.php';
include __DIR__ . '/../templates/head.php';
include __DIR__ . '/../templates/navbar.php';
include __DIR__ . '/../templates/sidebar.php';
?>

<h2 class="my-3">Tambah Jurusan</h2>

<form action="<?php echo base_url('jurusan/create') ?>" method="POST">
    <div class="mb-3">
        <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
        <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary rounded-3 btn-sm"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
    <a href="<?php echo base_url('/jurusan') ?>" class="btn btn-secondary btn-sm rounded-3"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
</form>

<?php include __DIR__ . '/../templates/footer.php'; ?>
