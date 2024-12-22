<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div>
                        <h4 class="text-center mb-4 mt-2">Masuk</h4>
                        <p class="text-center">
                            Belum punya akun Alfastore?
                            <a href="<?= base_url() ?>auth/register" class="fw-bold text-decoration-none">Daftar</a>
                        </p>
                        <form id="loginForm">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email/No. Handphone</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    placeholder="Masukkan email atau nomor handphone"
                                    required />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" placeholder="Masukkan password" required />
                                    <button class="btn btn-outline-secondary toggle-password" type="button">
                                        <i class="bi bi-eye-slash"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger w-100 mb-3">
                                Masuk
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>