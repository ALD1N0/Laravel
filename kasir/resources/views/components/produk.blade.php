<section style="width:70%;">

    <!-- SEARCH -->
    <select onchange="filterProduk()" id="filterProduk">
        <option value="">-- Urutkan --</option>
        <option value="nama">Nama A-Z</option>
        <option value="stok">Stok Terendah</option>
    </select>
    <input type="text" id="searchInput" class="search" placeholder="Cari barang..." onkeyup="cariProduk()">

    <div class="grid" id="produkGrid">

        @foreach($produks as $produk)
            <div class="card">

                <!-- GAMBAR -->
                @if($produk->gambar)
                    <img src="{{ asset('storage/' . $produk->gambar) }}"
                        style="width:100%; height:100px; object-fit:cover; border-radius:10px;">
                @else
                    <div class="img">No Image</div>
                @endif

                <!-- DATA -->
                <p class="stok" data-stok="{{ $produk->stok }}">Stok: {{ $produk->stok }}</p>
                <p class="nama">{{ $produk->nama }}</p>
                <p class="harga" data-harga="{{ $produk->harga }}">
                    Rp {{ number_format($produk->harga) }}
                </p>


                <button
                    onclick="tambahBarang(this, {{ $produk->id_barang }}, '{{ addslashes($produk->nama) }}', {{ $produk->harga }}, {{ $produk->stok }})">
                    Add
                </button>

            </div>
        @endforeach

    </div>
</section>
