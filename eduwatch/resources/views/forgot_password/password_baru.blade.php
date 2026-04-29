<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

   <link rel="stylesheet" href="{{ asset("css/password_baru.css") }}">
</head>

<body>

    <section class="container">
        <h1>Reset Password</h1>
        <p>Masukkan kata sandi baru</p>
        <form id="resetForm">
            <input type="password" id="password" placeholder="Masukkan Password Baru" required>
            <input type="password" id="confirmPassword" placeholder="Konfirmasi Password Baru" required>
            <button type="submit">Ubah Sandi</button>
        </form>
    </section>

</body>
<script>
    document.getElementById("resetForm").addEventListener("submit", function (e) {

        let password = document.getElementById("password").value;
        let confirmPassword = document.getElementById("confirmPassword").value;

        if (password !== confirmPassword) {
            e.preventDefault(); // hentikan submit
            alert("Password tidak sama!");
        }

    });
</script>

</html>