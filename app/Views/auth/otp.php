<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .otp-input {
            width: 50px;
            /* Lebar sama dengan tinggi */
            height: 50px;
            text-align: center;
            font-size: 1.5rem;
            margin: 0 5px;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="mb-4">Masukkan Kode OTP</h3>
                <p class="mb-4">Masukkan kode yang telah dikirim ke email Anda.</p>
                <form method="post" action="<?= base_url('/verify-otp') ?>">
                    <div class="d-flex justify-content-center mb-4">
                        <!-- Input OTP -->
                        <?php for ($i = 1; $i <= 6; $i++): ?>
                            <input type="tel" class="form-control otp-input" maxlength="1" pattern="[0-9]" required
                                oninput="moveToNext(this, <?= $i ?>)">
                        <?php endfor; ?>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Verifikasi</button>
                </form>
                <p class="mt-3">Tidak menerima kode? <a href="#">Kirim ulang</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function moveToNext(element, index) {
            // Pindah fokus ke input berikutnya jika panjang input mencapai maksimal
            if (element.value.length === element.maxLength) {
                const nextInput = document.querySelectorAll('.otp-input')[index];
                if (nextInput) nextInput.focus();
            }
            // Pindah ke input sebelumnya jika input dihapus
            if (element.value === '' && index > 1) {
                const prevInput = document.querySelectorAll('.otp-input')[index - 2];
                if (prevInput) prevInput.focus();
            }
        }
    </script>
</body>

</html>