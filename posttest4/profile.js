function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var passwordIcon = document.querySelector(".toggle-password");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordIcon.textContent = "🙈"; // Ganti ikon menjadi "mata tertutup"
    } else {
        passwordInput.type = "password";
        passwordIcon.textContent = "👁️"; // Ganti ikon menjadi "mata terbuka"
    }
}
