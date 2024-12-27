// document.getElementById("see-more").addEventListener("click", function () {
//   const hiddenItems = document.querySelectorAll("#product-list .hidden");
//   hiddenItems.forEach((item) => item.classList.remove("hidden"));
//   this.style.display = "none"; // Sembunyikan tombol setelah klik
// });
// Before
// After
document.getElementById("see-more").addEventListener("click", function () {
  // Pilih semua elemen yang tersembunyi (dengan inline style display: none;)
  const hiddenItems = document.querySelectorAll(
    "#product-list .col[style='display: none;']"
  );

  // Tampilkan elemen dengan menghapus atribut display
  hiddenItems.forEach((item) => (item.style.display = "block"));

  // Sembunyikan tombol setelah semua elemen ditampilkan
  this.style.display = "none";
});

// Simulate user login status
const isLoggedIn = true; // Set to `false` to show "Daftar" and "Masuk"
const username = "zamie27"; // Replace with actual username after login

// DOM Elements
const registerLink = document.getElementById("register-link");
const loginLink = document.getElementById("login-link");
const userSection = document.getElementById("user-section");
const usernameSpan = document.getElementById("username");

if (isLoggedIn) {
  // Hide register and login links
  registerLink.classList.add("d-none");
  loginLink.classList.add("d-none");

  // Show user info
  userSection.classList.remove("d-none");
  usernameSpan.textContent = username;
}

//  Js Klik Tombol Beli Card barang
document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".add-to-cart");

  buttons.forEach((button) => {
    button.addEventListener("click", function (e) {
      e.preventDefault(); // Mencegah perilaku default seperti redirect ke halaman card
      const itemId = this.getAttribute("data-id");
      const url = this.getAttribute("data-url");

      fetch(url, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "X-Requested-With": "XMLHttpRequest",
        },
        body: JSON.stringify({ id_barang: itemId }),
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.status === "success") {
            Swal.fire({
              icon: "success",
              title: "Berhasil!",
              text: data.message,
              timer: 1500,
              showConfirmButton: false,
            });
          } else {
            Swal.fire({
              icon: "error",
              title: "Gagal!",
              text: data.message,
            });
          }
        })
        .catch((error) => {
          console.error("Error:", error);
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Terjadi kesalahan pada sistem.",
          });
        });
    });
  });
});

// Fungsi Sembunyikan Detail Barang
document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("toggle-description");
  const shortDescription = document.getElementById("short-description");
  const fullDescription = document.getElementById("full-description");

  if (toggleButton) {
    toggleButton.addEventListener("click", function () {
      if (fullDescription.style.display === "none") {
        shortDescription.style.display = "none";
        fullDescription.style.display = "block";
        toggleButton.textContent = "Lihat Lebih Sedikit";
      } else {
        shortDescription.style.display = "block";
        fullDescription.style.display = "none";
        toggleButton.textContent = "Lihat Selengkapnya";
      }
    });
  }
});
