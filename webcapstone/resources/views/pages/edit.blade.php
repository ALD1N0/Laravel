@extends('mainlayoutb')

@section('maincontent')

 <div class="main-content">
    <div class="edit-profile-container">
      <h2>Edit Profil</h2>
      <form class="edit-profile-form">
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" id="nama" placeholder="Masukkan nama lengkap">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Masukkan email">
        </div>

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" placeholder="Masukkan username">
        </div>

        <div class="form-group">
          <label for="foto">Foto Profil</label>
          <input type="file" id="foto">
        </div>

        <div class="form-group">
          <label>Foto Sekarang</label>
          <img src="avatar.png" alt="Foto Profil" class="current-photo">
        </div>

        <button type="submit">💾 Simpan</button>
      </form>
    </div>
  </div>

</body>
</html>
@endsection