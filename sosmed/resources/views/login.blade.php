<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Pengguna</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h2>Masuk Pengguna</h2>
        <form id="loginForm" action="{{ route('login') }}" method="POST">
            @csrf <!-- Menambahkan token CSRF untuk keamanan -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="loginEmail" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi:</label>
                <input type="password" id="loginPassword" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Masuk</button>
            </div>
            <div class="form-group">
                <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
            </div>
        </form>
        <!-- Menampilkan pesan login jika ada -->
        @if(session('error'))
            <div id="loginMessage" style="color: red;">{{ session('error') }}</div>
        @endif
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
