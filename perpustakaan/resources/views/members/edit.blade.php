@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Anggota</h1>

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

    <!-- Form untuk mengedit anggota -->
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Menandakan bahwa ini adalah request PUT untuk update -->

        <!-- Nama Anggota -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama Anggota</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $member->name) }}" required>
        </div>

        <!-- Email Anggota -->
        <div class="mb-3">
            <label for="email" class="form-label">Email Anggota</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $member->email) }}" required>
        </div>

        <!-- Nomor Telepon -->
        <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $member->phone) }}" required>
        </div>

        <!-- Alamat Anggota -->
        <div class="mb-3">
            <label for="address" class="form-label">Alamat Anggota</label>
            <textarea name="address" id="address" class="form-control" rows="3" required>{{ old('address', $member->address) }}</textarea>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Update Anggota</button>
        <a href="{{ route('members.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
