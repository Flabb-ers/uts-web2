<?php
require_once __DIR__ . '/../../helpers/url.php';
include __DIR__ . '/../templates/head.php';
include __DIR__ . '/../templates/navbar.php';
include __DIR__ . '/../templates/sidebar.php';
?>

<h2 class="my-3">Edit Mahasiswa</h2>

<form action="<?= base_url('mahasiswa/edit/' . $mahasiswa->id) ?>" method="POST">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" required value="<?= $mahasiswa->nama ?>">
        <?=$mahasiswa->nama?>
    </div>

    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" required value="<?= $mahasiswa->nim ?>">
    </div>

    <div class="mb-3">
        <label for="jurusan_id" class="form-label">Jurusan</label>
        <select name="jurusan_id" id="jurusan_id" class="form-select" required>
            <?php foreach ($this->jurusan->getAllJurusan() as $jurusan): ?>
                <option value="<?= $jurusan->id ?>" <?= $jurusan->id == $mahasiswa->jurusan_id ? 'selected' : '' ?>>
                    <?= $jurusan->nama_jurusan ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?php include __DIR__ . '/../templates/footer.php'; ?>
