@extends('layouts.app')

@section('content')

    <div class="form-container">
        <h2>Tambah Produk</h2>

        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <p>Nama</p>
                <input type="text" name="nama" required>
            </div>

            <div class="form-group">
                <p>Harga</p>
                <input type="number" name="harga" required>
            </div>

            <div class="form-group">
                <p>Stok</p>
                <input type="number" name="stok" required>
            </div>

            <div class="form-group">
                <p>Foto Produk</p>
                <input type="file" name="gambar" id="inputGambar" accept="image/*" required>

                <!-- PREVIEW -->
                <img id="previewGambar" class="preview-img" style="display:none;">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Simpan</button>

                <a href="{{ route('produk.index') }}">
                    <button type="button" class="btn btn-secondary">Kembali</button>
                </a>
            </div>
        </form>
    </div>

@endsection