<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kaliber</title>
    <style>
       <style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%; /* Pastikan tinggi halaman mencakup 100% */
    }

    .back {
        background-image: url('{{ asset('assets/foto/m.png') }}');
        background-size: cover; /* Menutupi seluruh area */
        background-position: center; /* Posisi gambar di tengah */
        background-repeat: no-repeat; /* Hindari pengulangan gambar */
        height: 100%; /* Pastikan tinggi elemen mencakup seluruh halaman */
        width: 100%; /* Lebar penuh */
    }

    h1, p {
        color: white; /* Teks berwarna putih */
    }

    h1 {
        text-align: center;
    }
</style>
</head>
<body>
    
    @extends('layouts.app')

    @section('content')
    <div class="back">
        <h1>Selamat Datang di Perpustakaan Kaliber</h1>
        <div class="container text-center">
            <p class="lead">Temukan buku-buku terbaik dan kelola peminjaman Anda dengan mudah.</p>
            
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Buku</h5>
                            <p class="card-text">Cari dan temukan buku-buku yang ingin Anda baca.</p>
                            <a href="{{ route('books.index') }}" class="btn btn-primary">Lihat Buku</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Anggota</h5>
                            <p class="card-text">Kelola data anggota perpustakaan dengan mudah.</p>
                            <a href="{{ route('members.index') }}" class="btn btn-primary">Lihat Anggota</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Peminjaman Buku</h5>
                            <p class="card-text">Kelola peminjaman buku di perpustakaan Anda.</p>
                            <a href="{{ route('borrow.index') }}" class="btn btn-primary">Lihat Peminjaman</a>
                        </div>
                    </div>
                </div>
            </div>
            <h1><br><br><br><br><br>Jika ingin meminjam buku pastikan daftar sebagai anggota yaaa!!!!!!!!</h1>
        </div>
    </div>
    @endsection
    
</div>
</body>
</html>