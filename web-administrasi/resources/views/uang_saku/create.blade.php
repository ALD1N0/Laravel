@extends('layouts.app')

@section('title', 'Tambah Uang Saku')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Tambah Uang Saku</h2>

    <form action="{{ route('uang_saku.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="santri_id" class="block text-sm font-medium text-gray-700">Pilih Santri</label>
            <select name="santri_id" id="santri_id" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required>
                <option value="">Pilih Santri</option>
                @foreach($santri as $s)
                <option value="{{ $s->id }}">{{ $s->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah Uang Saku</label>
            <input type="number" name="jumlah" id="jumlah" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md"></textarea>
        </div>
        <div class="mb-4">
            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required>
        </div>
        <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection
