@extends('layouts.app')

@section('title', 'Forum Diskusi')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Forum Diskusi</h2>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h4 class="text-lg font-semibold">Pesan Diskusi</h4>
        <ul class="space-y-4 mt-4">
            @foreach ($diskusi as $d)
            <li class="p-4 border border-gray-300 rounded-md">
                <strong class="text-blue-600">{{ $d->pengirim->nama }}</strong>
                <span class="text-sm text-gray-500">- {{ $d->created_at->diffForHumans() }}</span>
                <p class="mt-2 text-gray-600">{{ $d->pesan }}</p>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="bg-white p-6 mt-6 rounded-lg shadow-md">
        <h4 class="text-lg font-semibold">Kirim Pesan</h4>
        <form action="{{ route('diskusi.store') }}" method="POST">
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
                <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan</label>
                <textarea name="pesan" id="pesan" rows="4" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md" required></textarea>
            </div>
            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Kirim</button>
        </form>
    </div>
</div>
@endsection
