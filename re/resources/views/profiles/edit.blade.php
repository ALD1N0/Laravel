@include('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/editprof.css') }}">

</head>
<body>
    

<div class="container">
    <h1>Edit Profil</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('profile.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nama:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
        
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
        
        <label>Password (kosongkan jika tidak ingin mengubah):</label>
        <input type="password" name="password">
        
        <label>Bio:</label>
        <textarea name="bio">{{ old('bio', $user->bio) }}</textarea>

        <label>Foto Profil:</label>
        <input type="file" name="profile_picture">

        @if($user->profile_picture)
            <p>Foto saat ini:</p>
            <img src="{{ asset('storage/' . $user->profile_picture) }}" width="100">
        @endif

        <button type="submit">Simpan Perubahan</button>
    </form>
</div>

</body>
</html>