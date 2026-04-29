@extends('layouts.app')

@section('title', 'Tambah Santri')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Tambah Santri</h2>

    <form action="{{ route('santri.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="nama" id="nama" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
            <textarea name="alamat" id="alamat" rows="3" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md"></textarea>
        </div>
        <div class="mb-4">
            <label for="nama_orang_tua" class="block text-sm font-medium text-gray-700">Nama Orang Tua</label>
            <input type="text" name="nama_orang_tua" id="nama_orang_tua" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="kontak_orang_tua" class="block text-sm font-medium text-gray-700">Kontak Orang Tua</label>
            <input type="text" name="kontak_orang_tua" id="kontak_orang_tua" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required>
        </div>
        <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection
