@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Peminjaman</h1>

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

    <!-- Form untuk mengedit peminjaman -->
    <form action="{{ route('borrow.update', $borrow->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Menandakan bahwa ini adalah request PUT untuk update -->

        <!-- Pilih Buku -->
        <div class="mb-3">
            <label for="book_id" class="form-label">Pilih Buku</label>
            <select name="book_id" id="book_id" class="form-control" required>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}" {{ $borrow->book_id == $book->id ? 'selected' : '' }}>
                        {{ $book->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Pilih Anggota -->
        <div class="mb-3">
            <label for="member_id" class="form-label">Pilih Anggota</label>
            <select name="member_id" id="member_id" class="form-control" required>
                @foreach ($members as $member)
                    <option value="{{ $member->id }}" {{ $borrow->member_id == $member->id ? 'selected' : '' }}>
                        {{ $member->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Tanggal Peminjaman -->
        <div class="mb-3">
            <label for="borrowed_at" class="form-label">Tanggal Peminjaman</label>
            <input type="date" name="borrowed_at" id="borrowed_at" class="form-control" value="{{ old('borrowed_at', $borrow->borrowed_at ? $borrow->borrowed_at->format('Y-m-d') : '') }}" required>
        </div>

        <!-- Tanggal Kembali -->
        <div class="mb-3">
            <label for="returned_at" class="form-label">Tanggal Kembali</label>
            <input type="date" name="returned_at" id="returned_at" class="form-control" value="{{ old('returned_at', $borrow->returned_at ? $borrow->returned_at->format('Y-m-d') : '') }}">
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Update Peminjaman</button>
        <a href="{{ route('borrow.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
