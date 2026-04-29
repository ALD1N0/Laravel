@extends('layouts.app')

@section('content')

    <div style="width:100%">
        <input type="text" id="searchProduk" class="search" placeholder="Cari barang..." onkeyup="cariProdukTabel()">
        <select onchange="filterbarangproduk()" id="filterbarangproduk">
            <option value="">-- Urutkan --</option>
            <option value="nama">Nama A-Z</option>
            <option value="stok">Stok Terendah</option>
        </select>
        <h2>Data Produk</h2>
<button onclick="printStokHabis()">🖨 Cetak Stok Habis</button>
        <a href="{{ route('produk.create') }}">
            <button>+ Tambah Barang</button>
        </a>

        <table border="1" cellpadding="10" id="tabelProduk">
            <tr>
                <th>Nama</th>
                <th>Foto</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>

            @foreach($produks as $p)
                <tr>

                    <!-- FOTO -->
                    <td class="nama-produk">{{ $p->nama }}</td>
                    <td>
                        @if($p->gambar)
                            <img src="{{ asset('storage/' . $p->gambar) }}" width="80" style="border-radius:10px;">
                        @else
                            <span>Tidak ada</span>
                        @endif
                    </td>
                    <td>Rp {{ number_format($p->harga) }}</td>
                    <td>{{ $p->stok }}</td>

                    <td>
                        <!-- EDIT -->
                        <a href="{{ route('produk.edit', $p) }}">
                            <button >Edit</button>
                        </a>

                        <!-- DELETE -->
                        <form action="{{ route('produk.destroy', $p) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus?')">
                                Hapus
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>

@endsection
