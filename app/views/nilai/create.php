<?php
require_once __DIR__ . '/../../helpers/url.php';
include __DIR__ . '/../templates/head.php';
include __DIR__ . '/../templates/navbar.php';
include __DIR__ . '/../templates/sidebar.php';
?>

<h2 class="my-3">Tambah Nilai</h2>

<form action="<?= base_url('nilai/create') ?>" method="POST">

    <div class="mb-3">
        <label for="mahasiswa_id" class="form-label">Mahasiswa</label>
        <select name="mahasiswa_id" id="mahasiswa_id" class="form-control" required>
            <option value="">-- Pilih Mahasiswa --</option>
            <?php foreach ($mahasiswas as $mhs): ?>
                <option value="<?= $mhs->id ?>"><?= htmlspecialchars($mhs->nama) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="mata_kuliah_id" class="form-label">Mata Kuliah</label>
        <select name="mata_kuliah_id" id="mata_kuliah_id" class="form-control" required>
            <option value="">-- Pilih Mata Kuliah --</option>
            <?php foreach ($mataKuliahs as $mk): ?>
                <option value="<?= $mk->id ?>"><?= htmlspecialchars($mk->nama_mk) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="nilai" class="form-label">Nilai</label>
        <input type="number" name="nilai" id="nilai" class="form-control" min="0" max="100" required>
    </div>

    <button type="submit" class="btn btn-primary btn-sm rounded-3"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
    <a href="<?= base_url('nilai') ?>" class="btn btn-secondary btn-sm rounded-3"><i class="fa fa-arrow-left"></i> Kembali</a>
</form>

<?php include __DIR__ . '/../templates/footer.php'; ?>
