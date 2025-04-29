<?php include __DIR__ . '/../templates/header.php'; ?>
<h2>Daftar Produk</h2>
<a href="/produk/product/create" class="btn btn-primary">Tambah Produk</a>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($products) && is_array($products)): ?>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product->id); ?></td>
                    <td><?= htmlspecialchars($product->name); ?></td>
                    <td><?= htmlspecialchars($product->description); ?></td>
                    <td><?= htmlspecialchars($product->price); ?></td>
                    <td><?= htmlspecialchars($product->stock); ?></td>
                    <td>
                        <a href="/product/edit/<?= $product->id; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/product/delete/<?= $product->id; ?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" class="text-center">Tidak ada produk tersedia.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php include __DIR__ . '/../templates/footer.php'; ?>