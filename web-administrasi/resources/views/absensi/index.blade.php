@extends('layouts.app')

@section('title', 'Data Absensi')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Data Absensi Santri</h2>

    <a href="{{ route('absensi.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-4 inline-block">Tambah Absensi</a>

    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">No</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Santri</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Tanggal</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Status Kehadiran</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absensi as $absen)
            <tr class="border-t">
                <td class="px-6 py-3 text-sm">{{ $loop->iteration }}</td>
                <td class="px-6 py-3 text-sm">{{ $absen->santri->nama }}</td>
                <td class="px-6 py-3 text-sm">{{ $absen->tanggal }}</td>
                <td class="px-6 py-3 text-sm">{{ ucfirst($absen->status_kehadiran) }}</td>
                <td class="px-6 py-3 text-sm">
                    <form action="{{ route('absensi.destroy', $absen->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-600" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
