<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="text-center mb-4 mt-2">Registrasi</h4>
                    <p class="text-center">
                        Sudah punya akun Alfastore?
                        <a href="<?= url_to('login') ?>" class="fw-bold text-decoration-none">Masuk</a>
                    </p>


                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form id="registerForm" action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="Masukkan email" value="<?= old('email') ?>" required />
                            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="Masukkan username" value="<?= old('username') ?>" required />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" id="password" placeholder="Masukkan password" autocomplete="off" required />
                                <button class="btn btn-outline-secondary toggle-password" type="button">
                                    <i class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="pass_confirm" class="form-label">Ulangi Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" id="confirmPassword" placeholder="Masukkan ulang password" autocomplete="off" required />
                                <button class="btn btn-outline-secondary toggle-password" type="button">
                                    <i class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-danger w-100 btn-block" id="registerButton">
                            <?= lang('Auth.register') ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>