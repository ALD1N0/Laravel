@extends('layouts.app')

@section('title', 'Edit Santri')

@section('content')
<h2>Edit Santri</h2>
<form action="{{ route('santri.update', $santri->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Santri</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ $santri->nama }}" required>
    </div>
    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $santri->tanggal_lahir }}" required>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{ $santri->alamat }}</textarea>
    </div>
    <div class="mb-3">
        <label for="nama_orang_tua" class="form-label">Nama Orang Tua</label>
        <input type="text" name="nama_orang_tua" id="nama_orang_tua" class="form-control" value="{{ $santri->nama_orang_tua }}" required>
    </div>
    <div class="mb-3">
        <label for="kontak_orang_tua" class="form-label">Kontak Orang Tua</label>
        <input type="text" name="kontak_orang_tua" id="kontak_orang_tua" class="form-control" value="{{ $santri->kontak_orang_tua }}" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
