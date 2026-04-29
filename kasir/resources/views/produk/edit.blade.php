@extends('layouts.app')

@section('content')

    <div class="form-container form-page">
        <h2>Edit Produk</h2>

        <form action="{{ route('produk.update', $produk) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <p>Nama</p>
                <input type="text" name="nama" value="{{ old('nama', $produk->nama) }}" required>
            </div>

            <div class="form-group">
                <p>Harga</p>
                <input type="number" name="harga" value="{{ old('harga', $produk->harga) }}" required>
            </div>

            <div class="form-group">
                <p>Stok</p>
                <input type="number" name="stok" value="{{ old('stok', $produk->stok) }}" required>
            </div>

            <div class="form-group">
                <p>Gambar Saat Ini</p>
                @if($produk->gambar)
                    <img src="{{ asset('storage/' . $produk->gambar) }}" class="preview-img" id="previewGambar">
                @else
                    <p class="no-img">Tidak ada gambar</p>
                @endif
            </div>

            <div class="form-group">
                <p>Ganti Gambar</p>
                <input type="file" name="gambar" id="inputGambar" accept="image/*">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update</button>

                <a href="{{ route('produk.index') }}">
                    <button type="button" class="btn btn-secondary">Kembali</button>
                </a>
            </div>
        </form>
    </div>

@endsection