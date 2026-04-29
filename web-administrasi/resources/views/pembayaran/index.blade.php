@extends('layouts.app')

@section('title', 'Data Pembayaran')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Data Pembayaran Santri</h2>

    <a href="{{ route('pembayaran.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-4 inline-block">Tambah Pembayaran</a>

    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">No</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Santri</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Jumlah</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Tanggal</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Status</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembayaran as $p)
            <tr class="border-t">
                <td class="px-6 py-3 text-sm">{{ $loop->iteration }}</td>
                <td class="px-6 py-3 text-sm">{{ $p->santri->nama }}</td>
                <td class="px-6 py-3 text-sm">{{ $p->jumlah }}</td>
                <td class="px-6 py-3 text-sm">{{ $p->tanggal }}</td>
                <td class="px-6 py-3 text-sm">{{ ucfirst($p->status) }}</td>
                <td class="px-6 py-3 text-sm">
                <a href="{{ route('pembayaran.edit', $p->id) }}" class="text-yellow-500 hover:text-yellow-600">Edit</a>
                    <form action="{{ route('pembayaran.destroy', $p->id) }}" method="POST" style="display:inline-block;">
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
