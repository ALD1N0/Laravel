@extends('layouts.app')

@section('title', 'Data Santri')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Data Santri</h2>

    <!-- Formulir Pencarian -->
    <form action="{{ route('santri.index') }}" method="GET" class="mb-4">
        <div class="flex items-center gap-2">
            <input type="text" name="search" class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="Cari santri..." value="{{ request('search') }}">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Cari</button>
        </div>
    </form>

    <!-- Tombol Tambah Santri -->
    <a href="{{ route('santri.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-4 inline-block">Tambah Santri</a>

    <!-- Tabel Data Santri -->
    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">No</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Nama</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Alamat</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Nama Orang Tua</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Kontak Orang Tua</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($santri as $s)
            <tr class="border-t">
                <td class="px-6 py-3 text-sm">{{ $loop->iteration }}</td>
                <td class="px-6 py-3 text-sm">{{ $s->nama }}</td>
                <td class="px-6 py-3 text-sm">{{ $s->alamat }}</td>
                <td class="px-6 py-3 text-sm">{{ $s->nama_orang_tua }}</td>
                <td class="px-6 py-3 text-sm">{{ $s->kontak_orang_tua }}</td>
                <td class="px-6 py-3 text-sm">
                    <a href="{{ route('santri.edit', $s->id) }}" class="text-yellow-500 hover:text-yellow-600">Edit</a>
                    <form action="{{ route('santri.destroy', $s->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-600" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-6 py-3 text-center text-gray-500">Tidak ada data santri.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $santri->links() }}
    </div>
</div>
@endsection
