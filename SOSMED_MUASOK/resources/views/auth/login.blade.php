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
        <form id="loginForm" action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="loginEmail" name="email" required autofocus autocomplete="email">
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi:</label>
                <input type="password" id="loginPassword" name="password" required autocomplete="current-password">
            </div>
            <div class="form-group">
                <button type="submit">Masuk</button>
            </div>
        </form>

        <div class="form-group">
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
        </div>
        @if($errors->any())
        @foreach($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    @endif
    </div>
    
</body>
</html>
