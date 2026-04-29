<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link rel="stylesheet" href="{{ asset('css/register_style.css') }}">
</head>

<body>
    <section class="container">

        <h1>Pilih Jenis Akun</h1>

        <!-- PILIHAN ROLE -->
        <div class="role-selection" id="roleSelection">
            <div class="card" onclick="showForm('user')">
                <h2>User</h2>
                <p>Daftar untuk menonton dan belajar</p>
            </div>

            <div class="card" onclick="showForm('creator')">
                <h2>Creator</h2>
                <p>Daftar untuk upload dan berbagi konten</p>
            </div>
        </div>

        <!-- FORM USER -->
        <form id="userForm" class="form-box">
            <h2>Registrasi User</h2>
            <input type="username" placeholder="Username" required>
            <input type="email" placeholder="Email" required>
            <input type="password" class="password" placeholder="Password" required>
            <input type="password" class="confirm-password" placeholder="Confirm Password" required>
            <input type="hidden" name="role" value="user">

            <button type="submit">Daftar sebagai User</button>
            <button type="button" class="back-btn" onclick="goBack()" style="background-color: red">Kembali</button>
        </form>

        <!-- FORM CREATOR -->
        <form id="creatorForm" class="form-box">
            <h2>Registrasi Creator</h2>

            <input type="text" placeholder="Nama" required>
            <input type="text" placeholder="NIK" required>
            <input type="text" placeholder="Alamat" required>
            <input type="text" placeholder="Nomer hp" required>
            <input type="hidden" name="role" value="creator">
            <input type="email" placeholder="Email" required>
            <input type="password" class="password" placeholder="Password" required>
            <input type="password" class="confirm-password" placeholder="Confirm Password" required>

            <button type="submit">Daftar sebagai Creator</button>
            <button type="button" class="back-btn" onclick="goBack()" style="background-color: red">Kembali</button>
        </form>
        <h5>Sudah punya akun <a href="{{ route('tampilan_login') }}">Login</a> </h5>
    </section>
</body>
<script>
    function showForm(role) {
        document.getElementById('roleSelection').style.display = 'none';

        if (role === 'user') {
            document.getElementById('userForm').style.display = 'flex';
        } else {
            document.getElementById('creatorForm').style.display = 'flex';
        }
    }

    function goBack() {
        document.getElementById('userForm').reset();
        document.getElementById('creatorForm').reset();

        document.getElementById('userForm').style.display = 'none';
        document.getElementById('creatorForm').style.display = 'none';

        document.getElementById('roleSelection').style.display = 'flex';
    }

    // VALIDASI PASSWORD UNTUK SEMUA FORM
    document.querySelectorAll(".form-box").forEach(form => {
        form.addEventListener("submit", function (e) {
            let password = form.querySelector(".password").value;
            let confirmPassword = form.querySelector(".confirm-password").value;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert("Password tidak sama!");
            }
        });
    });
</script>

</html>