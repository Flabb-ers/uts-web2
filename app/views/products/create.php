<?php include __DIR__ . '/../templates/header.php'; ?>
<h2>Tambah Produk</h2>
<form action="/product/create" method="POST">
    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stock" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
<?php include __DIR__ . '/../templates/footer.php'; ?>