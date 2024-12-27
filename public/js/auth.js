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
// document.getElementById("registerButton")?.addEventListener("click", () => {
//   const noHandphone = document.getElementById("noHandphone")?.value.trim();
//   const email = document.getElementById("email")?.value.trim();
//   const username = document.getElementById("username")?.value.trim();
//   const password = document.getElementById("password")?.value.trim();
//   const confirmPassword = document
//     .getElementById("confirmPassword")
//     ?.value.trim();
//   const agree = document.getElementById("agree")?.checked;

//   // Form Validation
//   if (
//     !noHandphone ||
//     !email ||
//     !username ||
//     !password ||
//     !confirmPassword ||
//     !agree
//   ) {
//     Swal.fire({
//       icon: "error",
//       title: "Oops...",
//       text: "Mohon isi semua data dengan lengkap!",
//     });
//     return;
//   }

//   // Check Password Match
//   if (password !== confirmPassword) {
//     Swal.fire({
//       icon: "warning",
//       title: "Password Tidak Sesuai",
//       text: "Password dan Ulangi Password tidak cocok!",
//     });
//     return;
//   }

//   // Success Message
//   Swal.fire({
//     icon: "success",
//     title: "Pendaftaran Berhasil!",
//     text: "Mengalihkan ke halaman utama...",
//     timer: 2000,
//     timerProgressBar: true,
//     didOpen: () => {
//       Swal.showLoading();
//     },
//   }).then(() => {
//     window.location.href = "index_pelanggan.html";
//   });
// });

// // Placeholder for login logic (if needed)
// document.getElementById("loginButton")?.addEventListener("click", () => {
//   // Implement login logic here if needed
//   Swal.fire({
//     icon: "info",
//     title: "Login",
//     text: "Fitur login belum dikembangkan sepenuhnya.",
//   });
// });

// pergerakan otomatis colom form OTP
function moveToNext(element, index) {
  // Pindah fokus ke input berikutnya jika panjang input mencapai maksimal
  if (element.value.length === element.maxLength) {
    const nextInput = document.querySelectorAll("input")[index];
    if (nextInput) nextInput.focus();
  }
  // Pindah ke input sebelumnya jika input dihapus
  if (element.value === "" && index > 1) {
    const prevInput = document.querySelectorAll("input")[index - 2];
    if (prevInput) prevInput.focus();
  }
}

// Pengelompokan OTP
document.querySelector("form").addEventListener("submit", function (e) {
  e.preventDefault(); // Mencegah pengiriman formulir default

  const inputs = document.querySelectorAll(".form-control");
  let otp = "";
  inputs.forEach((input) => (otp += input.value));

  // Tambahkan hasil gabungan ke elemen tersembunyi
  const hiddenInput = document.createElement("input");
  hiddenInput.type = "hidden";
  hiddenInput.name = "otp";
  hiddenInput.value = otp;
  this.appendChild(hiddenInput);

  // Submit formulir setelah penggabungan
  this.submit();
});
