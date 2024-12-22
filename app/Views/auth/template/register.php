<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="text-center mb-4 mt-2">Daftar</h4>
                    <p class="text-center">
                        Sudah punya akun Alfastore?
                        <a href="<?= base_url() ?>auth/login" class="fw-bold text-decoration-none">Masuk</a>
                    </p>
                    <form id="registerForm">
                        <div class="mb-3">
                            <label for="noHandphone" class="form-label">No. Handphone</label>
                            <input type="tel" class="form-control" id="noHandphone" placeholder="Masukkan nomor handphone" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email" required />
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Masukkan username" required />
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
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Ulangi Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Masukkan ulang password"
                                    required />
                                <button class="btn btn-outline-secondary toggle-password" type="button">
                                    <i class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="agree" required />
                            <label class="form-check-label" for="agree">
                                Saya setuju dengan syarat dan ketentuan
                            </label>
                        </div>
                        <button type="button" class="btn btn-danger w-100" id="registerButton">
                            Daftar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>