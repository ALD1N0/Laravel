@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Anggota Baru</h1>

    <!-- Tampilkan error validasi jika ada -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form untuk menambahkan anggota -->
    <form action="{{ route('members.store') }}" method="POST">
        @csrf <!-- Token untuk keamanan -->

        <!-- Nama Anggota -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama Anggota</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <!-- Email Anggota -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <!-- Nomor Telepon -->
        <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
        </div>

        <!-- Alamat -->
        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <textarea name="address" id="address" class="form-control" rows="3" required>{{ old('address') }}</textarea>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('members.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
