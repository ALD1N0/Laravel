@extends('layouts.app')

@section('content')

<div class="product-form-page">

    <div class="form-container">

        <!-- HEADER -->
        <div class="form-header">

            <h2 class="form-title">
                Tambah Produk
            </h2>

            <p class="form-subtitle">
                Tambahkan produk baru ke katalog toko
            </p>

        </div>


        <form 
            action="{{ route('produk.store') }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf


            <!-- NAMA -->
            <div class="form-group">

                <label>
                    Nama Produk
                </label>

                <input 
                    type="text"
                    name="nama"
                    placeholder="Contoh: Sambal Pedas"
                    required>

            </div>


            <!-- HARGA -->
            <div class="form-group">

                <label>
                    Harga
                </label>

                <input 
                    type="number"
                    name="harga"
                    placeholder="Contoh: 15000"
                    required>

            </div>


            <!-- STOK -->
            <div class="form-group">

                <label>
                    Stok
                </label>

                <input 
                    type="number"
                    name="stok"
                    placeholder="Contoh: 25"
                    required>

            </div>


            <!-- GAMBAR -->
            <div class="form-group">

                <label>
                    Foto Produk
                </label>

                <input 
                    type="file"
                    name="gambar"
                    id="inputGambar"
                    accept="image/*"
                    required>

                <img 
                    id="previewGambar"
                    class="preview-img"
                    style="display:none;">

            </div>


            <!-- ACTION -->
            <div class="form-actions">

                <button 
                    type="submit"
                    class="btn btn-primary">

                    Simpan Produk

                </button>


                <a href="{{ route('produk.index') }}">

                    <button 
                        type="button"
                        class="btn btn-secondary">

                        Kembali

                    </button>

                </a>

            </div>

        </form>

    </div>

</div>

@endsection