<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pengguna</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h2>Pendaftaran Pengguna</h2>
        <form id="registrationForm" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="username">Nama Pengguna:</label>
                <input type="text" id="username" name="username" required class="@error('username') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Kata Sandi:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <div class="form-group">
                <input type="file" name="profile_picture" accept="image/*" placeholder="Gambar Profil (Opsional)">
            </div>
            <div class="form-group">
                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio" rows="4"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Daftar</button>
            </div>
        </form>
        
        <div class="form-group">
            <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
        </div>
        <!-- Menampilkan pesan pendaftaran jika ada -->
        @if($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    </div>
   
</body>
</html>
