<?= $this->extend('users/pelanggan/template/index'); ?>

<?= $this->section('content'); ?>


<div class="container mt-4 mb-4">
    <!-- Carousel Banner -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="<?= base_url(); ?>/img/Banner1.png"
                    class="d-block w-100"
                    alt="Banner 1" />
            </div>
            <div class="carousel-item">
                <img
                    src="<?= base_url(); ?>/img/Banner2.png"
                    class="d-block w-100"
                    alt="Banner 2" />
            </div>
            <div class="carousel-item">
                <img
                    src="<?= base_url(); ?>/img/Banner3.png"
                    class="d-block w-100"
                    alt="Banner 3" />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Produk Rekomendasi -->
    <h4 class="mt-5 mb-4">Koleksi Produk</h4>
    <div id="product-list" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <?php foreach ($barang as $index => $item): ?>
            <div class="col" <?= $index >= 8 ? 'style="display: none;"' : '' ?>>
                <div class="card h-100 position-relative d-flex flex-column">
                    <img
                        src="<?= base_url($item['gambar_barang']) ?>"
                        class="card-img-top"
                        alt="<?= esc($item['nama_barang']) ?>" />
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title"><?= esc($item['nama_barang']) ?></h6>
                        <p class="price mt-auto">
                            <span class="text-danger fw-bold">Rp <?= number_format($item['harga_barang'], 0, ',', '.') ?></span>
                        </p>
                        <button class="btn btn-danger w-100 mt-2">Beli</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Tombol Lihat Lainnya -->
    <div class="text-center mt-4">
        <button id="see-more" class="btn btn-danger">Lihat Lainnya</button>
    </div>
</div>
<?= $this->endSection(); ?>