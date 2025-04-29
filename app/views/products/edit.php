<?php include __DIR__ . '/../templates/header.php'; ?>
<h2>Edit Produk</h2>
<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $product->id ?>">
    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="name" class="form-control" value="<?= $product->name ?>" required>
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control" value="<?= $product->price ?>"
            required>
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stock" class="form-control" value="<?= $product->stock ?>"
            required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
<?php include __DIR__ . '/../templates/footer.php'; ?>