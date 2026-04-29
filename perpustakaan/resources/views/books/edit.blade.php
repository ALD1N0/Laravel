@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Buku</h1>

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

    <!-- Form untuk mengedit buku -->
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Menandakan bahwa ini adalah request PUT untuk update -->

        <!-- Judul Buku -->
        <div class="mb-3">
            <label for="title" class="form-label">Judul Buku</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $book->title) }}" required>
        </div>

        <!-- Penulis Buku -->
        <div class="mb-3">
            <label for="author" class="form-label">Penulis Buku</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ old('author', $book->author) }}" required>
        </div>

        <!-- Penerbit Buku -->
        {{-- <div class="mb-3">
            <label for="publisher" class="form-label">Penerbit Buku</label>
            <input type="text" name="publisher" id="publisher" class="form-control" value="{{ old('publisher', $book->publisher) }}" required>
        </div> --}}

        <!-- Tahun Terbit -->
        <div class="mb-3">
            <label for="year" class="form-label">Tahun Terbit</label>
            <input type="number" name="year" id="year" class="form-control" value="{{ old('year', $book->year) }}" required>
        </div>

        <!-- ISBN -->
        {{-- <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control" value="{{ old('isbn', $book->isbn) }}" required>
        </div> --}}

        <!-- Jumlah Stok -->
        {{-- <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah Stok</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity', $book->quantity) }}" required>
        </div> --}}

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Update Buku</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
