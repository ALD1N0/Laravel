@extends('layouts.app')

@section('title', 'Data Uang Saku')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Data Uang Saku Santri</h2>

    <a href="{{ route('uang_saku.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-4 inline-block">Tambah Uang Saku</a>

    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">No</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Santri</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Jumlah</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Deskripsi</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Tanggal</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uangSaku as $item)
            <tr class="border-t">
                <td class="px-6 py-3 text-sm">{{ $loop->iteration }}</td>
                <td class="px-6 py-3 text-sm">{{ $item->santri->nama }}</td>
                <td class="px-6 py-3 text-sm">{{ $item->jumlah }}</td>
                <td class="px-6 py-3 text-sm">{{ $item->deskripsi }}</td>
                <td class="px-6 py-3 text-sm">{{ $item->tanggal }}</td>
                <td class="px-6 py-3 text-sm">
                    <form action="{{ route('uang_saku.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
