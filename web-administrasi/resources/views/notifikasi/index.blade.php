@extends('layouts.app')

@section('title', 'Notifikasi')

@section('content')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-semibold mb-6">Notifikasi Terbaru</h2>
    <ul class="space-y-4">
        @foreach ($notifikasi as $notif)
        <li class="bg-blue-50 p-4 my-2 rounded-md">
            <strong class="text-blue-600">{{ $notif->data['status'] }}:</strong>
            Pembayaran sebesar {{ $notif->data['jumlah'] }} telah diproses.
            <a href="{{ url('/pembayaran/'.$notif->data['pembayaran_id']) }}" class="text-blue-500 hover:underline">Lihat Detail</a>
        </li>
        @endforeach
    </ul>
    <div class="mt-6">
        {{ $notifikasi->links() }}
    </div>
</div>
@endsection
