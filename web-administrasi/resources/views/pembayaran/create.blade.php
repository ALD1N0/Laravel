@extends('layouts.app')

@section('title', 'Tambah Pembayaran')

@section('content')
<h2>Tambah Pembayaran</h2>
<form action="{{ route('pembayaran.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="santri_id" class="form-label">Santri</label>
        <select name="santri_id" id="santri_id" class="form-select" required>
            <option value="">Pilih Santri</option>
            @foreach($santri as $s)
            <option value="{{ $s->id }}">{{ $s->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah Pembayaran</label>
        <input type="number" name="jumlah" id="jumlah" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal Pembayaran</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-select" required>
            <option value="lunas">Lunas</option>
            <option value="tunda">Tunda</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
