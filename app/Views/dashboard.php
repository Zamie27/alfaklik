<?= $this->extend('users/pelanggan/template/index'); ?>

<?= $this->section('content'); ?>


<div class="container mt-4">
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
    <h4 class="mt-5 mb-4">Produk Rekomendasi</h4>
    <div
        id="product-list"
        class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Produk Card -->

        <div class="col">
            <div class="card h-100 position-relative d-flex flex-column">
                <img
                    src="<?= base_url(); ?>/img/item_image.png"
                    class="card-img-top"
                    alt="Produk 2" />
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title">Aqua Air Mineral Botol 600 ml</h6>
                    <p class="price mt-auto">
                        <span class="text-danger fw-bold">Rp 3.000</span>
                    </p>
                    <button class="btn btn-danger w-100 mt-2">Beli</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 position-relative d-flex flex-column">
                <div class="discount-label">-20%</div>
                <img
                    src="<?= base_url(); ?>/img/item_image.png"
                    class="card-img-top"
                    alt="Produk 2" />
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title">
                        Nestle Pure Life Air Mineral Botol 600 ml
                    </h6>
                    <p class="price mt-auto">
                        <span class="price-original">Rp 5.000</span>
                        <span class="text-danger fw-bold">Rp 4.000</span>
                    </p>
                    <button class="btn btn-danger w-100 mt-2">Beli</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 position-relative d-flex flex-column">
                <img
                    src="<?= base_url(); ?>/img/item_image.png"
                    class="card-img-top"
                    alt="Produk 2" />
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title">
                        Ultra Milk Susu UHT Full Chream Kotak 200 ml
                    </h6>
                    <p class="price mt-auto">
                        <span class="text-danger fw-bold">Rp 6.600</span>
                    </p>
                    <button class="btn btn-danger w-100 mt-2">Beli</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 position-relative d-flex flex-column">
                <img
                    src="<?= base_url(); ?>/img/item_image.png"
                    class="card-img-top"
                    alt="Produk 2" />
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title">
                        Sedaap Mi Instan Korean Keju Buldak 86 g
                    </h6>
                    <p class="price mt-auto">
                        <span class="text-danger fw-bold">Rp 3.100</span>
                    </p>
                    <button class="btn btn-danger w-100 mt-2">Beli</button>
                </div>
            </div>
        </div>

        <div class="col hidden">
            <div class="card h-100 position-relative d-flex flex-column">
                <div class="discount-label">-2%</div>
                <img
                    src="<?= base_url(); ?>/img/item_image.png"
                    class="card-img-top"
                    alt="Produk 2" />
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title">So Nice Sosis Premium Original 60 g</h6>
                    <p class="price mt-auto">
                        <span class="price-original">Rp 8.700</span>
                        <span class="text-danger fw-bold">Rp 8.500</span>
                    </p>
                    <button class="btn btn-danger w-100 mt-2">Beli</button>
                </div>
            </div>
        </div>

        <div class="col hidden">
            <div class="card h-100 position-relative d-flex flex-column">
                <div class="discount-label">-13%</div>
                <img
                    src="<?= base_url(); ?>/img/item_image.png"
                    class="card-img-top"
                    alt="Produk 2" />
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title">
                        HIT Obat Anti Kecoa Aerosol Fresh 150 ml
                    </h6>
                    <p class="price mt-auto">
                        <span class="price-original">Rp 20.500</span>
                        <span class="text-danger fw-bold">Rp 17.900</span>
                    </p>
                    <button class="btn btn-danger w-100 mt-2">Beli</button>
                </div>
            </div>
        </div>

        <div class="col hidden">
            <div class="card h-100 position-relative d-flex flex-column">
                <img
                    src="<?= base_url(); ?>/img/item_image.png"
                    class="card-img-top"
                    alt="Produk 2" />
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title">
                        Zinc Sampo Anti Ketombe Cool Booster Mint 170 ml
                    </h6>
                    <p class="price mt-auto">
                        <span class="text-danger fw-bold">Rp 24.900</span>
                    </p>
                    <button class="btn btn-danger w-100 mt-2">Beli</button>
                </div>
            </div>
        </div>

        <div class="col hidden">
            <div class="card h-100 position-relative d-flex flex-column">
                <img
                    src="<?= base_url(); ?>/img/item_image.png"
                    class="card-img-top"
                    alt="Produk 2" />
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title">
                        Pepsodent Pasta Gigi Strong Fresh Cool Mint 190 + 15 g
                    </h6>
                    <p class="price mt-auto">
                        <span class="text-danger fw-bold">Rp 14.500</span>
                    </p>
                    <button class="btn btn-danger w-100 mt-2">Beli</button>
                </div>
            </div>
        </div>

        <div class="col hidden">
            <div class="card h-100 position-relative d-flex flex-column">
                <div class="discount-label">-38%</div>
                <img
                    src="<?= base_url(); ?>/img/item_image.png"
                    class="card-img-top"
                    alt="Produk 2" />
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title">
                        Dextone Instant Glue Universal Lem Tetes Sepatu 20 g
                    </h6>
                    <p class="price mt-auto">
                        <span class="price-original">Rp 56.800</span>
                        <span class="text-danger fw-bold">Rp 35.000</span>
                    </p>
                    <button class="btn btn-danger w-100 mt-2">Beli</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Tombol Lihat Lainnya -->
    <div class="text-center mt-4">
        <button id="see-more" class="btn btn-transparent">Lihat Lainnya</button>
    </div>
</div>
<?= $this->endSection(); ?>