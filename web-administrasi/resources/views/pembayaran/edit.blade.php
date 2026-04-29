@extends('layouts.app')

@section('title', 'Edit Pembayaran')

@section('content')
<h2>Edit Pembayaran</h2>

<form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Menambahkan method PUT untuk pembaruan data -->

    <div class="mb-3">
        <label for="santri_id" class="form-label">Santri</label>
        <select name="santri_id" id="santri_id" class="form-select" required>
            <option value="">Pilih Santri</option>
            @foreach($santri as $s)
                <option value="{{ $s->id }}" {{ $s->id == $pembayaran->santri_id ? 'selected' : '' }}>
                    {{ $s->nama }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah Pembayaran</label>
        <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $pembayaran->jumlah }}" required>
    </div>

    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal Pembayaran</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $pembayaran->tanggal }}" required>
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-select" required>
            <option value="lunas" {{ $pembayaran->status == 'lunas' ? 'selected' : '' }}>Lunas</option>
            <option value="tunda" {{ $pembayaran->status == 'tunda' ? 'selected' : '' }}>Tunda</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
