document.getElementById("see-more").addEventListener("click", function () {
  const hiddenItems = document.querySelectorAll("#product-list .hidden");
  hiddenItems.forEach((item) => item.classList.remove("hidden"));
  this.style.display = "none"; // Sembunyikan tombol setelah klik
});

// Simulate user login status
const isLoggedIn = false; // Set to `false` to show "Daftar" and "Masuk"
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
