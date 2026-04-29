@extends('layouts.app')

@section('title', 'Tambah Diskusi')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Tambah Diskusi</h2>

    <form action="{{ route('diskusi.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="pengirim_id" class="block text-sm font-medium text-gray-700">Pilih Santri</label>
            <select name="pengirim_id" id="pengirim_id" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required>
                <option value="">Pilih Santri</option>
                @foreach($santri as $s)
                <option value="{{ $s->id }}">{{ $s->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan Diskusi</label>
            <textarea name="pesan" id="pesan" rows="4" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required></textarea>
        </div>
        <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Kirim</button>
    </form>
</div>
@endsection
