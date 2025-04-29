<?php
require_once __DIR__ . '/../../helpers/url.php';
include __DIR__ . '/../templates/head.php';
include __DIR__ . '/../templates/navbar.php';
include __DIR__ . '/../templates/sidebar.php';
?>

<h2 class="my-3">Tambah Mahasiswa</h2>

<form action="<?php echo base_url('mahasiswa/create') ?>" method="POST">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Mahasiswa</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" name="nim" id="nim" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="jurusan_id" class="form-label">Jurusan</label>
        <select name="jurusan_id" id="jurusan_id" class="form-control" required>
            <option value="">-- Pilih Jurusan --</option>
            <?php foreach ($jurusans as $j): ?>
                <option value="<?= $j->id; ?>"><?= htmlspecialchars($j->nama_jurusan); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('/mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?php include __DIR__ . '/../templates/footer.php'; ?>
