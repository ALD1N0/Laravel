@extends('layouts.app')

@section('title', 'Tambah Absensi')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Tambah Absensi Santri</h2>

    <form action="{{ route('absensi.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="santri_id" class="block text-sm font-medium text-gray-700">Santri</label>
            <select name="santri_id" id="santri_id" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required>
                <option value="">Pilih Santri</option>
                @foreach($santri as $s)
                <option value="{{ $s->id }}">{{ $s->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="status_kehadiran" class="block text-sm font-medium text-gray-700">Status Kehadiran</label>
            <select name="status_kehadiran" id="status_kehadiran" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required>
                <option value="hadir">Hadir</option>
                <option value="izin">Izin</option>
                <option value="sakit">Sakit</option>
                <option value="alfa">Alfa</option>
            </select>
        </div>
        <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection
