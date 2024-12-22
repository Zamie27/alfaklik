<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produk Rekomendasi</title>
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
        rel="stylesheet" />

    <!-- Style Css -->
    <style>
        body {
            /*   min-height: 3000px;
        }

        .navbar-custom {
            background-color: #3a3a3a;
            /* Warna latar belakang navbar */
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #fff;
        }

        .navbar-custom .nav-link:hover {
            color: #f0a500;
            /* Warna saat hover */
        }

        .search-bar {
            width: 250px;
            margin-left: auto;
        }

        .container-custom {
            max-width: 1200px;
            /* Lebar maksimal yang Anda inginkan */
            margin: 0 auto;
            /* Memastikan konten terpusat */
            padding-left: 20px;
            /* Menambahkan padding kiri */
            padding-right: 20px;
            /* Menambahkan padding kanan */
        }

        .discount-label {
            background-color: #ff4d4d;
            /* Warna merah untuk diskon */
            color: white;
            font-size: 12px;
            font-weight: bold;
            padding: 2px 8px;
            border-radius: 5px;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .price {
            font-size: 16px;
        }

        .price-original {
            text-decoration: line-through;
            color: #888;
            /* Warna abu-abu */
            font-size: 14px;
            margin-right: 5px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-light p-3 shadow-sm sticky-top">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <div class="d-flex align-items-center">
                <img
                    src="<?= base_url(); ?>/img/Logo.png"
                    alt="Alfagift Logo"
                    class="me-2"
                    height="40" />
            </div>
            <!-- Search Bar -->
            <div class="d-flex flex-grow-1 mx-5">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Temukan produk favoritmu disini" />
                <button class="btn btn-danger">
                    <i class="bi bi-search"></i>
                </button>
            </div>
            <!-- Icons and Links -->
            <div class="d-flex align-items-center">
                <a href="notifikasi.html" class="btn btn-light border-0 me-1">
                    <i class="bi bi-bell"></i>
                </a>
                <a href="keranjang.html" class="btn btn-light border-0 me-5">
                    <i class="bi bi-cart"></i>
                </a>

                <!-- Login state elements -->
                <div id="user-section" class="d-none align-items-center">
                    <img
                        src="<?= base_url(); ?>/img/profile.png"
                        alt="User Photo"
                        class="rounded-circle me-2"
                        height="40"
                        width="40" />
                    <span id="username" class="text-dark fw-bold"></span>
                </div>

                <!-- Default state -->
                <a
                    id="register-link"
                    href="<?= base_url() ?>auth/register"
                    class="text-decoration-none text-danger me-3">Daftar</a>
                <a
                    id="login-link"
                    href="<?= base_url() ?>auth/login"
                    class="text-decoration-none text-secondary">Masuk</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <?= $this->renderSection('content'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/js/pelanggan.js">
    </script>
</body>

</html>