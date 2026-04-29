@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Selamat Datang di Sistem Informasi Manajemen Santri</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold">Santri Terdaftar</h3>
            <p class="text-3xl font-bold mt-2">{{ $totalSantri ??  'Tidak ada data' }}</p>
        </div>
        <!-- Anda bisa menambahkan kotak informasi lainnya -->
    </div>
    
</div>
@endsection
