// Validasi dan pengiriman form pendaftaran
document.getElementById("registrationForm")?.addEventListener("submit", function (event) {
    event.preventDefault();

    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const bio = document.getElementById("bio").value;
    const messageDiv = document.getElementById("message");

    messageDiv.innerText = ""; // Reset pesan

    // Validasi kata sandi
    if (password !== confirmPassword) {
        messageDiv.innerText = "Kata sandi dan konfirmasi tidak cocok!";
        return;
    }

    // Simulasi pengiriman data ke server
    console.log("Pendaftaran berhasil!", { username, email, password, bio });
    messageDiv.innerText = "Pendaftaran berhasil!"; // Simulasi keberhasilan
});

// Validasi dan pengiriman form login
document.getElementById("loginForm")?.addEventListener("submit", function (event) {
    event.preventDefault();

    const email = document.getElementById("loginEmail").value;
    const password = document.getElementById("loginPassword").value;
    const loginMessageDiv = document.getElementById("loginMessage");

    loginMessageDiv.innerText = ""; // Reset pesan

    // Simulasi validasi login
    console.log("Login berhasil!", { email, password });
    loginMessageDiv.innerText = "Login berhasil!"; // Simulasi keberhasilan
});
