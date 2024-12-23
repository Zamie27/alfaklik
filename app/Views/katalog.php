<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Katalog Produk</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($barang as $item): ?>
                <div class="col">
                    <div class="card h-100 position-relative d-flex flex-column">
                        <img src="<?= base_url($item['gambar_barang']) ?>" class="card-img-top" alt="<?= esc($item['nama_barang']) ?>">
                        <div class="card-body d-flex flex-column">
                            <h6 class="card-title"><?= esc($item['nama_barang']) ?></h6>
                            <p class="price mt-auto">
                                <span class="text-danger fw-bold">Rp <?= number_format($item['harga_barang'], 0, ',', '.') ?></span>
                            </p>
                            <p class="card-text"><?= esc($item['deskripsi_barang']) ?></p>
                            <button class="btn btn-danger w-100 mt-2">Beli</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>