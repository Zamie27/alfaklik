<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div>
                        <h4 class="text-center mb-4 mt-2"><?= lang('Auth.loginTitle') ?></h4>

                        <?php if ($config->allowRegistration) : ?>
                            <p class="text-center">
                                Belum punya akun Alfastore?
                                <a href="<?= url_to('register') ?>" class="fw-bold text-decoration-none">Daftar</a>
                            </p>
                        <?php endif; ?>

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form id="loginForm" action="<?= url_to('login') ?>" method="post">
                            <?= csrf_field() ?>

                            <?php if ($config->validFields === ['email']): ?>
                                <div class="mb-3 form-group">
                                    <label for="login" class="form-label"><?= lang('Auth.email') ?></label>
                                    <input
                                        type="email"
                                        class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                        name="login"
                                        placeholder="<?= lang('Auth.email') ?>"
                                        required />
                                </div>
                            <?php else: ?>
                                <div class="mb-3 form-group">
                                    <label for="login" class="form-label"><?= lang('Auth.emailOrUsername') ?></label>
                                    <input
                                        type="text"
                                        class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                        name="login"
                                        placeholder="<?= lang('Auth.emailOrUsername') ?>"
                                        required />
                                </div>
                            <?php endif; ?>

                            <div class="mb-3 form-group">
                                <label for="password" class="form-label"><?= lang('Auth.password') ?></label>
                                <div class="input-group">
                                    <input type="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" name="password" placeholder="<?= lang('Auth.password') ?>" required />
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                    <button class="btn btn-outline-secondary toggle-password" type="button">
                                        <i class="bi bi-eye-slash"></i>
                                    </button>
                                </div>
                            </div>

                            <?php if ($config->allowRemembering): ?>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                        <?= lang('Auth.rememberMe') ?>
                                    </label>
                                </div>
                            <?php endif; ?>

                            <button type="submit" class="btn btn-danger w-100 mb-3 btn-block">
                                <?= lang('Auth.loginAction') ?>
                            </button>
                        </form>

                        <hr>

                        <?php if ($config->activeResetter): ?>
                            <p class="text-center"><a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>