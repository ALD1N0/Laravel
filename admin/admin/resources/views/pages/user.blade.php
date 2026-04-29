@extends('mainlayouta')

@section('maincontent')


<head>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6  mx-auto mt-16">

  <div class="max-w-6xl mx-auto">
    <!-- Search Bar -->
    <div class="mb-6">
      <input
        type="text"
        placeholder="Cari toko..."
        class="w-full px-4 py-3 rounded-xl shadow-sm border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
    </div>

    <!-- Daftar Toko -->
    <div class="space-y-4">
      <!-- Kartu Toko -->
      <div class="bg-white shadow-md p-4 rounded-full flex items-center justify-between">
        <!-- Gambar & Nama -->
        <div class="flex items-center space-x-4">
          <img src="https://via.placeholder.com/60" alt="Toko" class="w-14 h-14 rounded-full object-cover border border-gray-300">
          <div>
            <h2 class="text-lg font-semibold text-gray-800">Toko Elektronik Jaya</h2>
            <p class="text-sm text-gray-500">Toko terpercaya sejak 2005</p>
          </div>
        </div>

        <!-- Tombol -->
        <div class="flex space-x-2">
          <button onclick="window.location.href='{{ route('toko') }}'" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 text-sm">Lihat Profil</button>
          <button class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 text-sm">Hapus User</button>
          <button class="bg-yellow-400 text-white px-4 py-2 rounded-full hover:bg-yellow-500 text-sm">Peringatan</button>
        </div>
      </div>

      <!-- Duplikat Kartu Toko -->
      <div class="bg-white shadow-md p-4 rounded-full flex items-center justify-between">
        <div class="flex items-center space-x-4">
          <img src="https://via.placeholder.com/60" alt="Toko" class="w-14 h-14 rounded-full object-cover border border-gray-300">
          <div>
            <h2 class="text-lg font-semibold text-gray-800">Toko Fashion Modern</h2>
            <p class="text-sm text-gray-500">Menjual pakaian kekinian</p>
          </div>
        </div>

        <div class="flex space-x-2">
          <button onclick="window.location.href='{{ route('toko') }}'" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 text-sm">Lihat Profil</button>
          <button class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 text-sm">Hapus User</button>
          <button class="bg-yellow-400 text-white px-4 py-2 rounded-full hover:bg-yellow-500 text-sm">Peringatan</button>
        </div>
      </div>
    </div>
  </div>


    <script>
        const profileIcon = document.getElementById('profileIcon');
        const dropdownMenu = document.getElementById('dropdownMenu');

        profileIcon.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        window.addEventListener('click', () => {
        dropdownMenu.style.display = 'none';
        });
    </script>
</body>
</html>

@endsection