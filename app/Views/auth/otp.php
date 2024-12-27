<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h3 class="mb-4">Masukkan Kode OTP</h3>
            <p class="mb-4">Masukkan kode yang telah dikirim ke email Anda.</p>
            <form method="post" action="<?= base_url('/verify-otp') ?>">
                <div class="d-flex justify-content-center gap-2 mb-4">
                    <!-- Input OTP -->
                    <?php for ($i = 1; $i <= 6; $i++): ?>
                        <input type="text" class="form-control text-center fs-4" style="width: 50px; height: 50px;" maxlength="1" pattern="[0-9]" inputmode="numeric" required
                            oninput="moveToNext(this, <?= $i ?>)" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    <?php endfor; ?>
                </div>
                <button type="submit" class="btn btn-danger w-100">Verifikasi</button>
            </form>
            <p class="mt-3">Tidak menerima kode? <a href="#">Kirim ulang</a></p>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>