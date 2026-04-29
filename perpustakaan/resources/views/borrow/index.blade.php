@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Peminjaman</h1>
    <a href="{{ route('borrow.create') }}" class="btn btn-primary mb-3">Tambah Peminjaman</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrows as $borrow)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $borrow->member->name }}</td>
                    <td>{{ $borrow->book->title }}</td>
                    <td>{{ $borrow->borrow_date }}</td>
                    <td>{{ $borrow->return_date ?? 'Belum Kembali' }}</td>
                    <td>
                        <a href="{{ route('borrow.edit', $borrow->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('borrow.destroy', $borrow->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
