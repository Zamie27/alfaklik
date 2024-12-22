// Toggle Visibility Password
document.querySelectorAll(".toggle-password").forEach((button) => {
  button.addEventListener("click", () => {
    const passwordInput = button.previousElementSibling;
    const icon = button.querySelector("i");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      icon.classList.remove("bi-eye-slash");
      icon.classList.add("bi-eye");
    } else {
      passwordInput.type = "password";
      icon.classList.remove("bi-eye");
      icon.classList.add("bi-eye-slash");
    }
  });
});

// Form Validation for Register
document.getElementById("registerButton")?.addEventListener("click", () => {
  const noHandphone = document.getElementById("noHandphone")?.value.trim();
  const email = document.getElementById("email")?.value.trim();
  const username = document.getElementById("username")?.value.trim();
  const password = document.getElementById("password")?.value.trim();
  const confirmPassword = document
    .getElementById("confirmPassword")
    ?.value.trim();
  const agree = document.getElementById("agree")?.checked;

  // Form Validation
  if (
    !noHandphone ||
    !email ||
    !username ||
    !password ||
    !confirmPassword ||
    !agree
  ) {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Mohon isi semua data dengan lengkap!",
    });
    return;
  }

  // Check Password Match
  if (password !== confirmPassword) {
    Swal.fire({
      icon: "warning",
      title: "Password Tidak Sesuai",
      text: "Password dan Ulangi Password tidak cocok!",
    });
    return;
  }

  // Success Message
  Swal.fire({
    icon: "success",
    title: "Pendaftaran Berhasil!",
    text: "Mengalihkan ke halaman utama...",
    timer: 2000,
    timerProgressBar: true,
    didOpen: () => {
      Swal.showLoading();
    },
  }).then(() => {
    window.location.href = "index_pelanggan.html";
  });
});

// Placeholder for login logic (if needed)
document.getElementById("loginButton")?.addEventListener("click", () => {
  // Implement login logic here if needed
  Swal.fire({
    icon: "info",
    title: "Login",
    text: "Fitur login belum dikembangkan sepenuhnya.",
  });
});
